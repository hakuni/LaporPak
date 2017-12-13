<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
  function __construct(){
		parent::__construct();
    $this->load->library('form_validation');
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
              $this->m_register->add();?>
              <script language="javascript">alert("User berhasil ditambah");</script>
              <?php if($this->session->userdata('otoritas')== 3){ ?>
              <script>document.location.href='<?php echo base_url().'profile'?>';</script>
            <?php } else if($this->session->userdata('otoritas')== 1 || $this->session->userdata('otoritas')== 2){ ?>
              <script>document.location.href='<?php echo base_url().'Dashboard'?>';</script>
            <?php }
            }
            else {
              $error = array('error'=>"No. KTP atau username sudah digunakan");
              $this->load->view('v_register', $error);
            }
        }
        else {
          $this->load->view('v_register', array('error'=>' '));
        }
    }
  }

  public function editP(){

  }
}

?>
