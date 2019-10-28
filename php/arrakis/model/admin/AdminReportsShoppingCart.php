<?php

namespace arrakis\model\admin;

class AdminReportsShoppingCart extends \arrakis\model\Model {


    public function __construct() {
        
        parent::__construct();
       
           
            $query = "select shopping_cart.cart_id as cart_id, shopping_cart.user_id as user_id, email, date_saved, shopping_cart_items.url as url, quantity from shopping_cart, shopping_cart_items, users where shopping_cart.cart_id = shopping_cart_items.cart_id and shopping_cart.user_id = users.id order by shopping_cart_items.cart_id, shopping_cart.user_id ;";

            $this->query($query);


    }
     public function getCartId() {
        return parent::get('cart_id');
    }
    public function getUserId() {
        return parent::get('user_id');
    }
    
    public function getEmail() {
        return parent::get('email');
    } 
    
    public function getDate() {
        return parent::get('date_saved');
    } 
    
    public function getCartItems() {
       return parent::get('url');
        
    }
    
    public function getCategory() {
        $url = parent::get('url');
        $explodedCartItems = explode('/',$url);
        $category = $explodedCartItems[0];
        return $category;
    }

    public function getProduct() {
        $url = parent::get('url');
        $explodedCartItems = explode('/',$url);
        $product = $explodedCartItems[1];
        return $product;
    }
    
    public function getSize() {
        $url = parent::get('url');
        $explodedCartItems = explode('/',$url);
        $size = $explodedCartItems[2];
         return $size;
    }
    
    public function getQuantity() {
        return parent::get('quantity');
    } 

}



?>
