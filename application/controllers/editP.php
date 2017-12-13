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
            if($this->m_edit->validation_up()){
                $this->m_edit->update_profile(); ?>
                <script language="javascript">alert("Berhasil Edit Profil");</script>
                <script>document.location.href='<?php echo base_url().'profile'?>';</script>
            <?php
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

  public function editPass(){
    $data['user'] = $this->m_edit->ambil('user',$this->session->userdata('no_KTP'));
    $data['error'] = " ";
    $this->load->view('v_editPass', $data);
  }

  public function passAction(){
    if($this->input->post('submit')){
      if($this->m_editP->validation_pass()){
          $this->m_editP->update_pass(); ?>
          <script language="javascript">alert("Berhasil Edit Password");</script>
          <script>document.location.href='<?php echo base_url().'profile'?>';</script>
      <?php
      }
      else{
        $error = array('error' => "Password tidak sama");
        $this->load->view('v_login', $error);
      }
   }
  }
}

?>
