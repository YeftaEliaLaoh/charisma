<?php

class Cform extends CI_Controller{
  function __construct (){
    		parent::__construct();
		$this->load->model('pegawai-data/mmaster');
	}
	
	function index() {
		
		$is_logged_in = $this->session->userdata('is_logged_in');
		if (!isset($is_logged_in) || $is_logged_in!= true) {
		redirect('loginform');
		}
		$data['data_pegawai'] = $this->mmaster->get_data_pegawai();

		$http = 'http' . ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') ? 's' : '') . '://';
		$newurl = str_replace("index.php","", $_SERVER['SCRIPT_NAME']);
		$data['base_url']    = "$http" . $_SERVER['SERVER_NAME'] . $newurl;
		$data['isi']	= 'pegawai-data/vmainform';	
		$this->load->view('template',$data);	
			
	}

	function show_popup_pegawai(){

	$is_logged_in = $this->session->userdata('is_logged_in');
		if (!isset($is_logged_in) || $is_logged_in!= true) {
			redirect('loginform');
		}

	$http = 'http' . ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') ? 's' : '') . '://';
	$newurl = str_replace("index.php","", $_SERVER['SCRIPT_NAME']);
	$data['base_url']    = "$http" . $_SERVER['SERVER_NAME'] . $newurl;
	$this->load->view('pegawai-data/vaddpopup',$data);

  	}

	function insert_pegawai(){

	$is_logged_in = $this->session->userdata('is_logged_in');
		if (!isset($is_logged_in) || $is_logged_in!= true) {
			redirect('loginform');
		}
		$nomor_induk 	= $this->input->post('nomor_induk', TRUE);  
		$nama 	= $this->input->post('nama', TRUE);  
		$tanggal_lahir 	= $this->input->post('tanggal_lahir', TRUE);  
		$tanggal_masuk 	= $this->input->post('tanggal_masuk', TRUE);  
		$alamat 	= $this->input->post('alamat', TRUE);
  
	$this->mmaster->insert_data_pegawai($nomor_induk,$nama,$tanggal_lahir,$tanggal_masuk,$alamat);
	$http = 'http' . ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') ? 's' : '') . '://';
	$newurl = str_replace("index.php","", $_SERVER['SCRIPT_NAME']);
	$data['base_url']    = "$http" . $_SERVER['SERVER_NAME'] . $newurl;
	$this->load->view('pegawai-data/vaddpopup',$data);

  	}

	function delete(){

	$is_logged_in = $this->session->userdata('is_logged_in');
		if (!isset($is_logged_in) || $is_logged_in!= true) {
			redirect('loginform');
		}
	$nomor_induk 	= $this->uri->segment(4);
  
	$this->mmaster->delete_data_pegawai($nomor_induk);
	$data['data_pegawai'] = $this->mmaster->get_data_pegawai();

	$http = 'http' . ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') ? 's' : '') . '://';
	$newurl = str_replace("index.php","", $_SERVER['SCRIPT_NAME']);
	$data['base_url']    = "$http" . $_SERVER['SERVER_NAME'] . $newurl;
	$data['isi']	= 'pegawai-data/vmainform';	
	$this->load->view('template',$data);	

  	}	

  function cari(){
	  $is_logged_in = $this->session->userdata('is_logged_in');
		if (!isset($is_logged_in) || $is_logged_in!= true) {
			redirect('loginform');
		}
	
	$check_tanggal_lahir 	= $this->input->post('check_tanggal_lahir', TRUE); 
	$tanggal_lahir_awal 	= $this->input->post('tanggal_lahir_awal', TRUE);  
	$tanggal_lahir_akhir 	= $this->input->post('tanggal_lahir_akhir', TRUE);  
	$check_tanggal_masuk 	= $this->input->post('check_tanggal_masuk', TRUE);  
	$tanggal_masuk_awal 	= $this->input->post('tanggal_masuk_awal', TRUE);  
	$tanggal_masuk_akhir 	= $this->input->post('tanggal_masuk_akhir', TRUE);  

	$data['data_pegawai'] = $this->mmaster->cari_data_pegawai($check_tanggal_lahir,$tanggal_lahir_awal,$tanggal_lahir_akhir,$check_tanggal_masuk,$tanggal_masuk_awal,$tanggal_masuk_akhir);
	$http = 'http' . ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') ? 's' : '') . '://';
	$newurl = str_replace("index.php","", $_SERVER['SCRIPT_NAME']);
	$data['base_url']    = "$http" . $_SERVER['SERVER_NAME'] . $newurl;
	$data['isi']	= 'pegawai-data/vmainform';	
	$this->load->view('template',$data);
  }

function edit_pegawai(){

	$is_logged_in = $this->session->userdata('is_logged_in');
		if (!isset($is_logged_in) || $is_logged_in!= true) {
			redirect('loginform');
		}
		
	$http = 'http' . ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') ? 's' : '') . '://';
	$newurl = str_replace("index.php","", $_SERVER['SCRIPT_NAME']);
	$data['base_url']    = "$http" . $_SERVER['SERVER_NAME'] . $newurl;
	$this->load->view('pegawai-data/veditpopup',$data);

  	}

function update_pegawai(){

	$is_logged_in = $this->session->userdata('is_logged_in');
		if (!isset($is_logged_in) || $is_logged_in!= true) {
			redirect('loginform');
		}

	$nomor_induk 	= $this->uri->segment(4);
	$nama 	= $this->input->post('nama', TRUE);  
	$tanggal_lahir 	= $this->input->post('tanggal_lahir', TRUE);  
	$tanggal_masuk 	= $this->input->post('tanggal_masuk', TRUE);  
	$alamat 	= $this->input->post('alamat', TRUE);

	$this->mmaster->update_data_pegawai($nomor_induk,$nama,$tanggal_lahir,$tanggal_masuk,$alamat);
	$http = 'http' . ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') ? 's' : '') . '://';
	$newurl = str_replace("index.php","", $_SERVER['SCRIPT_NAME']);
	$data['base_url']    = "$http" . $_SERVER['SERVER_NAME'] . $newurl;
	$this->load->view('pegawai-data/veditpopup',$data);	

  	}

}
?>
