<?php

namespace arrakis\model\admin;

class AdminCategories extends \arrakis\model\Model {
    
    public $db = null;
    public $row = null;
    public $ps = null;
    
    public function __construct() {
        
        parent::__construct();
       

            $query = "select url, image, name from categories";

            $ps = $this->query($query);
            
    }
    
    public function getId() {
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
