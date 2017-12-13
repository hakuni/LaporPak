<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_register extends CI_Model {
  function __construct(){
		parent::__construct();
  }

  public function validation(){
    $this->load->library('form_validation');

    $this->form_validation->set_rules('no_KTP', 'No. KTP', 'required|integer|exact_length[16]');
    $this->form_validation->set_rules('telp', 'Telepon', 'required|integer|min_length[11]|max_length[13]');
    $this->form_validation->set_rules('nama', 'Nama', 'required|alpha_numeric_spaces');

    if($this->form_validation->run()){
      if($this->input->post('pass')==$this->input->post('konfirm'))
        return TRUE;
    }
    else
      return FALSE;
  }

  public function cek(){
    $new = array('username'=>$this->input->post('no_KTP'));
    $new2 = array('no_KTP'=>$this->input->post('no_KTP'));
    $cek_username = $this->db->get_where('user',$new)->num_rows();
    $cek_ktp = $this->db->get_where('user',$new2)->num_rows();
    if($cek_username>0||$cek_ktp>0)
      return FALSE;
    else
      return TRUE;
  }

	public function add(){
    $data = array(
        'no_KTP'      => $this->input->post('no_KTP'),
        'nama'        => $this->input->post('nama'),
        'username'    => $this->input->post('username'),
        'password '   => md5($this->input->post('pass')),
        'otoritas'    => $this->input->post('otoritas'),
        'jenis_k'     => $this->input->post('jenis_k'),
        'nomor_rumah' => $this->input->post('no_rmh'),
        'create_when' => date('Y-m-d')
    );
    $this->db->insert('user',$data);

    if($this->input->post('otoritas')==3){
    $data2 = array(
      'nomor_rumah' => $this->input->post('no_rmh'),
      'no_KTP'=> $this->input->post('no_KTP')
    );
    $this->db->insert('rumah', $data2);
    }
	}
}
