<?php
namespace arrakis\model;

class Products extends Model{

    private $productCount = 0;
      private $categoryURL  ='';

    public function __construct($category_url,$offset) {
        
        parent::__construct();
       
        
            $this->categoryURL = $category_url;
        
            $query = "select count(name) from products where category_url =:cat_url and active = 1"; 
        
            $this->prepare($query,[":cat_url"=> $category_url]);
            $this->next();
            
            $this->productCount = $this->get('count(name)');
        
            $offset = (is_int($offset))?6*($offset-1):0;
        
            
           //execute query and returns a PDOStatement object
            $query = "select product_url, categories.name as cat_name, categories.url as cat_url, products.name as name, products.image as image, price, weight_default, gst, unit, stock, description from products, categories where products.category_url =:cat_url and categories.url = products.category_url and active = 1 order by name limit $offset,6;";
            
            
          //  $this->prepare($query,[":cat_url"=> $category_url/*, ":offset"=> ($offset - 1) * 6*/]);
              
            $this->prepare($query,[":cat_url"=> $category_url]);
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

    public function getGst() {
        $gst = parent::get('gst');
        return $gst;
    }

    public function getPrice() {
        $price = parent::get('price');
        $gstAmount = ($price/100) * $this->getGst();
        $priceAfterGst = $price + $gstAmount;
        return $priceAfterGst;
    }
    
     public function getWeight() {
        return parent::get('weight_default');
    }
    
    public function getPriceDefault() {
        return number_format($this->getWeight() * $this->getPrice(),2);
    }
    
    public function getUnit() {
        return parent::get('unit');
    }

    public function getDescription() {
        return parent::get('description');
    }
    
    public function getCategoryName() {
        return parent::get('cat_name');
    }
    public function getProductUrl() {
        return parent::get('product_url');
    }
    
    public function getCategoryUrl() {
        return $this->categoryURL;
    }
    public function getProductCount()
    {
        return $this->productCount;
    }
    
}

?>
