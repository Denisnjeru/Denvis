<?php

namespace arrakis\model\admin;

class AdminOrders extends \arrakis\model\Model {
    
    public $db = null;
    public $row = null;
    public $ps = null;
    
    public function __construct() {
        
        parent::__construct();
       
            $query = "SET time_zone = '+11:00'";
           
            $ps = $this->query($query);
            
            $query = "select users.id as id, order_id, order_date, total, email from users, orders where users.id = orders.id and status = 'approved' order by order_date desc;";

            $ps = $this->query($query);
            
    }
    
     public function getId() {
        return parent::get('id');
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
