<?php
namespace arrakis\controller\admin;

class AdminReports extends \arrakis\controller\LoggedInController{
    
    const FORM_CITY = 'city';
    const FORM_STATE = 'catimage';
    const FORM_POSTCODE = 'catname';
    const FORM_FROM_DATE = 'from';
    const FORM_TO_DATE = 'to';

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
        $view = new \arrakis\view\admin\AdminReports($this); //this instatiates a view
        $view->page();
    }
    
    
    
}

?>
