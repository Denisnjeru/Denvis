<?php
namespace arrakis\view\admin;

class AdminEditProduct extends \arrakis\view\View{
    
    
public function section($model) { 
$ctrl = "arrakis\controller\admin\AdminEditProduct";
        
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
                        <li><a href="<?= PROJECT_URL ?>admin-reports">Reports</a></li>
                    </ul>				
                </div>   
                <!-- End Service Menu -->

        <!-- Registration form -->
       <div class="col-md-9">
                    <div class="admin-table-wrapper">	                        
                        <div class="account" style="">
                                <div class="basic-login">
                                <div id="response" class="form-group"></div>
                                   <form action="/" id="editProduct" novalidate="novalidate"> 
                                       <div class="row">
                                       <div class="col-md-6">
                                       <input type="hidden" name="<?= $ctrl::FORM_PRODUCT_URL?>" value="<?= $model->getProductId() ?>">
                                       <input type="hidden" name="<?= $ctrl::FORM_CATEGORY_URL?>" value="<?= $model->getCategoryId() ?>">
                                        <div class="form-group">
                                        <label for="name"><i class="icon-user"></i> <b>Product name</b></label>
                                                <input class="form-control" id="register-email" type="text" placeholder="" value="<?= $model->getName() ?>" name="<?= $ctrl::FORM_PRODUCT_NAME?>">
                                        </div>
                                        <div class="form-group">
                                        <label for="productUrl"><i class="icon-user"></i> <b>Product URL</b></label>
                                                <input class="form-control" id="register-type" type="text" placeholder=""  value="<?= $model->getProductId() ?>" readonly >
                                        <p style="font-size: 0.7em">Unique identifier, it is not possible to edit this field.</p>
                                        </div>
                                       <div class="form-group">
                                       <label for="categoryUrl"><i class="icon-user"></i> <b>Category URL</b></label>
                                                <input class="form-control" id="register-type" type="text" placeholder=""  value="<?= $model->getCategoryId() ?>" readonly >
                                       <p style="font-size: 0.7em">Unique identifier, it is not possible to edit this field.</p> 
                                       </div>
                                        
                                        <div class="form-group">
                                        <label for="register-name"><i class="icon-user"></i> <b>Image URL</b></label>
                                                <input class="form-control" id="register-name" type="text" placeholder=""  value="<?= $model->getImage() ?>"  name="<?= $ctrl::FORM_PRODUCT_IMAGE?>" >
                                        </div>
                                        <div class="form-group">
                                        <label for="description"><i class="icon-user"></i> <b>Description</b></label>
                                        <textarea class="form-control" id="description"  rows="9" placeholder=""    name="<?= $ctrl::FORM_PRODUCT_DESCRIPTION?>"  ><?= $model->getDescription() ?></textarea>
                                        </div>
                                       <div class="form-group">
                                        <label class="checkbox">Active product
                                                <input id="" type="checkbox" name="<?= $ctrl::FORM_PRODUCT_ACTIVE?>" <?= ($model->isActive())?'checked': '' ?>>                                       <p style="font-size: 0.7em">If you uncheck the box the product will not be displayed.</p>				
                                        </label>
                                        </div>
                                       </div>
                                        
                                                                             
                                       <div class="col-md-6">
                                        <div class="form-group">
                                        <label for="price"><i class="icon-user"></i> <b>Unit Price</b></label>
                                                <input class="form-control" id="register-name" type="number" placeholder=""  value="<?= $model->getPrice() ?>"  name="<?= $ctrl::FORM_PRODUCT_PRICE?>" pattern="">
                                        <p style="font-size: 0.7em">Input price per one unit before GST.</p>
                                        </div>
                                        <div class="form-group">
                                        <label for="unit"><i class="icon-user"></i> <b>Unit</b></label>
                                                <input class="form-control" id="register-name" type="text" placeholder=""  value="<?= $model->getUnit() ?>"  name="<?= $ctrl::FORM_PRODUCT_UNIT?>" >
                                        <p style="font-size: 0.7em">Input unit (e.g.: g, ml, item).</p>
                                        </div>                                        
                                        <div class="form-group">
                                        <label for="weight"><i class="icon-user"></i> <b>Default Pack Weight/Size</b></label>
                                                <input class="form-control" id="register-name" type="number" placeholder=""  value="<?= $model->getWeightDef() ?>"  name="<?= $ctrl::FORM_PRODUCT_WEIGHT_DEFAULT?>" pattern="">
                                        <p style="font-size: 0.7em">Set the default weight of the package, if item set value to 1.</p>
                                        </div>
                                        <div class="form-group">
                                        <label for="gst"><i class="icon-user"></i> <b>Gst</b></label>
                                                <input class="form-control" id="register-name" type="number" placeholder=""  value="<?= $model->getGst() ?>"  name="<?= $ctrl::FORM_PRODUCT_GST?>" pattern="">
                                        </div>
                                        <div class="form-group">
                                        <label for="Stock"><i class="icon-user"></i> <b>Units in stock</b></label>
                                                <input class="form-control" id="register-email" type="number" placeholder="" value="<?= $model->getStock() ?>" name="<?= $ctrl::FORM_PRODUCT_STOCK?>" pattern="">
                                        <p style="font-size: 0.7em">Total of units in stock.</p>
                                        </div>
                                        <div class="form-group">
                                        <label for="Lowstock"><i class="icon-user"></i> <b>Low Stock</b></label>
                                                <input class="form-control" id="low-stock" type="number" placeholder=""  value="<?= $model->getLowStock() ?>"  name="<?= $ctrl::FORM_PRODUCT_LOW_STOCK?>" pattern="">
                                        </div>
                                       <div class="form-group">
                                       <label for="HighStock"><i class="icon-user"></i> <b>High Stock</b></label>
                                       <input class="form-control" id="high-stock" type="number" placeholder=""  value="<?= $model->getHighStock() ?>" name="<?= $ctrl::FORM_PRODUCT_HIGH_STOCK?>" pattern="">
                                        </div>                                       
                                        <div class="form-group">                                
                                            <button type="submit" class="btn pull-right">Confirm</button>
                                            <div class="clearfix"></div>
                                        </div>
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
        // attach a submit event handler to the form
        
        $("#editProduct").submit(function(event){ 

        // prevent the default operation
        event.preventDefault();

        var form = (document.getElementById("editProduct"));
        
        var validInput = true;
        
        for (var i = 0; i<11 ;i++)
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
                    var formData = $("#editProduct").serialize();
                    //console.log(formData);   


                    // post the data to  register-response                        
                    var posting = $.post("<?= PROJECT_URL ?>admin-edit-product-response",formData);
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
