<?php

namespace arrakis\model;

class Contacts extends \arrakis\model\Model {

    
    
   public function __construct($name, $email, $phone, $message) {

        parent::__construct();
        // Mail of sender
        $mail_from="$email"; 

        // From 
        $header="from: $name";

        // Enter your email address
        $to ='susanna.zanatta@gmail.com';
        $subject = 'Arrakis enquiry';
        $send_contact = mail($to,$subject,$message,$header);

// Check, if message sent to your email 
// display message "We've recived your information"
   

    
        
        if(!$this->successful){
            $this->setError("Unable to process your request. Please try again later.");
        }
    }

function isSuccessful()
{
    return $send_contact;
}

    
}


?>

