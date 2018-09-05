<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting extends MX_Controller {

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

		$this->load->model('Setting_m');
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

	public function index()
	{
		$this->configform();
	}

	public function configform()
	{
		/*	이용약관과 개인정보취급방침은 파일로 사용.
		*  [Data] 단순 자료(text or array), Url 불가
		*  public function namedDataSave       ($code, $gubun, $data)
		*  public function namedDataRead       ($code, $gubun)
		*  public function namedDataDelete     ($code, $gubun)
		*  public function namedDataCopy       ($from, $gubun, $to)
		*/
		$this->load->library("NamedFileAPI");


		$data["config_list"] = $this->Setting_m->market_config_view();

		$this->load->view('setting/configform',$data);
	}

	public function configform_process()
	{
		$this->load->library("form_validation");

		$this->form_validation->set_rules('market_id', 'market_id', 'required|trim');
		$this->form_validation->set_rules('market_name', 'market_name', 'required');
//		$this->form_validation->set_rules('market_title', 'market_title', 'required');
//		$this->form_validation->set_rules('company_name', 'company_name', 'required');
//		$this->form_validation->set_rules('license_no', 'license_no', 'required|trim');
//		$this->form_validation->set_rules('delegate_name', 'delegate_name', 'required');
//		$this->form_validation->set_rules('company_tel', 'company_tel', 'required|trim');
//		$this->form_validation->set_rules('company_fax', 'company_fax', 'required|trim');
//		$this->form_validation->set_rules('business_no', 'business_no', 'required|trim');
//		$this->form_validation->set_rules('company_zip', 'company_zip', 'required|trim');
//		$this->form_validation->set_rules('address', 'address', 'required');
//		$this->form_validation->set_rules('piname', 'piname', 'required');
//		$this->form_validation->set_rules('piemail', 'piemail', 'required|trim|eamil');

		if ($this->form_validation->run() === true) {
			$param = array(
				'market_id' => $this->input->post('market_id', true),
				'market_name' => $this->input->post('market_name', true),
				'market_title' => $this->input->post('market_title', true),
				'cpname' => $this->input->post('company_name', true),
				'license_no' => $this->input->post('license_no', true),
				'delegate_name' => $this->input->post('delegate_name', true),
				'cptel' => $this->input->post('company_tel', true),
				'cpfax' => $this->input->post('company_fax', true),
				'business_no' => $this->input->post('business_no', true),
				'zipcd' => $this->input->post('company_zip', true),
				'address' => $this->input->post('address', true),
				'piname' => $this->input->post('piname', true),
				'piemail' => $this->input->post('piemail', true)
			);

			$result = $this->Setting_m->market_config_insert($param);

			if ($result === true) {
				$this->session->set_flashdata('message', 'success');
			}else{
				$this->session->set_flashdata('message', 'faild');
			}
		}
			redirect('/admin/setting/configform', 'refrash');
	}

	public function theme()
	{
		$this->load->view('setting/theme');
	}

	public function menulist()
	{
		$this->load->view('setting/menulist');
	}

	public function menuform()
	{
		$this->load->view('setting/menuform');
	}

	public function player()
	{
		$this->load->view('setting/player');
	}

}
