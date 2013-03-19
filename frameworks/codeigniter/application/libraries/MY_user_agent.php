<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_User_agent extends CI_User_agent {

	public function __construct()
	{
		parent::__construct();
	}

	public function robots()
	{
		return $this->robots;
	}
}