<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Menu extends CI_controller
{
   public function Index()
{
   $data = array(
    'content' =>'admin/dashboard/index'
   );
  
   $this->load->view('Template_user/Main',$data); 
 

}
}





?>