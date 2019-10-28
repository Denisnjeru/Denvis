<?php

namespace arrakis\model\admin;

class AdminUnlockUser extends \arrakis\model\Model {
    
    public $db = null;
    public $row = null;
    public $ps = null;
    
    public function __construct($id) {
        
        parent::__construct();
       
           
            $query = "update users set locked = 0 where id=" . $id;

            $ps = $this->execute($query);
            
            \arrakis\model\security\Login::isUnlocked();
    }
    
    
}



?>
