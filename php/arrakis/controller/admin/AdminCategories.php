<?php
namespace arrakis\controller\admin;

class AdminCategories extends Admin{
    

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
        $this->model = new \arrakis\model\admin\AdminCategories();
        $view = new \arrakis\view\admin\AdminCategories($this); //this instatiates a view
        $view->page();
    }
    
    
    
}

?>
