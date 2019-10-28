<?php
namespace arrakis\controller\admin;

class AdminProducts extends Admin{
    

    public function __construct() {
        parent::__construct();


    }

    public function getMessage()
    {
        return '';
    }
    
    public function getTitle() {
       return "Admin Dashboard"; 
    }

    public function viewAction() {
        $this->model = new \arrakis\model\admin\AdminProducts();
        $view = new \arrakis\view\admin\AdminProducts($this); //this instatiates a view
        $view->page();
    }
    
    
    
}

?>
