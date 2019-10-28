<?php
namespace arrakis\controller\security;

class ResetPassword extends \arrakis\controller\Controller{
    
    
    const FORM_EMAIL = 'em';
    
    
    public function __construct() {
       
    }

    public function getTitle() {
       return "Reset Password"; 
    }

    public function viewAction() {
        $view = new \arrakis\view\security\ResetPassword($this); //this instatiates a view
        $view->page();
    }
    
    
    
}

?>
