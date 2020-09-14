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

function cari_cuti_pegawai($check_tanggal_cuti,$tanggal_cuti_awal,$tanggal_cuti_akhir,$check_durasi,$durasi)
{
	if($check_tanggal_cuti!= "")
		 $this->db->where("tanggal_mulai BETWEEN '". $tanggal_cuti_awal ."' AND '". $tanggal_cuti_akhir."'");
	else if($check_durasi!= "")
		 $this->db->where("lama_cuti = '".$durasi."'");
	else if($check_tanggal_lahir!= "" && $check_tanggal_masuk!= "")
		 $this->db->where("tanggal_mulai BETWEEN '". $tanggal_cuti_awal ."' AND '". $tanggal_cuti_akhir."' AND lama_cuti = '".$durasi."'");
	$this->db->from('cuti_karyawan');
    	$this->db->join('karyawan', 'cuti_karyawan.nomor_induk = karyawan.nomor_induk');
    	$query = $this->db->get();
 	return $query->result(); 
}
}
?>
