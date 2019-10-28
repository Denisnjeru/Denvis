<?php
namespace arrakis\controller\security;

class ChangeAddress extends \arrakis\controller\LoggedInController{
   
    private $addressForm = null;
   
    public function __construct() {
        parent::__construct();
        
         $this->addressForm = new AddressForm();

    }

    public function getTitle() {
       return "Address"; 
    }

    public function viewAction() {
        $view = new \arrakis\view\security\ChangeAddress($this); //this instatiates a view
        $view->page();
    }
    public function getAddressForm()
    {
        return $this->addressForm;
    }
    
    
}

?>
