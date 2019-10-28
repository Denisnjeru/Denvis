<?php
namespace arrakis\controller\security;

class Login extends \arrakis\controller\Controller{
    
    

    const FORM_PASSWORD = 'psw';
    const FORM_EMAIL = 'em';
    
    
    public function __construct() {
       
    }

    public function getTitle() {
       return "Login"; 
    }

    public function viewAction() {
        $view = new \arrakis\view\security\Login($this); //this instatiates a view
        $view->page();
    }
    
    
    
}

?>
