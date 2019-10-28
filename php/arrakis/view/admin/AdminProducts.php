<?php
namespace arrakis\view\admin;

class AdminProducts extends \arrakis\view\View{
    
    
public function section($model) { 
$ctrl = "arrakis\controller\admin\AdminEditProducts";
        
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
                                    <th class="title">Image</th>
                                    <th class="title">Name</th>
                                    <th class="title">Product Id/Url</th>
                                    <th class="title">Category Id/Url</th>                       
                                    <th class="title">Unit Price</th>
                                    <th class="title" style="text-align: center">Active</th>
                                    <th class="title"><i class="glyphicon glyphicon-pencil"  style="margin-left:8%;"></i></th>
                                </tr>
                                <?php
                                while($model->next()) {
                                    ?>
                                <tr> 
                                    <td class="image"><a href="<?= PROJECT_URL . "admin-edit-product/" . $model->getProductId() ?>"><img src="<?= IMAGE_URL . $model->getImage() ?>"></a></td>    
                                    <td class="feature"><?= $model->getName() ?></td>
                                    <td class="feature"><?= $model->getProductId() ?></td> 
                                    <td class="feature"><?= $model->getCatId() ?></td> 
                                    <td class="feature">$<?= $model->getPrice() ?> / <?= $model->getUnit() ?></td>  
                                    <td class="actions" style="text-align:center">
                                        <?php
                                        if($model->isActive())
                                        {
                                            ?>                                       
                                        <i class="glyphicon glyphicon-ok" style="color: green"></i>
                                        <?php
                                        } else {
                                        ?>    
                                        <i class="glyphicon glyphicon-remove" style="color:red;"></i>
                                        <?php } ?>
                                    </td>                                     
                                    <td class="actions">
                                        <a href="<?= PROJECT_URL . "admin-edit-product/" . $model->getProductId() ?>"  class="btn btn-xs btn-grey" title="Edit product"><i class="glyphicon glyphicon-pencil"></i></a>                                        
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
