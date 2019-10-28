<?php

namespace arrakis\model\admin;

class AdminDeleteUser extends \arrakis\model\Model {
    
    public $db = null;
    public $row = null;
    public $ps = null;
    
    public function __construct($id) {
        
        parent::__construct();
       
           
            $query = "delete from users where account_type !='adm' and id=" . $id;

            $ps = $this->execute($query);
            
    }
    
    
}



?>
