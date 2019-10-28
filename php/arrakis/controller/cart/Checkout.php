<?php
namespace arrakis\controller\cart;

use \arrakis\model\cart\Cart;

class Checkout extends \arrakis\controller\Controller{
   private $addressForm = null;
    
    public function __construct($data)
    {
 
        $this->addressForm = new \arrakis\controller\security\AddressForm();
        
        \arrakis\model\cart\Cart::clearPurchaseId();
        
        $this->model = new \arrakis\model\cart\Checkout();
        
       

    }
    
    public function viewAction(){
            $this->view = new \arrakis\view\cart\Checkout($this);
            $this->view->page();
    }

    public function getTitle() {
        return "Checkout";
    }

   public function getAddressForm()
   {
       return $this->addressForm;
   }
}

?>
