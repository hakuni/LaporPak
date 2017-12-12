<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_edit extends CI_Model {
  function __construct(){
		parent::__construct();
  }

  public function ambil($table,$ktp){
    $where = array('no_KTP'=>$ktp);
    return $this->db->get_where($table,$where)->result();
  }

  public function validation_input(){
    $this->load->library('form_validation');

    $this->form_validation->set_rules('alamat', 'Alamat', 'required|alpha_numeric_spaces');
    $this->form_validation->set_rules('telp', 'Nomor Telepon', 'required|integer|max_length[13]');

    if($this->form_validation->run()){
      if($this->input->post('pass')==$this->input->post('konfirm'))
        return TRUE;
    }
    else
      return FALSE;
  }

  public function validation(){
    $config['upload_path']      = './gambar/';
    $config['allowed_types']    = 'gif|jpg|png';
    $config['max_size']         = 2048;
    $config['remove_space']     = TRUE;
    $config['file_name']        = "f-file_".time();

    $this->load->library('upload',$config);

    if ( !$this->upload->do_upload('berkas'))
      return FALSE;
    else
      return TRUE;
  }

	public function update(){
    $foto = $this->upload->data();
    $data = array(
        'nama'        => $this->input->post('nama'),
        'agama'       => $this->input->post('agama'),
        'telepon'     => $this->input->post('telp'),
        'foto_profil' => $foto['file_name']
    );
    $this->db->where('no_KTP',$this->session-userdata('no_KTP'))->update('user',$data);
	}
}
