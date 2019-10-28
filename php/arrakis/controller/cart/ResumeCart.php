<?php
namespace arrakis\controller\cart;

class ResumeCart extends \arrakis\controller\Controller{
        
    public function __construct()
    {
   
        
        if(\arrakis\model\security\Login::isLoggedIn())
        {         
        $this->model = new \arrakis\model\cart\ResumeCart();
        }          
    }

    public function getTitle() {
        return "Cart";
    }

    public function viewAction() {
       $response = ['success'=>'yes', 'message'=>'cart resumed'];
        
        if($this->isError())
        {
            $response['success'] = 'no';
            $response['message'] = 'cart not resumed';
        }
    
    echo json_encode($response);   
    }
    
}


?>
