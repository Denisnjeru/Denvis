<?php
namespace arrakis\controller\admin;

class Admin extends \arrakis\controller\LoggedInController{
    

    public function __construct() {
        parent::__construct();
       if(!\arrakis\model\security\Login::isAdmin())
        {
            header("Location:".PROJECT_URL."login");
            exit;
        }

    }

    public function getMessage()
    {
        return '';
    }
    
    public function getTitle() {
       return "Admin Dashboard"; 
    }

    public function viewAction() {
        $this->model = new \arrakis\model\admin\Admin();
        $view = new \arrakis\view\admin\Admin($this); //this instatiates a view
        $view->page();
    }
    
    
    
}

?>
