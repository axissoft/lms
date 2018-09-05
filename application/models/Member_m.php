<?php
class Member_m extends CI_Model{
	function __construct()
    {
        parent::__construct();
    }

	public function getObject()
	{
		return $this->db->query("select * from sample")->result();
//		return $this->db->get('sample')->result();
 	}

	public function getArray()
	{
		return $this->db->query("select * from sample")->result_array();
//		return $this->db->get('sample')->result();
 	}

	public function getMember($args)
	{
		if($args['email']) $this->db->where('email', $args['email']);
		if($args['user_id']) $this->db->where('user_id', $args['user_id']);
		return $this->db->get('member')->row();
 	}

	public function chkMember($args)
	{
		if($args['email'])
		return $this->db->get_where('member', array('user_id'=>$args['user_id'],'email'=>$args['email']))->row();
	}

	public function searchDeviceInfo($args) {
        //$this->db->join('contents_db', 'tb_mtool.uid = contents_db.c_company')->like($args['searchid'], $args['searchtxt'])->limit($args['perpage'], $args['curpage'])->order_by('regdate', 'DESC');
        //return $this->db->get_where('tb_mtool', array('tb_mtool.uid'=>'contents_db.c_company'))->result();
        $this->db->like($args['searchid'], $args['searchtxt'])->limit($args['perpage'], $args['curpage'])->order_by('regdate', 'DESC');
        return $this->db->get('tb_mtool')->result();
    }

	public function getMember_find($args)
	{
		return $this->db->join('auth_code', 'auth_code.auth_key = member.email')->get_where('member', array('auth_code.auth_key'=>$args['email'],'member.email'=>$args['email']))->row();
 	}

	public function getMember_find_id($args)
	{
		$this->db->select('user_id');
		return $this->db->join('auth_code', 'auth_code.auth_key = member.email')->get_where('member', array('auth_code.auth_key'=>$args['email'],'member.email'=>$args['email']))->row();
 	}

	public function success_auth_code($args) {

		$this->db->set('auth_used', $args['auth_used']);
		return $this->db->update('auth_code', NULL ,array('auth_code'=> $args['auth_num']));

	}

	public function chkAuthCode_id($args) {

		$res = $this->db->select_max('auth_exp_date')->get_where('auth_code')->row();
		return $this->db->get_where('auth_code', array('auth_code'=> $args['auth_num'], 'auth_key'=>$args['email'], 'auth_division'=>'find_id', 'auth_used'=>'N', 'auth_exp_date'=> $res->auth_exp_date ))->row();
	}

	public function chkAuthCode_pw($args) {

		$res = $this->db->select_max('auth_exp_date')->get_where('auth_code')->row();
		return $this->db->get_where('auth_code', array('auth_code'=> $args['auth_num'], 'auth_key'=>$args['email'], 'auth_division'=>'find_pw', 'auth_used'=>'N', 'auth_exp_date'=> $res->auth_exp_date ))->row();
	}

	public function register_auth_code($args)
	{

		if( ($args['auth_division'] == 'id') || ($args['auth_division'] == 'pw') ) {

			$this->db->set('auth_code', $args['auth_code']);
			$this->db->set('auth_used', $args['auth_used']);
			$this->db->set('auth_division', 'find_'.$args['auth_division']);
			$this->db->set('auth_exp_date', $args['auth_exp_date']);
			$this->db->set('auth_key', $args['email']);
			$this->db->where('auth_key', $args['email']);

			return $this->db->insert('auth_code');
		}

		if($args['email'])	{

			$this->db->set('auth_division', $args['auth_division']);
			$this->db->set('auth_exp_date', $args['auth_exp_date']);
			$this->db->set('auth_key', $args['email']);
			$this->db->where('email', $args['email']);
			return $this->db->insert('auth_code');

		}


	}




//		return $this->db->insert_id();



	public function register($args)
	{
		$this->db->set('user_id', $args['user_id']);
		$this->db->set('user_pw', $args['user_pw']);
		$this->db->set('email', $args['email']);
		$this->db->set('name', $args['name']);
		$this->db->set('birthday', $args['birth']);
		$this->db->set('mobile', $args['mobile']);
		$this->db->set('level', $args['level']);
		$this->db->set('auth_yn', $args['auth_yn']);
		return $this->db->insert('member');

//		return $this->db->insert_id();

	}

	public function modify($args)
	{
		if($args['user_pw'])	$this->db->set('user_pw', $args['user_pw']);
		if($args['auth_yn'])	$this->db->set('auth_yn', $args['auth_yn']);
		$this->db->where('user_id', $args['user_id']);
		return $this->db->update('member');
	}


	public function change_pw($args)
	{
		$this->db->set('user_pw', $args['new_pw']);
		$this->db->where('user_id', $args['user_id']);
		return $this->db->update('member');
	}

	public function delete($args)
	{
		$this->db->where('user_id', $args['user_id']);
		return $this->db->delete('member');
	}

	public function loginProcess($args)
	{
//		return $this->db->get_where('sample', array('aa'=>$args['user_id'],'bb'=>$args['user_pw']))->num_rows();
		return $this->db->get_where('member', array('user_id'=>$args['user_id'],'auth_yn'=>'Y','user_pw'=>$args['user_pw']))->row();
 	}
}

?>