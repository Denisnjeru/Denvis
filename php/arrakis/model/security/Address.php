<?php

namespace arrakis\model\security;

class Address extends \arrakis\model\Model {

   public function __construct() {
        
        parent::__construct();
            
            $id = \arrakis\model\security\Login::getId();
            
            $query = "select addr_id, first_name, last_name, line_1, line_2, city, state, postcode, address.phone from address, users where users.billing_address = address.addr_id and users.id =:id";
            
            echo $query;
            
            $this->prepare($query,[":id"=> $id]);
            $this->next();
            
            $this->getBAddressId = $this->get('addr_id');
            $this->getBFirstName = $this->get('first_name');
            $this->getBLastName = $this->get('last_name');
            $this->getBLine1 = $this->get('line_1');
            $this->getBLine2 = $this->get('line_2');
            $this->getBCity = $this->get('city');
            $this->getBState = $this->get('state');
            $this->getBPostcode = $this->get('postcode');
            $this->getBPhone = $this->get('phone');
            
           $query = "select addr_id, first_name, last_name, line_1, line_2, city, state, postcode, address.phone from address, users where users.shipping_address = address.addr_id and users.id =:id";
  
            $this->prepare($query,[':id'=> $id]);
            $this->next();
            
            $this->getSAddressId = $this->get('addr_id');
            $this->getSFirstName = $this->get('first_name');
            $this->getSLastName = $this->get('last_name');
            $this->getSLine1 = $this->get('line_1');
            $this->getSLine2 = $this->get('line_2');
            $this->getSCity = $this->get('city');
            $this->getSState = $this->get('state');
            $this->getSPostcode = $this->get('postcode');
            $this->getSPhone = $this->get('phone');

           $query = "select c_name, abn FROM users where id =:id";
            $this->prepare($query,[':id'=> $id]);
            $this->next(); 
    }
    
//company details
   public function getCompanyName() {
        return parent::get('c_name');
    } 
    
  public function getAbn() {
        return parent::get('abn');
    }
    
    
 //billing
    
    public function getBAddressId() {
        return $this->getBAddressId;
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
    
    public function getSAddressId() {
        return $this->getSAddressId;
    }
    
    
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

