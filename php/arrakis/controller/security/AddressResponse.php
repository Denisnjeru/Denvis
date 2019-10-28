<?php
namespace arrakis\controller\security;

class AddressResponse extends \arrakis\controller\Controller{
    
    private $invalidEmail = false;
    public 
       $bAddressId,
       $bFirstName,
       $bLastName,
       $bLine1,
       $bLine2,
       $bCity,
       $bState,
       $bPostcode,
       $bPhone,
       $useBilling,
       $sAddressId,
       $sFirstName,
       $sLastName,
       $sLine1,
       $sLine2,
       $sCity,
       $sState,
       $sPostcode,
       $sPhone;
       
    public function __construct() {
        
       
       $r = "\arrakis\controller\security\AddressForm";
       $this->bAddressId = filter_input(INPUT_POST,$r::FORM_B_ADDRESS_ID);
       $this->bFirstName = filter_input(INPUT_POST,$r::FORM_B_FIRST_NAME);
       $this->bLastName = filter_input(INPUT_POST,$r::FORM_B_LAST_NAME);
       $this->bLine1 = filter_input(INPUT_POST,$r::FORM_B_LINE_1);
       $this->bLine2 = filter_input(INPUT_POST,$r::FORM_B_LINE_2);
       $this->bCity = filter_input(INPUT_POST,$r::FORM_B_CITY);
       $this->bState = filter_input(INPUT_POST,$r::FORM_B_STATE);
       $this->bPostcode = filter_input(INPUT_POST,$r::FORM_B_POSTCODE);
       $this->bPhone = filter_input(INPUT_POST,$r::FORM_B_PHONE);
       $this->useBilling = filter_input(INPUT_POST,$r::FORM_USE_BILLING);
       $this->sAddressId = filter_input(INPUT_POST,$r::FORM_S_ADDRESS_ID);
       $this->sFirstName = filter_input(INPUT_POST,$r::FORM_S_FIRST_NAME);
       $this->sLastName = filter_input(INPUT_POST,$r::FORM_S_LAST_NAME);
       $this->sLine1 = filter_input(INPUT_POST,$r::FORM_S_LINE_1);
       $this->sLine2 = filter_input(INPUT_POST,$r::FORM_S_LINE_2);
       $this->sCity = filter_input(INPUT_POST,$r::FORM_S_CITY);
       $this->sState = filter_input(INPUT_POST,$r::FORM_S_STATE);
       $this->sPostcode = filter_input(INPUT_POST,$r::FORM_S_POSTCODE);
       $this->sPhone = filter_input(INPUT_POST,$r::FORM_S_PHONE);

       $uBilling = !($this->useBilling == null);
       
       $this->model = new \arrakis\model\security\AddressResponse ($this->bAddressId, $this->bFirstName, $this->bLastName, $this->bLine1, $this->bLine2, $this->bCity, $this->bState, $this->bPostcode, $this->bPhone, $uBilling, $this->sAddressId, $this->sFirstName, $this->sLastName, $this->sLine1, $this->sLine2, $this->sCity, $this->sState, $this->sPostcode, $this->sPhone);
    
    }
    public function getTitle() {

    }
   
    public function viewAction() {
        $response = ['success'=>'yes', 'message'=>'Your details are updated'];
        
        if($this->isError())
        {
            $response['success'] = 'no';
            //$response['message'] = $this->getError();
        }
    
    echo json_encode($response); //json transorms the PHP array into a javascript array
    
    }
}
?>
