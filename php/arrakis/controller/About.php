<?php
namespace arrakis\controller;

class About extends Controller{
    
    public function __construct() {
        
    }

    public function getTitle() {
       return "About"; 
    }

    public function viewAction() {
        $view = new \arrakis\view\About($this);
        $view->page();
    }
    
    
    
}

?>
