<?php
namespace arrakis\model\cart;


class ResumeCart extends \arrakis\model\Model {
    


    public function __construct() {
         
        
       parent::__construct();
       
       \arrakis\model\cart\Cart::clearCart();
       
       $userId = \arrakis\model\security\Login::getId();

       // sql to delete user from shopping_cart
       
       $query = "select url, quantity from shopping_cart_items where cart_id in (select cart_id from shopping_cart where user_id = ".$userId.");";
       
       $this->query($query);
       
       
           while ($this->next())
           {
           
               \arrakis\model\cart\Cart::store($this->get('url'), $this->get('quantity'));
           }
     
      
         
    } 
 
}
?>
