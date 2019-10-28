<?php
namespace arrakis\controller\admin;

class AdminAddProductResponse extends Admin{
    
    public function __construct() {
       parent::__construct();
       
       
       $r = "\arrakis\controller\admin\AdminAddProduct";
       $id = filter_input(INPUT_POST,$r::FORM_PRODUCT_URL);
       $catid = filter_input(INPUT_POST,$r::FORM_CATEGORY_URL);
       $name = filter_input(INPUT_POST,$r::FORM_PRODUCT_NAME);
       $image = filter_input(INPUT_POST,$r::FORM_PRODUCT_IMAGE);
       $gst = filter_input(INPUT_POST,$r::FORM_PRODUCT_GST);
       $weightd = filter_input(INPUT_POST,$r::FORM_PRODUCT_WEIGHT_DEFAULT);
       $unit = filter_input(INPUT_POST,$r::FORM_PRODUCT_UNIT);
       $price = filter_input(INPUT_POST,$r::FORM_PRODUCT_PRICE);
       $stock = filter_input(INPUT_POST,$r::FORM_PRODUCT_STOCK);
       $desc = filter_input(INPUT_POST,$r::FORM_PRODUCT_DESCRIPTION);
       $lows = filter_input(INPUT_POST,$r::FORM_PRODUCT_LOW_STOCK);
       $highs = filter_input(INPUT_POST,$r::FORM_PRODUCT_HIGH_STOCK);
       $active = filter_input(INPUT_POST,$r::FORM_PRODUCT_ACTIVE);
       
       
       $this->model = new \arrakis\model\admin\AdminAddProductResponse ($id, $catid, $name, $image, $gst, $price, $weightd, $unit, $stock, $desc, $lows, $highs, $active);
       
    
    }
    public function getTitle() {

    }
   
    public function viewAction() {
        $response = ['success'=>'yes', 'message'=>'Product updated successfully'];
        
        if($this->isError())
        {
            $response['success'] = 'no';
            $response['message'] = $this->getError();
        }
    
    echo json_encode($response); //json transorms the PHP array into a javascript array
    
    }
}
?>
