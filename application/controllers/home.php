<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
  function __construct(){
    parent::__construct();
    $this->load->helper(array('form', 'url'));
    $this->load->library('session');
    $this->load->model('m_home');

  }
  public function index(){
    $data['user'] = $this->m_home->ambil('laporan');
    $data['pengumuman'] = $this->m_home->ambil_p('pengumuman');
		$this->load->view('v_home',$data);
	}

  public function detail_laporan(){
        $data['details'] = $this->m_home->getLaporan('laporan',$this->uri->segment(3));
        $this->load->view('v_detail',$data);
  }
}
