<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_lapor extends CI_Model {
  function __construct(){
		parent::__construct();
  }

  public function validation(){
    $config['upload_path']      = './gambar/';
    $config['allowed_types']    = 'gif|jpg|png';
    $config['max_size']         = 2048;
    $config['remove_space']     = TRUE;
    $config['file_name']        = "file_".time();

    $this->load->library('upload',$config);

    if ( ! $this->upload->do_upload('berkas'))
      return FALSE;
    else
      return TRUE;
  }

  function upload(){
    date_default_timezone_set('Asia/Jakarta');
    $topik = $this->input->post('topik');
    $laporan = $this->input->post('laporan');
    $no_KTP = $this->session->userdata('no_KTP');
    $tgl = date("Y-m-d H:i:s", strtotime('now'));

    $gambar = $this->upload->data();
    $data = array('no_KTP'=>$no_KTP,'topik'=>$topik,
                  'laporan' => $laporan, 'foto'=>$gambar['file_name'],
                  'tanggal'=> $tgl);
    $this->db->insert('laporan',$data);
  }
}
