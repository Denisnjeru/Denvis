<?php
namespace arrakis\controller\admin;

class AdminReportsBestsellers extends Admin{

    public function __construct() {
        parent::__construct();
        
        $this->model = new \arrakis\model\admin\AdminReportsBestsellers();

    }

    public function getTitle() {
       return "Admin Dashboard"; 
    }

    public function viewAction() {
        $view = new \arrakis\view\admin\AdminReportsBestsellers($this); //this instatiates a view
        $view->page();
        // inhibit DOMPDF's auto-loader\
       // require_once(ROOT . PROJECT . 'vendor/dompdf/dompdf/dompdf_config.inc.php');
       // $html = ob_get_flush();

        //generate some PDFs!
     //   $dompdf = new \DOMPDF();     //if you use namespaces you may use new \DOMPDF()
     //   $dompdf->load_html($html);
     //   $dompdf->render();
     //   $dompdf->stream("report.pdf");
            }

    
    
}

?>
