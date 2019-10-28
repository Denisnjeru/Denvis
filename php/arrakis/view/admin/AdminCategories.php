<?php
namespace arrakis\view\admin;

class AdminCategories extends \arrakis\view\View{
    
    
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
                                    <th class="title">Id/Url</th>
                                    <th class="title"><i class="glyphicon glyphicon-pencil"  style="margin-left:8%;"></i></th>
                                    <th class="title"><i class="glyphicon glyphicon-plus"  style="margin-left:8%;"></i></th>
                                </tr>
                                <?php
                                while($model->next()) {
                                    ?>
                                <tr> 
                                    <td class="image"><a href="<?= PROJECT_URL . "admin-edit-category/" . $model->getId() ?>"><img src="<?= IMAGE_URL . $model->getCategoryImage() ?>"></a></td>    
                                    <td class="feature"><?= $model->getName() ?></td>
                                    <td class="feature"><?= $model->getId() ?></td> 
                                    <td class="actions">
                                       <a href="<?= PROJECT_URL . "admin-edit-category/" . $model->getId() ?>"  class="btn btn-xs btn-grey" title="Edit category"><i class="glyphicon glyphicon-pencil"></i></a>                                        
                                    </td>
                                   <td class="actions">
                                       <a href="<?= PROJECT_URL . "admin-add-product/" . $model->getId() ?>"  class="btn btn-xs btn-grey" title="Add new product"><i class="glyphicon glyphicon-plus glyphicons"></i></a>                                 
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
