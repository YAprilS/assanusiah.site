<?php
class M_pengguna extends CI_Model
{
  public function TambahData()
  {
    $email = $this->input->post('email', true);
    $pass = $this->input->post('password1', true);
    $data = [
      "name" => $this->input->post('name', true),
      "email" => ($email),
      "password" => password_hash($pass, PASSWORD_BCRYPT),
      "role_id" => $this->input->post('level', true)

    ];
    $this->db->insert('user', $data);
  }

  public function getallpengguna()
  {
    // return $this->db->get('user');
    $hsl = $this->db->query("SELECT *, DATE_FORMAT(date_created ,'%d/%m/%Y') FROM user ORDER BY role_id ASC");
    // $hsl = $this->db->query("SELECT id,name, email, password, role_id, DATE_FORMAT(date_created ,'%d/%m/%Y') FROM user ORDER BY role_id ASC");
    return $hsl;
  }

  public function deletepengguna($id)
  {
    $this->db->where('id', $id);
    $this->db->delete('user');
  }

  public function updatepass($id, $pass)
  {
    $this->db->set('password', $pass);
    $this->db->where('id', $id);
    $this->db->update('user');
  }
}
