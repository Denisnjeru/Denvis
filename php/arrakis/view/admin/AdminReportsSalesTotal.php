<?php
namespace arrakis\view\admin;

class AdminReportsSalesTotal extends \arrakis\view\View{
    
    
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
                        <div class="row" style="text-align: center"><h3>Total of Sales</h3></div>
                        <div class="admin-table-wrapper">                           
                            <table class="admin-table" id="">
                                <thead>
                                <tr>
                                    <th class="title">From <i class=""></i></th>
                                    <th class="title">To <i class=""></i></th>
                                    <th class="title">Total <i class=""></i></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                while($model->next()) {
                                    ?>
                                <tr>
                                    <td class="feature"><?= $model->getFrom()?></td>
                                    <td class="feature"><?= $model->getTo() ?></td>
                                    <td class="feature">$<?= $model->getTotalSum() ?></td>
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
    

        <?php
        
    }
}
?>
