<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_list extends CI_Model {
  function __construct(){
		parent::__construct();
  }

  function jumlah_data(){
    return $this->db->get('laporan')->num_rows();
  }

  function data($number, $offset){
    return $query = $this->db->order_by('tanggal','DESC')->get('laporan',$number,$offset)->result();
  }
}
