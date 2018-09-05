<?php
$sub_menu = "300";
include_once("header.php")
?>
<div id="wrapper">
  <div id="container" class="">
    <h1 id="container_title">게시판 수정</h1>
    <div class="container_wr">
      <form name="fboardform" id="fboardform" method="post" enctype="multipart/form-data">
        <input type="hidden" name="w" value="u">
        <input type="hidden" name="sfl" value="">
        <input type="hidden" name="stx" value="">
        <input type="hidden" name="sst" value="">
        <input type="hidden" name="sod" value="">
        <input type="hidden" name="page" value="0">
        <input type="hidden" name="token" value="">
        <section id="anc_bo_basic">
          <h2 class="h2_frm">게시판 기본 설정</h2>
          <div class="tbl_frm01 tbl_wrap">
            <table>
              <caption>게시판 기본 설정</caption>
              <colgroup>
                <col class="grid_4">
                <col>
                <col class="grid_3">
              </colgroup>
              <tbody>
                <tr>
                  <th scope="row"><label for="bo_table">TABLE</label></th>
                  <td>
                    <input type="text" name="bo_table" value="board" id="bo_table" readonly="" class="frm_input   " maxlength="20">
                    <a href="#" class="btn_frmline">게시판 바로가기</a>
                    <a href="./board_list.php?sst=&amp;sod=&amp;sfl=&amp;stx=&amp;page=0" class="btn_frmline">목록으로</a>
                  </td>
                </tr>
                <tr>
                  <th scope="row"><label for="bo_subject">게시판 제목<strong class="sound_only">필수</strong></label></th>
                  <td>
                    <input type="text" name="bo_subject" value="자유게시판" id="bo_subject" required="" class="required frm_input" size="80" maxlength="120">
                  </td>
                </tr>
                <tr>
                  <th scope="row"><label for="bo_category_list">분류</label></th>
                  <td>
                    <span class="frm_info">분류와 분류 사이는 | 로 구분하세요. (예: 질문|답변) 첫자로 #은 입력하지 마세요. (예: #질문|#답변 [X])<br>분류명에 일부 특수문자 ()/ 는 사용할수 없습니다.</span>                <input type="text" name="bo_category_list" value="자유|기타" id="bo_category_list" class="frm_input" size="70">
                    <input type="checkbox" name="bo_use_category" value="1" id="bo_use_category" checked="">
                    <label for="bo_use_category">사용</label>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </section>
        <section id="anc_bo_function">
          <h2 class="h2_frm">게시판 기능 설정</h2>
          <div class="tbl_frm01 tbl_wrap">
            <table>
              <caption>게시판 기능 설정</caption>
              <colgroup>
                <col class="grid_4">
                <col>
                <col class="grid_3">
              </colgroup>
              <tbody>
                <tr>
                  <th scope="row"><label for="bo_count_modify">원글 수정 불가<strong class="sound_only">필수</strong></label></th>
                  <td>
                    <span class="frm_info">댓글의 수가 설정 수 이상이면 원글을 수정할 수 없습니다. 0으로 설정하시면 댓글 수에 관계없이 수정할 수있습니다.</span>                댓글 <input type="text" name="bo_count_modify" value="1" id="bo_count_modify" required="" class="required numeric frm_input" size="3">개 이상 달리면 수정불가
                  </td>
                </tr>
                <tr>
                  <th scope="row"><label for="bo_count_delete">원글 삭제 불가<strong class="sound_only">필수</strong></label></th>
                  <td>
                    댓글 <input type="text" name="bo_count_delete" value="1" id="bo_count_delete" required="" class="required numeric frm_input" size="3">개 이상 달리면 삭제불가
                  </td>
                </tr>
                <tr>
                  <th scope="row"><label for="bo_use_secret">비밀글 사용</label></th>
                  <td>
                    <span class="frm_info">"체크박스"는 글작성시 비밀글 체크가 가능합니다. "무조건"은 작성되는 모든글을 비밀글로 작성합니다. (관리자는 체크박스로 출력합니다.) 스킨에 따라 적용되지 않을 수 있습니다.</span>                <select id="bo_use_secret" name="bo_use_secret">
                      <option value="0">사용하지 않음</option>
                      <option value="1" selected="selected">체크박스</option>
                      <option value="2">무조건</option>
                    </select>
                  </td>
                </tr>
                <tr>
                  <th scope="row"><label for="bo_use_dhtml_editor">DHTML 에디터 사용</label></th>
                  <td>
                    <span class="frm_info">글작성시 내용을 DHTML 에디터 기능으로 사용할 것인지 설정합니다. 스킨에 따라 적용되지 않을 수 있습니다.</span>                <input type="checkbox" name="bo_use_dhtml_editor" value="1" checked="" id="bo_use_dhtml_editor">
                    사용
                  </td>
                </tr>
                <tr>
                  <th scope="row"><label for="bo_use_list_file">목록에서 파일 사용</label></th>
                  <td>
                    <span class="frm_info">목록에서 게시판 첨부파일을 읽어와야 할 경우에 설정하는 옵션입니다. 기본은 사용하지 않습니다.</span>                <input type="checkbox" name="bo_use_list_file" value="1" id="bo_use_list_file">
                    사용 (사용시 속도가 느려질 수 있습니다.)
                  </td>
                </tr>
                <tr>
                  <th scope="row"><label for="bo_upload_count">파일 업로드 개수<strong class="sound_only">필수</strong></label></th>
                  <td>
                    <span class="frm_info">게시물 한건당 업로드 할 수 있는 파일의 최대 개수 (0 은 파일첨부 사용하지 않음)</span>                <input type="text" name="bo_upload_count" value="2" id="bo_upload_count" required="" class="required numeric frm_input" size="4">
                  </td>
                </tr>
                <tr>
                  <th scope="row"><label for="bo_upload_size">파일 업로드 용량<strong class="sound_only">필수</strong></label></th>
                  <td>
                    <span class="frm_info">최대 20M 이하 업로드 가능, 1 MB = 1,048,576 bytes</span>                업로드 파일 한개당 <input type="text" name="bo_upload_size" value="1048576" id="bo_upload_size" required="" class="required numeric frm_input" size="10"> bytes 이하
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </section>
        <div class="btn_fixed_top">          
          <a href="#" class=" btn_02 btn">게시판 바로가기</a>
          <a href="#" class="btn_02 btn">게시판 썸네일 삭제</a>
          <input type="submit" value="확인" class="btn_submi btn btn_01" accesskey="s">
        </div>
      </form>
    </div>   
  </div> 
</div>
<?php
include_once("footer.php")
?>