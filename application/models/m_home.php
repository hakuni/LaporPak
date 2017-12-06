<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_home extends CI_Model {
  function __construct(){
		parent::__construct();
  }
 
  function ambil($table){
    return $this->db->limit('4')->order_by('tanggal', 'ASC')->get($table)->result();
  }
}
