<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_detail extends CI_Model {
  function __construct(){
		parent::__construct();
  }

  function ambil($table,$id_laporan){
    $where = array('id_laporan'=>$id_laporan);
    return $this->db->get_where($table,$where)->result();
  }
}
