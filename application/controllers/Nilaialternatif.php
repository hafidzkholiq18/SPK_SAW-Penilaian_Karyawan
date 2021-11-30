<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Nilaialternatif extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Nilai_alternatif_model', 'admin');
        $this->load->model('Alternatif_model', 'alternatif');
    }

    public function NilaiAlternatif()
    {
        $this->admin->NilaiAlternatif();
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Nilai Alternatif Berhasil!</div>');
        redirect('admin/nilai_alternatif');
    }
}
