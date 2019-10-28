<?php
namespace arrakis\controller\admin;

class AdminReportsSales extends Admin{

    public function __construct($url) {
        parent::__construct();
        
        $from = $url[1];
        $to = $url[2];
        $this->model = new \arrakis\model\admin\AdminReportsSales($from, $to);

    }

    public function getTitle() {
       return "Admin Dashboard"; 
    }

    public function viewAction() {
         
        $view = new \arrakis\view\admin\AdminReportsSales($this);

        require_once(ROOT . PROJECT . 'vendor/dompdf/dompdf/dompdf_config.inc.php');
        ob_start();
        //this instatiates a view
        $view->table($this->model);
      

        $html = ob_get_contents();

  
        ob_end_clean();
        
   
       $dompdf = new \DOMPDF();     //if you use namespaces you may use new \DOMPDF()
        $dompdf->load_html($html);
        $dompdf->render();
       if(file_exists(REPORT ."sales.pdf")) unlink(REPORT ."sales.pdf");
      // generate PDF and store it to file.
      file_put_contents(REPORT ."sales.pdf", $dompdf->output( array("compress" => 0) ));
      
     
     $this->model->again();
     $view->page();
     
      
      }

    
    
}

?>
