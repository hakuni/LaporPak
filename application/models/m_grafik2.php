<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_grafik2 extends CI_Model{

    function get_data_charlapor(){
        $query = $this->db->query("SELECT MONTH(tanggal) AS bulan2 ,COUNT(status) AS status FROM laporan GROUP BY MONTH(tanggal)");

        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil2[] = $data;
            }
            return $hasil2;
        }
    }

}
