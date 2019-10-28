<?php

namespace arrakis\model\admin;

class AdminEditCategoryResponse extends \arrakis\model\Model {

    private $successful = false;
    
    public function __construct($id, $catname, $catimage) {
        parent::__construct();
        
         
        $query = "UPDATE categories set 
            name = :name,
            image = :image
            WHERE url = :url";
        
       
        
        $parameters = array(
            ':name' => $catname,
            ':image' => $catimage,
            ':url' => $id
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

