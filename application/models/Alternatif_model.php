<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Alternatif_model extends CI_Model
{

    public function getAlternatifById($id)
    {
        return $this->db->get_where('alternatif', ['id_alternatif' => $id])->row_array();
    }
    public function getAlternatif()
    {
        return $this->db->get('alternatif')->result_array();
    }

    public function cekKodeAlternatif()
    {
        $query = $this->db->query("SELECT MAX(kode) as max_id from alternatif");
        $rows = $query->row();
        $kode = $rows->max_id;
        $noUurut = (int) substr($kode, 2, 2);
        $noUurut++;
        $char = "A";
        $kode = $char . sprintf("%02s", $noUurut);
        return $kode;
    }

    public function tambahAlternatif()
    {
        $Kode = $this->cekKodeAlternatif();
        $data = [
            'kode' => $this->input->post('kode', true),
            'nama' => $this->input->post('nama'),
            'email' => $this->input->post('email'),
            'jabatan' => $this->input->post('jabatan'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'tempat_lahir' => $this->input->post('tempat_lahir'),
            'tgl_lahir' => $this->input->post('tgl_lahir'),
            'alamat' => $this->input->post('alamat'),
            'image' => $this->upload->data('file_name')
        ];
        //Query masukkan data ke db alternatif
        $this->db->insert('alternatif', $data);
        $id_alternatif = $this->db->insert_id();
        $data2 = [
            'id_alternatif' => $id_alternatif
        ];
        $this->db->insert('nilai', $data2);
        $this->db->insert('kecocokan', $data2);
    }

    public function editAlternatif()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'email' => $this->input->post('email'),
            'jabatan' => $this->input->post('jabatan'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'tempat_lahir' => $this->input->post('tempat_lahir'),
            'tgl_lahir' => $this->input->post('tgl_lahir'),
            'alamat' => $this->input->post('alamat')
        ];
        $this->db->where('id_alternatif', $this->input->post('id_alternatif'));
        $this->db->update('alternatif', $data);
    }
    public function hapusAlternatif($id)
    {
        $this->db->where('id_alternatif', $id);
        $this->db->delete('alternatif');
    }
}
