<?php
namespace arrakis\controller\admin;

class AdminEditUser extends Admin{
    

    public function __construct($url) {
        parent::__construct();
        
        $id = $url[1];
        $this->model = new \arrakis\model\admin\AdminEditUser($id);

    }

    public function getTitle() {
       return "Admin Dashboard"; 
    }

    public function viewAction() {
        $view = new \arrakis\view\admin\AdminEditUser($this); //this instatiates a view
        $view->page();
    }
    
    
    
}

?>
