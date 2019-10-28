<?php
namespace arrakis\controller\security;

class ChangeDetails extends \arrakis\controller\LoggedInController{
    

    public function __construct() {
        parent::__construct();
        
        $this->model = new \arrakis\model\security\ChangeDetails();

    }

    public function getTitle() {
       return "Change Details"; 
    }

    public function viewAction() {
        $view = new \arrakis\view\security\ChangeDetails($this); //this instatiates a view
        $view->page();
    }
    
    
    
}

?>
