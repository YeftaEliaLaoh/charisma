<?php

class Cform extends CI_Controller{
  function __construct (){
    		parent::__construct();
		$this->load->model('pegawai-cuti/mmaster');
	}
	
	function index() {
		
		$is_logged_in = $this->session->userdata('is_logged_in');
		if (!isset($is_logged_in) || $is_logged_in!= true) {
		redirect('loginform');
		}
		$data['cuti_pegawai'] = $this->mmaster->get_cuti_pegawai();

		$http = 'http' . ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') ? 's' : '') . '://';
		$newurl = str_replace("index.php","", $_SERVER['SCRIPT_NAME']);
		$data['base_url']    = "$http" . $_SERVER['SERVER_NAME'] . $newurl;
		$data['isi']	= 'pegawai-cuti/vmainform';	
		$this->load->view('template',$data);	
			
	}	
}
?>
