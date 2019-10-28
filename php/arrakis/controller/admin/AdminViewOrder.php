<?php
namespace arrakis\controller\admin;

class AdminViewOrder extends Admin{
    
    public function __construct($url) {
        parent::__construct();
        
        $orderId = $url[1];
        $this->model = new \arrakis\model\admin\AdminViewOrder($orderId);

    }

    public function getTitle() {
       return "Admin Dashboard"; 
    }

    public function viewAction() {
        $view = new \arrakis\view\admin\AdminViewOrder($this); //this instatiates a view
        $view->page();
    }
    
    
    
}

?>
