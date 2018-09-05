<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Goods extends MX_Controller {

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
			$this->load->view('header',array('sub_menu'=>400));

			if (method_exists($this, $method)) {
				$this->{"{$method}"}();
			}

			$this->load->view('footer');
		}
	}

	public function index()
	{
		$this->orderlist();
	}

	public function orderlist()
	{
		$this->load->view('goods/orderlist');
	}

	public function personalpaylist()
	{
		$this->load->view('goods/personalpaylist');
	}

	public function personalpayform()
	{
		$this->load->view('goods/personalpayform');
	}

	public function categorylist()
	{
		$this->load->view('goods/categorylist');
	}

	public function categoryform()
	{
		$this->load->view('goods/categoryform');
	}

	public function itemlist()
	{
		$this->load->view('goods/itemlist');
	}

	public function itemform()
	{
		$this->load->view('goods/itemform');
	}

	public function teacherlist()
	{
		$this->load->view('goods/teacherlist');
	}

	public function teacherform()
	{
		$this->load->view('goods/teacherform');
	}

	public function itemuselist()
	{
		$this->load->view('goods/itemuselist');
	}

	public function itemuseform()
	{
		$this->load->view('goods/itemuseform');
	}

	public function itemstocklist()
	{
		$this->load->view('goods/itemstocklist');
	}

	public function itemqalist()
	{
		$this->load->view('goods/itemqalist');
	}

		public function itemqaform()
	{
		$this->load->view('goods/itemqaform');
	}

	public function couponlist()
	{
		$this->load->view('goods/couponlist');
	}

	public function couponform()
	{
		$this->load->view('goods/couponform');
	}

	public function inorderlist()
	{
		$this->load->view('goods/inorderlist');
	}

	public function inorderform()
	{
		$this->load->view('goods/inorderform');
	}

	public function optionstocklist()
	{
		$this->load->view('goods/optionstocklist');
	}

	public function itemsellrank()
	{
		$this->load->view('goods/itemsellrank');
	}

}
