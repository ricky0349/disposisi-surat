<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Menu extends CI_controller
{
   public function Index()
{
   $data = array(
    'content' =>'admin/dashboard/index.php'
   );
  
   $this->load->view('admin/Template/Main',$data); 
 

}
}





?>