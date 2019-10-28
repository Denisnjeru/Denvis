<?php
namespace arrakis\view\security;

class Register extends \arrakis\view\View{
    
    
public function section($model) {
$ctrl = "arrakis\controller\security\Register";
        
?>
        <!-- Page Title -->
        <div class="section section-breadcrumbs">
                <div class="container">
                        <div class="row">
                                <div class="col-md-12">
                                        <h1>Register</h1>
                                </div>
                        </div>
                </div>
        </div>

        <!-- Registration form -->
        <div class="section main">
	    	<div class="container">
                        <div class="row">
                            <div class="col-md-9 admin-table-wrapper">
                                <div class="basic-login">
                                <div id="response" class="form-group"></div>
                                    <form action="/" id="registrationForm" novalidate="novalidate">   
                                        <!-- Account type -->
                                        <div class="form-group"> 
                                            <h4><b>I would like a </b></h4>
                                            <label class="checkbox">                                             
                                                    <input id="private" type="radio" name="<?= $ctrl::FORM_ACCOUNT_TYPE?>" value="prv" checked> Private account
                                            </label>
                                            <label class="checkbox">
                                                    <input id="commercial" type="radio" name="<?= $ctrl::FORM_ACCOUNT_TYPE?>" value="cmm" > Commercial account
                                            </label>
                                            <div class="clearfix"></div>
                                            <p>More about <a href="<?= PROJECT_URL ?>faq#account" target="blank">account types</a>.</p>
                                        </div>

                                        <!-- Both private and commercial fields -->
                                        <div class="form-group">
                                            <label for="register-username"><i class="icon-user"></i> <b>Username*</b></label>
                                                <input class="form-control" id="register-username" type="text" placeholder="" value="" name="<?= $ctrl::FORM_USERNAME?>" pattern="[^0-9]+" required="required">
                                        </div>
                                        <div class="form-group">
                                            <label for="register-email"><i class="icon-user"></i> <b>Email*</b></label>
                                                <input class="form-control" id="register-email" type="text" placeholder="" value="" name="<?= $ctrl::FORM_EMAIL?>" pattern="^.+@.+\..+" required="required">
                                        </div>
                                        <!-- Password -->
                                        <div class="form-group">
                                        <label for="register-password"><i class="icon-lock"></i> <b>Password*</b></label>
                                                <input class="form-control" id="password" type="password" placeholder=""  value="" name="<?= $ctrl::FORM_PASSWORD?>" pattern="^(?!.*(.)\1{2})((?=.*[\d])(?=.*[A-Za-z])|(?=.*[^\w\d\s])(?=.*[A-Za-z])).{6,20}$" required="required">
                                                <p style="font-size: 0.7em">Password must be min 6 char long, contain at least one number or symbol and do not contain repeated characters</p>
                                        </div>                                        
                                        <div class="form-group">
                                        <label for="register-password2"><i class="icon-lock"></i> <b>Re-enter Password*</b></label>
                                                <input class="form-control" id="password2" type="password" placeholder=""  value="" name="<?= $ctrl::FORM_PASSWORD2?>" pattern="^(?!.*(.)\1{2})((?=.*[\d])(?=.*[A-Za-z])|(?=.*[^\w\d\s])(?=.*[A-Za-z])).{6,20}$" required="required">
                                        </div> 
                                        <div class="form-group">
                                        <label for="register-name"><i class="icon-user"></i> <b>Name</b></label>
                                                <input class="form-control" id="register-name" type="text" placeholder=""  value=""  name="<?= $ctrl::FORM_NAME?>" pattern="[^0-9]+">
                                        </div>
                                        <div class="form-group">
                                        <label for="register-phone"><i class="icon-user"></i> <b>Phone</b></label>
                                                <input class="form-control" id="register-phone" type="text" placeholder=""  value=""  name="<?= $ctrl::FORM_PHONE?>" pattern="^[0-9\-\+]{9,15}$">
                                        </div> 
                                        


                                        <!-- Commercial only fields -->
                                        <div id="company" style="display:none">
                                        <div class="form-group">   
                                        <label for="register-company-name"><i class="icon-lock"></i> <b>Company Name*</b></label>
                                                <input class="form-control" id="register-company-name" type="text" placeholder="" value="" name="<?= $ctrl::FORM_COMPANY_NAME?>" pattern="[^0-9]+" required="required">
                                        </div>                                                         
                                        <div class="form-group">
                                        <label for="register-abn-number"><i class="icon-lock"></i> <b>ABN Number*</b></label>				
                                        <input class="form-control" id="register-abn" type="text" placeholder="" value="" name="<?= $ctrl::FORM_ABN?>" pattern="^(\d *?){11}$" required="required">
                                        </div>                                                                
                                        </div>


                                        
                                        <!-- Newsletter opt-in -->
                                        <div class="form-group">
                                                <label class="checkbox">I would like to receive the Arrakis newsletter
                                                        <input id="newsletter" type="checkbox" name="<?= $ctrl::FORM_NEWSLETTER?>" value="newsletter" checked> 									
                                                        </label>
                                        </div>                                                            
                                        <div class="form-group">
                                            <p>By registering you agree our <a href="<?= PROJECT_URL ?>policy" target="blank">Privacy Policy</a>.</p>
                                                <button type="submit" class="btn pull-right">Register</button>
                                                <div class="clearfix"></div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        <!--Registration form extra commercial account fields -->
        <script>
        var valid = 8;          
        $(document).ready(function(){
            
            $('#commercial').on('click',function(){                
                $('#company').show(1000);
                valid = 10;
            });
            
            $('#private').on('click',function(){                
                $('#company').hide(1000); 
                valid = 8;
            });
            
        });
  
        
        // <!--Registration form validation -->

        // email validation
        $(document).ready(function(){       
            $("#register-email").on('blur',function(){
            if(this.validity.patternMismatch)
            {
               $(this).css('backgroundColor','#FFC0C0');
            }
            });    
        });

        // password validation
    
        function confirmation()
        {
            var password = $('#password').val();
            var password2 = $('#password2').val();
            
            $('#password').css('background-color', '#FFFFFF');
            $('#password2').css('background-color', '#FFFFFF');
            
            console.log(password + " " + password2);

            if(password && password2)
                {
                    if(password !== password2)
                        {
                            $('#password').css('background-color', '#FFC0C0').val('');
                            $('#password2').css('background-color', '#FFC0C0').val('');
                            $('#password').focus();
                        }
                }
        }

        $('#password').on('blur', confirmation);
        $('#password2').on('blur', confirmation);

        // attach a submit event handler to the form
        $("#registrationForm").submit(function(event){ 

        // prevent the default operation
        event.preventDefault();

        var form = (document.getElementById("registrationForm"));
        
        var validInput = true;
        
        for (var i = 0; i<valid ;i++)
            {

            var input = form[i];
            
            console.dir(input);
            
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
            var formData = $("#registrationForm").serialize();
            console.log(formData);   


               // post the data to  register-response                        
             var posting = $.post("<?= PROJECT_URL?>register-response",formData);
                // read the response from PHP code

                posting.done(function(data){
                   console.log(data);   


                   //this is the message that was formed in the register-response  
                    var response = JSON.parse(data);

                    var message = response.message;

                    if(response.success == 'yes')
                        {
                          $("#registrationForm").fadeOut(1000);                                   
                        }
                        else
                        {
                          $("#response").css('color',"#8e6e72");   
                        }

                    $("#response").empty().append(message);

                });  
                }

        
                    
        });
     
        </script>
        <?php
        
    }
}



?>
