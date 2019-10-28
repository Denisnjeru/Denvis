<?php

namespace arrakis\model\admin;

class AdminReportsBestsellers extends \arrakis\model\Model {
    
    
    public function __construct() {
        
        parent::__construct();
       
           
            $query = "select products.name as product, categories.name as category, order_line.product_url as id, order_line.weight as pack_size, unit, sum(quantity) as total_sold, stock from products, categories, order_line where products.product_url = order_line.product_url and categories.url = products.category_url group by order_line.product_url, order_line.weight order by sum(quantity) desc;";

           
  
            $this->query($query);


    }
     public function getId() {
        return parent::get('id');
    }
    public function getProduct() {
        return parent::get('product');
    }
    public function getCategory() {
        return parent::get('category');
    }

    public function getSize() {
        return parent::get('pack_size');
    }
    
    public function getUnit() {
        return parent::get('unit');
    }
    
    public function getTotal() {
        return parent::get('total_sold');
    }   
    public function getStock() {
        return parent::get('stock');
    }   

}



?>
