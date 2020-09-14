<?php

class Loginform extends CI_Controller {

  	function __construct ()
	{
		parent::__construct();	
	}
	
	function index()
	{

		$status = $this->uri->segment(3);
		if ($status == 'f')
		{
			$data['pesan'] = "Login gagal. Username/password yang anda masukkan tidak valid";
}
		else
			$data['pesan'] = "";
		$this->load->view('loginform', $data);
	
	}
}
