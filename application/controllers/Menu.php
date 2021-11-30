<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Menu_model', 'menu');
    }

    public function index()
    {
        $data['judul'] = 'Menu Manajemen';
        $data['namauser'] = 'Admin SPK';
        $data['user'] = $this->menu->getEmail();
        $data['menu'] = $this->menu->getMenu();

        $this->form_validation->set_rules('menu', 'Menu', 'required');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('menu/index', $data);
            $this->load->view('templates/footer');
        } else {
            $this->menu->tambahMenu();
            $this->session->set_flashdata('message', '<div align="center" class="alert alert-success" role="alert">
                                            Menu baru berhasil ditambahkan
                                            </div>');
            redirect('menu');
        }
    }

    public function editMenu()
    {
        $this->menu->editMenu();
        $this->session->set_flashdata('message', '<div align="center" class="alert alert-success" role="alert">
                                            Menu berhasil diubah!
                                            </div>');
        redirect('menu');
    }

    public function hapusMenu($id)
    {
        $this->menu->hapusMenu($id);
        $this->session->set_flashdata('message', '<div align="center" class="alert alert-success" role="alert">
                                            Menu berhasil dihapus!
                                            </div>');
        redirect('menu');
    }

    public function submenu()
    {
        $data['judul'] = 'Submenu Manajemen';
        $data['namauser'] = 'Admin SPK';
        $data['user'] = $this->menu->getEmail();
        $data['menu'] = $this->menu->getMenu();
        $data['submenu'] = $this->menu->getSubmenu();
        $data['submenu'] = $this->menu->getJoin();

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('menu_id', 'Menu', 'required');
        $this->form_validation->set_rules('url', 'URL', 'required');
        $this->form_validation->set_rules('icon', 'icon', 'required');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('menu/submenu', $data);
            $this->load->view('templates/footer');
            $this->load->view('menu/modal/modal_tambah_submenu');
            $this->load->view('menu/modal/modal_edit_submenu');
        } else {
            $this->menu->tambahSubmenu();
            $this->session->set_flashdata('message', '<div <div align="center" class="alert alert-success" role="alert">
                                            Submenu baru berhasil ditambahkan
                                            </div>');
            redirect('menu/submenu');
        }
    }

    public function editSubmenu()
    {
        $this->menu->editSubmenu();
        $this->session->set_flashdata('message', '<div align="center" class="alert alert-success" role="alert">
                                            Submenu berhasil diubah!
                                            </div>');
        redirect('menu/submenu');
    }

    public function hapusSubmenu($id)
    {
        $this->menu->hapusSubmenu($id);
        $this->session->set_flashdata('message', '<div align="center" class="alert alert-success" role="alert">
                                            Submenu berhasil dihapus!
                                            </div>');
        redirect('menu/submenu');
    }
}
