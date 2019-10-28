<?php
namespace arrakis\controller;

class HomeSlider extends Controller{
   
     
    public function __construct() {
       
       $this->model = new \arrakis\model\HomeSlider();     
    }
    
    public function viewAction() 
    {
        $view = new \arrakis\view\HomeSlider($this);
        $view->section($this->model);
    }
    
     
    public function getTitle() {
      return $this->model->getName();     
     }

  
}

?>
