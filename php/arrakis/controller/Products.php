<?php
namespace arrakis\controller;

class Products extends Controller{
   
     
    public function __construct($url) {
       
       $category_url = $url[1];
       
       $offset = (isset($url[2]) && intval($url[2]) != 0)?intval($url[2]):1;
       
       $this->model = new \arrakis\model\Products($category_url,$offset);     
    }
    
    public function viewAction() 
    {
        $view = new \arrakis\view\Products($this);
        // execute page() within view
        $view->page();
    }
    
     
    public function getTitle() {
      return $this->model->getName();     
     }

  
}

?>
