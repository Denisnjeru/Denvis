<?php
namespace arrakis\controller\admin;

class AdminUnlockUser extends Admin{
    

    public function __construct($url) {
      parent::__construct();        
       $id = $url[1]; 
       new \arrakis\model\admin\AdminUnlockUser($id);     

    }

 
}

?>
