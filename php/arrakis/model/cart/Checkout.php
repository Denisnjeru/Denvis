<?php
namespace arrakis\model\cart;

/**
 */

class Checkout extends \arrakis\model\cart\Cart{

    private $salt = 'xxx';
    private $saltedPassword = 'no salt';
    private $loggedIn = false;
    
    public function __construct() {
        parent::__construct("","","",0);
        // z$this->address = new address();
    }
    
    //
    /* public function getAddress()
    {
        return $this->address;
    }
    */
}

?>
