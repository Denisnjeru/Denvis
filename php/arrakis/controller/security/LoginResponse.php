<?php
namespace arrakis\controller\security;

class LoginResponse extends \arrakis\controller\Controller{
    
    private $invalidEmail = false;
    
    public function __construct() {
        
       $email = filter_input(INPUT_POST,Register::FORM_EMAIL);
       $password = filter_input(INPUT_POST,Register::FORM_PASSWORD);
       
       //private: mandatory username email and password
       $validData = ($email && $password);
    
       if($validData)
       {
           $this->model = new \arrakis\model\security\Login($email, $password);
            //an empty string is false by default, if these variables have value in them then they are true
       }  
       else {
           $this->error = "Please complete the email and password fields";    
       }
    }

    public function getTitle() {
   
    }
    //this is sent back to the browser after the form is submitted
    public function viewAction() {
        $response = ['success'=>'yes', 'message'=>''];
        
        if($this->isError())
        {
            $response['success'] = 'no';
            $response['message'] = $this->getError();
        }
    
    echo json_encode($response); //json transorms the PHP array into a javascript array
    
    }
}
?>
