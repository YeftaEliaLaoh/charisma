<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class Mmaster extends CI_Model{
  function Mclass() {

  parent::__construct();

}
        
  function cek_login($email, $password){
    $this->db->select("nomor_induk, nama from karyawan WHERE email = '$email' AND password = '$password' ", false);
    $query = $this->db->get();
    if ($query->num_rows() == 1){
		$hasil = $query->result();
		foreach ($hasil as $row1) {
				$data_login[] = array(	'nomor_induk'=> $row1->nomor_induk,'nama'=> $row1->nama );
		} // endforeach header
	}
	else{
		$data_login = '';
	}

	return $data_login;
  }

}

