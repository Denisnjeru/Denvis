<?php
namespace arrakis\controller\security;

class ChangePasswordResponse extends \arrakis\controller\Controller{
    
    private $invalidEmail = false;
    
    public function __construct() {
        
       
       $password = filter_input(INPUT_POST,Register::FORM_PASSWORD);
       $password2 = filter_input(INPUT_POST,Register::FORM_PASSWORD2);
       

      
       $validData = ($password);
       
       if($validData)
       {
           $this->model = new \arrakis\model\security\ChangePassword($password);
            //an empty string is false by default, if these variables have value in them then they are true
       }  
       else {
           
           $this->error = "Please complete the email field";    
       }
       
    
    }
    public function getTitle() {

    }
   
    public function viewAction() {
        $response = ['success'=>'yes', 'message'=>'Your details are updated'];
        
        if($this->isError())
        {
            $response['success'] = 'no';
            $response['message'] = $this->getError();
        }
    
    echo json_encode($response); //json transorms the PHP array into a javascript array
    
    }
}
?>
