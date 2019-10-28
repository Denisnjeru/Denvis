<?php
namespace arrakis\view\security;

class ResetPassword extends \arrakis\view\View{
    
    
public function section($model) {
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
    <!--Main login section -->
    <div class="section main">
	    	<div class="container">
				<div class="row">
					<div class="col-sm-6 col-sm-offset-3">
						<div class="basic-login">
                                                        <div id="reset-response" class="form-group"></div>
							<form id="reset-form" novalidate="novalidate">
								<div class="form-group" >
                                    <label for="restore-email"><i class="icon-user"></i><b>Email</b></label>
                                    <input class="form-control" id="email-for-reset" type="text" placeholder="" value="" name="<?= $ctrl::FORM_EMAIL?>" pattern="^.+@.+\..+" required="required">
                                </div>
								<div class="form-group">
									<button type="submit" class="btn pull-right">Reset Password</button>
									<div class="clearfix"></div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
   
 
        
        <!--Email validation -->
        <script>
            
            var validInput = true;
        // email validation
            $(document).ready(function(){
            
            $("#email-for-reset").on('blur',function(){
            if(this.validity.patternMismatch || this.validity.valueMissing)
            {
               $(this).css('backgroundColor','#FFC0C0');
               $("#reset-response").empty().html("Please correct invalid fields");
               validInput = false;
            } else
            {
                $("#reset-response").empty().html("Password reset link has been sent to your email");
                validInput = true;   
            }    
            }); 
            // attach a submit event handler to the form
            $("#reset-form").submit(function(event){ 
                        
            // prevent the default operation
            event.preventDefault();
            
            }); 
        });
        </script>
        <?php
            }
    }




?>
