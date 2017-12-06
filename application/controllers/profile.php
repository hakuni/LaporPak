<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {
  function __construct(){
    parent::__construct();
    $this->load->library('session');
    $this->load->model('m_profile');

  }
  public function index()
	{
    $data['user'] = $this->m_profile->ambil('user', array('no_KTP'=>$this->session->userdata('no_KTP')));
		$this->load->view('v_profile', $data);
	}

  public function edit_profil(){
    $this->load->view('v_edit_profil', array('error' => ' '));
  }
}
