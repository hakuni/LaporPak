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
		$this->load->view('v_home',$data);
	}
}
