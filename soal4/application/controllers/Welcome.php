<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{		
		if ($this->session->userdata('nomor_induk')!= "0") 
		{
			$data['isi'] = 'tengah';
			$http = 'http' . ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') ? 's' : '') . '://';
			$newurl = str_replace("index.php","", $_SERVER['SCRIPT_NAME']);
			$data['base_url']    = "$http" . $_SERVER['SERVER_NAME'] . $newurl;
			$this->load->view('template',$data);
		}
		else
			redirect('loginform');
	}
}
