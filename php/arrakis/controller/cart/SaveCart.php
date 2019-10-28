<?php
namespace arrakis\controller\cart;

class SaveCart extends \arrakis\controller\Controller{
        
    public function __construct($productIds)
    {
        if(\arrakis\model\security\Login::isLoggedIn())
        {         
        $this->model = new \arrakis\model\cart\SaveCart();
        }          
    }

    public function getTitle() {
        return "Save cart";
    }

    public function viewAction() {
       $response = ['success'=>'yes', 'message'=>'cart saved'];
        
        if($this->isError())
        {
            $response['success'] = 'no';
            $response['message'] = 'cart not saved';
        }
    
    echo json_encode($response);   
    }
    
}


?>
