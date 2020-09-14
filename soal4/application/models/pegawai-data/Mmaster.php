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

	
}
?>
