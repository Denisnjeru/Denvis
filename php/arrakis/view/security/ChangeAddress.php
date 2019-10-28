<?php
namespace arrakis\view\security;

class ChangeAddress extends \arrakis\view\View{
    
    
public function section($model) {
        
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
       <div class="col-md-9">
                    <div class="admin-table-wrapper">	 
                        <div class="account" style="">
                             <?php
     
                                if(!$this->controller->getError())
                                  {
                                      $this->controller->getAddressForm()->viewAction();
                                  }
                            ?>    
                            
                            
                            </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>

 
        
        <?php
        
    }
}



?>
