<?php

namespace arrakis\model\admin;

class BulkNewsletter extends \arrakis\model\Model {
    
    public $db = null;
    public $row = null;
    public $ps = null;
    
    public function __construct() {
        
        parent::__construct();
       
           
            $query = "select email, name from users where newsletter = 1";

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
