<?php
namespace arrakis\controller\admin;

class AdminDeleteUser extends Admin{
    

    public function __construct($url) {
        parent::__construct();       

       $id = $url[1];
        
       new \arrakis\model\admin\AdminDeleteUser($id);
    
    }

}

?>
