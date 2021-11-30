<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Nilai_alternatif_model extends CI_Model

{

    public function getJoinNilaiAlternatif()
    {
        $queryNilaialternatif = "SELECT `alternatif`.`id_alternatif` ,`alternatif`.`kode`, `alternatif`.`nama`, `nilai`.* 
        FROM `nilai` JOIN `alternatif` ON `nilai`.`id_nilai` = `alternatif`.`id_alternatif` 
        WHERE `nilai`.`id_nilai` = `alternatif`.`id_alternatif`
        ";
        return $this->db->query($queryNilaialternatif)->result_array();
    }

    public function NilaiAlternatif()
    {
        $id_alternatif = $this->input->post('id_alternatif');
        $c1 = $this->input->post('C1');
        $c2 = $this->input->post('C2');
        $c3 = $this->input->post('C3');
        $c4 = $this->input->post('C4');
        $c5 = $this->input->post('C5');
        $c6 = $this->input->post('C6');

        $data = [
            'id_alternatif' => $id_alternatif,
            'C1' => $c1,
            'C2' => $c2,
            'C3' => $c3,
            'C4' => $c4,
            'C5' => $c5,
            'C6' => $c6
        ];

        $this->db->where('id_nilai', $this->input->post('id_nilai'));
        $this->db->update('nilai', $data);


        $C1 = $this->KecocokanKC1($c1);
        $C2 = $this->KecocokanKC1($c2);
        $C3 = $this->KecocokanKC1($c3);
        $C4 = $this->KecocokanKC1($c4);
        $C5 = $this->KecocokanKC1($c5);
        $C6 = $this->KecocokanKC1($c6);
        $data = [

            'C1' => $C1,
            'C2' => $C2,
            'C3' => $C3,
            'C4' => $C4,
            'C5' => $C5,
            'C6' => $C6
        ];
        $this->db->where('id_alternatif',  $id_alternatif);
        $this->db->update('kecocokan', $data);
    }


    public function KecocokanKC1($c1)
    {
        if ($c1 === 'Sangat Baik') {
            $c1 = 0.40;
        } elseif ($c1 === 'Baik') {
            $c1 = 0.25;
        } elseif ($c1 === 'Cukup') {
            $c1 = 0.20;
        } else {
            $c1 = 0.10;
        }
        return $c1;
    }

    public function KecocokanKC2($c2)
    {
        if ($c2 === 'Sangat Baik') {
            $c2 = 0.40;
        } elseif ($c2 === 'Baik') {
            $c2 = 0.25;
        } elseif ($c2 === 'Cukup') {
            $c2 = 0.20;
        } else {
            $c2 = 0.10;
        }
        return $c2;
    }

    public function KecocokanKC3($c3)
    {
        if ($c3 === 'Sangat Baik') {
            $c3 = 0.40;
        } elseif ($c3 === 'Baik') {
            $c3 = 0.25;
        } elseif ($c3 === 'Cukup') {
            $c3 = 0.20;
        } else {
            $c3 = 0.10;
        }
        return $c3;
    }

    public function KecocokanKC4($c4)
    {
        if ($c4 === 'Sangat Baik') {
            $c4 = 0.40;
        } elseif ($c4 === 'Baik') {
            $c4 = 0.25;
        } elseif ($c4 === 'Cukup') {
            $c4 = 0.20;
        } else {
            $c4 = 0.10;
        }
        return $c4;
    }

    public function KecocokanKC5($c5)
    {
        if ($c5 === 'Sangat Baik') {
            $c5 = 0.40;
        } elseif ($c5 === 'Baik') {
            $c5 = 0.25;
        } elseif ($c5 === 'Cukup') {
            $c5 = 0.20;
        } else {
            $c5 = 0.10;
        }
        return $c5;
    }

    public function KecocokanKC6($c6)
    {
        if ($c6 === 'Sangat Baik') {
            $c6 = 0.40;
        } elseif ($c6 === 'Baik') {
            $c6 = 0.25;
        } elseif ($c6 === 'Cukup') {
            $c6 = 0.20;
        } else {
            $c6 = 0.10;
        }
        return $c6;
    }

     

}
