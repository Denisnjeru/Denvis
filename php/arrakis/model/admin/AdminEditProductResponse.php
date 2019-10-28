<?php

namespace arrakis\model\admin;

class AdminEditProductResponse extends \arrakis\model\Model {

    private $successful = false;
    
    public function __construct($id, $catid, $name, $image, $gst, $price, $weightd, $unit, $stock, $desc, $lows, $highs, $active) {
        parent::__construct();
        
         
        $query = "UPDATE products set 
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
            active = :active
            WHERE product_url = :url";
        
       
        
        $parameters = array(
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
            ':active' => ($active)?1:0,
            ':url' => $id
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

