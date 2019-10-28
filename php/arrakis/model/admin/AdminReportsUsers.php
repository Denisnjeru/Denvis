<?php

namespace arrakis\model\admin;

class AdminReportsUsers extends \arrakis\model\Model {
    
    private $q = "";
    
    public function __construct($city, $state, $postcode) {
        
        parent::__construct();
       
           
            $this->q = "select users.id as id, account_type, addr_id, email, first_name, last_name, line_1, line_2, city, state, postcode,  address.phone from users, address where billing_address = address.addr_id and users.id = address.id and addr_id in (select addr_id from address where city = '$city' or state = '$state' or postcode = '$postcode') order by state, city, postcode;";

           
  
            $this->query($this->q);


    }
    
    
    public function again()
    {
        $this->query($this->q); 
    }
    
     public function getId() {
        return parent::get('id');
    }
    public function getType() {
        return parent::get('account_type');
    }
    public function getEmail() {
        return parent::get('email');
    }

    public function getFirstName() {
        return parent::get('first_name');
    }
    
    public function getLastName() {
        return parent::get('last_name');
    }
    
    public function getLine1() {
        return parent::get('line_1');
    }
    
    public function getLine2() {
        return parent::get('line_2');
    }
    
    public function getCity() {
        return parent::get('city');
    }
    
    public function getState() {
        return parent::get('state');
    }
    
    public function getPostcode() {
        return parent::get('postcode');
    }
    
    public function getPhone() {
        return parent::get('phone');
    }
    

}



?>
