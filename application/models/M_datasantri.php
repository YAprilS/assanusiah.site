<?php
class M_datasantri extends CI_Model
{

  public function getdatasantri()
  {
    // return $this->db->get('pendaftaran');
    $hsl = $this->db->query("SELECT * FROM pendaftaran ORDER BY id DESC");
    return $hsl;
  }

  public function getdatabyid($id)
  {
    $this->db->where('id', $id);
    return $this->db->get('pendaftaran');
  }

  public function deletedatasantri($id)
  {
    $this->db->where('id', $id);
    $this->db->delete('pendaftaran');
  }

  public function delall()
  {
    $this->db->empty_table('pendaftaran');
  }
}