<?php
namespace arrakis\view\cart;

class Checkout extends \arrakis\view\cart\Cart {

    public function section($model) {
        $this->editable = false;
        parent::section($model);
        
        
        if (\arrakis\model\cart\Cart::isCart()) {
        ?> 

                </div>
           </div>
        </div>   
        <!-- Closing tags from cart page -->
        
        <div id="buttons">
        <!-- promo placeholder -->
            <div class="col-md-4  col-md-offset-0 col-sm-6 col-sm-offset-6"></div>
        <!-- shipment placeholder -->
            <div class="col-md-4 col-md-offset-0 col-sm-6 col-sm-offset-6"></div>
        <!-- buttons -->
             <div class="col-md-4 col-md-offset-0 col-sm-6 col-sm-offset-6">
                 <div class="pull-right">
                    <a href="<?= PROJECT_URL ?>products/native-australian" class="btn btn-grey">BACK TO SHOP</a>
                    <div id="show-payment" class="btn">CONFIRM ORDER</div>
                </div>
            </div>
       </div>
<!-- Address form -->
<div id="confirmed" class="container" style="display:none">
        <div class="col-md-6 admin-table-wrapper">
            
            <?php
     
            if(!$this->controller->getError())
              {
                  $this->controller->getAddressForm()->viewAction();
              }
            ?>
            
        </div>
        <div class="col-md-1"></div> 

<!-- Payment -->              
        <div class="col-md-5 admin-table-wrapper">
            <div class="basic-login">
                <form action="/" id="payment" novalidate="novalidate">
                    <h4><b>Select Payment Type</b></h4>   
                    <div class="form-group">
                        <label class="checkbox">  
                        <input type="radio" name="payment_type" value="paypal" id='ppButton' checked ><img src="https://www.paypalobjects.com/webstatic/en_US/i/buttons/pp-acceptance-small.png" alt="PayPal" style="padding: 0 2%; height: 20px" />(PayPal)
                        </label>
                        <label class="checkbox">   
                        <input type="radio" name="payment_type" value="credit card"  id='ccButton'><img src="http://www.credit-card-logos.com/images/visa_credit-card-logos/visa_mastercard_2.gif" style="padding: 0 2%; height: 20px"/>(Credit/Debit Card)
                        </label>
                    </div>
                    <div class="" id='ccPanel' style="display:none;">
                        <h4><b>Card details</b></h4> 
                        <div class="form-group">
                            <label class="checkbox">
                                <input type="radio" name="payment_type" value="mastercard" id='mastercard' checked ><img src="http://www.credit-card-logos.com/images/mastercard_credit-card-logos/mastercard_logo_3.gif" style="padding: 0 2%; height: 20px"/>Mastercard
                            </label>
                            <label class="checkbox">
                                <input type="radio" name="payment_type" value="visa"  id='visa'><img src="http://www.credit-card-logos.com/images/visa_credit-card-logos/visa_logo_2.gif"style="padding: 0 2%; height: 20px"/>Visa
                            </label>
                        </div>
                        <div class="form-group">
                            <label>First name</label>  
                                <input class='form-control' type="text" name="fname_cc" pattern="[a-zA-Z ]{1,50}" required>
                        </div>
                        <div class="form-group">
                            <label>Last name</label>  
                                <input class='form-control' type="text" name="lname_cc" pattern="[a-zA-Z ]{1,50}" required>
                        </div>
                        <div class="form-group">
                            <label>Card number</label>  
                                <input class='form-control' type="text" name="cc" pattern="\d{16}" required>
                        </div>
                        <div class="form-group">
                            <label>Cvv</label>  
                                <input class='form-control' type="text" name="cvv" pattern="^\d{3,4}$" required style='width:3em' required>
                        </div>
                        <div class="form-group">
                            <label>Expiry date : </label>
                                <select name="month" id="month" type='switch'>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                </select>
                                <select  name="year" id="year">
                                    <?php
                                    $currrentYear = (int)date("Y");

                                    for ($i = 0; $i < 20; $i++) {
                                        $year = $currrentYear + $i;
                                        echo "<option value='$year'>$year</option>";
                                    }
                                    ?>
                                </select>
                        </div>
                    </div> 
                     </form>
                
                    <div class="row">
                        <div class="form-action" id="payment-button">
                           <!-- <button id='makePayment' class="btn  pull-right" name='make payment' style="margin-right: 3%">Make payment</button> -->						   <button  class="btn  pull-right"  style="margin-right: 3%">Make payment</button>
                           
                        </div>
                    </div>
          
                <p style="padding-top: 2%">By confirming the order you agree our <a href="<?= PROJECT_URL ?>policy" target="blank">Policy and Conditions</a>.</p>
                   
                    <div class="form-group">
                        <div id="message"></div>
                    </div>
         
            </div>
        </div>
    </div> <!--end confirmed-->
</div>
</div>
</div>

<script>
                
          //show payment section when confirm button is clicked
        $('#show-payment').click(function (event){
                 $("#buttons").fadeOut(1000);
               $("#confirmed").slideDown(1000); 
        }
       );  
       
       
        //show credit card panel
        $('#ccButton').click(function (event){  
               $('#ccPanel').slideDown(1000);
        }
       );
        
              $('#ppButton').click(function (event){  
               $('#ccPanel').slideUp(1000);   
        }
       );  
        
  
            $('#makePayment').on('click',
                    function(){

                        $(this).attr("disable","disable");
                       
                       data = '';

                        $('#message').html("<div style='text-align:center'>saving cart to database, please wait</div>");

                        $.post('<?= PROJECT_URL ?>payment?x='+Math.random(),data,
                      
                            function(text){
                                try{
                                console.dir(text);
                                message =  JSON.parse(text);
                                console.dir(message);
                                if(message.href)
                                {
                                $('#message').html("<div style='text-align:center'>redirecting to PayPal</div>");    
                                location.href = message.href;
                                }
                                else
                                {
                                $('#message').html("<div style='text-align:center'>" + message.error + '</div>'); 
                                }
                                }catch(e)
                                {
                                      $('#message').html(text);  
                                }
                        });
                                   
        });
                    
</script>
        <?php
    }
    }

}
