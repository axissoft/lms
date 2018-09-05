<?php
defined('BASEPATH') OR exit('No direct script access allowed');



if ( ! function_exists('make_code'))
{
	function make_code($type = 'L')
	{
		$header = $type;
		$middle = date("ym");
		$bottom = random_num(4);

		return $header.$middle.$bottom;
	}
}

if ( ! function_exists('random_num'))
{
	function random_num($len = 0)
	{
		$pool = '0123456789';
		return substr(str_shuffle(str_repeat($pool, ceil($len / strlen($pool)))), 0, $len);
	}
}