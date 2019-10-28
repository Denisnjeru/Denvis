<?php
namespace arrakis\controller;

class Categories extends Controller {
    
    public function __construct(){
        $this->model = new \arrakis\model\Categories();
    }
    
    public function viewAction()
    {
        $view = new \arrakis\view\Categories($this);
        //execute page within view
        $view->page($this->model);
    }
  
    public function getTitle() {
        return "Product Categories";
    }
}

?>

