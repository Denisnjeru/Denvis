<?php

namespace arrakis\model\admin;

class AdminAddProduct extends \arrakis\model\Model {
    public $categoryId;
     public $active;
    public function __construct($id) {
        
        parent::__construct();
       
        $this->categoryId = $id;
   
        
    }
    
    public function getCategoryId() {
        return $this->categoryId;
    } 
     
    
}



?>
