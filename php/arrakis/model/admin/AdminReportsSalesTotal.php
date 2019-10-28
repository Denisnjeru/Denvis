<?php

namespace arrakis\model\admin;

class AdminReportsSalesTotal extends \arrakis\model\Model {
    
    public $fromDate = '';
    public $toDate = '';
   


    public function __construct($from, $to) {
        
        parent::__construct();
       
            $query = "SET time_zone = '+11:00'";
           
            $ps = $this->query($query);
            
            $query = "select sum(total) as totalSum from orders where order_date between '$from . 00:00:00' and '$to . 23:59:59' and status = 'approved';";
            

            $this->query($query);
            
            
            $this->fromDate = $from .' -  h 00:00:00' ;
            $this->toDate = $to . ' -  h 23:59:59';
    }
    
   
     public function getTotalSum() {
        return parent::get('totalSum');
    }
    public function getFrom() {
        return $this->fromDate;
    }
    public function getTo() {
        return $this->toDate;
    }
    
   
    

}



?>
