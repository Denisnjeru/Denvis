<?php
namespace arrakis\view;

class HomeSlider extends View{
    
public function section($model) {
?>
       <!-- Product slider -->
    <div class="section main">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="products-slider">   
                        <?php
                            while($model->next()) {
                        ?>
                        <div class="shop-item">
                            <div class="image">
                            <a href="<?= PROJECT_URL . 'description/' . $model->getCategoryUrl() . '/' . $model->getProductUrl() ?>"><img src="<?= IMAGE_URL . $model->getImage() ?>" alt="<?= $model->getName() ?>"></a>
                            </div>
                            <div class="title">
                                    <h3><a href="<?= PROJECT_URL . 'description/' . $model->getCategoryUrl() . '/' . $model->getProductUrl() ?>"><?= $model->getName() ?></a></h3>
                            </div>
                            <div class="price">
                                    $<?= $model->getPriceDefault() ?>
                            </div>
                            
                            <div class="actions">
                                    <a href="<?= PROJECT_URL . 'description/' . $model->getCategoryUrl() . '/' . $model->getProductUrl() ?>" class="btn btn-small">Buy</a>
                            </div>
                        </div>
                        <?php
                            }
                        ?>
                       
                        </div><!--/product-slider-->
                    </div><!--/col-->
                </div><!--/row-->
            </div><!--/container-->
           </div><!--/section-->
 <?php
    }
}
?>
