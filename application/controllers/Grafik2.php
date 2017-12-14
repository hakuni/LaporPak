<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Grafik2 extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('m_grafik2');
    }
    function index(){
        $x['data']=$this->m_grafik2->get_data_stok();
        $this->load->view('v_grafik2',$x);
    }
}
