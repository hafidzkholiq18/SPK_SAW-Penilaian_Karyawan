<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
  public function editProfil()
  {
    $nama = htmlspecialchars($this->input->post('nama', true));
    $email = htmlspecialchars($this->input->post('email', true));
    //query insert data ke tbl user
    $this->db->set('nama', $nama);
    $this->db->where('email', $email);
    $this->db->update('user');
  }
  public function ubahPassword($password_hash)
  {
    $this->db->set('password', $password_hash);
    $this->db->where('email', $this->session->userdata('email'));
    $this->db->update('user');
  }
}
