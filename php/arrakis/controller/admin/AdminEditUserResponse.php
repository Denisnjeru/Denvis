<?php
namespace arrakis\controller\admin;

class AdminEditUserResponse extends Admin{
    
    private $invalidEmail = false;
    
    public function __construct() {
       parent::__construct();
       $r = "\arrakis\controller\security\Register";
        
       $id = filter_input(INPUT_POST,$r::FORM_ACCOUNT_ID);
       $name = filter_input(INPUT_POST,$r::FORM_NAME);
       $phone = filter_input(INPUT_POST,$r::FORM_PHONE);
       $companyName = filter_input(INPUT_POST,$r::FORM_COMPANY_NAME);
       $abn = filter_input(INPUT_POST,$r::FORM_ABN);
       $newsletter = filter_input(INPUT_POST,$r::FORM_NEWSLETTER);
       
      
       
       // if $newletter is null then put false into newsletter
        $newsletter = !($newsletter == null); //this condition is true if they haven't checked the box, we change it to false
           
       //$validData = ('');
       
       //if($validData)
       //{
           $this->model = new \arrakis\model\admin\AdminEditUserResponse ($id, $name, $phone, $companyName, $abn, $newsletter);
            //an empty string is false by default, if these variables have value in them then they are true
      // }  
      // else {
           
           //$this->error = "Please complete the email field";    
       //}
       
    
    }
    public function getTitle() {

    }
   
    public function viewAction() {
        $response = ['success'=>'yes', 'message'=>'Details updated successfully'];
        
        if($this->isError())
        {
            $response['success'] = 'no';
            $response['message'] = $this->getError();
        }
    
    echo json_encode($response); //json transorms the PHP array into a javascript array
    
    }
}
?>
