<?php
namespace arrakis\view\security;

class ChangeDetails extends \arrakis\view\View{
    
    
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
                <li><a href="<?= PROJECT_URL ?>change-address">Address</a></li>
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
                                        <!-- Account type -->
                                       

                                        <!-- Both private and commercial fields -->
                                       
                                        <div class="form-group">
                                        <label for="register-email"><i class="icon-user"></i> <b>Email</b></label>
                                                <input class="form-control" id="register-email" type="text" placeholder="" value="<?= $model->getEmail() ?>" name="<?= $ctrl::FORM_EMAIL?>" pattern="^.+@.+\..+" required="required">
                                        </div>
                                        <!-- Password -->
                                        
                                        <div class="form-group">
                                        <label for="register-name"><i class="icon-user"></i> <b>Name</b></label>
                                                <input class="form-control" id="register-name" type="text" placeholder=""  value="<?= $model->getName() ?>"  name="<?= $ctrl::FORM_NAME?>" >
                                        </div>
                                        <div class="form-group">
                                        <label for="register-phone"><i class="icon-user"></i> <b>Phone</b></label>
                                                <input class="form-control" id="register-phone" type="text" placeholder="<?= $model->getPhone() ?>"  value=""  name="<?= $ctrl::FORM_PHONE?>">
                                        </div> 
                                        <!-- Newsletter opt-in -->
                                        <div class="form-group">
                                                <label class="checkbox">I would like to receive the Arrakis newsletter
                                                        <input id="newsletter" type="checkbox" name="<?= $ctrl::FORM_NEWSLETTER?>" <?= ($model->isNewsletter())?'checked': '' ?>> 									
                                                        </label>
                                        </div>                                                            
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
        <!--Registration form extra commercial account fields -->
        <script>
        // attach a submit event handler to the form
        
        $("#registrationForm").submit(function(event){ 

        // prevent the default operation
        event.preventDefault();

        var form = (document.getElementById("registrationForm"));
        
        var validInput = true;
        
        for (var i = 0; i<3 ;i++)
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
                    var formData = $("#registrationForm").serialize();
                    //console.log(formData);   


                    // post the data to  register-response                        
                    var posting = $.post("<?= PROJECT_URL ?>change-details-response",formData);
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
