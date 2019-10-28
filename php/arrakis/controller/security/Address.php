<?php
namespace arrakis\controller\security;

class Address extends \arrakis\controller\LoggedInController{
    
    //const FORM_B_ADDRESS_ID = 'baddressid';
    const FORM_B_FIRST_NAME = 'bfirst';
    const FORM_B_LAST_NAME = 'blast';
    const FORM_B_LINE_1 = 'bline1';
    const FORM_B_LINE_2 = 'bline2';
    const FORM_B_CITY = 'bcity';
    const FORM_B_STATE = 'bstate';
    const FORM_B_POSTCODE = 'bpostcode';
    const FORM_B_PHONE = 'bphone';
    const FORM_USE_BILLING = 'usebilling';
    
   // const FORM_S_ADDRESS_ID = 'saddressid';
    const FORM_S_FIRST_NAME = 'sfirst';
    const FORM_S_LAST_NAME = 'slast';
    const FORM_S_LINE_1 = 'sline1';
    const FORM_S_LINE_2 = 'sline2';
    const FORM_S_CITY = 'scity';
    const FORM_S_STATE = 'sstate';
    const FORM_S_POSTCODE = 'spostcode';
    const FORM_S_PHONE = 'sphone';


   public function __construct() {
        parent::__construct();
        
        $this->model = new \arrakis\model\security\Address();

    }

    public function getTitle() {
       return "Address"; 
    }

    public function viewAction() {
        $view = new \arrakis\view\security\Address($this); //this instatiates a view
        $view->page();
    }
    
    
    
}

?>
