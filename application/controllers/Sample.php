<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sample extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
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
		$this->load->model('Member_m');
		$this->load->helper('form');


//		$this->load->library('calendar');
//		$this->output->enable_profiler(TRUE);

		$this->sessMember = $this->session->userdata('sessMember');
		echo date('ymd H:i:s')."<pre>"; print_r($this->sessMember); echo "</pre>";

	}

	public function index()
	{
		echo phpinfo();

		if ($this->agent->is_browser())
		{
				$agent = $this->agent->browser().' '.$this->agent->version();
		}
		elseif ($this->agent->is_robot())
		{
				$agent = $this->agent->robot();
		}
		else
		{
				$agent = 'Unidentified User Agent';
		}

		if ($this->agent->is_mobile())
		{
				$agent = $this->agent->mobile();
		}

		echo $agent."<br/>aa";

		echo $this->agent->mobile()."<br/>bb";

		echo $this->agent->platform(); // Platform info (Windows, Linux, Mac, etc.)


		echo "<pre>"; print_r("FCPATH : ".FCPATH); echo "</pre>";
		echo "<pre>"; print_r("BASEPATH : ".BASEPATH); echo "</pre>";
		echo "<pre>"; print_r("APPPATH : ".APPPATH); echo "</pre>";
		echo "<pre>"; print_r("VIEWPATH : ".VIEWPATH); echo "</pre>";

//		echo "DDD : ".is_php('7.2')."DDDD";

		//객체
		$data = $this->Member_m->getObject();
		echo "<pre>"; print_r($data); echo "</pre>";

		foreach($data as $list){
			echo "<pre>"; print_r($list->aa); echo "</pre>";
			echo "<pre>"; print_r($list->bb); echo "</pre>";
		}

		//배열
		$data = $this->Member_m->getArray();
		echo "<pre>"; print_r($data); echo "</pre>";

		foreach($data as $key => $val){
			echo "<pre>"; print_r($key.":".$val['aa']); echo "</pre>";
			echo "<pre>"; print_r($key.":".$val['bb']); echo "</pre>";
		}

		//강좌코드 생성기
		$this->load->helper('code');
		echo make_code('P');

		$this->db->close();

//		$this->Member_m->register($data);
//		log_message("MYLOG", 'ddddd');
//		$this->login_process();
		$this->load->view('sample');
	}

	function ajax(){
		if($this->input->is_ajax_request()){
			echo "sha256 : ". hash( "sha256", $this->input->post('bb') );
			echo "<br/>ajax로 호출한페이지인지 확인 : ".$this->input->is_ajax_request();
			echo "<pre>"; print_r($this->input->post()); echo "</pre>";
//			echo $this->calendar->generate(2017, 10, array(date('d') => 'javascript:cal(this);'));
		}else{
//			show_error('message', 200, 'title');
			show_404();
		}
	}

	function mailto(){
		if($this->input->is_ajax_request()){
			echo "<pre>"; print_r($this->input->post()); echo "</pre>";
			$this->load->library('email');
			$config['protocol'] = 'sendmail';
			$config['mailpath'] = '/var/qmail/bin/qmail-inject';
			$config['mailtype'] = 'text';
			$config['charset']  = 'utf-8';
			$config['newline']  = "\r\n";
			$config['wordwrap'] = TRUE;
			$this->email->initialize($config);

			$this->email->clear();
			$this->email->to($this->input->post('mailto'));
			$this->email->from($this->input->post('from'));
			$this->email->subject($this->input->post('title'));
			$this->email->message($this->input->post('message'));
			if ( ! $this->email->send())
			{
				echo "실패";
			}else{
				echo "성공";
			}
		}else{
//			show_error('message', 200, 'title');
			show_404();
		}
	}
}
