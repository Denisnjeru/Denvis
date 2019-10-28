<?php
namespace arrakis\controller\admin;

class Newsletter extends Admin{
    
    private $emailSent = false;
    private $email = 'susanna.zanatta@gmail.com';
    
    public function __construct($url) {
       parent::__construct();        
        $id = $url[1];
        
       $this->model = new \arrakis\model\admin\Newsletter($id);
  
        $this->email();
    }

    
    public function getMessage() {
        return ( $this->emailSent)?"email sent":"email not sent";

    }
    
    public function email() {

        $mail = new \PHPMailer;
        
    
// Set PHPMailer to use the sendmail transport
        $mail->isSMTP();
//Set who the message is to be sent from
        $mail->setFrom($this->email, 'Susanna');
        

//Set an alternative reply-to address
        $mail->addReplyTo($this->email, 'Susanna');
      
        while($this->model->next())
        {   
        $mail->addAddress($this->model->getEmail(), $this->model->getName());
        }
      
//Set who the message is to be sent to
 //       $mail->addAddress($this->email, 'Paul');
 //       while($this->model->next())
 //       {
//        $mail->addAddress($this->model->getEmail(), $this->model->getName());
 //       }
//Set the subject line
        $mail->Subject = 'Arrakis Spice Emporium - Catalogue';
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
        $mail->msgHTML("<p>Hi,</p><p>Please find attached the Arrakis catalogue.</p><p>We hope you like our products!</p>");
//Replace the plain text body with one created manually
        $mail->AltBody = 'This is a plain-text message body';
//Attach an image file

        $mail->addAttachment(NEWSLETTER . "oct2015.pdf");
     
//send the message, check for errors
        $this->emailSent = $mail->send();

    }

    public function getTitle() {
            return "Newsletter";
    }

    public function isEmailSent()
    {
        return $this->emailSent;
    }



}


?>
