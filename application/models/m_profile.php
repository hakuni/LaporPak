<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_profile extends CI_Model {
  function __construct(){
		parent::__construct();
  }

  public function ambil($table,$data){
    $hasil = $this->db->get_where($table,$data)->result();
    return $hasil;
  }

  public function ambil_user(){
    $where = array('no_KTP'=> $this->session->userdata('no_KTP'));
    $us = $this->db->get_where('user',$where)->result();
    foreach($us as $no)
      $data = $no->nomor_rumah;
    $where = array('nomor_rumah'=>$data);
    return $this->db->order_by('otoritas', 'ASC')->get_where('user',$where)->result();
  }
}
