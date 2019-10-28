<?php
namespace arrakis\controller\admin;

class AdminReportsSalesTotal extends Admin{

    public function __construct($url) {
        parent::__construct();
        
        $from = $url[1];
        $to = $url[2];
        $this->model = new \arrakis\model\admin\AdminReportsSalesTotal($from, $to);

    }

    public function getTitle() {
       return "Admin Dashboard"; 
    }

    public function viewAction() {
         
     $view = new \arrakis\view\admin\AdminReportsSalesTotal($this);
     $view->page();
     
      
      }

    
    
}

?>
