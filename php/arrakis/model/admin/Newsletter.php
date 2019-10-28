<?php

namespace arrakis\model\admin;

class Newsletter extends \arrakis\model\Model {
    
    public $db = null;
    public $row = null;
    public $ps = null;
    
    public function __construct($id) {
        
        parent::__construct();
       
           
            $query = "select email, name from users where id = " . $id;

            $ps = $this->query($query);
            
            
    }
    
     public function getEmail()
    {
        return $this->get('email');
    }

    public function getName()
    {
        return $this->get('name');
    }
}


?>
