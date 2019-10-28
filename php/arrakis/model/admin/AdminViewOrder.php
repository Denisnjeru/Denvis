<?php

namespace arrakis\model\admin;

class AdminViewOrder extends \arrakis\model\Model {
            protected 
            $getBFirstName,
            $getBLastName,
            $getBLine1,
            $getBLine2,
            $getBCity,
            $getBState,
            $getBPostcode,
            $getBPhone,
         
            $getSFirstName,
            $getSLastName,
            $getSLine1,
            $getSLine2,
            $getSCity,
            $getSState,
            $getSPostcode,
            $getSPhone,
            $orderId,
            $orderTotal; 
            
           
    
    public function __construct($orderId) {
        
        parent::__construct();
 
            
            $query = "select billing_first_name, billing_last_name, billing_line_1, billing_line_2, 
            billing_city, billing_postcode, billing_state, billing_phone, shipping_first_name, 
            shipping_last_name, shipping_line_1, shipping_line_2, shipping_city, shipping_postcode, shipping_state, 
            shipping_phone, shipping_method_id from orders where order_id = :id";
        
            $this->prepare($query,array(':id'=>$orderId));


            $this->next();
            
          
            $this->getBFirstName = parent::get('billing_first_name');
            $this->getBLastName  = parent::get('billing_last_name');
            $this->getBLine1 = parent::get('billing_line_1');
            $this->getBLine2 = parent::get('billing_line_2');
            $this->getBCity = parent::get('billing_city');
            $this->getBState = parent::get('billing_state');
            $this->getBPostcode = parent::get('billing_postcode');
            $this->getBPhone = parent::get('billing_phone');
        
            $this->getSFirstName = parent::get('shipping_first_name');
            $this->getSLastName  = parent::get('shipping_last_name');
            $this->getSLine1 = parent::get('shipping_line_1');
            $this->getSLine2 = parent::get('shipping_line_2');
            $this->getSCity = parent::get('shipping_city');
            $this->getSState = parent::get('shipping_state');
            $this->getSPostcode = parent::get('shipping_postcode');
            $this->getSPhone = parent::get('shipping_phone');
            
            
            $q = "select order_id as oi,  total as t from orders where order_id = :id;";

            $this->prepare($q,array(':id'=>$orderId));
            $this->next();
            
            $this->orderId = parent::get('oi');
            $this->orderTotal = parent::get('t');
            
            $query = "select product_url, quantity, weight 
             from order_line where order_id = :id";
        
            $this->prepare($query,array(':id'=>$orderId));


            $this->next();
            
            
            
    }

    
    
    public function getOrdId() {
        return $this->orderId;
    }
     public function getTot() {
        return $this->orderTotal;
    }
    
    public function getProductUrl() {
        return parent::get('product_url');
    }
    
    public function getQuantity() {
        return parent::get('quantity');
    }
    
    public function getWeight() {
        return parent::get('weight');
    }
    
    

    
    
    public function getBFirstName() {
        return $this->getBFirstName;
    }
    
    public function getBLastName() {
        return $this->getBLastName;
    }
    
     public function getBLine1() {
        return $this->getBLine1;
    }
    
     public function getBLine2() {
        return $this->getBLine2;
    }
    
    public function getBCity() {
        return $this->getBCity;
    }
    
    public function getBState() {
        return $this->getBState;
    }
    
    public function getBPostcode() {
        return $this->getBPostcode;
    }

    public function getBPhone() {
        return $this->getBPhone;
    }

    
 //shipping   
    
   
    public function getSFirstName() {
        return $this->getSFirstName;
    }
    
    public function getSLastName() {
        return $this->getSLastName;
    }
    
     public function getSLine1() {
        return $this->getSLine1;
    }
    
     public function getSLine2() {
        return $this->getSLine2;
    }
    
    public function getSCity() {
        return $this->getSCity;
    }
    
    public function getSState() {
        return $this->getSState;
    }
    
    public function getSPostcode() {
        return $this->getSPostcode;
    }

    public function getSPhone() {
        return $this->getSPhone;
    }
    
}



?>
