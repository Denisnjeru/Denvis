<?php

namespace arrakis\model\admin;

class AdminEditUser extends \arrakis\model\Model {

    public function __construct($id) {
        
        parent::__construct();
       
           
            $query = "select id, account_type, email, name, phone, c_name, abn, newsletter from users where id =" . $id;

           
  
            $ps = $this->query($query);


            $this->next();

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

    public function getName() {
        return parent::get('name');
    }
    public function getCompanyName() {
        return parent::get('c_name');
    }
    
    public function getAbn() {
        return parent::get('abn');
    }
    public function getPhone() {
        return parent::get('phone');
    }
    
     public function isNewsletter() {
        return (parent::get('newsletter') == 1);

    }
    
}



?>
