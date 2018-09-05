<?php
class Setting_m extends CI_Model{
	function __construct()
	{
			parent::__construct();
	}

	public function market_config_view() {
			//$this->db->where('');
			return $this->db->get('tb_market_conf')->row();
	}

	public function market_config_insert($args) {
		return $this->db->replace('tb_market_conf', $args);
	}

	public function searchMemberInfo($args) {
			$this->db->like($args['searchid'], $args['searchtxt'])->limit($args['perpage'], $args['curpage'])->order_by('regdate', 'DESC');
			return $this->db->get('member')->result();
	}

	public function get_total_row($args)
	{
			$result = null;
			$result = $this->db->like($args['searchid'], $args['searchtxt'])->get('member')->num_rows();

			return $result;
	}

}