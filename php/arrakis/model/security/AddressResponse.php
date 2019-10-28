<?php

namespace arrakis\model\security;

class AddressResponse extends \arrakis\model\Model {

    private $successful = false;
    
    public function __construct($bAddressId, $bFirstName, $bLastName, $bLine1, $bLine2, $bCity, $bState, $bPostcode, $bPhone, $uBilling, $sAddressId, $sFirstName, $sLastName, $sLine1, $sLine2, $sCity, $sState, $sPostcode, $sPhone) {
        
        parent::__construct();
       
        
       if(empty($bAddressId) == false)
        {
            // update existing address
            $query = "update address set 
            first_name = :first,
            last_name = :last,
            line_1 = :line_1,
            line_2 = :line_2,
            city = :city,
            state = :state,
            postcode = :postcode,
            phone = :phone
            WHERE addr_id = :addr_id";
            
            $parameters = array(
            ':first' => $bFirstName,
            ':last' => $bLastName,
            ':line_1' => $bLine1,
            ':line_2' => $bLine2,
            ':city' => $bCity,
            ':state' => $bState,
            ':postcode' => $bPostcode,
            ':phone' => $bPhone,
            ':addr_id' => $bAddressId
            ); 
            
            $this->prepare($query, $parameters);
           
            // insert into  user address id
            if ($uBilling == true) { 

           $query = "update users set shipping_address = :addr_id where id = " . Login::getId();
           $this->prepare($query,[":addr_id"=> $bAddressId]);
           
             }
            
        }
        else 
        {
            // insert into address
            $query = "insert into address set
            first_name = :first,
            last_name = :last,
            line_1 = :line_1,
            line_2 = :line_2,
            city = :city,
            state = :state,
            postcode = :postcode,
            phone = :phone,
            id = :id";
            
            $parameters = array(
            ':first' => $bFirstName,
            ':last' => $bLastName,
            ':line_1' => $bLine1,
            ':line_2' => $bLine2,
            ':city' => $bCity,
            ':state' => $bState,
            ':postcode' => $bPostcode,
            ':phone' => $bPhone,
            ':id'=> Login::getId()
            ); 
            
            $this->prepare($query, $parameters);
           
            $id = $this->getLastId();
            // insert into  user address id
            $query = "update users set billing_address = :id where id = " . Login::getId();
             $this->prepare($query,[":id"=> $id]);
            
             if ($uBilling == true) { 
       
           $query = "update users set shipping_address = :id where id = " . Login::getId();
          $this->prepare($query,[":id"=> $id]);
            
             }
            
        }
     
        
           if ($uBilling == false) { 
       
           if(empty($sAddressId) == false && $sAddressId == $bAddressId) {
           $query = "update users set shipping_address = null where id = " . Login::getId();
           $this->execute($query); 
           
           $query = "delete from address where addr_id != :id and id = " . Login::getId();
           $this->prepare($query,[":id"=> $bAddressId]);
       
        
         // insert into address
            $query = "insert into address set
            first_name = :first,
            last_name = :last,
            line_1 = :line_1,
            line_2 = :line_2,
            city = :city,
            state = :state,
            postcode = :postcode,
            phone = :phone,
            id = :id";
            
            $parameters = array(
            ':first' => $sFirstName,
            ':last' => $sLastName,
            ':line_1' => $sLine1,
            ':line_2' => $sLine2,
            ':city' => $sCity,
            ':state' => $sState,
            ':postcode' => $sPostcode,
            ':phone' => $sPhone,
            ':id'=> Login::getId()
            ); 
            
            $this->prepare($query, $parameters);
            
            $id = $this->getLastId();
            // insert into  user address id
            $query = "update users set shipping_address = :id where id = " . Login::getId();
            $this->prepare($query,[":id"=> $id]);
            
            
    }  else if (empty($sAddressId) == false && $sAddressId != $bAddressId) {
        
        
        $query = "update users set shipping_address = :id where id = " . Login::getId();
        $this->prepare($query,[":id"=> $sAddressId]);
        
         // update existing address
            $query = "update address set 
            first_name = :first,
            last_name = :last,
            line_1 = :line_1,
            line_2 = :line_2,
            city = :city,
            state = :state,
            postcode = :postcode,
            phone = :phone
            WHERE addr_id = :addr_id";
            
            $parameters = array(
            ':first' => $sFirstName,
            ':last' => $sLastName,
            ':line_1' => $sLine1,
            ':line_2' => $sLine2,
            ':city' => $sCity,
            ':state' => $sState,
            ':postcode' => $sPostcode,
            ':phone' => $sPhone,
            ':addr_id' => $sAddressId
            ); 
            
            $this->prepare($query, $parameters);
        
        } else if (empty($sAddressId) == true) {
        
          // insert into address
            $query = "insert into address set
            first_name = :first,
            last_name = :last,
            line_1 = :line_1,
            line_2 = :line_2,
            city = :city,
            state = :state,
            postcode = :postcode,
            phone = :phone,
            id = :id";
            
            $parameters = array(
            ':first' => $sFirstName,
            ':last' => $sLastName,
            ':line_1' => $sLine1,
            ':line_2' => $sLine2,
            ':city' => $sCity,
            ':state' => $sState,
            ':postcode' => $sPostcode,
            ':phone' => $sPhone,
            ':id'=> Login::getId()
            ); 
            
            $this->prepare($query, $parameters);  
            
            $id = $this->getLastId();
            // insert into  user address id
            $query = "update users set shipping_address = :id where id = " . Login::getId();
            $this->prepare($query,[":id"=> $id]);
        }
        
    }
        
        $this->successful = $this->getRowCount() == 1;
        
        if(!$this->successful)
        {
           // $this->setError("Unable to process your request. Please try again later.");
        }
    }

function isSuccessful()
{
    return $this->successful;
}

}



?>

