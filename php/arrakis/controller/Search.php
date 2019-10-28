<?php
namespace arrakis\controller;

class Search extends Controller{
       

    public function __construct($url) {
       
       $search = $url[1];

       $this->model = new \arrakis\model\Search($search);     
    }
    
    public function getTitle() {
       return "Search Results"; 
    }

    public function viewAction() {
        $view = new \arrakis\view\Search($this); //this instatiates a view
        $view->page();
    }
  
}
?>
