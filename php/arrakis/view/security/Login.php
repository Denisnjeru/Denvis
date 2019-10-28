<?php
namespace arrakis\view\security;

class Login extends \arrakis\view\View{
    
    
public function section($model) {
if(\arrakis\model\security\Login::isLoggedIn())
       {
        ?>
<!-- Breadcrumbs -->
    <div class="section section-breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1><?= $this->title ?></h1>
                </div>
            </div>
        </div>
    </div>
    <!-- END Breadcrumbs -->
    <!--Main login section -->
    <div class="section main">
        <div class="container">
            <div class="row">
                <div class="col-sm-5">
                    <div class="basic-login">
                        <div id="login-response" class="form-group"></div>
                        <form action="/" id="loginForm">
                                <div class="form-group">
                                    <h4><b>You are logged in!</b></h4>  
                                </div>	
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <?php
           
       }
        else 
            {
     
        $ctrl = "arrakis\controller\security\Register";
        
        ?>
        <!-- Breadcrumbs -->
    <div class="section section-breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1><?= $this->title ?></h1>
                </div>
            </div>
        </div>
    </div>
    <!-- END Breadcrumbs -->
        <!-- Login form -->
        <div class="section main">
            <div class="container">
                <div class="row">
                    <div class="col-sm-5">
                        <div class="basic-login">
                            <div id="login-response" class="form-group"></div>
                            <form action="/" id="loginForm">
                                <div class="form-group">
                                    <label for="login-email"><i class="icon-user"></i><b>Email</b></label>
                                    <input class="form-control" id="register-email" type="text" placeholder="" value="" name="<?= $ctrl::FORM_EMAIL?>" pattern="^.+@.+\..+">
                                </div>
                                <div class="form-group">
                                    <label for="login-password"><i class="icon-lock"></i> <b>Password</b></label>
                                    <input class="form-control" id="register-password" type="password" placeholder=""    name="<?= $ctrl::FORM_PASSWORD?>">
                                </div>
                                <div class="form-group">
                                     <!--<a href="#reset-password" class="forgot-password">Forgot password?</a>-->
                                    <button type="submit" class="btn pull-right">Login</button>
                                    <div class="clearfix"></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
        
        <!--Login validation -->
        <script>
         
              // attach a submit event handler to the form
                    $("#loginForm").submit(function(event){ 
                   
                        // prevent the default operation
                      event.preventDefault();
                        // serialize the form data: all data are converted into an array 
                        var formData = $("#loginForm").serialize();
                        console.log(formData);   
                          
                         
                       // post the data to  register-response                        
                       var posting = $.post("<?= PROJECT_URL?>login-response",formData);
                        // read the response from PHP code
                        
                        posting.done(function(data){
                           console.log(data);   
                            
                        try{
                           //this is the message that was formed in the register-response  
                            var response = JSON.parse(data);

                            var message = response.message;

                            if(response.success == 'yes')
                                {
                                  location.reload();                                   
                                }
                                else
                                {
                                  $("#login-response").css('color',"brown");
                                   $("#login-response").empty().append(message);
                                }
                                
                            $("#login-response").empty().append(message);
                            
                        }catch(e){
                             $("#login-response").empty().append(data);
                        }
                        
                    });
               
                 });  
        </script>
        <?php
            }
    }
}



?>
