<?php
namespace arrakis\view;

class Contacts extends View{
    
    
    public function section($model) {
   $ctrl = "arrakis\controller\Contacts";     
        ?>
        <!-- Page Title -->
    <div class="section section-breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1><?= $this->title ?></h1>
                </div>
            </div>
        </div>
    </div>
    <div class="section main">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <!-- Contact Info -->
                    <p class="contact-us-details">
                        <b>Address:</b> 203/130 Carillon Avenue<br/>
                        <b>Phone:</b> +61 477 056 687<br/>
                        <b>Email:</b> <a href="mailto:susanna.zanatta@gmail.com">susanna.zanatta@gmail.com</a>
                    </p>
                    <!-- End Contact Info -->
                </div>
                <div class="col-sm-8">
                    <!-- Contact Form -->
                    <div class="contact-form-wrapper">
                        <div id="response" class="form-group"></div>
                        <form class="form-horizontal" id="contacts" role="form">
                            <div class="form-group">
                            <label for="Name" class="col-sm-3 control-label"><b>Your name*</b></label>
                                <div class="col-sm-9">
                                    <input class="form-control" id="Name" type="text" placeholder="" name="<?= $ctrl::FORM_NAME?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="contact-email" class="col-sm-3 control-label"><b>Your Email*</b></label>
                                <div class="col-sm-9">
                                    <input class="form-control" id="contact-email" type="text" placeholder="" name="<?= $ctrl::FORM_EMAIL?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="contact-email" class="col-sm-3 control-label"><b>Phone</b></label>
                                <div class="col-sm-9">
                                    <input class="form-control" id="contact-email" type="text" placeholder="" name="<?= $ctrl::FORM_PHONE?>">
                                </div>
                            </div>								
                            <div class="form-group">
                                <label for="contact-message" class="col-sm-3 control-label"><b>Message*</b></label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" rows="5" id="contact-message" name="<?= $ctrl::FORM_MESSAGE?>"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <button type="submit" class="btn pull-right">Send</button>
                                </div>
                            </div>
                        </form>
                    </div> 
                    <!-- End Contact form -->
                </div>
            </div>
        </div>
    </div>
 <script>
       var valid = 4;
       var validInput;
        //show shipping address form when checkbox is unchecked
       
       
       
        $("#contacts").submit(function(event){ 

     
                    // serialize the form data: all data are converted into an array 
                    var formData = $("#contacts").serialize();
                    //console.log(formData);   


                    // post the data to  register-response                        
                    var posting = $.post("<?= PROJECT_URL ?>contacts-message",formData);
                    // read the response from PHP code

                    posting.done(function(data){
                        //console.log(data);   

                        try{
                            //this is the message that was formed in the register-response  
                            var response = JSON.parse(data);

                            var message = response.message;

                            if(response.success == 'yes')
                            {
                                $("#contacts").fadeOut(1000);                                   
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
                });
        
     
        </script>
        <?php
        
    }
}



?>
