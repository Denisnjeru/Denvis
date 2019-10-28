<?php

namespace arrakis\model\admin;

class AdminProducts extends \arrakis\model\Model {
    
    public $db = null;
    public $row = null;
    public $ps = null;
    
    public function __construct() {
        
        parent::__construct();
       

            $query = "select product_url, category_url, name, image, price, unit, active from products order by category_url";

            $ps = $this->query($query);
            
    }
    
    public function getProductId() {
        return parent::get('product_url');
    }

    public function getCatId() {
        return parent::get('category_url');
    }
    
    public function getName() {
        return parent::get('name');
    }
    
    public function getImage() {
        return parent::get('image');
    }
    
    public function getPrice() {
        return parent::get('price');
    }
    
    public function getUnit() {
        return parent::get('unit');
    }
    
     public function isActive() {
        return (parent::get('active') == 1);

    }
    
}



?>
