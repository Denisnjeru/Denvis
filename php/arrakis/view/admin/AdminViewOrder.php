<?php
namespace arrakis\view\admin;

class AdminViewOrder extends \arrakis\view\View{
    
    
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
            <div class="row admin-response"><p><?= $this->controller->getMessage() ?></p></div>
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
                        <li><a href="<?= PROJECT_URL ?>admin-orders">Orders</a></li>
                        <li><a href="<?= PROJECT_URL ?>admin-reports">Reports</a></li>
                    </ul>				
                </div>   
                <!-- End Service Menu -->              
                <div class="col-md-9" style="margin-top: 2%">                    
                    <div class="row">
                        <div class="basic-login" style="padding: 0 5%; margin-bottom: 1%">                           
                            <!-- Table wih dtabase results -->
                            <div class="row">
                             <div class="col-md-12 text-center">   
                            <h4><b>Order Id: <?= $model->getOrdId() ?><br/>
                            Total: $ <?= $model->getTot() ?></b></h4> 
                            </div>
                            </div>
                            </div>
                            <div class="basic-login" style="padding: 0 5%">    
                            <div class="row">
                                <div class="col-md-6">
                            <h4><b>Billing Address:</b></h4>
                            <p>Name: <?= $model->getBFirstName() . ' ' . $model->getBLastName() ?><br/>
                            Address: <?= $model->getBLine1() . '' . $model->getBLine2() ?><br/>
                            City: <?= $model->getBCity() ?><br/>
                            State: <?= $model->getBState() ?><br/>
                            Postcode: <?= $model->getBPostcode() ?></p>
                            
                            <h4><b>Shipping Address:</b></h4>
                            <p>Name: <?= $model->getSFirstName() . ' ' . $model->getSLastName() ?><br/>
                            Address: <?= $model->getSLine1() . '' . $model->getSLine2() ?><br/>
                            City: <?= $model->getSCity() ?><br/>
                            State: <?= $model->getSState() ?><br/>
                            Postcode: <?= $model->getSPostcode() ?></p>
                            </div>
                             
                                <div class="col-md-5">
                            <h4><b>Content:</b></h4>   
                                <?php
                                do {
                                    ?>
                                <p><b>Product:</b></p>
                            <p>Id: <?= $model->getProductUrl()?><br/>
                            Size: <?= $model->getWeight() ?><br/>
                            Quantity: <?= $model->getQuantity() ?></p>
                                <?php
                                } while($model->next()) ?>
                           
                        </div>
                                </div>
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
