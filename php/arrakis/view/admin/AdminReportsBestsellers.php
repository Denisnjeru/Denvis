<?php
namespace arrakis\view\admin;

class AdminReportsBestsellers extends \arrakis\view\View{
    
    
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
                        <div class="row" style="text-align: center"><h3>Best selling products</h3></div>
                        <div class="admin-table-wrapper">                           
                            <table class="admin-table" id="bestsellers">
                                <thead>
                                <tr>
                                    <th class="title">Product <i class="fa fa-fw fa-sort"></i></th>
                                    <th class="title">Category <i class="fa fa-fw fa-sort"></i></th>
                                    <th class="title">Product Id <i class="fa fa-fw fa-sort"></i></th>
                                    <th class="title">Pack Size <i class="fa fa-fw fa-sort"></i></th>
                                    <th class="title">Qnt Sold <i class="fa fa-fw fa-sort"></i></th>
                                    <th class="title">Available <i class="fa fa-fw fa-sort"></i></th> 
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                while($model->next()) {
                                    ?>
                                <tr>
                                    <td class="feature"><?= $model->getProduct()?></td>
                                    <td class="feature"><?= $model->getCategory() ?></td>
                                    <td class="feature"><?= $model->getId() ?></td>
                                    <td class="feature"><?= $model->getSize() .' '. $model->getUnit() ?></td>
                                    <td class="feature"><?= $model->getTotal()?></td>
                                    <td class="feature"><?= $model->getStock() .' '. $model->getUnit()?></td>
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
  $('#bestsellers').tablesorter(); 
});
    </script>

        <?php
        
    }
}
?>
