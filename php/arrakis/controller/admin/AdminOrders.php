<?php
namespace arrakis\controller\admin;

class AdminOrders extends Admin{
    

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
        $this->model = new \arrakis\model\admin\AdminOrders();
        $view = new \arrakis\view\admin\AdminOrders($this); //this instatiates a view
        $view->page();
    }
    
    
    
}

?>
