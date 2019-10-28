<?php
namespace arrakis\controller\security;

class ChangePassword extends \arrakis\controller\LoggedInController{
    
   
    const FORM_PASSWORD = 'psw';
    const FORM_PASSWORD2 = 'psw2';
    
    public function __construct() {
       parent::__construct();
    }

    public function getTitle() {
       return "Change Password"; 
    }

    public function viewAction() {
        $view = new \arrakis\view\security\ChangePassword($this); //this instatiates a view
        $view->page();
    }
    
    
    
}

?>
