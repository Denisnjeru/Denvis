<?php
namespace arrakis\controller;

class Faq extends Controller{
    
    public function __construct() {
        
    }

    public function getTitle() {
       return "FAQ"; 
    }

    public function viewAction() {
        $view = new \arrakis\view\Faq($this);
        $view->page();
    }
    
    
    
}

?>
