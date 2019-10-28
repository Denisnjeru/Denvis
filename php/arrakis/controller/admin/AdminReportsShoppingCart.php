<?php
namespace arrakis\controller\admin;

class AdminReportsShoppingCart extends Admin{
        
    public function __construct() {
        parent::__construct();
        
        $this->model = new \arrakis\model\admin\AdminReportsShoppingCart();

    }

    public function getTitle() {
       return "Admin Dashboard"; 
    }

    public function viewAction() {
        $view = new \arrakis\view\admin\AdminReportsShoppingCart($this); //this instatiates a view
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
