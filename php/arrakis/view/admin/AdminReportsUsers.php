<?php
namespace arrakis\view\admin;

class AdminReportsUsers extends \arrakis\view\View{
    
    
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
                    <div class="row" style="text-align: center"><h3>Users location</h3></div>
                    <div class="row">
                        <p><a href="<?= PROJECT_URL . 'reports/users.pdf'?>">PDF Version</a></p>
                        <div class="admin-table-wrapper">                           
                                    <table class="admin-table" id="user-results">
                                <thead> 
                                <tr>
                                    <th class="title">Name <i class="fa fa-fw fa-sort"></i></th>
                                    <th class="title">Account <i class="fa fa-fw fa-sort"></i></th>
                                    <th class="title">Email <i class="fa fa-fw fa-sort"></i></th>
                                    <th class="title">Phone <i class="fa fa-fw fa-sort"></i></th>
                                    <th class="title">Address <i class="fa fa-fw fa-sort"></i></th>
                                    <th class="title">City <i class="fa fa-fw fa-sort"></i></th>
                                    <th class="title">State <i class="fa fa-fw fa-sort"></i></th>                                    
                                    <th class="title">Postcode <i class="fa fa-fw fa-sort"></i></th>
                                    
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                while($model->next()) {
                                    ?>
                                <tr>
                                    <td class="feature"><?= $model->getFirstName() . ' ' . $model->getLastName() ?></td>
                                    <td class="feature"><?= $model->getType() ?></td>
                                    <td class="feature"><?= $model->getEmail() ?></td>
                                    <td class="feature"><?= $model->getPhone() ?></td>
                                    <td class="feature"><?= $model->getLine1() . ' ' . $model->getLine2() ?></td>
                                    <td class="feature"><?= $model->getCity() ?></td>
                                    <td class="feature"><?= $model->getState() ?></td>
                                    <td class="feature"><?= $model->getPostcode() ?></td>
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
  $('#user-results').tablesorter(); 
});
    </script>

        <?php
        
    }
    
 function table($model)
 {
   ?> 
     <h3>Users Location </h3>
     <table border="1px" cellspacing="0px" cellpadding="5px">
                                <thead> 
                                <tr>
                                    <th class="title">Name <i class="fa fa-fw fa-sort"></i></th>
                                    <th class="title">Account <i class="fa fa-fw fa-sort"></i></th>
                                    <th class="title">Email <i class="fa fa-fw fa-sort"></i></th>
                                    <th class="title">Phone <i class="fa fa-fw fa-sort"></i></th>
                                    <th class="title">Address <i class="fa fa-fw fa-sort"></i></th>
                                    <th class="title">City <i class="fa fa-fw fa-sort"></i></th>
                                    <th class="title">State <i class="fa fa-fw fa-sort"></i></th>                                    
                                    <th class="title">Postcode <i class="fa fa-fw fa-sort"></i></th>
                                    
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                while($model->next()) {
                                    ?>
                                <tr>
                                    <td class="feature"><?= $model->getFirstName() . ' ' . $model->getLastName() ?></td>
                                    <td class="feature"><?= $model->getType() ?></td>
                                    <td class="feature"><?= $model->getEmail() ?></td>
                                    <td class="feature"><?= $model->getPhone() ?></td>
                                    <td class="feature"><?= $model->getLine1() . ' ' . $model->getLine2() ?></td>
                                    <td class="feature"><?= $model->getCity() ?></td>
                                    <td class="feature"><?= $model->getState() ?></td>
                                    <td class="feature"><?= $model->getPostcode() ?></td>
                                </tr> 
                                <?php
                                } ?>
                                </tbody>
                            </table>
                            <?php
 }
}
?>
