<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Alternatif extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Alternatif_model', 'alternatif');
        $this->load->model('Admin_model', 'admin');

        $this->load->library('form_validation');
    }
    public function tambahAlternatif()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        //cek jika ada gambar yang di akan diupload
        $gambar = $_FILES['image']['name'];
        if ($gambar = '') {
            # code...
        } else {
            $config['upload_path']          = './assets/images/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']             = 2048;
            $config['max_width']            = 8000;
            $config['max_height']           = 9000;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('image')) {
                echo "Gagal";
            } else {
                $this->alternatif->tambahAlternatif();
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Pengguna Berhasil ditambahkan!</div>');
                redirect('admin/alternatif');
            }
        }
        $this->admin->tambahAlternatif();
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">alternatif Berhasil Ditambah!</div>');
        redirect('admin/alternatif');
    }

    public function edit($id)
    {
        $data['judul'] = 'Form Edit Alternatif';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['alternatif'] = $this->alternatif->getAlternatifById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/modal/edit/modal_edit_alternatif', $data);
        $this->load->view('templates/footer');
    }

    public function editAlternatif()
    {

        $data['alternatif'] = $this->alternatif->getAlternatif();
        // cek jika ada gambar yang akan diupload
        $upload_image = $_FILES['image']['name'];
        if ($upload_image) {
            $config['upload_path']          = './assets/images/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']             = 4096;
            $config['max_width']            = 8000;
            $config['max_height']           = 9000;
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('image')) {
                // $old_image = $data['alternatif']['image'];
                // if ($old_image != 'user.png') {
                //     unlink(FCPATH . 'assets/images/' . $old_image);
                // }
                $new_image = $this->upload->data('file_name');
                //insert image ke tbl user pada kolom image
                $this->db->set('image', $new_image);
            } else {
                echo $this->upload->dispay_errors();
            }
        }
        //query ke db
        $this->alternatif->editAlternatif();
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">alternatif Berhasil Diubah!</div>');
        redirect('admin/alternatif');
    }

    public function hapusAlternatif($id)
    {
        $this->alternatif->hapusAlternatif($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Kriteria Berhasil Dihapus!</div>');
        redirect('admin/alternatif');
    }
}
