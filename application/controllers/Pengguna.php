<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengguna extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pengguna_model', 'admin');
    }
    public function tambahPengguna()
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
                $this->admin->tambahPengguna();
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Pengguna berhasil ditambahkan!</div>');
                redirect('admin/pengguna');
            }
        }
        $this->admin->tambahPengguna($data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Data Berhasil Ditambhakan!
        </div>');
        redirect('admin/pengguna');
    }

    public function editPengguna()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        // cek jika ada gambar yang akan diupload
        $upload_image = $_FILES['image']['name'];
        if ($upload_image) {
            $config['upload_path']          = './assets/images/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']             = 2048;
            $config['max_width']            = 8000;
            $config['max_height']           = 9000;
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('image')) {
                $old_image = $data['user']['image'];
                if ($old_image != 'user.png') {
                    unlink(FCPATH . 'assets/images/' . $old_image);
                }
                $new_image = $this->upload->data('file_name');
                //insert image ke tbl user pada kolom image
                $this->db->set('image', $new_image);
            } else {
                echo $this->upload->dispay_errors();
            }
        }
        $this->admin->editPengguna();
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Pengguna berhasil diubah!</div>');
        redirect('admin/pengguna');
    }

    public function hapusPengguna($id)
    {
        $this->admin->hapusPengguna($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Pengguna berhasil dihapus!</div>');
        redirect('admin/pengguna');
    }
}
