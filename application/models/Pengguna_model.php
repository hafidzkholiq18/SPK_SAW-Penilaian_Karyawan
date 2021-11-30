<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengguna_model extends CI_Model
{

  public function tambahPengguna()
  {
    $data = [
      'nama' => $this->input->post('nama', true),
      'email' => $this->input->post('email', true),
      'password' => password_hash('12345', PASSWORD_DEFAULT),
      'image' => $this->upload->data('file_name'),
      'role_id' => $this->input->post('role_id', true),
      'is_active' => $this->input->post('is_active', true),
      'date_created' => $this->input->post('date_created', true)
    ];
    //querynya
    $this->db->insert('user', $data);
  }

  public function editPengguna()
  {
    $data = [
      'nama' => $this->input->post('nama'),
      'email' => $this->input->post('email'),
      'role_id' => $this->input->post('role_id'),
      'is_active' => $this->input->post('is_active'),
      'date_created' => $this->input->post('date_created')
    ];
    $this->db->where('id', $this->input->post('id'));
    $this->db->update('user', $data);
  }

  public function hapusPengguna($id)
  {
    $this->db->where('id', $id);
    $this->db->delete('user');
  }
}
