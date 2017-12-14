<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_grafik extends CI_Model{
    function get_data_user(){
        $query = $this->db->query("SELECT MONTH(create_when) AS bulan, COUNT(no_KTP) AS jumlah FROM user GROUP BY MONTH(create_when)");

        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
}
