<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kriteria extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Kriteria_model', 'admin');
    }

    public function tambahKriteria()
    {
        $this->admin->tambahKriteria();
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Kriteria Berhasil Ditambah!</div>');
        redirect('admin/kriteria');
    }

    public function editKriteria()
    {
        $this->admin->editKriteria();
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Kriteria Berhasil Diubah!</div>');
        redirect('admin/kriteria');
    }
    public function hapusKriteria($id)
    {
        $this->admin->hapusKriteria($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Kriteria Berhasil DiHapus!</div>');
        redirect('admin/kriteria');
    }
}
