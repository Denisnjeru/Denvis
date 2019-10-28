<?php
namespace arrakis\controller;

class Home extends Controller{
   
    private $homeSlider = null;
    
    public function __construct() {
        
        $this->homeSlider = new HomeSlider();
        
    }

    public function getTitle() {
       return "Home"; 
    }

    public function viewAction() {
        $view = new \arrakis\view\Home($this);
        $view->page();
    }
    
    public function getHomeSlider()
    {
        return $this->homeSlider;
    }
    
}

?>
