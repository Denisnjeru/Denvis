<?php
namespace arrakis\view\admin;

class Admin extends \arrakis\view\View{
    
    
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
                                    <th class="title email">Email</th>
                                    <th class="title">Name</th>
                                    <th class="title">Type</th>
                                    <th class="title">Date Registered</th>
                                    <th class="title"><i class="glyphicon glyphicon-pencil"  style="margin-left:8%;"></i></i></th>
                                    <th class="title"><i class="glyphicon glyphicon-trash" style="margin-left:8%;"></i></th>
                                    <th class="title"><i class="glyphicon glyphicon-lock" style="margin-left:8%;"></i></th>                                    
                                    <th class="title"><a href="<?= PROJECT_URL . "bulkNewsletter" ?>"  class="btn btn-xs btn-grey" title="Email all subscribers"><i class="glyphicon glyphicon-envelope"></i></a></th>
                                    
                                </tr>
                                <?php
                                while($model->next()) {
                                    ?>
                                <tr> 
                                    <td class="feature email"><?= $model->getEmail() ?></td>
                                    <td class="feature"><?= $model->getName() ?></td>
                                    <td class="feature"><?= $model->getType() ?></td>
                                    <td class="feature"><?= $model->getTime() ?></td>  
                                     <td class="actions">
                                        <a href="<?= PROJECT_URL . "admin-edit-user/" . $model->getId() ?>"  class="btn btn-xs btn-grey" title="Edit user"><i class="glyphicon glyphicon-pencil"></i></a>
                                    </td>
                                     <td class="actions">                                        
                                        <a href="<?= PROJECT_URL . "admin-delete-user/" . $model->getId() ?>" class="btn btn-xs btn-grey" title="Delete user"><i class="glyphicon glyphicon-trash"></i></a>
                                    </td>
                                     <td class="actions">
                                        <?php
                                        if($model->isLocked())
                                        {
                                            ?>                                       
                                        <a href="<?= PROJECT_URL . "admin-unlock-user/" . $model->getId()?>"  class="btn btn-xs btn-grey" title="Unlock user"><i class="glyphicon glyphicon-lock"></i></a>
                                        <?php } ?>
                                    </td> 
                                    <td class="actions">
                                        <?php
                                        if($model->isNewsletter())
                                        {
                                            ?>                                       
                                        <a href="<?= PROJECT_URL . "newsletter/" . $model->getId() ?>"  class="btn btn-xs btn-grey" title="Email user"><i class="glyphicon glyphicon-envelope"></i></a>
                                        <?php } ?>
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
