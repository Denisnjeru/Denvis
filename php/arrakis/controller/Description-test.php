<?php
namespace arrakis\controller;

class Description extends Controller{
   
     
    public function __construct($url) {
       
       $category_url = $url[1];
       $product_url = $url[2];
       $this->model = new \arrakis\model\Description($category_url, $product_url);     
    }
    
    public function viewAction() 
    {
        $view = new \arrakis\view\Description($this);
        // execute page() within view
        $view->page();
    }
    
     
    public function getTitle() {
      return $this->model->getName();     
     }

  
}

?>
