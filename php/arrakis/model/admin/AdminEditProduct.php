<?php

namespace arrakis\model\admin;

class AdminEditProduct extends \arrakis\model\Model {
    
    
    public function __construct($id) {
        
        parent::__construct();
       
           
            $query = "select product_url, category_url, name, image, gst, price, unit, weight_default, stock, description, low_stock, high_stock, active from products where product_url =:url";

           
            $this->prepare($query,array(':url'=>$id));


            $this->next();

    }
     public function getProductId() {
        return parent::get('product_url');
    }
    
    public function getCategoryId() {
        return parent::get('category_url');
    }

    public function getName() {
        return parent::get('name');
    }
    
    public function getImage() {
        return parent::get('image');
    }
    
    public function getGst() {
        return parent::get('gst');
    }
    
    public function getPrice() {
        return parent::get('price');
    }
    public function getWeightDef() {
        return parent::get('weight_default');
    }
    public function getUnit() {
        return parent::get('unit');
    }
    
    public function getStock() {
        return parent::get('stock');
    }
    public function getDescription() {
        return parent::get('description');
    }
    public function getLowStock() {
        return parent::get('low_stock');
    }
    public function getHighStock() {
        return parent::get('hig_stock');
    }
    public function isActive() {
        return (parent::get('active') == 1);

    }
}



?>
