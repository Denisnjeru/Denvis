<?php

namespace arrakis\model\admin;

class AdminAddProductResponse extends \arrakis\model\Model {

    private $successful = false;
    
    public function __construct($id, $catid, $name, $image, $gst, $price, $weightd, $unit, $stock, $desc, $lows, $highs, $active) {
        parent::__construct();
         
        $query = "INSERT into products set
            product_url = :url,
            category_url = :cat-url,
            name = :name,
            image = :image,
            gst = :gst,
            price = :price,
            weight_default = :weightd,
            unit = :unit,
            stock = :stock,
            description = :desc,
            low_stock = :lows,
            high_stock = :highs,
            active = :active;";
        
       
        
        $parameters = array(
            ':url' => $id,
            ':cat-url' => $catid,
            ':name' => $name,
            ':image' => $image,
            ':gst' => $gst,
            ':price' => $price,
            ':weightd' => $weightd,
            ':unit' => $unit,
            ':stock' => $stock,
            ':desc' => $desc,
            ':lows' => $lows,
            ':highs' => $highs,
            ':active' => ($active)?1:0
        );
        
        

        $this->prepare($query, $parameters);
        
        $query = "INSERT into products_options set
            product_url = :url,
            price = :price,
            weight = :weightd,
            price_increment = 0";
        
        $parameters = array(
            ':url' => $id,
            ':price' => $price,
            ':weightd' => $weightd
        );
        
         $this->prepare($query, $parameters);
         
         
        $this->successful = $this->getRowCount() == 1;
        
        if(!$this->successful) $this->setError("Unable to process your request. Please try again later.");
    }

function isSuccessful()
{
    return $this->successful;
}
    
}



?>

