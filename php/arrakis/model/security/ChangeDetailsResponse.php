<?php

namespace arrakis\model\security;

class ChangeDetailsResponse extends \arrakis\model\Model {

    private $successful = false;
    
    public function __construct($email, $name, $phone, $newsletter) {
        parent::__construct();
        
        
        
        $query = "select email from users where email = '$email' and id != " . Login::getId();
        
        $this->query($query);
        
        $this->next();
        
        if($this->getRowCount() != 0)
        {
            $this->setError("email already registered");
            return;
        }
       
         $id = Login::getId();
         
        $query = "UPDATE users set 
            email = :email,
            name = :name,
            phone = :phone,
            newsletter = :newsletter
            WHERE id = " . Login::getId();
        
       
        
        $parameters = array(
            
            ':email' => $email,
            ':name' => $name,
            ':phone' => $phone, 
            ':newsletter' => ($newsletter)?1:0
        );

        $this->prepare($query, $parameters);
        
        $this->successful = $this->getRowCount() == 1;
        
        if(!$this->successful) $this->setError("Unable to process your request. Please try again later.");
    }

function isSuccessful()
{
    return $this->successful;
}
    
}



?>

