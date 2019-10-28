<?php
namespace arrakis\view\admin;

class AdminReportsShoppingCart extends \arrakis\view\View{
    
    
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
            <div><a href="<?= PROJECT_URL . '/admin-reports'?>">Back to reports dashboard.</a></div>
            <div class="row admin-response"><p><?= $this->controller->getMessage() ?></p></div>
            <div class="row">        
	    	<div class="col-md-12">                    
                    <div class="row">
                        <div class="row" style="text-align: center"><h3>Items in shopping cart</h3></div>
                        <div class="admin-table-wrapper">                           
                            <table class="admin-table" id="shopping-cart">
                                <thead>
                                <tr>
                                    <th class="title">Cart Id <i class="fa fa-fw fa-sort"></i></th>
                                    <th class="title">User Id <i class="fa fa-fw fa-sort"></i></th>
                                    <th class="title">Email <i class="fa fa-fw fa-sort"></i></th>
                                    <th class="title">Category <i class="fa fa-fw fa-sort"></i></th>
                                    <th class="title">Product <i class="fa fa-fw fa-sort"></i></th>
                                    <th class="title">size <i class="fa fa-fw fa-sort"></i></th> 
                                    <th class="title">Quantity <i class="fa fa-fw fa-sort"></i></th> 
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                while($model->next()) {
                                    ?>
                                <tr>
                                    <td class="feature"><?= $model->getCartId()?></td>
                                    <td class="feature"><?= $model->getUserId() ?></td>
                                    <td class="feature"><?= $model->getEmail() ?></td>
                                    <td class="feature"><?= $model->getCategory() ?></td>
                                    <td class="feature"><?= $model->getProduct()?></td>
                                    <td class="feature"><?= $model->getSize()?></td>
                                    <td class="feature"><?= $model->getQuantity()?></td>
                                </tr> 
                                <?php
                                } ?>
                                </tbody>
                            </table>	
                        </div>
                    </div>
                </div>
            </div>				
        </div>
    </div>
    <script>
        $(function(){
  $('#shopping-cart').tablesorter(); 
});
    </script>

        <?php
        
    }
}
?>
