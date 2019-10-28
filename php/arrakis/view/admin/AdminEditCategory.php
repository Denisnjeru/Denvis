<?php
namespace arrakis\view\admin;

class AdminEditCategory extends \arrakis\view\View{
    
    
public function section($model) { 
$ctrl = "arrakis\controller\admin\AdminEditCategory";
        
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
                        <li><a href="<?= PROJECT_URL ?>admin">Users</a></li>
                        <li><a href="<?= PROJECT_URL ?>admin-categories">Categories</a></li>
                        <li><a href="<?= PROJECT_URL ?>admin-products">Products</a></li>
                        <li><a href="<?= PROJECT_URL ?>admin-reportss">Reports</a></li>
                    </ul>				
                </div>   
                <!-- End Service Menu -->

        <!-- Registration form -->
       <div class="col-md-6">
                    <div class="admin-table-wrapper">	
                        
                        <div class="account" style="">
                                <div class="basic-login">
                                <div id="response" class="form-group"></div>
                                   <form action="/" id="editCategory" novalidate="novalidate">   
                                       <input type="hidden" name="<?= $ctrl::FORM_CAT_URL?>" value="<?= $model->getCategoryId() ?>">
                                        <div class="form-group">
                                        <label for="register-email"><i class="icon-user"></i> <b>Category name</b></label>
                                                <input class="form-control" id="register-email" type="text" placeholder="" value="<?= $model->getName() ?>" name="<?= $ctrl::FORM_CAT_NAME?>">
                                        </div>
                                        <div class="form-group">
                                        <label for="register-type"><i class="icon-user"></i> <b>Category URL</b></label>
                                                <input class="form-control" id="register-type" type="text" placeholder=""  value="<?= $model->getCategoryId() ?>" readonly >
                                        <p style="font-size: 0.7em">Unique identifier, it is not possible to edit this field..</p>
                                        </div>
                                        
                                        <div class="form-group">
                                        <label for="register-name"><i class="icon-user"></i> <b>Image URL</b></label>
                                                <input class="form-control" id="register-name" type="text" placeholder=""  value="<?= $model->getCategoryImage() ?>"  name="<?= $ctrl::FORM_CAT_IMAGE?>" >
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
        
        $("#editCategory").submit(function(event){ 

        // prevent the default operation
        event.preventDefault();

        var form = (document.getElementById("editCategory"));
        
        var validInput = true;
        
        for (var i = 0; i<2 ;i++)
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
                    var formData = $("#editCategory").serialize();
                    //console.log(formData);   


                    // post the data to  register-response                        
                    var posting = $.post("<?= PROJECT_URL ?>admin-edit-category-response",formData);
                    // read the response from PHP code

                    posting.done(function(data){
                        //console.log(data);   

                        try{
                            //this is the message that was formed in the register-response  
                            var response = JSON.parse(data);

                            var message = response.message;

                            if(response.success == 'yes')
                            {
                                $("#response").css('color',"#000");                                   
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
