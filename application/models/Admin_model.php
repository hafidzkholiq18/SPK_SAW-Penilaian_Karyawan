<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{
    public function getUser()
    {
        return $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
    }

    public function getPengguna()
    {
        return $this->db->get('user')->result_array();
    }

    public function getRole()
    {
        return  $this->db->get('role')->result_array();
    }

    public function getAlternatif()
    {
        return  $this->db->get('alternatif')->result_array();
    }

    public function getKriteria()
    {
        return $this->db->get('kriteria')->result_array();
    }


    public function getNilai()
    {
        return $this->db->get('nilai')->result_array();
    }

    public function getKecocokan()
    {
        return $this->db->get('kecocokan')->result_array();
    }
}
