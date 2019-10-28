<?php
namespace arrakis\model;

class Search extends Model{

    public $productCount = 0;
    //  private $categoryURL  ='';

    public function __construct($search) {
        
        parent::__construct();
       
        
         $this->search = $search;
        
         $query = "select count(name) from products where active = 1 and name like '%".$search."%' OR description like '%".$search."%';"; 
         $this->prepare($query,[":search"=> $search]);
         $this->next();
            
         $this->productCount = $this->get('count(name)');
        
            
           //execute query and returns a PDOStatement object
         $query = "select product_url, category_url, name, image, price, weight_default, unit, description from products where active = 1 and name like '%".$search."%' OR description like '%".$search."%';";

         $this->prepare($query,[":search"=> $search]);
         $this->next();

    }

     public function getId() {
        return parent::get('product_url');
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
    
     public function getWeight() {
        return parent::get('weight_default');
    }
    
    public function getUnit() {
        return parent::get('unit');
    }

    public function getDescription() {
        return parent::get('description');
    }

    public function getProductUrl() {
        return parent::get('product_url');
    }
    
    public function getCategoryUrl() {
        return parent::get('category_url');
    }
    public function getProductCount()
    {
        return $this->productCount;
    }
    
}

?>
