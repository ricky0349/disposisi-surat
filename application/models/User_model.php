 <?php defined('BASEPATH') OR exit('No direct script access allowed');
class User_model extends CI_Model
{
protected $_table ='user';
protected $primary = 'id';
public function getAll()
{
return $this->db->where('is_active',1)->get($this->_table)->result();
}
public function save(){

$data = array(
'username'=> htmlspecialchars($this->input->post('username'), true),
'password'=> password_hash($this->input->post('password'), PASSWORD_DEFAULT),
'email'=> htmlspecialchars($this->input->post('email'), true),
'full_name' => htmlspecialchars($this->input->post('full_name'), true),
'phone' => htmlspecialchars($this->input->post('phone'), true),
'role' => htmlspecialchars($this->input->post('role'), true),
'is_active' => '1',
);
return $this->db->insert($this->_table,$data);
}

/*
'no_surat' => $this->input->post('no_surat'),
'tgl_surat' => $this->input->post('tgl_surat'),
'surat_from' => $this->input->post('surat_from'),
'surat_to' => $this->input->post('surat_to'),
'tgl_terima' => $this->input->post('tgl_terima'),
'perihal' => $this->input->post('perihal'),
'keterangan' => $this->input->post('keterangan'),
'image'=>$this->uploadImage(),
'is_active' => '1',*/







public function getById($id)
{
return $this->db->get_where($this->_table, ["id" => $id])->row();
}
public function editData()
{
$id = $this->input->post('id');
$data = array(
'username' => htmlspecialchars($this->input->post('username'), true),
'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
'email' => htmlspecialchars($this->input->post('email'), true),
'full_name' => htmlspecialchars($this->input->post('full_name'), true),
'phone' => htmlspecialchars($this->input->post('phone'), true),
'role' => htmlspecialchars($this->input->post('role'), true),
'is_active' => 1,
);
return $this->db->set($data)->where($this->primary,$id)->update($this->_table);
// if($this->db->affected_rows()>0){
// $this->session->set_flashdata("success","Data user Berhasil DiUpdate");
// }
}
public function delete($id)
{
$this->db->where('id',$id)->delete($this->_table);
if($this->db->affected_rows()>0){
$this->session->set_flashdata("success","Data user Berhasil DiDelete");


}
}
}
?>