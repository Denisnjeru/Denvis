<?php

namespace arrakis\model\admin;

class AdminEditCategory extends \arrakis\model\Model {
    
    
    public function __construct($id) {
        
        parent::__construct();
       
           
            $query = "select url, name, image from categories where url =:url";

           
  
            $this->prepare($query,array(':url'=>$id));


            $this->next();

    }
     public function getCategoryId() {
        return parent::get('url');
    }

    public function getName() {
        return parent::get('name');
    }
    
    public function getCategoryImage() {
        return parent::get('image');
    }
    
}



?>
