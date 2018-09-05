<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

include_once(FCPATH.'vendor/autoload.php');
use Firebase\JWT\JWT;


class Jwt_lib
{

    private $CI;

    function __construct() {

        $this->CI =& get_instance();
		$this->secret_key = md5("axissoft7173450");
    }

    function token_encode($token) {
		if($token){

//			$issuedAt = time();
//			$expire = $issuedAt + (60 * 60 * 24);

//			$param = array(
//				'USER_ID' => $token["USER_ID"],
//				'USER_NM' => $token["USER_NM"],
//				'exp' => $expire
//			);

			$jwt = JWT::encode($token, $this->secret_key);
		}

		return $jwt;

    }

    function token_decode($token) {

		if($token){
			$decode = JWT::decode($token, $this->secret_key, ['HS256']);
//			echo "<pre>"; print_r(date("Y-m-d H:i:s", $decode->exp)); echo "</pre>";
//			$this->CI->db->where("user_id", $decode->USER_ID);
//			$record = $this->CI->db->get("member")->row_array();
//			echo "<pre>"; print_r($record); echo "</pre>";

//			$data = array();
//			if($record){
//				$data["user_id"] = $record['user_id'];
//				$data["user_nm"] = $record['name'];
//			}
		}

		return $decode;
//		return $data;

    }

}

/* End of file Someclass.php */
