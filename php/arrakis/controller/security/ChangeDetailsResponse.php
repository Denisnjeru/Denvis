<?php
namespace arrakis\controller\security;

class ChangeDetailsResponse extends \arrakis\controller\Controller{
    
    private $invalidEmail = false;
    
    public function __construct() {
        
       
       $email = filter_input(INPUT_POST,Register::FORM_EMAIL);
       $name = filter_input(INPUT_POST,Register::FORM_NAME);
       $phone = filter_input(INPUT_POST,Register::FORM_PHONE);
       $newsletter = filter_input(INPUT_POST,Register::FORM_NEWSLETTER);
       
      
       
       // if $newletter is null then put false into newsletter
        $newsletter = !($newsletter == null); //this condition is true if they haven't checked the box, we change it to false
           
       $validData = ($email);
       
       if($validData)
       {
           $this->model = new \arrakis\model\security\ChangeDetailsResponse($email, $name, $phone, $newsletter);
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
