<?php
namespace arrakis\model\cart;


class SaveCart extends \arrakis\model\Model {
    
  
    private $productIndex = 0;
    private $currentId = 0;
    protected $total = 0;
    public $option = '';

    public function __construct() {
         
        
       parent::__construct();
       
       $userId = \arrakis\model\security\Login::getId();

       // sql to delete user from shopping_cart
       
       $query = 'select cart_id from shopping_cart where user_id = ' . $userId;
       
       $this->query($query);
       
       if($this->getRowCount() > 0)
       {
           $this->next();
           
           $carId = $this->get('cart_id');
           $query = 'delete from shopping_cart_items where cart_id =' . $carId;
           $this->execute($query);     
           $query = 'delete from shopping_cart where user_id =' . $userId;
           $this->execute($query);
       
       }
       
       
       $query = "insert into shopping_cart set user_id = :user_id";
       
       $this->prepare($query,array(':user_id'=>$userId));
       
       $cartId = $this->getLastId();
       
        $cart = Cart::getCart();
       //foreach through the cart array saveing key value to the database table using $cartId for each record
        
            foreach ($cart as $item=>$qnt )  {
            
            $url = $item;
            $quantity = $cart[$item] ;
            
            $query = 'insert into shopping_cart_items set cart_id=:cart_id, url=:url, quantity=:quantity'; 
            $this->prepare($query,array(':cart_id'=>$cartId, ':url'=>$url, ':quantity'=>$quantity));  
         
    } 
    }
 
}
?>
