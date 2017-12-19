<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard extends CI_Controller {

  public function __construct()
	{
      parent::__construct();
      $this->load->helper(array('form', 'url'));
      $this->load->model('m_grafik');
      $this->load->model('m_grafik2');

  }

  public function index()
  {
    $data['data']=$this->m_grafik->get_data_user();
    $data['charlapor']=$this->m_grafik2->get_data_charlapor();
    $data['laporan'] = $this->db->order_by('tanggal','DESC')->get('laporan');
    $data['warga'] = $this->db->order_by('nomor_rumah', 'ASC')->get('user');
    $data['infowarga'] = $this->db->order_by('create_when', 'DESC')->get('pengumuman');
    $data['solve'] = $this->db->query("SELECT COUNT(id_laporan) AS solve FROM laporan WHERE status = 1");
    $data['unsolve'] = $this->db->query("SELECT COUNT(id_laporan) AS unsolve FROM laporan WHERE status = 0");
    $data['jmluser'] = $this->db->query("SELECT COUNT(no_KTP) AS jmluser FROM user");
    $data['jmllaporan'] = $this->db->query("SELECT COUNT(id_laporan) AS jmllaporan FROM laporan");
    $this->load->view('admin/dashboard',$data);
  }

  public function rumah(){
    $where = array('nomor_rumah'=>$this->uri->segment(3));
    $dt['x'] = $this->db->order_by('otoritas','ASC')->where('nomor_rumah',$this->uri->segment(3))->get('user')->result();
    $this->load->view('admin/v_rumah',$dt);
  }

  public function bio(){
    $where = array('no_KTP'=>$this->uri->segment(3));
    $data1 = $this->db->get_where('user',$where)->result();
    $dt['warga'] = $data1;
    foreach($data1 as $d)
    $where2 = array('nomor_rumah'=>$d->nomor_rumah);
    $dt['rumah'] = $this->db->get_where('rumah',$where2)->result();
    $this->load->view('admin/v_biodata',$dt);
  }

  public function add()
  {
    $this->load->view('admin/add');
  }

  public function action_add()
  {
    $data = array(
      'no_KTP' => $this->input->post('no_KTP'),
      'topik' => $this->input->post('topik'),
      'laporan' => $this->input->post('laporan')
    );
    $this->db->insert('laporan',$data);
    redirect('dashboard','refresh');
  }

  public function add2()
  {
    $this->load->view('admin/add2');
  }
  public function action_add2()
  {
    $data = array(
      'no_KTP' => $this->input->post('no_KTP'),
      'nama' => $this->input->post('nama'),
      'nomor_rumah' => $this->input->post('nomor_rumah')
    );
    $this->db->insert('user',$data);
    redirect('dashboard','refresh');
  }

  public function add3()
  {
    $this->load->view('admin/add3');
  }
  public function action_add3()
  {
    $data = array(
      'no_pengumuman' => $this->input->post('no_pengumuman'),
      'topik_pengumuman' => $this->input->post('topik_pengumuman'),
      'deskripsi_pengumuman' => $this->input->post('deskripsi_pengumuman')
    );
    $this->db->insert('pengumuman',$data);
    redirect('dashboard','refresh');
  }

  public function update_status($id_laporan=NULL)
  {
    $where=array("status"=>1);
    $this->db->where('id_laporan',$this->uri->segment(3))->update('laporan',$where);
    redirect('dashboard','refresh');
  }

  public function update($id_laporan=NULL)
  {
    $this->db->where('id_laporan',$id_laporan);
    $data['laporan'] = $this->db->get('laporan');
    $this->load->view('admin/update',$data);
  }

  public function action_update($id_laporan='')
  {
    $data = array(
      'no_KTP' => $this->input->post('no_KTP'),
      'topik' => $this->input->post('topik'),
      'laporan' => $this->input->post('laporan')
    );
    $this->db->where('id_laporan',$id_laporan);
    $this->db->update('laporan',$data);

    redirect('dashboard','refresh');
  }

  public function update2($no_KTP=NULL)
  {
    $this->db->where('no_KTP',$no_KTP);
    $data['warga'] = $this->db->get('user');
    $this->load->view('admin/update2',$data);
  }

  public function action_update2($no_KTP='')
  {
    $data = array(
      'nama' => $this->input->post('nama'),
      'nomor_rumah' => $this->input->post('nomor_rumah')
    );
    $this->db->where('no_KTP',$no_KTP);
    $this->db->update('user',$data);

    redirect('dashboard','refresh');
  }


  public function update3($no_pengumuman=NULL)
  {
    $this->db->where('no_pengumuman',$no_pengumuman);
    $data['infowarga'] = $this->db->get('pengumuman');
    $this->load->view('admin/update3',$data);
  }

  public function action_update3($no_pengumuman='')
  {
    $data = array(
      'topik_pengumuman' => $this->input->post('topik_pengumuman'),
      'deskripsi_pengumuman' => $this->input->post('deskripsi_pengumuman')
    );
    $this->db->where('no_pengumuman',$no_pengumuman);
    $this->db->update('pengumuman',$data);

    redirect('dashboard','refresh');
  }

  public function delete($id_laporan=NULL)
  {
    $this->db->where('id_laporan',$id_laporan);
    $this->db->delete('laporan');

    redirect('dashboard','refresh');
  }

  public function read($id_laporan=NULL)
  {
    $this->db->where('id_laporan',$id_laporan);
    $data['content']=$this->db->get('laporan');


    $this->load->view('admin/dashboard',$data);
  }

  public function delete2($no_KTP=NULL)
  {
    $this->db->where('no_KTP',$no_KTP);
    $this->db->delete('user');

    redirect('dashboard','refresh');
  }

  public function delete3($no_pengumuman=NULL)
  {
    $this->db->where('no_pengumuman',$no_pengumuman);
    $this->db->delete('pengumuman');

    redirect('dashboard','refresh');
  }




}
/*EOF dashboard.php*/
