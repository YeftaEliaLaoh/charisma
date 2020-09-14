<?php

class Cform extends CI_Controller{
  function __construct (){
    parent::__construct();
    $this->load->library('pagination');
    $this->load->model('users-login/mmaster');
  }

  function proseslogin()
	{			
			$email 	= $this->input->post('email', TRUE);
			$password 	= $this->input->post('password', TRUE);

			$cek_login = $this->mmaster->cek_login($email, $password);

			if (is_array($cek_login)) 
			{

				if ($cek_login[0]['nomor_induk']!= "0") 
				{
		
				$session = array('nomor_induk'=> $cek_login[0]['nomor_induk'],
						'nama'=> $cek_login[0]['nama'],
						'is_logged_in'=> true
							);
				$this->session->set_userdata($session);

				redirect('welcome');

				}
				else
				redirect('loginform/index/f');
			}
			else
			redirect('loginform/index/f');
	}
	
	function logout() {
		$this->session->sess_destroy();
		redirect('loginform');  
	}
}
