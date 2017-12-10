<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail extends CI_Controller {
  function __construct(){
    parent::__construct();
    $this->load->library('session');
    $this->load->model('m_detail');

  }

  public function index(){
        $data['details'] = $this->m_detail->ambil('laporan',$this->uri->segment(3));
        $this->load->view('v_detail',$data);
  }
}
