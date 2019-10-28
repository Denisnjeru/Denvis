<?php
namespace arrakis\controller;
   
class Contacts extends Controller{
    
    const FORM_NAME = 'n';
    const FORM_EMAIL = 'e';
    const FORM_PHONE = 'p';
    const FORM_MESSAGE = 'm';
    
    public function __construct() {
     
    }

    public function getTitle() {
       return "Contacts"; 
    }

    public function viewAction() {
        $view = new \arrakis\view\Contacts($this);
        $view->page();
    }
    
    
    
}

?>
