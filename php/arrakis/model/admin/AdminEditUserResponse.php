<?php

namespace arrakis\model\admin;

class AdminEditUserResponse extends \arrakis\model\Model {

    private $successful = false;
    
    public function __construct($id, $name, $phone, $companyName, $abn, $newsletter) {
        parent::__construct();
        
        
        
        
         
        $query = "UPDATE users set 
            name = :name,
            phone = :phone,
            c_name = :c_name,
            abn = :abn,
            newsletter = :newsletter
            WHERE id = " . $id;
        
       
        
        $parameters = array(
            ':name' => $name,
            ':phone' => $phone, 
            ':c_name' => $companyName, 
            ':abn' => $abn, 
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

