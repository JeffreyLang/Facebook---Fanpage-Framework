<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require('functions.php');

class fb_like_page extends CI_Controller {
 
 	 	
	function index()
	{
		$data = '';
		$this->load->view('fb_like_page', $data);
		
	}
	
	
	
	
	

}

