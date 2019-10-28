<?php
namespace arrakis\controller\cart;

class Cart extends \arrakis\controller\LoggedInController{
    
    
    public function __construct($data)
    {
        parent::__construct();
         
        $categoryURL = (isset($data[1]))?$data[1]:"";
        
        if($categoryURL === 'delete-all')
        {
            \arrakis\model\cart\Cart::clearCart();
        }
        
        $productURL = (isset($data[2]))?$data[2]:"";
        $option = (isset($data[3]))?$data[3]:"";
        
        $quantity = (isset($data[4])&& is_numeric($data[4]))?intval($data[4]):1;
                  
        $this->model = new \arrakis\model\cart\Cart($categoryURL, $productURL, $option, $quantity);
        
                   
    }
    
    public function viewAction(){
            $this->view = new \arrakis\view\cart\Cart($this);
            $this->view->page();
    }

    public function getTitle() {
        return "Shopping cart";
    }

    
    
  public function isCheckout()
    {
       return ($this->model->isCart() && !$this->model->cartExceedsStock() && $this->isLoggedIn() );
      
      return false;
    }
    
}


?>
