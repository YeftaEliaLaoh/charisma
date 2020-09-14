<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class Mmaster extends CI_Model{
  function Mclass() {

  parent::__construct();

}

function get_data_pegawai()
{
$this->db->select('*');
    $this->db->from('karyawan');
    $query = $this->db->get();
    
    return $query->result();
}

function insert_data_pegawai($nomor_induk,$nama,$tanggal_lahir,$tanggal_masuk,$alamat)
{
	$data_detail = array(
		'nomor_induk'=>$nomor_induk,
		'nama'=>$nama,
		'tanggal_lahir'=>$tanggal_lahir,
		'tanggal_masuk'=>$tanggal_masuk,
		'alamat'=>$alamat,
	);
	$this->db->insert('karyawan',$data_detail);
}

	function delete_data_pegawai($nomor_induk)
{
	$this->db->where('nomor_induk', $nomor_induk);
	$this->db->delete('karyawan');
}

	function cari_data_pegawai($check_tanggal_lahir,$tanggal_lahir_awal,$tanggal_lahir_akhir,$check_tanggal_masuk,$tanggal_masuk_awal,$tanggal_masuk_akhir)
{
	if($check_tanggal_lahir!= "")
		 $this->db->where("tanggal_lahir BETWEEN '". $tanggal_lahir_awal ."' AND '". $tanggal_lahir_akhir."'");
	else if($check_tanggal_masuk!= "")
		 $this->db->where("tanggal_masuk BETWEEN '". $tanggal_masuk_awal ."' AND '". $tanggal_masuk_akhir."'");
	else if($check_tanggal_lahir!= "" && $check_tanggal_masuk!= "")
		 $this->db->where("tanggal_lahir BETWEEN '". $tanggal_lahir_awal ."' AND '". $tanggal_lahir_akhir."' AND tanggal_masuk BETWEEN '". $tanggal_masuk_awal ."' AND '". $tanggal_masuk_akhir."'");
	
	$query = $this->db->get("karyawan"); 
 	return $query->result(); 
}

function update_data_pegawai($nomor_induk,$nama,$tanggal_lahir,$tanggal_masuk,$alamat)
{
	$data = [
            'nama' => $nama,
            'tanggal_lahir' => $tanggal_lahir,
            'tanggal_masuk' => $tanggal_masuk,
            'alamat' => $alamat,
        ];
        $this->db->where('nomor_induk',$nomor_induk);
        $this->db->update('karyawan', $data);

}
}
?>
