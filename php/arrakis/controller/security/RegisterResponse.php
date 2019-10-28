<?php
namespace arrakis\controller\security;

class RegisterResponse extends \arrakis\controller\Controller{
    
    private $invalidEmail = false;
    
    public function __construct() {
        
       $accountType = filter_input(INPUT_POST,Register::FORM_ACCOUNT_TYPE); //this gives access to the contant that defines the array 
       $username =filter_input(INPUT_POST,Register::FORM_USERNAME);
       $password = filter_input(INPUT_POST,Register::FORM_PASSWORD);
       $password2 = filter_input(INPUT_POST,Register::FORM_PASSWORD2);
       $email = filter_input(INPUT_POST,Register::FORM_EMAIL);
       $name = filter_input(INPUT_POST,Register::FORM_NAME);
       $phone = filter_input(INPUT_POST,Register::FORM_PHONE);
       $companyName = filter_input(INPUT_POST,Register::FORM_COMPANY_NAME);
       $abn = filter_input(INPUT_POST,Register::FORM_ABN);
       $newsletter = filter_input(INPUT_POST,Register::FORM_NEWSLETTER);
       
       //private: mandatory username email and password
       $validData = ($username && $password && $password2 && $email);
       
       //commercial add these field to mandatory fields
       if($accountType == "cmm") $validData &= ($companyName && $abn);
       
       // if $newletter is null then put false into newsletter
        $newsletter = !($newsletter == null); //this condition is true if they haven't checked the box, we change it to false
       
       if($validData)
       {
           $this->model = new \arrakis\model\security\Register($accountType, $username, $password, $name, $email, $phone, $companyName, $abn, $newsletter);
            //an empty string is false by default, if these variables have value in them then they are true
       }  
       else {
           
           $this->invalidEmail = ($email == null || $email == false);   
           
           if($this->invalidEmail)
           $this->error = "Please complete the email field";    
           else
           $this->error = "Please complete all mandatory fields";
       }
       
    
    }

    public function getTitle() {
   
    }
    //this is sent back to the browser after the form is submitted
    public function viewAction() {
        $response = ['success'=>'yes', 'message'=>'Thank you for registering'];
        
        if($this->isError())
        {
            $response['success'] = 'no';
            $response['message'] = $this->getError();
        }
    
    echo json_encode($response); //json transorms the PHP array into a javascript array
    
    }
}
?>
