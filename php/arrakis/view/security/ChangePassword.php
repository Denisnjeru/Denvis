<?php

namespace arrakis\view\security;

class ChangePassword extends \arrakis\view\View {

    public function section($model) {
        $ctrl = "arrakis\controller\security\Register";
        ?>
        <!-- Page Title -->
        <div class="section section-breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1><?= $this->title ?></h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="section main">
            <div class="container">
                <div class="row">
                    <!-- Service Menu -->
                    <div class="col-md-3 service-menu">
                        <form id="aside-search-form">                                            
                            <div class="input-group">
                                <input class="form-control input-md search " id="aside-search-field" type="text">
                                <span class="input-group-btn">
                                    <button class="btn btn-md" type="button">SEARCH</button>                                                    
                                </span>
                            </div>
                       </form>
                        <ul class="service-menu-items">
                            <li><a href="<?= PROJECT_URL ?>change-details">Account Details</a></li>
                            <li><a href="<?= PROJECT_URL ?>change-password">Security</a></li>
                            <li><a href="#">Change Address</a></li>
                        </ul>				
                    </div>   
                    <!-- End Service Menu -->     

                    <!-- Registration form -->
                    <div class="col-md-6">
                        <div class="admin-table-wrapper">
                            <div class="account" style="">
                                <div class="basic-login">
                                    <div id="response" class="form-group"></div>
                                    <form action="/" id="registrationForm" novalidate="novalidate">   


                                        <!-- Password -->

                                        <div class="form-group">
                                            <label for="register-password"><i class="icon-lock"></i> <b>New Password*</b></label>
                                            <input class="form-control" id="password" type="password" placeholder=""  value="" name="<?= $ctrl::FORM_PASSWORD ?>" pattern="^(?!.*(.)\1{2})((?=.*[\d])(?=.*[A-Za-z])|(?=.*[^\w\d\s])(?=.*[A-Za-z])).{6,20}$" required="required">
                                            <p style="font-size: 0.7em">Password must be min 6 char long, contain at least one number or symbol and do not contain repeated characters</p>
                                        </div> 
                                        <div class="form-group">
                                            <label for="register-password2"><i class="icon-lock"></i> <b>Re-enter Password*</b></label>
                                            <input class="form-control" id="password2" type="password" placeholder=""  value="" name="<?= $ctrl::FORM_PASSWORD2 ?>" pattern="^(?!.*(.)\1{2})((?=.*[\d])(?=.*[A-Za-z])|(?=.*[^\w\d\s])(?=.*[A-Za-z])).{6,20}$" required="required">
                                        </div> 
                                        <div class="form-group">

                                            <div class="form-group">                                     
                                                <button type="submit" class="btn pull-right">Confirm</button>
                                                <div class="clearfix"></div>

                                            </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!--Registration form extra commercial account fields -->
        <script>
                
            // password validation
            
            function confirmation()
            {
                var password = $('#password').val();
                var password2 = $('#password2').val();
                    
                $('#password').css('background-color', '#FFFFFF');
                $('#password2').css('background-color', '#FFFFFF');
                    
                //console.log(password + " " + password2);

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
                
                for (var i = 0; i<2 ;i++)
                {

                    var input = form[i];
                    
                    //console.dir(input);
                    
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
                    //console.log(formData);   


                    // post the data to  register-response                        
                    var posting = $.post("<?= PROJECT_URL ?>change-password-response",formData);
                    // read the response from PHP code

                    posting.done(function(data){
                        //console.log(data);   

                        try{
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
                        }catch(e)
                        { 
                            $("#response").empty().append(data);
                        }

                    });  
                }

                
                            
            });
             
        </script>
        <?php
    }

}
?>
