<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MX_Controller {

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

		$this->lang->load('site', 'korean');

		$this->allow = array('');

		$this->load->model('Member_m');
		$this->load->helper('form');
		$this->load->helper('string');

//        $this->output->enable_profiler(TRUE);

	}

	public function _remap($method){
		if(substr($method, 0, 4) == 'pop_' || $this->input->is_ajax_request()){
			if (method_exists($this, $method)) {
				$this->{"{$method}"}();
			}
		}else{
			$this->load->view('header',array('sub_menu'=>100));

			if (method_exists($this, $method)) {
				$this->{"{$method}"}();
			}

			$this->load->view('footer');
		}
	}

	//root 리다이렉트용
	public function index()
	{
		$this->load->view('intro');
	}

}
