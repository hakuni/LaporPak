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
          ?>
          <script language="javascript">alert("Login Success");</script>
          <?php if($this->session->userdata('otoritas')== 1 || $this->session->userdata('otoritas')== 2){ ?>
              <script>document.location.href='<?php echo base_url().'Dashboard'?>';</script>
          <?php } else ?>
              <script>document.location.href='<?php echo base_url() ?>';</script>
          <?php
        } else {
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
