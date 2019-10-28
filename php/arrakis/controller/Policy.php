<?php
namespace arrakis\controller;

class Policy extends Controller{
    
    public function __construct() {
        
    }

    public function getTitle() {
       return "Terms and Privacy"; 
    }

    public function viewAction() {
        $view = new \arrakis\view\Policy($this);
        $view->page();
    }
    
    
    
}

?>
