<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
  function __construct(){
		parent::__construct();
    $this->load->helper('form','url');
    $this->load->model('m_register');
  }

  public function index(){
  		$this->load->view('v_register', array('error'=>' '));
  	}

  public function action_input(){
    if($this->input->post('submit')){
        if($this->m_register->validation()){
            if($this->m_register->cek()){
              $this->m_register->add();
              redirect('home');
            }
            else {
              $error = array('error'=>"No. KTP atau username sudah digunakan");
              $this->load->view('v_register', $error);
            }
        }
        else {
          $this->load->view('v_register');
        }
    }
  }
}

?>
