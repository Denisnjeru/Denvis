<?php
namespace arrakis\controller\admin;

class AdminEditCategory extends Admin{
    
    const FORM_CAT_URL = 'id';
    const FORM_CAT_IMAGE = 'catimage';
    const FORM_CAT_NAME = 'catname';
 
    
    public function __construct($url) {
        parent::__construct();
        
        $id = $url[1];
        $this->model = new \arrakis\model\admin\AdminEditCategory($id);

    }

    public function getTitle() {
       return "Admin Dashboard"; 
    }

    public function viewAction() {
        $view = new \arrakis\view\admin\AdminEditCategory($this); //this instatiates a view
        $view->page();
    }
    
    
    
}

?>
