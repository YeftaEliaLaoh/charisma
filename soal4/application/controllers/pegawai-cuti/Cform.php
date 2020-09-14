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
	 function cari(){
		  $is_logged_in = $this->session->userdata('is_logged_in');
			if (!isset($is_logged_in) || $is_logged_in!= true) {
				redirect('loginform');
			}
	
		$check_tanggal_cuti 	= $this->input->post('check_tanggal_cuti', TRUE); 
		$tanggal_cuti_awal 	= $this->input->post('tanggal_cuti_awal', TRUE);  
		$tanggal_cuti_akhir 	= $this->input->post('tanggal_cuti_akhir', TRUE);  
		$check_durasi 		= $this->input->post('check_durasi', TRUE);  
		$durasi 		= $this->input->post('durasi', TRUE);  

		$data['cuti_pegawai'] = $this->mmaster->cari_cuti_pegawai($check_tanggal_cuti,$tanggal_cuti_awal,$tanggal_cuti_akhir,$check_durasi,$durasi);
		$http = 'http' . ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') ? 's' : '') . '://';
		$newurl = str_replace("index.php","", $_SERVER['SCRIPT_NAME']);
		$data['base_url']    = "$http" . $_SERVER['SERVER_NAME'] . $newurl;
		$data['isi']	= 'pegawai-cuti/vmainform';	
		$this->load->view('template',$data);
	  }
}
?>
