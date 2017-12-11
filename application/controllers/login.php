<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
  function __construct(){
		parent::__construct();
    $this->load->helper('form','url');
    $this->load->model('m_login');

	}

  function index(){
    $this->load->view('v_login', array('error' => ' '));
  }

  public function action_check(){
      if($this->input->post('submit')){
        if($this->m_login->cek()){
          $this->m_login->set_login();
          if($this->session->userdata('otoritas')== 1 || $this->session->userdata('otoritas')== 2)
            redirect('Dashboard');
          else
            redirect('home');
        }
        else{
          $error = array('error' => "Username atau Password Salah");
          $this->load->view('v_login', $error);
        }
     }
  }

  function logout(){
    $this->session->sess_destroy();
    redirect(base_url('home'));
  }
}
?>
