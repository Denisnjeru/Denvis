<?php
namespace arrakis\controller\admin;

class AdminReportsUsers extends Admin{

    public function __construct($url) {
        parent::__construct();
        
        $city = $url[1];
        $state = $url[2];
        $postcode = $url[3];
        $this->model = new \arrakis\model\admin\AdminReportsUsers($city, $state, $postcode);

    }

    public function getTitle() {
       return "Admin Dashboard"; 
    }

    public function viewAction() {
         
        $view = new \arrakis\view\admin\AdminReportsUsers($this);

        require_once(ROOT . PROJECT . 'vendor/dompdf/dompdf/dompdf_config.inc.php');
        ob_start();
        //this instatiates a view
        $view->table($this->model);
      

        $html = ob_get_contents();

  
        ob_end_clean();
        
   
       $dompdf = new \DOMPDF();     //if you use namespaces you may use new \DOMPDF()
        $dompdf->load_html($html);
        $dompdf->render();
       if(file_exists(REPORT ."users.pdf")) unlink(REPORT ."users.pdf");
      // generate PDF and store it to file.
      file_put_contents(REPORT ."users.pdf", $dompdf->output( array("compress" => 0) ));
      
     
     $this->model->again();
     $view->page();
     
      
      }

    
    
}

?>
