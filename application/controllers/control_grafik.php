<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class control_grafik extends CI_Controller {
 public function index() {

   foreach($this->m_grafik->statistik_pengunjung()->result_array() as $row)
   {
    $data['grafik'][]=(float)$row['Januari'];
    $data['grafik'][]=(float)$row['Februari'];
    $data['grafik'][]=(float)$row['Maret'];
    $data['grafik'][]=(float)$row['April'];
    $data['grafik'][]=(float)$row['Mei'];
    $data['grafik'][]=(float)$row['Juni'];
    $data['grafik'][]=(float)$row['Juli'];
    $data['grafik'][]=(float)$row['Agustus'];
    $data['grafik'][]=(float)$row['September'];
    $data['grafik'][]=(float)$row['Oktober'];
    $data['grafik'][]=(float)$row['November'];
    $data['grafik'][]=(float)$row['Desember'];
   }

   $this->load->view('admin/dashboard', $data);
 }
