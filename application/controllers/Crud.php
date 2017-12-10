<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {

  public function __construct()
	{
      parent::__construct();

  }

  public function index()
  {
    $data['content'] = $this->db->get('laporan');
    $this->load->view('crud/index',$data);
  }

  public function add()
  {
    $this->load->view('crud/add');
  }
  public function action_add()
  {
    $data = array(
      'nama' => $this->input->post('nama'),
      'status' => $this->input->post('status'),
      'jurusan' => $this->input->post('jurusan')
    );
    $this->db->insert('identitas',$data);
    redirect('crud','refresh');
  }
  public function update($id=NULL)
  {
    $this->db->where('id',$id);
    $data['content'] = $this->db->get('identitas');
    $this->load->view('crud/update',$data);
  }

  public function action_update($id='')
  {
    $data = array(
      'nama' => $this->input->post('nama'),
      'status' => $this->input->post('status'),
      'jurusan' => $this->input->post('jurusan')
    );
    $this->db->where('id',$id);
    $this->db->update('identitas',$data);

    redirect('crud','refresh');
  }

  public function delete($id=NULL)
  {
    $this->db->where('id',$id);
    $this->db->delete('identitas');

    redirect('crud','refresh');
  }

  public function read($id=NULL)
  {
    $this->db->where('id',$id);
    $data['content']=$this->db->get('identitas');

    $this->load->view('crud/index',$data);
  }

}
/*EOF Crud.php*/
