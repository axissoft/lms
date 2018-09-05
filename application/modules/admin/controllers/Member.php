<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends MX_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *        http://example.com/index.php/welcome
     *    - or -
     *        http://example.com/index.php/welcome/index
     *    - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */

    function __construct()
    {
        parent::__construct();

        $this->lang->load('site', 'korean');

        $this->allow = array('');

        $this->load->model('Member_m');
        $this->load->helper('form');
        $this->load->helper('string');

        $this->output->enable_profiler(TRUE);

    }

    public function _remap($method)
    {
        if (substr($method, 0, 4) == 'pop_' || $this->input->is_ajax_request()) {
            if (method_exists($this, $method)) {
                $this->{"{$method}"}();
            }
        } else {
            $this->load->view('header', array('sub_menu' => 200));

            if (method_exists($this, $method)) {
                $this->{"{$method}"}();
            }

            $this->load->view('footer');
        }
    }

    public function index()
    {
        $this->memberlist();
    }

    public function memberlist()
    {
        $perpage = 20; // 하나의 페이지에 보여줄 로우 개수
        $curpage = $this->uri->segment(5, 0); // 세그먼트 4번째에 입력되는 값 (현재 페이지 번호)
        $searchid = $this->uri->segment(6, "uid"); // 로우 검색 조건 디폴트가 uid
        $searchtxt = urldecode($this->uri->segment(7, null)); // 로우 검색 조건 값 디폴트 null
        $args = array('curpage' => $curpage, 'perpage' => $perpage, 'searchid' => $searchid, 'searchtxt' => $searchtxt);

        $this->load->library('pagination');
        $config['uri_segment'] = 3;
        $config['base_url'] = '/admin/member/memberlist';
        $config['total_rows'] = $this->Member_m->get_total_row($args);
        $config['total_rows'] = 2;
        $config['suffix'] = '/searchid/' . $searchid . '/searchtxt/' . $searchtxt;
        $config['first_url'] = $config['base_url'] . '/0' . $config['suffix'];
        $config['per_page'] = $perpage;

        $this->pagination->initialize($config);

        $data['res'] = $this->Member_m->member_list($args);
        $data['pagination'] = $this->pagination->create_links() ? $this->pagination->create_links() : '<strong class="pg_current">1</strong>';
        $data['perpage'] = $perpage;
        $data['curpage'] = $curpage;
        $data['searchid'] = $searchid;
        $data['searchtxt'] = $searchtxt;
        $data['total_rows'] = $config['total_rows'];

//				echo "<pre>"; print_r($data); echo "</pre>";
        $this->load->view('member/memberlist', $data);

    }

    public function memberform()
    {
        //get
        $args['uid'] = $this->uri->segment(7, null); // 세그먼트 7번째
        $data['res'] = $args['uid'] ? $this->Member_m->member_view($args) : null;

        if (!$data['res']) redirect('/admin/member', 'refrash');

        $this->load->view('member/memberform', $data);
    }

    public function memberModify()
    {

        $uid = $this->input->post('uid', true);
//        $upw = $this->input->post('mb_password', true);
//        if ($user_pw != NULL) {
//            $user_pw = hash("sha256", $this->input->post('mb_password', true));
//        }
        $name = $this->input->post('name', true);
        $email = $this->input->post('email', true);
        $birthday = $this->input->post('birthday', true);
        $mobile = $this->input->post('mobile', true);
        $ulevel = $this->input->post('ulevel', true);
        $auth_yn = $this->input->post('auth_yn', true);
        $moddate = date('Y-m-d H:i:s');

        if ($auth_yn == '1') {
            $auth_yn = 'Y';
        } else {
            $auth_yn = 'N';
        }

        $param = array(
            'uid' => $uid,
            'email' => $email,
            'birthday' => $birthday,
            'name' => $name,
            'mobile' => $mobile,
            'ulevel' => $ulevel,
            'auth_yn' => $auth_yn,
            'moddate' => $moddate
        );

        $res = $this->Member_m->member_modify($param);
        $this->session->set_userdata('sessMember', $param);
        if ($res) {
            $this->session->set_flashdata('message', '저장되었습니다.');
            redirect('admin/member/memberlist');
        }

    }

    public function maillist()
    {

        $this->load->view('member/maillist');
    }

    public function mailform()
    {
        $this->load->view('member/mailform');
    }

    public function mailselectform()
    {
        $this->load->view('member/mailselectform');
    }

    public function mailpreview()
    {
        $this->load->view('member/mailpreview');
    }

    public function pointlist()
    {
        $this->load->view('member/pointlist');
    }
}
