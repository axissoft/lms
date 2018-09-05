<?php

class Member_m extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }


    public function member_list($args)
    {
        $this->db->like($args['searchid'], $args['searchtxt'])->limit($args['perpage'], $args['curpage'])->order_by('regdate', 'DESC');
        return $this->db->get('member')->result();
    }

    public function member_modify($args)
    {
        $this->db->set('name', $args['name']);
        $this->db->set('email', $args['email']);
        $this->db->set('mobile', $args['mobile']);
        $this->db->set('birthday', $args['birthday']);
        $this->db->set('ulevel', $args['ulevel']);
        $this->db->set('moddate', $args['moddate']);
        return $this->db->update('member', NULL, array('uid' => $args['uid']));
    }


    public function member_view($args)
    {
        return $this->db->get_where('member', array("uid" => $args['uid']))->row();
    }

    public function get_total_row($args)
    {
        $result = null;
        $result = $this->db->like($args['searchid'], $args['searchtxt'])->get('member')->num_rows();

        return $result;
    }

}

?>