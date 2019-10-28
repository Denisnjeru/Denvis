<?php
namespace arrakis\view\security;

class AddressForm extends \arrakis\view\View{
    
    
public function section($model) {
$ctrl = "arrakis\controller\security\AddressForm";
        
?>
                                <div class="basic-login">
                                <h3><b>Address Details</b></h3>    
                                <div id="response" class="form-group"></div>
                                <div id="edit" style="display:none">
                                        <span class="btn btn-grey">EDIT ADDRESS</span> 
                                </div>
                                   <form action="/" id="address-form" novalidate="novalidate"> 
                                       <h4><b>Billing Address</b></h4> 
                                        <?php
                                            if (\arrakis\model\security\Login::isCommercial()) {
                                        ?>              
                                        <!-- Commercial only fields -->
                                        <p>Please specify the address of the company that you have registered.<br/> You can later indicate a different shipping address.</p>   
                                        <div class="form-group">
                                        <label for="company"><i class="icon-user"></i> <b>Company Name</b></label>
                                                <input class="form-control" id="first-name" type="text" placeholder="" value="<?= $model->getCompanyName() ?>" readonly>
                                        </div>
                                       <div class="form-group">
                                        <label for="abn"><i class="icon-user"></i> <b>ABN</b></label>
                                                <input class="form-control" id="first-name" type="text" placeholder="" value="<?= $model->getAbn() ?>" readonly>
                                        </div>
                                        <!-- end commercial fields-->
                                        <?php
                                            }
                                        ?>
                                    
                                       <input type="hidden" value="<?= $model->getBAddressId() ?>" name="<?= $ctrl::FORM_B_ADDRESS_ID?>">
                                       <div class="form-group">
                                        <label for="register-first"><i class="icon-user"></i> <b>First Name</b></label>
                                                <input class="form-control" id="first-name" type="text" placeholder="" value="<?= $model->getBFirstName() ?>" name="<?= $ctrl::FORM_B_FIRST_NAME?>"  required="required" pattern="[^0-9]+">
                                        </div>
                                       <div class="form-group">
                                        <label for="register-last"><i class="icon-user"></i> <b>Last Name</b></label>
                                                <input class="form-control" id="last-name" type="text" placeholder="" value="<?= $model->getBLastName() ?>" name="<?= $ctrl::FORM_B_LAST_NAME?>" required="required" pattern="[^0-9]+">
                                        </div>
                                       <div class="form-group">
                                        <label for="register-addres-line-1"><i class="icon-user"></i> <b>Address Line 1</b></label>
                                                <input class="form-control" id="address-line-1" type="text" placeholder="" value="<?= $model->getBLine1() ?>" name="<?= $ctrl::FORM_B_LINE_1?>"  required="required">
                                        </div>
                                       <div class="form-group">
                                        <label for="register-addres-line-2"><i class="icon-user"></i> <b>Address Line 2</b></label>
                                                <input class="form-control" id="address-line-2" type="text" placeholder="" value="<?= $model->getBLine2() ?>" name="<?= $ctrl::FORM_B_LINE_2?>" >
                                        </div>
                                       <div class="form-group">
                                        <label for="city"><i class="icon-user"></i> <b>City</b></label>
                                                <input class="form-control" id="city" type="text" placeholder="" value="<?= $model->getBCity() ?>" name="<?= $ctrl::FORM_B_CITY?>" required="required" pattern="[^0-9]+">
                                        </div>
                                       <div class="form-group">
                                        <label for="state"><i class="icon-user"></i> <b>State</b></label>
                                                <input class="form-control" id="state" type="text" placeholder="eg. NSW" value="<?= $model->getBState() ?>" name="<?= $ctrl::FORM_B_STATE?>"  required="required" pattern="^[A-Z]{1,3}$">
                                        </div>
                                       <div class="form-group">
                                        <label for="postcode"><i class="icon-user"></i> <b>Postcode</b></label>
                                                <input class="form-control" id="postcode" type="text" placeholder="" value="<?= $model->getBPostcode() ?>" name="<?= $ctrl::FORM_B_POSTCODE?>"  required="required" pattern="(\d{4})">
                                        </div>
                                       <div class="form-group">
                                        <label for="postcode"><i class="icon-user"></i> <b>Phone</b></label>
                                                <input class="form-control" id="phone" type="text" placeholder="" value="<?= $model->getBPhone() ?>" name="<?= $ctrl::FORM_B_PHONE?>" pattern="^[0-9\-\+]{9,15}$">
                                        </div>
                                        
                                        <hr>
                                        <!-- Shipping address -->
                                        <h4><b>Shipping Address</b></h4>              
                                        <div class="form-group" id="billing-use-address">
                                            <label class="checkbox" id="billing-use">Use billing address
                                                <input type="checkbox" name="<?= $ctrl::FORM_USE_BILLING?>" value="use-billing-address" checked> 	
                                            </label>
                                        </div> 
                                        <div id="shipping-form" style="display:none">
                                            <input type="hidden" value="<?= $model->getSAddressId() ?>" name="<?= $ctrl::FORM_S_ADDRESS_ID?>">
                                            <div class="form-group">
                                            <label for="register-first"><i class="icon-user"></i> <b>First Name</b></label>
                                                    <input class="form-control"  type="text" placeholder="" value="<?= $model->getSFirstName() ?>" name="<?= $ctrl::FORM_S_FIRST_NAME?>" required="required" pattern="[^0-9]+">
                                            </div>
                                           <div class="form-group">
                                            <label for="register-last"><i class="icon-user"></i> <b>Last Name</b></label>
                                                    <input class="form-control"  type="text" placeholder="" value="<?= $model->getSLastName() ?>" name="<?= $ctrl::FORM_S_LAST_NAME?>" required="required" pattern="[^0-9]+">
                                            </div>
                                           <div class="form-group">
                                            <label for="register-address-line-1"><i class="icon-user"></i> <b>Address Line 1</b></label>
                                                    <input class="form-control" type="text" placeholder="" value="<?= $model->getSLine1() ?>" name="<?= $ctrl::FORM_S_LINE_1?>" required="required">
                                            </div>
                                           <div class="form-group">
                                            <label for="register-addres-line-2"><i class="icon-user"></i> <b>Address Line 2</b></label>
                                                    <input class="form-control" type="text" placeholder="" value="<?= $model->getSLine2() ?>" name="<?= $ctrl::FORM_S_LINE_2?>" >
                                            </div>
                                           <div class="form-group">
                                            <label for="city"><i class="icon-user"></i> <b>City</b></label>
                                                    <input class="form-control" type="text" placeholder="" value="<?= $model->getSCity() ?>" name="<?= $ctrl::FORM_S_CITY?>"  required="required" pattern="[^0-9]+">
                                            </div>
                                           <div class="form-group">
                                            <label for="state"><i class="icon-user"></i> <b>State</b></label>
                                                    <input class="form-control" type="text" placeholder="" value="<?= $model->getSState() ?>" name="<?= $ctrl::FORM_S_STATE?>" required="required" pattern="^[A-Z]{1,3}$">
                                            </div>
                                           <div class="form-group">
                                            <label for="postcode"><i class="icon-user"></i> <b>Postcode</b></label>
                                                    <input class="form-control" type="text" placeholder="" value="<?= $model->getSPostcode() ?>" name="<?= $ctrl::FORM_S_POSTCODE?>"  required="required" pattern="(\d{4})">
                                            </div>
                                           <div class="form-group">
                                            <label for="postcode"><i class="icon-user"></i> <b>Phone</b></label>
                                                    <input class="form-control" type="text" placeholder="" value="<?= $model->getSPhone() ?>" name="<?= $ctrl::FORM_S_PHONE?>" pattern="^[0-9\-\+]{9,15}$">
                                            </div>
                                         </div>  <!--End Shipping addresss -->
                                        
                                                                                                   
                                        <div class="form-group">                                
                                            <button type="submit" class="btn pull-right">Confirm</button>
                                            <div class="clearfix"></div>
                                        </div>
                                    </form>
                                </div>
<script>
       var valid = 11;
       var validInput;
        //show shipping address form when checkbox is unchecked
        $('#billing-use input:checkbox').change(function (){  
                var isChecked= $(this).is(':checked');
                    if(!isChecked)
                    {
                $("#shipping-form").slideDown(1000);
                valid = 20;
            } else {
                $("#shipping-form").slideUp(1000); 
                valid = 11;    
            }
        }
       );
       
       
        $("#address-form").submit(function(event){ 

        // prevent the default operation
        event.preventDefault();

        var form = (document.getElementById("address-form"));
        
        var validInput = true;
        
        for (var i = 0; i< valid ;i++)
          {

          var input = form[i];
                        
          input.style.backgroundColor = '#FFF';                

          var mismatch = input.validity.patternMismatch;

          mismatch = mismatch | (input.required && input.validity.valueMissing);
            
        if(mismatch)
              {
                input.style.backgroundColor = '#FFC0C0';
                  $("#response").empty().html("Please correct invalid fields");
                   validInput = false;
                }
            }

           if(validInput)
                {
                    // serialize the form data: all data are converted into an array 
                    var formData = $("#address-form").serialize();
                    //console.log(formData);   


                    // post the data to  register-response                        
                    var posting = $.post("<?= PROJECT_URL ?>change-address-response",formData);
                    // read the response from PHP code

                    posting.done(function(data){
                        //console.log(data);   

                        try{
                            //this is the message that was formed in the register-response  
                            var response = JSON.parse(data);

                            var message = response.message;

                            if(response.success == 'yes')
                            {
                                $("#address-form").fadeOut(1000); 
                        
                            }
                            else
                            {
                                $("#response").css('color',"#8e6e72");   
                            }

                            $("#response").empty().append(message);
                            $("#edit").fadeIn(1000);
                           
                        }catch(e)
                        { 
                            $("#response").empty().append(data);
                        }

                    });  
                }      
        });

     $('#edit').click(function (event){
               $("#response").empty();
               $("#address-form").slideDown(1000); 
               $("#edit").fadeOut(1000); 
        }
       );  
        </script>
        <?php
        
    }
}



?>
