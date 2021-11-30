<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Perhitungan_model extends CI_Model
{
    public function getJoinKecocokanAlternatif()
    {
        $getJoinKecocokanAlternatif = "SELECT `alternatif`.`id_alternatif` ,`alternatif`.`kode`, `alternatif`.`nama`, `kecocokan`.*
         FROM `kecocokan` JOIN `alternatif` ON `kecocokan`.`id_nilai` = `alternatif`.`id_alternatif` 
        WHERE `kecocokan`.`id_nilai` = `alternatif`.`id_alternatif`
        ";
        return $this->db->query($getJoinKecocokanAlternatif)->result_array();
    }

    public function MaxC1()
    {
        $queryMax = "SELECT MAX(`C1`) AS `C1` FROM `kecocokan`";
        return $this->db->query($queryMax)->row_array();
    }
    public function MaxC2()
    {
        $queryMax = "SELECT MAX(`C2`) AS `C2` FROM `kecocokan`";
        return $this->db->query($queryMax)->row_array();
    }
    public function MaxC3()
    {
        $queryMax = "SELECT MAX(`C3`) AS `C3` FROM `kecocokan`";
        return $this->db->query($queryMax)->row_array();
    }
    public function MaxC4()
    {
        $queryMax = "SELECT MAX(`C4`) AS `C4` FROM `kecocokan`";
        return $this->db->query($queryMax)->row_array();
    }

    public function MaxC5()
    {
        $queryMax = "SELECT MAX(`C5`) AS `C5` FROM `kecocokan`";
        return $this->db->query($queryMax)->row_array();
    }

    public function MaxC6()
    {
        $queryMax = "SELECT MAX(`C6`) AS `C6` FROM `kecocokan`";
        return $this->db->query($queryMax)->row_array();
    }

    public function getBobotC1()
    {
        return $this->db->get_where('kriteria', ['id_kriteria' => 1])->row_array();
    }
    public function getBobotC2()
    {
        return $this->db->get_where('kriteria', ['id_kriteria' => 2])->row_array();
    }

    public function getBobotC3()
    {
        return $this->db->get_where('kriteria', ['id_kriteria' => 3])->row_array();
    }
    public function getBobotC4()
    {
        return $this->db->get_where('kriteria', ['id_kriteria' => 4])->row_array();
    }
    public function getBobotC5()
    {
        return $this->db->get_where('kriteria', ['id_kriteria' => 5])->row_array();
    }

    public function getBobotC6()
    {
        return $this->db->get_where('kriteria', ['id_kriteria' => 6])->row_array();
    }

    public function hapusKecocokan($id)
    {
        $this->db->where('id_nilai', $id);
        $this->db->delete('kecocokan');
    }
}
