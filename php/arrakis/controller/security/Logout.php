<?php
namespace arrakis\controller\security;

class Logout extends \arrakis\controller\Controller{
    
    
    
    public function __construct() {
       \arrakis\model\security\Login::logout(); 
       
       $url = PROJECT_URL . 'home';
       header('Location:'.$url);
    }

    public function getTitle() {
       return ""; 
    }

    public function viewAction() {
       
    }
    
    
    
}

?>
