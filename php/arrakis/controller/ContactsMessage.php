<?php
namespace arrakis\controller;

class ContactsMessage extends \arrakis\controller\Controller{
    
       
    public function __construct() {
        
       
       $r = "\arrakis\controller\Contacts";
       $name = filter_input(INPUT_POST,$r::FORM_NAME);
       $email = filter_input(INPUT_POST,$r::FORM_EMAIL);
       $phone = filter_input(INPUT_POST,$r::FORM_PHONE);
       $message = filter_input(INPUT_POST,$r::FORM_MESSAGE);
       
       
       
       $this->model = new \arrakis\model\Contacts ($name, $email, $phone, $message);
    
    }
    public function getTitle() {

    }
   
    public function viewAction() {
        $response = ['success'=>'yes', 'message'=>'Message sent'];
        
        if($this->isError())
        {
            $response['success'] = 'no';
            //$response['message'] = $this->getError();
        }
    
    echo json_encode($response); //json transorms the PHP array into a javascript array
    
    }
}
?>
