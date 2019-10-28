<?php
namespace arrakis\controller\security;

class Register extends \arrakis\controller\Controller{
    
    const FORM_ACCOUNT_ID = 'id';
    const FORM_ACCOUNT_TYPE = 'ac';
    const FORM_USERNAME = 'un';
    const FORM_PASSWORD = 'psw';
    const FORM_PASSWORD2 = 'psw2';
    const FORM_EMAIL = 'em';
    const FORM_NAME = 'name';
    const FORM_PHONE = 'ph';
    const FORM_COMPANY_NAME = 'company';
    const FORM_ABN = 'abn';   
    const FORM_NEWSLETTER = 'nwsl';


    public function __construct() {
       
    }

    public function getTitle() {
       return "Register to Arrakis"; 
    }

    public function viewAction() {
        $view = new \arrakis\view\security\Register($this); //this instatiates a view
        $view->page();
    }
    
    
    
}

?>
