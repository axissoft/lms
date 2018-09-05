<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	/*
	 *  PHP 7.2 (UTF-8)
	 */
	class Axcrypto
	{
		const STRENCRYPTER_BLOCK_SIZE = 16 ;	// 16 bytes

		public function __construct ($set = array('key'=>'axissoft'))
		{
			$this->key = md5 ($set['key'], TRUE) ;
			$this->initialVector = md5 ("starplayer", TRUE) ;
		}

		public function encrypt ($value)
		{
			if ( is_null ($value) )
				$value = "" ;

			if ( !is_string ($value) )
				throw new Exception ("A non-string value can not be encrypted.") ;

			// Encrypt the value.\
			$output = openssl_encrypt($value, 'AES-128-CBC', $this->key, OPENSSL_RAW_DATA, $this->initialVector);

			// Return a base64 encoded string of the encrypted value.
			return base64_encode ($output) ;
		}

		public function decrypt ($value)
		{
			if ( !is_string ($value) or $value == "" )
				throw new Exception ("The cipher string must be a non-empty string.") ;

			// Decode base64 encoding.
			$value = base64_decode ($value) ;

			// Decrypt the value.
			$output = openssl_decrypt($value, 'AES-128-CBC', $this->key, OPENSSL_RAW_DATA, $this->initialVector);

			// Strip padding and return.
			return $output ;
		}
	}
?>