<?php

namespace arrakis\model\admin;

class AdminReportsSales extends \arrakis\model\Model {
    
    private $q = "";
    private $totalSum = 0;

    public function __construct($from, $to) {
        
        parent::__construct();
       
            $query = "SET time_zone = '+11:00'";
           
            $ps = $this->query($query);
            
            $this->q = "select users.id as id, order_id, order_date, account_type, total, email from users, orders where users.id = orders.id and order_date between '$from . 00:00:00' and '$to . 23:59:59' and status = 'approved' order by order_date desc;";


            $this->query($this->q);

    }
    
    
   public function again()
    {
        $this->query($this->q);
        
    }
    
     public function getId() {
        return parent::get('id');
    }
    public function getType() {
        return parent::get('account_type');
    }
    public function getEmail() {
        return parent::get('email');
    }
    
    public function getDate() {
        return parent::get('order_date');
    }
    
    public function getOrderId() {
        return parent::get('order_id');
    }
    
    public function getTotal() {
        return parent::get('total');
    }
    
    
   
    

}



?>
