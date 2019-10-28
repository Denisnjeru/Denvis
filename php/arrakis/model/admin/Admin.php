<?php

namespace arrakis\model\admin;

class Admin extends \arrakis\model\Model {
    
    public $db = null;
    public $row = null;
    public $ps = null;
    
    public function __construct() {
        
        parent::__construct();
       
            $query = "SET time_zone = '+11:00'";
           
            $ps = $this->query($query);
            
            $query = "select id, email, account_type, name,locked, registration_date,newsletter from users";

            $ps = $this->query($query);
            
    }
    
    public function getId() {
        return parent::get('id');
    }

    public function getEmail() {
        return parent::get('email');
    }

    public function getName() {
        return parent::get('name');
    }
    
    public function getType() {
        return parent::get('account_type');
    }
    
    public function getPhone() {
        return parent::get('phone');
    }
    
     public function isNewsletter() {
        return (parent::get('newsletter') == 1);

    }
    public function isLocked() {
        return (parent::get('locked') == 1);

    }
    
    public function getTime() {
        return parent::get('registration_date');
    }
    
}



?>
