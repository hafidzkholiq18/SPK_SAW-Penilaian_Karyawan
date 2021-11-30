<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Auth_model', 'auth');
    }
    //ketika url di enter maka index akan kehalaman login
    public function index()
    {
        if ($this->session->userdata('email')) {
            redirect('admin');
        }
        //form validasi login
        $this->form_validation->set_rules('Email', 'Email', 'required|trim');
        $this->form_validation->set_rules('Password', 'password1', 'trim|required');
        //jika salah, kembalikan error ke login 
        if ($this->form_validation->run() == false) {
            $data['judul'] = 'Login Page';
            $this->load->view('auth/login', $data);
        } else {
            //method loginnya
            $this->_login();
        }
    }

    //jika login lolos maka arahkan sesuai role id nya 1 untuk admin 2 untuk pimpinan
    private function _login()
    {
        $email = $this->input->post('Email');
        $password = $this->input->post('Password');
        //jika userna ada, ambil dari tabel user di db
        $user = $this->auth->getuser($email);
        //pengecekan ada atau tidak user di tabel user database
        if ($user) {
            if ($user['is_active'] == 1) {
                //cek password 
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'email' => $user['email'],
                        'role_id' => $user['role_id']
                    ];
                    $this->session->set_userdata($data);
                    //jika role 1 oper ke dashboard admin
                    if ($user['role_id'] == 1) {
                        redirect('admin');
                    } else {
                        redirect('pimpinan');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password Salah</div>');
                    redirect('auth');
                }
                //email belum diverifikasi 
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email belum diverifikasi</div>');
                redirect('auth');
            }
            //email tidak terdaftar
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email belum terdaftar</div>');
            redirect('auth');
        }
    }

    public function daftar()
    {
        //form validasi
        $this->form_validation->set_rules('Username', 'username', 'required|trim');
        $this->form_validation->set_rules('Email', 'email', 'required|trim|valid_email');
        $this->form_validation->set_rules('Password1', 'password', 'required|trim|min_length[3]|matches[Password2]', ['matches' => 'Password tidak sesuai!', 'min_length' => 'Password kurang panjang!']);
        $this->form_validation->set_rules('Password2', 'password', 'required|trim|matches[Password1]');
        //jika form validasi gagal kembalikan kehalaman registrasi
        if ($this->form_validation->run() == false) {
            $data['judul'] = 'Register Page';
            $this->load->view('auth/daftar', $data);
        } //jika validasi sukses, tampung data inputan untuk diinsert ke database tabel user  
        else {
            $data = [
                'nama' => htmlspecialchars($this->input->post('Username', true)),
                'email' => htmlspecialchars($this->input->post('Email', true)),
                'image' => 'default.jpg',
                'password' => password_hash($this->input->post('Password1'), PASSWORD_DEFAULT),
                'role_id' => 2,
                'is_active' => 1,
                'date_created' => time()
            ];
            //query ke db
            $this->db->insert('user', $data);
            //popup jika sudah berhasil
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Selamat Anda Berhasil</div>');
            redirect('auth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Anda Berhasil Logout</div>');
        redirect('auth');
    }

    public function block()
    {
        $data['judul'] = 'Akses Tidak Diizinkan';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('auth/block', $data);
    }
}
