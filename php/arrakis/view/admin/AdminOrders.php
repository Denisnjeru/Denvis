<?php
namespace arrakis\view\admin;

class AdminOrders extends \arrakis\view\View{
    
    
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
	    	<div class="col-md-9">                    
                    <div class="row">
                        <div class="admin-table-wrapper">                           
                            <!-- Table wih dtabase results -->
                            <table class="admin-table">
                                <tr>
                                    <th class="title">User Id</th>
                                    <th class="title">Email</th>
                                    <th class="title">Order date</th>
                                    <th class="title">Order Id</th>
                                    <th class="title">Total</th>
                                    <th class="title"><i class="glyphicon glyphicon-eye-open"  style="margin-left:8%;"></i></th>
                                    
                                </tr>
                                <?php
                                while($model->next()) {
                                    ?>
                                <tr> 
                                    <td class="feature"><?= $model->getId() ?></td>
                                    <td class="feature"><?= $model->getEmail() ?></td>
                                    <td class="feature"><?= $model->getDate() ?></td>
                                    <td class="feature"><?= $model->getOrderId()?></td>
                                    <td class="feature">$<?= $model->getTotal() ?></td>
                                     <td class="actions">
                                        <a href="<?= PROJECT_URL . "admin-view-order/" . $model->getOrderId() ?>"  class="btn btn-xs btn-grey" title="Edit user"><i class="glyphicon glyphicon-eye-open"></i></a>
                                    </td>
                                     
                                   
                                </tr> 
                                <?php
                                } ?>
                            </table>	
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
