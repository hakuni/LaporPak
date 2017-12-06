<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_list extends CI_Model {
  function __construct(){
		parent::__construct();
  }

  function ambil($table,$data){
    return $this->db->get_where($table,$data);
  }
}
