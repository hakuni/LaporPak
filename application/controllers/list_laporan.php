<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class List_laporan extends CI_Controller {
  function __construct(){
    parent::__construct();
    $this->load->library('session');
    $this->load->model('m_list');

  }
  public function index()
	{
    $this->load->database();
    $jumlah_data = $this->m_list->jumlah_data();
    $this->load->library('pagination');
    $config['base_url'] = base_url().'list_laporan/index';
    $config['total_rows'] = $jumlah_data;
    $config['per_page'] = 1;
    $from = $this->uri->segment(3);
    $this->pagination->initialize($config);
    $data['lapor'] = $this->m_list->data($config['per_page'], $from);
		$this->load->view('v_list',$data);
	}
}
