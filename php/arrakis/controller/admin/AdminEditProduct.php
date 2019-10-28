<?php
namespace arrakis\controller\admin;

class AdminEditProduct extends Admin{
    
    const FORM_PRODUCT_URL = 'id';
    const FORM_CATEGORY_URL = 'catid';
    const FORM_PRODUCT_NAME = 'name';
    const FORM_PRODUCT_IMAGE = 'image';
    const FORM_PRODUCT_GST = 'gst';
    const FORM_PRODUCT_PRICE = 'price';
    const FORM_PRODUCT_WEIGHT_DEFAULT = 'weightd';
    const FORM_PRODUCT_UNIT = 'unit';
    const FORM_PRODUCT_STOCK = 'stock';
    const FORM_PRODUCT_DESCRIPTION = 'desc';
    const FORM_PRODUCT_LOW_STOCK = 'lows';
    const FORM_PRODUCT_HIGH_STOCK = 'highs';
    const FORM_PRODUCT_ACTIVE = 'active';
 
    
    public function __construct($url) {
        parent::__construct();
        
        $id = $url[1];
        $this->model = new \arrakis\model\admin\AdminEditProduct($id);

    }

    public function getTitle() {
       return "Admin Dashboard"; 
    }

    public function viewAction() {
        $view = new \arrakis\view\admin\AdminEditProduct($this); //this instatiates a view
        $view->page();
    }
    
    
    
}

?>
