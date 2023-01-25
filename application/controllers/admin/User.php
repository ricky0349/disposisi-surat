<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User extends CI_Controller {
public function __construct()
{
parent::__construct();

$this->load->model("User_model");
$this->load->library('form_validation');
}
public function index()
{
$data = array(
'title' => 'View Data User',
'user' => $this->User_model->getAll(),
'content' =>'admin/User/index'
);
$this->load->view('admin/Template/Main',$data);
}
public function add()
{
$data = array(
'title' => 'Tambah Data User',
'content'=> 'admin/User/add_form'
);
$this->load->view('admin/Template/Main',$data);
}
public function save()
{
$this->User_model->Save();
if($this->db->affected_rows()>0){
$this->session->set_flashdata("success","Data user Berhasil DiSimpan");
}
redirect('admin/User');
}
public function getedit($id)
{
$data = array(
'title' => 'Update Data user',
'user' => $this->User_model->getById($id),
'content'=> 'admin/User/edit_form'
);
$this->load->view('admin/Template/Main',$data);
}
public function edit()
{
$this->User_model->editData();
if($this->db->affected_rows()>0){
$this->session->set_flashdata("success","Data user Berhasil DiUpdate");
}
redirect('admin/User');
}
function delete($id)
{
$this->User_model->delete($id);
redirect('admin/User');
}
}
