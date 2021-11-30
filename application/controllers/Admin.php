<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        sudah_login();
        //memanggil dari model
        $this->load->model('Admin_model', 'admin');
        $this->load->library('form_validation');
        $this->load->model('Kriteria_model', 'kriteria');
        $this->load->model('Alternatif_model', 'alternatif');
        $this->load->model('Nilai_alternatif_model', 'nilaiAlternatif');
        $this->load->model('Perhitungan_model', 'kecocokan');
    }

    public function index()
    {
        $data['judul'] = 'Dashboard';
        $data['nama_tabel'] = 'PT. YIG';
        $data['user'] = $this->admin->getUser();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/dashboard', $data);
        $this->load->view('templates/footer');
    }

    public function pengguna()
    {
        $data['judul'] = 'Halaman Pengguna';
        $data['nama_tabel'] = 'Tabel Pengguna';
        $data['user'] = $this->admin->getUser();

        //Tambahan1
        $data['pengguna'] = $this->admin->getUser();
        $data['role'] = $this->admin->getRole();
        // $data['user'] = $this->admin->getEmail();
        //Akhir Tambahan1
        //query
        $data['pengguna'] = $this->admin->getPengguna();
        $data['role'] = $this->admin->getRole();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/pengguna', $data);
        $this->load->view('templates/footer');
        $this->load->view('admin/modal/modal_tambah_pengguna');
        $this->load->view('admin/modal/edit/modal_edit_pengguna', $data);
    }

    public function kriteria()
    {
        $data['judul'] = 'Halaman Kriteria';
        $data['nama_tabel'] = 'Tabel Kriteria';
        $data['user'] = $this->admin->getUser();
        $data['kode'] = $this->kriteria->cekKodeKriteria();
        //query
        $data['kriteria'] = $this->admin->getKriteria();
        $data['role'] = $this->admin->getRole();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/kriteria', $data);
        $this->load->view('templates/footer');
        $this->load->view('admin/modal/modal_tambah_kriteria');
        $this->load->view('admin/modal/edit/modal_ubah_kriteria');
    }

    //  INI CONTROLLER HALAMAN KELOLA DATA ALTERNATIF
    public function alternatif()
    {
        $data['judul'] = 'Halaman Alternatif';
        $data['namaTabel'] = 'Tabel Alternatif';
        $data['user'] = $this->admin->getUser();
        $data['kode'] = $this->alternatif->cekKodeAlternatif();

        //query
        $data['alternatif'] = $this->admin->getAlternatif();
        $data['role'] = $this->admin->getRole();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/alternatif');
        $this->load->view('templates/footer');
    }

    public function addAlternatif()
    {
        $data['judul'] = 'Tambah Alternatif';
        $data['Tabel'] = 'Data Alternatif';
        $data['namaTabel'] = 'Tambah Alternatif';
        $data['user'] = $this->admin->getUser();
        $data['kode'] = $this->alternatif->cekKodeAlternatif();

        //query
        $data['alternatif'] = $this->admin->getalternatif();
        $data['role'] = $this->admin->getRole();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/modal/modal_tambah_alternatif', $data);
        $this->load->view('templates/footer');
    }

    public function editAlternatif()
    {
        $data['judul'] = 'Edit Alternatif';
        $data['Tabel'] = 'Data Alternatif';
        $data['namaTabel'] = 'Ubah Alternatif';
        $data['user'] = $this->admin->getUser();
        $data['kode'] = $this->alternatif->cekKodeAlternatif();

        //query
        $data['alternatif'] = $this->admin->getalternatif();
        $data['role'] = $this->admin->getRole();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/modal/edit/modal_edit_alternatif', $data);
        $this->load->view('templates/footer');
    }

    public function Nilai_Alternatif()
    {

        $data['judul'] = 'Nilai Alternatif';
        $data['Tabel'] = 'Nilai Bobot Alternatif';
        $data['namaTabel'] = 'Ubah Alternatif';
        $data['user'] = $this->admin->getUser();
        $data['kriteria'] = $this->admin->getKriteria();
        $data['nilai'] = $this->nilaiAlternatif->getJoinNilaiAlternatif();



        $data['alternatif'] = $this->admin->getalternatif();
        $data['role'] = $this->admin->getRole();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/nilai_alternatif');
        $this->load->view('templates/footer');
        $this->load->view('admin/modal/modal_nilai_alternatif');
    }
    //  INI CONTROLLER AKHIR DARI HALAMAN KELOLA DATA ALTERNATIF


    //INI ADALAH AWAL COPNTROLLER PERHITUNGAN SAW
    public function perhitungan()
    {
        $data['judul'] = 'Perhitungan SAW';
        $data['Tabel1'] = 'Rating Kecocokan';
        $data['Tabel2'] = 'Hasil Normalisasi';
        $data['Tabel3'] = 'Ranking';
        $data['user'] = $this->admin->getUser();
        $data['kecocokan'] = $this->admin->getKecocokan();
        $data['kecocokan'] = $this->kecocokan->getJoinKecocokanAlternatif();
        $data['MaxC1'] = $this->kecocokan->MaxC1();
        $data['MaxC2'] = $this->kecocokan->MaxC2();
        $data['MaxC3'] = $this->kecocokan->MaxC3();
        $data['MaxC4'] = $this->kecocokan->MaxC4();
        $data['MaxC5'] = $this->kecocokan->MaxC5();
        $data['MaxC6'] = $this->kecocokan->MaxC6();
        $data['BobotC1'] = $this->kecocokan->getBobotC1();
        $data['BobotC2'] = $this->kecocokan->getBobotC2();
        $data['BobotC3'] = $this->kecocokan->getBobotC3();
        $data['BobotC4'] = $this->kecocokan->getBobotC4();
        $data['BobotC5'] = $this->kecocokan->getBobotC5();
        $data['BobotC6'] = $this->kecocokan->getBobotC6();
        //query
        $data['alternatif'] = $this->admin->getalternatif();
        $data['role'] = $this->admin->getRole();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/perhitungan');
        $this->load->view('templates/footer');
    }

    public function Laporan()
    {

        $data['judul'] = 'Laporan';
        $data['Tabel'] = 'Laporan Penilaian Kinerja';
        $data['user'] = $this->admin->getUser();
        $data['pengguna'] = $this->admin->getPengguna();

        $data['role'] = $this->admin->getRole();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/laporan');
        $this->load->view('templates/footer');
    }

    public function Barang()
    {

        $data['user'] = $this->admin->getUser();
        $data['pengguna'] = $this->admin->getPengguna();

        $data['role'] = $this->admin->getRole();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/barang');
        $this->load->view('templates/footer');
    }


}
