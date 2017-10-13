<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Grafik extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('m_grafik');
    }
    function index(){
        $x['data']=$this->m_grafik->get_data_stok();
        $this->load->view('v_grafik',$x);
    }
}
