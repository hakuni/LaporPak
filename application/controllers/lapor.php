<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lapor extends CI_Controller {
  function __construct(){
		parent::__construct();
    $this->load->helper(array('form', 'url'));
    $this->load->model('m_lapor');
    	}

  function index(){
    	$this->load->view('v_lapor', array('error'=>' '));
  }
  function action_lapor(){
      if($this->input->post('submit')){
        if($this->m_lapor->validation()){
            $this->m_lapor->upload();
            redirect('home');
        }
        else{
      			$error = array('error' => $this->upload->display_errors());
      			$this->load->view('v_lapor', $error);
        }
      }
  }
}
?>
