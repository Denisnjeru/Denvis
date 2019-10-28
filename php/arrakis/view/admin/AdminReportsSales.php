<?php
namespace arrakis\view\admin;

class AdminReportsSales extends \arrakis\view\View{
    
    
public function section($model) { 
$ctrl = "arrakis\controller\admin\AdminReports";
        
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
            <div><a href="<?= PROJECT_URL . 'admin-reports'?>">Back to reports dashboard.</a></div>
            <div class="row admin-response"><p><?= $this->controller->getMessage() ?></p></div>
            <div class="row">        
	    	<div class="col-md-12"> 
                    <div class="row" style="text-align: center"><h3>Sales </h3></div>
                    <div class="row">
                        <p><a href="<?= PROJECT_URL . 'reports/sales.pdf'?>">PDF Version</a></p>
                        <div class="admin-table-wrapper">                           
                                    <table class="admin-table" id="sales-results">
                                <thead> 
                                <tr>
                                    <th class="title">User Id <i class="fa fa-fw fa-sort"></i></th>
                                    <th class="title">Account <i class="fa fa-fw fa-sort"></i></th>
                                    <th class="title">Email <i class="fa fa-fw fa-sort"></i></th>
                                    <th class="title">Order date <i class="fa fa-fw fa-sort"></i></th>
                                    <th class="title">Order Id <i class="fa fa-fw fa-sort"></i></th>
                                    <th class="title">Total <i class="fa fa-fw fa-sort"></i></th>                   
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                while($model->next()) {
                                    ?>
                                <tr>
                                    <td class="feature"><?= $model->getId() ?></td>
                                    <td class="feature"><?= $model->getType() ?></td>
                                    <td class="feature"><?= $model->getEmail() ?></td>
                                    <td class="feature"><?= $model->getDate() ?></td>
                                    <td class="feature"><?= $model->getOrderId()?></td>
                                    <td class="feature">$<?= $model->getTotal() ?></td>
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
  $('#sales-results').tablesorter(); 
});
    </script>

        <?php
        
    }
    
 function table($model)
 {
   ?> 
     <h3>Sales </h3>
     <table border="1px" cellspacing="0px" cellpadding="5px">
                                 <thead> 
                                <tr>
                                    <th class="title">User Id <i class="fa fa-fw fa-sort"></i></th>
                                    <th class="title">Account <i class="fa fa-fw fa-sort"></i></th>
                                    <th class="title">Email <i class="fa fa-fw fa-sort"></i></th>
                                    <th class="title">Order date <i class="fa fa-fw fa-sort"></i></th>
                                    <th class="title">Order Id <i class="fa fa-fw fa-sort"></i></th>
                                    <th class="title">Total <i class="fa fa-fw fa-sort"></i></th>                   
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                while($model->next()) {
                                    ?>
                                <tr>
                                    <td class="feature"><?= $model->getId() ?></td>
                                    <td class="feature"><?= $model->getType() ?></td>
                                    <td class="feature"><?= $model->getEmail() ?></td>
                                    <td class="feature"><?= $model->getDate() ?></td>
                                    <td class="feature"><?= $model->getOrderId()?></td>
                                    <td class="feature"><?= $model->getTotal() ?></td>
                                </tr> 
                                <?php
                                } ?>
                                </tbody>
                            </table>
                            <?php
 }
}
?>
