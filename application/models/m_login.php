<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {
  function __construct(){
		parent::__construct();
  }

  public function cek(){
    $no_KTP = $this->input->post('no_KTP');
    $pass   = $this->input->post('pass');

    $where  = array('no_KTP'=>$no_KTP, 'password'=>md5($pass));
    $where2 = array('username'=>$no_KTP, 'password'=>md5($pass));

    $data  = $this->db->get_where('user',$where);
    $data2 = $this->db->get_where('user',$where2);
    if($data->num_rows()>0 || $data2->num_rows()>0)
      return TRUE;
    else
      return FALSE;
  }

  public function set_login(){
    $no_KTP = $this->input->post('no_KTP');
    $pass   = $this->input->post('pass');

    $where  = array('no_KTP'=>$no_KTP, 'password'=>md5($pass));
    $where2 = array('username'=>$no_KTP, 'password'=>md5($pass));

    $data  = $this->db->get_where('user',$where);
    $data2 = $this->db->get_where('user',$where2);
    foreach($data->result_array() as $array)
      $data_session = array('nama'=>$array['nama'], 'no_KTP'=>$array['no_KTP'], 'otoritas'=>$array['otoritas'], 'status'=>"login");

    foreach($data2->result_array() as $array)
      $data_session = array('nama'=>$array['nama'], 'no_KTP'=>$array['no_KTP'], 'nomor_rumah'=>$array['nomor_rumah'], 'otoritas'=>$array['otoritas'], 'status'=>"login");

    $this->session->set_userdata($data_session);
  }
}
