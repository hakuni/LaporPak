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
            $this->m_lapor->upload();?>
            <script language="javascript">alert("Berhasil Melapor");</script>
            <?php if($this->session->userdata('otoritas')== 1 || $this->session->userdata('otoritas')== 2){ ?>
            <script>document.location.href='<?php echo base_url().'Dashboard'?>';</script>
          <?php } else { ?>
            <script>document.location.href='<?php echo base_url()?>'</script>
        <?php } }
        else{
      			$error = array('error' => $this->upload->display_errors());
      			$this->load->view('v_lapor', $error);
        }
      }
  }
}
?>
