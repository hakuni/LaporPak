<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_home extends CI_Model {
  function __construct(){
		parent::__construct();
  }

  function ambil($table){
    return $this->db->limit('4')->order_by('tanggal', 'DESC')->get($table)->result();
  }

  function ambil_p($table){
    return $this->db->limit('1')->order_by('create_when', 'DESC')->get($table)->result();
  }
}
