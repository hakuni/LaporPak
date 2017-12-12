<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EditP extends CI_Controller {
  function __construct(){
		parent::__construct();
    $this->load->helper(array('form', 'url'));
    $this->load->model('m_edit');
  }

  public function index(){
      $data['user'] = $this->m_edit->ambil('user',$this->session->userdata('no_KTP'));
      $data['error'] = " ";
  		$this->load->view('v_editP',$data);
  	}

  public function action(){
    if($this->input->post('submit')){
        if($this->m_edit->validation_input()){
            if($this->m_edit->validation()){
                $this->m_edit->update();
                redirect('profile');
            }
            $data['user'] = $this->m_edit->ambil('user',$this->session->userdata('no_KTP'));
            $data['error'] = $this->upload->display_errors();
            $this->load->view('v_editP',$data);
        }
        else {
          $data['user'] = $this->m_edit->ambil('user',$this->session->userdata('no_KTP'));
          $data['error'] = " ";
          $this->load->view('v_editP',$data);
        }
    }
  }
}

?>
