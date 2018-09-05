<?php defined('BASEPATH') OR exit('No direct script access allowed');

class NamedFileAPI {

    /*
     *  [Image] 직접 url 가능
     *  public function namedImageUpload    ($keyid, $gubun, $data, $scaleSize=FALSE)
     *  public function namedImageUpload2   ($keyid, $gubun, $data, $scaleSize=FALSE)   // file 처리방식 (성능개선)
     *  public function namedImageDelete    ($keyid, $gubun, $no=0)
     *  public function namedImageUrl       ($keyid, $gubun, $no=0, $is_salt=FALSE)     // is_salt 경우, 끝에 ?<microtime> 추가됨
     *
     *  [Data] 단순 자료(text or array), Url 불가
     *  public function namedDataSave       ($code, $gubun, $data)
     *  public function namedDataRead       ($code, $gubun)
     *  public function namedDataDelete     ($code, $gubun)
     *  public function namedDataCopy       ($from, $gubun, $to)
     *
     *  [File] 다운로드자료(data + File), Url 불가, download.php 통해서 다운로드
     *  public function namedFileSaveEncode ($keyid, $gubun, $filename, $filedata, $no=0)
     *  public function namedFileSave       ($code , $gubun, $data, $no=0)
     *  public function namedFileRead       ($code, $gubun, $no=0)
     *  public function namedFileCopy       ($from, $gubun, $to, $no=0)
     *
     *  [Data] process
     *  private function saveData           ($fullfile)                         // for datadata(text/array)
     *  private function readData           ($filestring)                       // for data(text/array)
     *
     *  public function namedBannerRead     ($keyid, $gubun) : view 옵션에 따라 제외하고 보냄
     *
     *  public function checkSize           ($size, $jogun)                     // for all
     *  public function checkImage          ($filetype)                         // for image
     *  public function scaleImage          (&$src, $scaleSize=FALSE)           // for image
     *
     *  private function imageInfo          ($fullfile)                         // for image
     *  private function encodeInfo         ($filestring)                       // for image
     *  private function getImageFullpath   ($path)                             // for image
     *  private function getNamedFulldir    ($keyid, $gubun)                    // for image
     *  private function getNamedFullfile   ($keyid, $gubun, $no=0, $ext='*')   // for image
     *
     *  private function namedCheck         ($keyid, &$gubun)                   // for all
     */

    private $basedir = '';
    private $baseurl = '';

    public function namedImageUpload($keyid, $gubun, $filedata, $scaleSize=FALSE)
    {
        return $this->namedImageUpload2($keyid, $gubun, $filedata, $scaleSize=FALSE);
    }

    // 임시디렉토리 파일로 저장 후 싱크 방식 (메모리 문제 대비)
    public function namedImageUpload2($keyid, $gubun, $filedata, $scaleSize=FALSE)
    {
        $retval = 0;

        if (!$this->namedCheck($keyid, $gubun)) {
            return FALSE;
        }

        // to array
        if (!is_array($filedata) || array_key_exists('tmp_name', $filedata)) {
            $filedata = array($filedata);
        }

        $tempDir = $this->getTempFulldir(uniqid());
        $realDir = $this->getNamedFulldir($keyid, $gubun);

        // Image Path with Temp, Real : $no => array('temp' => <temppath>, 'real' => <realpath>)
        $imgs = array();

        foreach($filedata as $no => $file) {
            $img = FALSE;

            // case 1. files   : [name] => MyFile.jpg [type] => image/jpeg [tmp_name] => /tmp/php/php6hst32 [error] => UPLOAD_ERR_OK [size] => 98174
            if (is_array($file)) {
                
                if ($file['type'] && $this->checkImage($file['type']) && $file['tmp_name'] && file_exists($file['tmp_name'])) {
                    $img = new Imagick($file['tmp_name']);
                    $ext = substr($img->getImageMimeType(), 6);

                    if (in_array($ext, array('gif','png','jpg','jpeg'))) {
                        $this->scaleImage($img, $scaleSize);
                    }
                }

            // case 2. encode  : data:image/png;base64,iVBORw0KGgoAAAANSUh...
            } elseif ($file && substr($file, 0, 11) == 'data:image/') {

                if ($info = $this->encodeInfo($file)) {
                    $img = new Imagick();
                    $img->readImageBlob(base64_decode($info['data']));
                    $ext = substr($img->getImageMimeType(), 6);

                    if (in_array($ext, array('gif','png','jpg','jpeg'))) {
                        $this->scaleImage($img, $scaleSize);
                    }
                }

            // case 3. fileurl : 절대경로 or 상대경로
            } elseif ($file && $info = $this->imageInfo($this->getImageFullpath($file))) {

                if ($info['type'] && $this->checkImage($info['type'])) {
                    $img = new Imagick($info['fullfile']);
                    $ext = substr($img->getImageMimeType(), 6);
                }
            }

            // save to temp
            if ($img) {
                $imgs[$no] = array(
                                    'temp' => $this->getTempFullfile($tempDir, $no, $ext),
                                    'real' => $this->getNamedFullfile($keyid, $gubun, $no, $ext),
                                  );

                if ($img->writeImage($imgs[$no]['temp'])) {

                    /*
                     * 자동 섬네일 저장
                     */
                    // bookimg_list[0] : 단꿈서점 상세이미지
                    if ($gubun == 'Product/bookimg_list' && $no == 0) {
                        $this->scaleImage($img, '46x46');
                        $img->writeImage($this->getTempFullTfile($tempDir, $no, $ext));
                        
                    // bookaddimg_list[*] : 단꿈서점 상세추가 이미지
                    } elseif ($gubun == 'Product/bookaddimg_list') {
                        $this->scaleImage($img, '46x46');
                        $img->writeImage($this->getTempFullTfile($tempDir, $no, $ext));

                    // Story/review_img : 인문교양 리뷰 첨부이미지(최대 5)
                    } elseif ($gubun == 'Story/review_img') {
                        $this->scaleImage($img, '92');
                        $img->writeImage($this->getTempFullTfile($tempDir, $no, $ext));
                    }
                }
                $img->destroy();
            }
        }
		
		if ($gubun != 'Board/bo_img') {
			$this->namedImageDelete($keyid, $gubun, -1);   // (-1) delete all
		}

        if ($imgs) {
            $this->makeNamedDir($keyid, $gubun);
        }

        $retval = count($imgs);

        exec("/bin/mv -f ${tempDir}/* ${realDir}/");

        return $retval;
    }

    public function namedImageDelete($keyid, $gubun, $no=0)
    {
        if (!$this->namedCheck($keyid, $gubun)) {
            return FALSE;
        }

        if ($fullfile = $this->getNamedFullfile($keyid, $gubun, $no)) {
            `/bin/rm -f ${fullfile}`;   // 이미지 삭제
        }
        if ($fullTfile = $this->getNamedFullTfile($keyid, $gubun, $no)) {
            `/bin/rm -f ${fullTfile}`;  // 섬네일도 삭제
        }
    }

    public function namedImageUrl($keyid, $gubun, $no=0, $is_salt=FALSE)
    {
        if (!$this->namedCheck($keyid, $gubun)) {
            return FALSE;
        }

        if ($no >= 0) {
            $retval = '';

            $fulldir = $this->getNamedFulldir($keyid, $gubun);
            $fullfile = $this->getNamedFullfile($keyid, $gubun, $no, '*');

            if ($nm = trim(trim(`/usr/bin/find ${fullfile} -maxdepth 1 -type f -name "img_*" -printf "%f\n" 2>/dev/null | /usr/bin/head -n 1`))) {
                $retval = $this->getNamedUrl($keyid, $gubun, $nm).($is_salt ? '?'.$this->getFilemsec("${fulldir}/${nm}") : '');
            }
            return $retval;

        } else {
            $retarr = array();

            $fulldir = $this->getNamedFulldir($keyid, $gubun);

            foreach(explode("\n", `/usr/bin/find ${fulldir} -maxdepth 1 -type f -name "img_*" -printf "%f\n" 2>/dev/null | /bin/sort`) as $nm) {

                if ($nm = trim($nm)) {
                    $retarr[] = $this->getNamedUrl($keyid, $gubun, $nm).($is_salt ? '?'.$this->getFilemsec("${fulldir}/${nm}") : '');
                }
            }
            return $retarr;
        }
    }

    // 설정 파일 등 저장 : $data : array or text, FALSE(delete)
    public function namedDataSave($keyid, $gubun, $data)
    {
        if (!$this->namedCheck($keyid, $gubun, 'Data')) {
            return FALSE;
        }

        $fulldir = $this->makeNamedDir($keyid, $gubun);

        return $this->saveData($this->getNamedFulldir($keyid, $gubun) . '.txt', $data);
    }

    // 설정 파일 등 로드 : return : array or text
    public function namedDataRead($keyid, $gubun)
    {
        if (!$this->namedCheck($keyid, $gubun, 'Data')) {
            return FALSE;
        }

        return $this->readData($this->getNamedFulldir($keyid, $gubun) . '.txt');
    }

    // 설정 파일 등 삭제
    public function namedDataDelete($keyid, $gubun)
    {
        if (!$this->namedCheck($keyid, $gubun, 'Data')) {
            return FALSE;
        }

        $fullDir = $this->getNamedFulldir($keyid, $gubun);

        if (file_exists($fullDir) && is_dir($fullDir)) {
            array_map('unlink', glob($this->getNamedFulldir($keyid, $gubun).'/*.*'));
            rmdir($fullDir);
        }
        return $this->saveData($fullDir.'.txt', FALSE);
    }

    public function namedDataCopy($fromid, $gubun, $toid)
    {
        if (!$this->namedCheck($fromid, $gubun, 'Data')) {
            return FALSE;
        }

        $retcnt = 0;

        if ($fromid && $toid) {

            if ($data = $this->namedDataRead($fromid, $gubun)) {
                $retcnt = $this->namedDataSave($toid, $gubun, $data);
            }
        }
        return $retcnt;
    }

    public function namedBannerRead($keyid, $gubun)
    {
        $retarr = array();

        if ($banner = @$this->namedDataRead($keyid, $gubun)['banner']) {
            foreach($banner as $no => $data) {
                if ((@$data['view'] == 'Y' || (@$data['view'] == 'P' && date('Y-m-dH') >= @$data['symd'].@$data['shh'] && date('Y-m-dH') <= @$data['eymd'].@$data['ehh'])) &&
                        @$data['src']) {
                    if (@$data['time']) { $data['src'] .= '?'.$data['time']; }
                    $retarr[$no] = $data;
                }
            }
        }
        return $retarr;
    }

    /*
     * D/N 용 파일정보 저장(파일+정보)
     *  $no >= 0(필수),
     *  $data : array(
     *                 <info1>,
     *                 <info2>, ...,
     *                 filedata = array(    // $_FILES[n] 1개 자료
     *                                  [name] => MyFile.jpg
     *                                  [type] => image/jpeg
     *                                  [tmp_name] => /tmp/php/php6hst32
     *                                  [error] => UPLOAD_ERR_OK
     *                                  [size] => 98174
     *                                 )
     *               )
     *          or
     *          FALSE(delete)
     *
     */
    public function namedFileSave($keyid, $gubun, $data, $no=0)
    {
        if (!$this->namedCheck($keyid, $gubun, 'File')) {
            return FALSE;
        }

        $retcnt = 0;

        if ($no >= 0) {
            $fulldir = $this->getNamedFulldir($keyid, $gubun);

            // FALSE : no-data => delete
            if ($data === FALSE) {
                $fnpattern = sprintf('file_%03d*', $no);

                foreach(explode("\n", `/usr/bin/find ${fulldir} -maxdepth 1 -type f -name "${fnpattern}" -printf "%f\n" 2>/dev/null | /bin/sort`) as $nm) {

                    if ($nm = trim($nm)) {
                        $fullfile = "${fulldir}/${nm}";

                        if (file_exists($fullfile)) {
                            $retcnt += @unlink($fullfile) ? 1 : 0;
                        }
                    }
                }

            // filedata : [name] => MyFile.jpg [type] => image/jpeg [tmp_name] => /tmp/php/php6hst32 [error] => UPLOAD_ERR_OK [size] => 98174
            } else {

                if ($filedata = @$data['filedata']) {
                    $data['filedata'] = array(
                                               'filename' => $filedata['name'],
                                               'ext'      => pathinfo($filedata['name'], PATHINFO_EXTENSION),
                                               'type'     => $filedata['type'],
                                               'size'     => $filedata['size'],
                                             );
                    $data['filedata']['fullfile'] = sprintf('%s/file_%03d.%s', $fulldir, $no, $data['filedata']['ext']);

                    $this->makeNamedDir($keyid, $gubun);

                    if (move_uploaded_file($filedata['tmp_name'], $data['filedata']['fullfile'])) {
                        $retcnt = $this->saveData(sprintf('%s/file_%03d.txt', $fulldir, $no), $data);
                    }
                }
            }
        }
        return $retcnt;
    }

    // filename + filedata(encoded string)
    public function namedFileSaveEncode($keyid, $gubun, $filename, $filedata, $no=0)
    {
        if (!$this->namedCheck($keyid, $gubun, 'File')) {
            return FALSE;
        }

        $retcnt = 0;

        if ($no >= 0) {
            $fulldir = $this->getNamedFulldir($keyid, $gubun);

            // FALSE : no-data => delete
            if ($filedata === FALSE) {
                $fnpattern = sprintf('file_%03d*', $no);

                foreach(explode("\n", `/usr/bin/find ${fulldir} -maxdepth 1 -type f -name "${fnpattern}" -printf "%f\n" 2>/dev/null | /bin/sort`) as $nm) {

                    if ($nm = trim($nm)) {
                        $fullfile = "${fulldir}/${nm}";

                        if (file_exists($fullfile)) {
                            $retcnt += @unlink($fullfile) ? 1 : 0;
                        }
                    }
                }

            // encoded  : data:xxxx/xxx;base64,iVBORw0KGgoAAAANSUh...
            } elseif (preg_match('/^data:[^\/]+\/[^\/]+;base64,([0-9a-zA-Z\+\/=]+)/', $filedata, $matches)) {
                $data['filedata'] = array(
                                           'filename' => $filename,
                                           'ext'      => pathinfo($filename, PATHINFO_EXTENSION),
                                           'type'     => '', // trim(`/usr/bin/file -b --mime-type ${fullfile}`);
                                           'size'     => 0, // filesize($fullfile)
                                         );
                $data['filedata']['fullfile'] = $fullfile = sprintf('%s/file_%03d.%s', $fulldir, $no, $data['filedata']['ext']);
                $this->makeNamedDir($keyid, $gubun);

                if (@file_put_contents($fullfile, base64_decode($matches[1]))) {
                    $data['filedata']['type'] = trim(`/usr/bin/file -b --mime-type ${fullfile}`);
                    $data['filedata']['size'] = filesize($fullfile);
                    $retcnt = $this->saveData(sprintf('%s/file_%03d.txt', $fulldir, $no), $data);
                }
            }
        }
        return $retcnt;
    }

    public function namedFileCopy($fromid, $gubun, $toid, $no=0)
    {
        if (!$this->namedCheck($fromid, $gubun, 'File')) {
            return FALSE;
        }

        $retcnt = 0;

        if ($fromid && $toid) {
            $oridata = $data = $this->namedFileRead($fromid, $gubun);

            if ($data) {
                $fulldir = $this->getNamedFulldir($toid, $gubun);
                $data['filedata']['fullfile'] = sprintf('%s/file_%03d.%s', $fulldir, $no, $data['filedata']['ext']);
                $this->makeNamedDir($toid, $gubun);

                if ($retcnt = $this->saveData(sprintf('%s/file_%03d.txt', $fulldir, $no), $data)) {
                    @copy($oridata['filedata']['fullfile'], $data['filedata']['fullfile']);
                }
            }
        }
        return $retcnt;
    }

    // D/N 용 파일정보 저장(파일+정보) : $no >= 0(필수), return : array(<info1>, <info2>, ... <filedata(array)>)
    // filedata : array(<fullfile>, <filename>, <ext>, <type>, <size>)
    public function namedFileRead($keyid, $gubun, $no=0)
    {
        if (!$this->namedCheck($keyid, $gubun, 'File')) {
            return FALSE;
        }

        $retdata = FALSE;

        if ($no >= 0) {
            $retdata = $this->readData(sprintf('%s/file_%03d.txt', $this->getNamedFulldir($keyid, $gubun), $no));
        }

        return $retdata;
    }

    public function checkSize($size, $jogun)
    {
        if ($jogun && $size) {
            $jogun = preg_replace('/[^0-9.BKMG]/', '', strtoupper($jogun));

            preg_match('/^([0-9.]+)([BKMG])?$/', $jogun, $matches);

            if (@$matches[1] && is_numeric(@$matches[1])) {
                $maxsize = $matches[1];

                if (@$matches[2]) {

                    if     ($matches[2] == 'K') { $maxsize *= 1024; }
                    elseif ($matches[2] == 'M') { $maxsize *= 1024 * 1024; }
                    elseif ($matches[2] == 'G') { $maxsize *= 1024 * 1024 * 1024; }
                }

                return $size <= $maxsize;

            } else {
                return FALSE;
            }

        } else {
            return FALSE;
        }
    }

    public function checkImage($filetype)
    {
        return $filetype && in_array($filetype, array(
                                                       'image/gif',
                                                       'image/jpg',
                                                       'image/jpeg',
                                                       'image/png',
                                                     ));
    }

    /*
     *  [src]
     *      case 1. files   : [name] => MyFile.jpg [type] => image/jpeg [tmp_name] => /tmp/php/php6hst32 [error] => UPLOAD_ERR_OK [size] => 98174
     *      case 2. encode  : data:image/png;base64,iVBORw0KGgoAAAANSUh...
     *      case 3. fileurl : 절대경로 or 상대경로
     *      case 4. Imagick : Imagick instance
     */
    public function scaleImage(&$src, $scaleSize=FALSE)
    {
        $img  = FALSE;
        $case = FALSE;

        // case 1. files   : [name] => MyFile.jpg [type] => image/jpeg [tmp_name] => /tmp/php/php6hst32 [error] => UPLOAD_ERR_OK [size] => 98174
        if (is_array($src)) {
            
            if ($src['type'] && $this->checkImage($src['type']) && $src['tmp_name'] && file_exists($src['tmp_name'])) {
                $case = 1;
                $img  = new Imagick($src['tmp_name']);
            }

        // case 4. Imagick : Imagick instance
        } elseif ($src instanceof Imagick) {
            $case = 4;
            $img =& $src;

        // case 2. encode  : data:image/png;base64,iVBORw0KGgoAAAANSUh...
        } elseif ($src && substr($src, 0, 11) == 'data:image/') {

            if ($info = $this->encodeInfo($src)) {
                $case = 2;
                $img  = new Imagick();
                $img->readImageBlob(base64_decode($info['data']));
            }

        // case 3. fileurl : 절대경로 or 상대경로
        } elseif ($src && $info = $this->imageInfo($this->getImageFullpath($src))) {

            if ($info['type'] && $this->checkImage($info['type'])) {
                $case = 3;
                $img = new Imagick($info['fullfile']);
            }
        }

        if ($case && $img) {
            $imgOrientation = $img->getImageOrientation();
            $img->setImageResolution(72, 72);

            if ($scaleSize) {
                @list($sizeX, $sizeY) = explode('x', $scaleSize);

                if (is_numeric($sizeX) && is_numeric($sizeY)) {
                    $img->scaleImage($sizeX, $sizeY);       // 가로세로 고정크기
                } elseif (is_numeric($sizeX) && ($img->getImageWidth() > $sizeX || $img->getImageHeight() > $sizeX)) {
                    $img->scaleImage($sizeX, $sizeX, TRUE); // 가로세로 최대크기 비율조정
                }
            }

            // 이미지 회전
            switch($imgOrientation) {
                case 8:
                    $img->rotateImage(new ImagickPixel('#00000000'), 270);
                    $img->setImageOrientation(0);
                    break;
                case 3:
                    $img->rotateImage(new ImagickPixel('#00000000'), 180);
                    $img->setImageOrientation(1);
                    break;
                case 6:
                    $img->rotateImage(new ImagickPixel('#00000000'), 90);
                    $img->setImageOrientation(0);
                    break;
            }

            // case 1. files   : [name] => MyFile.jpg [type] => image/jpeg [tmp_name] => /tmp/php/php6hst32 [error] => UPLOAD_ERR_OK [size] => 98174
            if ($case == 1) {
                $img->writeImage($src['tmp_name']);
                $img->destroy();

            // case 2. encode  : data:image/png;base64,iVBORw0KGgoAAAANSUh...
            } elseif ($case == 2) {
                $src = 'data:'.$info['type'].';base64,'.base64_encode($img->getImageBlob());
                $img->destroy();

            // case 3. fileurl : 절대경로 or 상대경로
            } elseif ($case == 3) {
                $img->writeImage($info['fullfile']);
                $img->destroy();

            // case 4. Imagick : Imagick instance
            } elseif ($case == 4) {
                // null
            }
        }
    }

    private function saveData($fullfile, $data)
    {
        $retcnt = 0;

        if ($fullfile) {

            // FALSE : no-data => delete
            if ($data === FALSE) {
                $retcnt = @unlink($fullfile) ? 1 : 0;

            } else {
                $data = is_array($data) ? 'serialize::'.serialize($data) : $data;

                if ($data) {
                    $retcnt = file_put_contents($fullfile, $data);
                }
            }
        }
        return $retcnt;
    }

    private function readData($fullfile)
    {
        $retdata = FALSE;

        if (file_exists($fullfile)) {
            $retdata = file_get_contents($fullfile);

            if (substr($retdata, 0, 11) == 'serialize::') {
                $retdata = unserialize(substr($retdata, 11));
            }
        }
        return $retdata;
    }

    public function imageInfo($fullfile)
    {
        $retarr = array();

        if (file_exists($fullfile) && is_file($fullfile)) {
            $retarr['fullfile'] = $fullfile;
            $retarr['filename'] = pathinfo($fullfile, PATHINFO_BASENAME);
            $retarr['type']     = trim(`/usr/bin/file -b --mime-type ${fullfile}`);
            $retarr['ext']      = pathinfo($fullfile, PATHINFO_EXTENSION);
            $retarr['no']       = substr($retarr['filename'], 4, 2);    // format : img_000.ext
        }
        return $retarr;
    }

    // data:image/png;base64,iVBORw0KGgoAAAANSUh... 포함 문자열
    private function encodeSearch($content)
    {
        $retarr = array();

        if (preg_match_all('/(data):(image\/(gif|jpeg|jpg|png));?(base64),([0-9a-zA-Z\+\/=]+)/', $content, $matches, PREG_SET_ORDER)) {

            foreach($matches as $no => $data) {
                $retarr[$no] = $this->encodeInfo($data[0]);
            }
        }
        return $retarr;
    }

    private function encodeInfo($filestring)
    {
        $retarr = array();

        if (preg_match('/(data):(image\/(gif|jpeg|jpg|png));?(base64),([0-9a-zA-Z\+\/=]+)/', $filestring, $matches)) {
            $retarr['text'] = $matches[0];  // [0] => data:image/gif;base64,2222
                                            // [1] => data
            $retarr['type'] = $matches[2];  // [2] => image/gif
            $retarr['ext']  = $matches[3];  // [3] => gif
                                            // [4] => base64
            $retarr['data'] = $matches[5];  // [5] => 2222
        }
        return $retarr;
    }

    // return 절대경로
    // ^[^/] or ^/cimg 이면 상대경로, 그 외는 절대경로
    private function getImageFullpath($path)
    {
        $path = strtok($path, '?');  // get parameter 제거

        if (($imsi = parse_url($path)) && @$imsi['scheme'] && in_array($imsi['scheme'], array('http','https')) && @$imsi['path']) {
            $path = $imsi['path'];
        }

        if ($path[0] != '/') {
            return $this->basedir . '/' . ltrim($path, '/');

        } elseif (substr($path, 0, 5) == '/cimg') {
            return rtrim($GLOBALS['SERVER_UPLOAD_PATH'], '/').'/common/Image' . substr($path, 5);

        } else {
            return $path;
        }
    }

    // modify microtime
    public function getFilemsec($fullpath)
    {
        return $fullpath && file_exists($fullpath) ? shell_exec('/usr/bin/stat -c \'%Y\' "'.$fullpath.'"') : '';
    }

    private function getNamedUrl($keyid, $gubun, $filename='')
    {
        return $filename ? $this->baseurl . sprintf('/%s/%s/%s', $gubun, $keyid, $filename)
                         : $this->baseurl . sprintf('/%s/%s',    $gubun, $keyid);
    }

    private function getNamedFulldir($keyid, $gubun)
    {
        return $this->basedir . sprintf('/%s/%s', $gubun, $keyid);
    }

    private function getNamedFullfile($keyid, $gubun, $no=0, $ext='*')
    {
        if ($no < 0) {
            return $this->getNamedFulldir($keyid, $gubun) . sprintf('/img_%s', $ext);
        } else {
            return $this->getNamedFulldir($keyid, $gubun) . sprintf('/img_%03d.%s', $no, $ext);
        }
    }

    // 섬네일 파일명
    private function getNamedFullTfile($keyid, $gubun, $no=0, $ext='*')
    {
        if ($no < 0) {
            return $this->getNamedFulldir($keyid, $gubun) . sprintf('/timg_%s', $ext);
        } else {
            return $this->getNamedFulldir($keyid, $gubun) . sprintf('/timg_%03d.%s', $no, $ext);
        }
    }

    private function namedCheck($keyid, $gubun, $defDir='Image')
    {
        if ($keyid &&
                in_array($gubun, array(
                                        'Product/thumbnail', 'Product/eventimg', 'Product/schedule',
                                        'Product/bookimg_list', 'Product/bookaddimg_list', 'Product/bookpreview_list',
                                        'Product/info_text', 'Product/info2_text', 'Product/dlv_text', 'Product/notice_text', 'Product/mov_file',
                                        'Teacher/lecturetopimg',
                                        'Teacher/hometopimg/E', 'Teacher/hometopimg/P',
                                        'Teacher/profile/E',    'Teacher/profile/P', 'Teacher/profile/S',
                                        'Teacher/curriculum/E', 'Teacher/curriculum/P',
                                        'SEO/Product', 'SEO/Default', 'Board/bo_file', 'Board/bo_img', 'Event/w_img', 'Event/m_img',
                                        'Banner/Main/E',      'Banner/Main/P',      'Banner/Main/S',
                                        'Banner/mMain/E',     'Banner/mMain/P',     'Banner/mMain/S',
                                        'Banner/Teacher/E',   'Banner/Teacher/P',   'Banner/Teacher/S',
                                        'Banner/Lecture/E',   'Banner/Lecture/P',   'Banner/Lecture/S',
                                        'Banner/Review/E',    'Banner/Review/P',    'Banner/Review/S',
                                        'Banner/Pass/E',      'Banner/Pass/P',      'Banner/Pass/S',
                                        'Banner/DailyExam/E', 'Banner/DailyExam/P', 'Banner/DailyExam/S',
                                        'Banner/Contents/E',  'Banner/Contents/P',  'Banner/Contents/S',
                                        'Banner/Books/E',     'Banner/Books/P',     'Banner/Books/S',
                                        'Banner/Player/E',    'Banner/Player/P',    'Banner/Player/S',
                                        'Banner/Login/E',     'Banner/Login/P',     'Banner/Login/S',
                                        'Banner/Join/E',      'Banner/Join/P',      'Banner/Join/S',
                                        'Banner/MyRoom/E',    'Banner/MyRoom/P',    'Banner/MyRoom/S',
                                        'Banner/Order/E',     'Banner/Order/P',     'Banner/Order/S',
                                        'Banner/Floating/E',  'Banner/Floating/P',  'Banner/Floating/S',
                                        'Banner/Story/S',     'Banner/Hakwon/E',
                                        'Story/movie/img_card', 'Story/movie/img_detail',
                                        'Story/movie/summary', 'Story/movie/content', 'Story/movie/quiz',
                                        'Story/review_img',
                                        'Story/month/info_text', 'Story/month/info2_text',
                                        'Story/month/main_img', 'Story/month/main2_img',
                                        'Story/month/img_detail', 'Story/month/thumbnail',
                                        'Story/month/file',
                                        'Story/site/info_text', 'Story/site/thumbnail',
                                        'Hakwon/Visit',
                                      ))) {

            if ($defDir == 'Image') {
                $this->basedir = rtrim($GLOBALS['SERVER_UPLOAD_PATH'], '/').'/common/Image';
                $this->baseurl = '/cimg';
            } else {
                $this->basedir = rtrim($GLOBALS['SERVER_UPLOAD_PATH'], '/').'/common/'.$defDir;
            }

            return TRUE;
        } else {
            return FALSE;
        }
    }

    private function makeNamedDir($keyid, $gubun)
    {
        $fulldir = $this->getNamedFulldir($keyid, $gubun);

        if (!file_exists($fulldir) || !is_dir($fulldir)) {
            @mkdir($fulldir, 0777, TRUE);
        }
        return $fulldir;
    }

    // 임시디렉토리 : public (FileUpload::tmpUpload 사용)
    public function getTempFulldir($uid)
    {
        $fulldir = '';

        if ($uid) {
            $fulldir = rtrim($GLOBALS['SERVER_TEMPUPLOAD_PATH'], '/').'/'.$uid;

            if (!file_exists($fulldir) || !is_dir($fulldir)) {
                @mkdir($fulldir, 0777, TRUE);
            } else {
                @exec("/bin/rm -rf ${fulldir}/*");
            }
        }
        return $fulldir;
    }

    // 임시파일명
    private function getTempFullfile($tempdir, $no=0, $ext='*')
    {
        if ($no < 0) {
            return $tempdir . sprintf('/img_%s', $ext);
        } else {
            return $tempdir . sprintf('/img_%03d.%s', $no, $ext);
        }
    }

    // 섬네일 임시파일명
    private function getTempFullTfile($tempdir, $no=0, $ext='*')
    {
        if ($no < 0) {
            return $tempdir . sprintf('/timg_%s', $ext);
        } else {
            return $tempdir . sprintf('/timg_%03d.%s', $no, $ext);
        }
    }

    public function getNamedBackupdir($keyid, $gubun, $site)
    {
        return sprintf('/home/UPLOAD/common_backup/Image/Banner/%s/%s/%s', $gubun, $site, $keyid);
    }

    public function getNamedBackupFullfile($keyid, $gubun, $site)
    {
        $retarr = array();

        $fulldir = $this->getNamedBackupdir($keyid, $gubun, $site);

        foreach(explode("\n", `/usr/bin/find ${fulldir} -maxdepth 1 -type f -name "img_*" -printf "%f\n" 2>/dev/null | /bin/sort`) as $nm) {
            if ($nm = trim($nm)) {
                $retarr[] = $fulldir.'/'.$nm;
            }
        }
        return $retarr;
    }
}

