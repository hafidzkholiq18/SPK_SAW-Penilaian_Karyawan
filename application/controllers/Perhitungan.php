<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Perhitungan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Perhitungan_model', 'spk');
    }
    public function hapusKecocokan($id)
    {
        $this->spk->hapusKecocokan($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Pengguna berhasil dihapus!</div>');
        redirect('admin/perhitungan');
    }
}
