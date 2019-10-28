<?php
namespace arrakis\model;

class HomeSlider extends Model{
    
    public $db = null;
    public $row = null;
    public $ps = null;

    public function __construct() {
        
        parent::__construct();
        
           //execute query and returns a PDOStatement object
            $query = "select product_url, category_url, name, image, price, weight_default, gst from products where active = 1 ORDER BY RAND() limit 0,8;";

            $ps = $this->query($query);

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
        $priceDefault = $this->getWeight() * $this->getPrice();
        return number_format($priceDefault,2);
    }
    
    public function getProductUrl() {
        return parent::get('product_url');
    }
    
    public function getCategoryUrl() {
        return parent::get('category_url');
    }
    
    
}

?>
