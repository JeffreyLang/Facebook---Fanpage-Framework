<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require('functions.php');

class Home extends CI_Controller {
	function index()
	{
		$data = '';
		$this->load->view('home', $data);
		
	}	
}

