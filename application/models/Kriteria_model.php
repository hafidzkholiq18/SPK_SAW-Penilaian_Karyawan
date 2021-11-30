<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kriteria_model extends CI_Model

{

  public function cekKodeKriteria()
  {
    $query = $this->db->query("SELECT MAX(kode) as max_id from kriteria");
    $rows = $query->row();
    $kode = $rows->max_id;
    $noUurut = (int) substr($kode, 2, 2);
    $noUurut++;
    $char = "C";
    $kode = $char . sprintf("%02s", $noUurut);
    return $kode;
  }

  public function tambahKriteria()
  {
    $Kode = $this->cekKodeKriteria();
    $data = [
      'kode' => $this->input->post('kode', true),
      'nama_kriteria' => $this->input->post('nama_kriteria', true),
      'atribut' => $this->input->post('atribut', true),
      'bobot' => $this->input->post('bobot', true)
    ];
    //query ke insert ke db
    $this->db->insert('kriteria', $data);
  }

  public function editKriteria()
  {
    $id = $this->input->post('id');
    $data = [
      "kode" => $this->input->post('kode'),
      "nama_kriteria" => $this->input->post('nama_kriteria'),
      "atribut" => $this->input->post('atribut'),
      "bobot" => $this->input->post('bobot')
    ];
    $this->db->where('id_kriteria', $id);
    $this->db->update('kriteria', $data);
  }

  public function hapusKriteria($id)
  {
    $this->db->where('id_kriteria', $id);
    $this->db->delete('kriteria');
  }
}
