<?php

namespace arrakis\model\security;

class ChangeDetails extends \arrakis\model\Model {

    public function __construct() {
        
        parent::__construct();
       
           
            $query = "select id, email, name, phone, newsletter from users where id =:id";

           
  
            $this->prepare($query,[":id"=> Login::getId()]);


            $this->next();

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

    public function getPhone() {
        return parent::get('phone');
    }
    
     public function isNewsletter() {
        return (parent::get('newsletter') == 1);

    }
    
}



?>
