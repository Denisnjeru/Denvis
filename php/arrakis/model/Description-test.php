<?php
namespace arrakis\model;

class Description extends Model{

    public $db = null;
    public $row = null;
    public $ps = null;
    public $options = [];

    public function __construct($category_url, $product_url) {
        
        parent::__construct();
              
            $query = "select product_options.weight as option_weight from product_options where product_options.product_url =:prod_url";

            $this->prepare($query,[":prod_url"=> $product_url]);
        
            
            while($this->next())
            {
              $this->options[] = $this->get('option_weight');  
            }

            
 //           $query = "select products.product_url as product_url, categories.url as cat_url, categories.name as cat_name, products.name as name, products.image as image, price, products.weight_default as weight, product_options.weight as option_weight, unit, stock, description from products, categories, product_options where products.category_url =:cat_url and products.product_url =:prod_url and categories.url = products.category_url and product_options.product_url =:prod_url";

         $query = "select products.product_url as product_url, categories.url as cat_url, categories.name as cat_name, products.name as name, products.image as image, price, product_options.weight as option_weight, unit, stock, gst, description from products, categories, product_options where products.category_url =:cat_url and products.product_url =:prod_url and categories.url = products.category_url and product_options.product_url =:prod_url";

            
            //execute query and returns a PDOStatement object -- select product_url, name, image, price, weight, unit, description from products where category_url =:cat_url and product_url =:prod_url
  
            $this->prepare($query,[":cat_url"=> $category_url,":prod_url"=> $product_url]);


            $this->next();
            
        //    echo "***" . $this->isDataReturned() . "****";
      //      exit;
            
  
    
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
        $unitPrice = parent::get('price');
        $price = $unitPrice * $this->getWeight();
        $gstAmount = ($price/100) * $this->getGst();
        $priceAfterGst = $price + $gstAmount;
        return number_format($priceAfterGst,2);
    }
    
     public function getWeight() {
        return parent::get('option_weight');
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
    
    public function getCategoryUrl() {
        return parent::get('cat_url');
    }
    
     public function getInStock() {
        return parent::get('stock');
    }
    
   public function getSpecificationUrl()
    {
        return $this->getCategoryUrl() .'/'.$this->getId();
    }
    
     public function getOptions() {
        return $this->options;
    }
        
     public function getProductOption() {
        return parent::get('option_weight');
    }
    
    
}


?>
