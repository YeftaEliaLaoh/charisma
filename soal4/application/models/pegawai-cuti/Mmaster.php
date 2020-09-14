<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class Mmaster extends CI_Model{
  function Mclass() {

  parent::__construct();

}

function get_cuti_pegawai()
{
    $this->db->select('karyawan.nomor_induk,karyawan.nama,
	cuti_karyawan.tanggal_mulai,cuti_karyawan.lama_cuti,cuti_karyawan.keterangan');
    $this->db->from('cuti_karyawan');
    $this->db->join('karyawan', 'cuti_karyawan.nomor_induk = karyawan.nomor_induk');
    $query = $this->db->get();
    return $query->result();
}

	
}
?>
