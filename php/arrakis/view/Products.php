<?php

namespace arrakis\view;

class Products extends View {

    public function section($products) {
        ?>
        <!-- Page Title -->
		<div class="section section-breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
                                            <h1><a href="<?= PROJECT_URL . 'products/native-australian'?>">Products</a> > <a href="#"><?= $products->getCategoryName() ?></a></h1>
					</div>
				</div>
			</div>
		</div>
                <!-- Section -->
                <div class="eshop-section section main">
                <div class="container">
                                <!-- Sidebar -->
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
                                                        <li><a href="<?= PROJECT_URL . 'products/native-australian'?>">Native Australian</a></li>
							<li><a href="<?= PROJECT_URL . 'products/whole-spices'?>">Whole Spices</a></li>
                                                        <li><a href="<?= PROJECT_URL . 'products/grounded-spices'?>">Grounded Spices</a></li>							
							<li><a href="<?= PROJECT_URL . 'products/chilli'?>">Chilli</a></li>
							<li><a href="<?= PROJECT_URL . 'products/salt'?>">Salt</a></li>
                                                        <li><a href="<?= PROJECT_URL . 'products/evo-oil'?>">EVO Oil</a></li>  
                                                        <li><a href="<?= PROJECT_URL . 'products/truffle'?>">Truffle</a></li>
                                                        <li><a href="<?= PROJECT_URL . 'products/dried-mushrooms'?>">Dried Mushrooms</a></li>
						</ul>
				
                </div>   
                <!-- End sidebar -->
                <!-- Products -->
	    	<div class="col-md-9">
				<div class="row">
                                            
                                            <?php
                                            if ($products->getProductCount() < 1)
                                            {
                                                ?>
                                                    <h4 style="padding-top: 2%; text-align: center">Sorry, there are no products in this category.</h4>
                                                </div>
                                              </div>
                                              </div>
                                              </div>                                           
                                            <?php
                                            } else {
                                                    $count = 0;
                                                    do {
                                                        $count = $count + 1;
                                            ?>
                                                <!-- Product -->
                                                <div class="col-sm-4">
						<div class="shop-item">
							<div class="image">
								<a href="<?= PROJECT_URL . 'description/' . $products->getCategoryUrl() . '/' . $products->getProductUrl() ?>"><img src="<?= IMAGE_URL . $products->getImage() ?>" alt="<?= $products->getName() ?>"></a>
							</div>
							<div class="title">
								<h3><a href="<?= PROJECT_URL . 'description/' . $products->getCategoryUrl() . '/' . $products->getProductUrl() ?>"><?= $products->getName() ?> - <?= $products->getWeight() ?><?= $products->getUnit() ?></a></h3>
							</div>
							<div class="price">
								<span class="price-was"></span>$<?= $products->getPriceDefault() ?>
							</div>
							<div class="description">
								<p><?= $products->getDescription() ?></p>
							</div>
							<div class="actions">
								<a href="<?= PROJECT_URL . 'description/' . $products->getCategoryUrl() . '/' . $products->getProductUrl() ?>" class="btn"><i class="icon-shopping-cart icon-white"></i> Buy</a>
							</div>
						</div>  <!-- End Product -->
                                                </div>
                                                 <?php
                                                    if (($count%3)==0)
                                                    { 
                                                        ?>
                                                        </div>
                                                        <div class="row">
                                                        <?php
                                                    }
                                                    } while($products->next()) ;
                                            ?>
					
					
					</div>
                                    <!-- End products -->
                                    <!-- Pagination -->
                                    <div class="row pagination-wrapper ">
					<ul class="pagination pagination-lg">
						<li class=""><a href="<?= PROJECT_URL . 'products/' . $products->getCategoryUrl() ?>">First</a></li>
                                                
                                                <?php
                                                
                                                
                                                
                                                
                                                $groups = (int)(($products->getProductCount()-1)/6)+1;
                                                for($i = 1; $i <= $groups; $i++){
                                                ?>
                                                
                                                
						<li class="active"><a href="<?= PROJECT_URL . 'products/' . $products->getCategoryUrl() . '/'. $i ?>"><?= $i ?></a></li>
                                                
                                                
                                                <?php
                                                }
                                                ?>
                                                <!--<li class="disabled"><a href="#">3</a></li>-->
						<?php
                                                $i = $i - 1;
                                                ?>
                                                <li class=""><a href="<?= PROJECT_URL . 'products/' . $products->getCategoryUrl() . '/'. $i ?>">Last</a></li>
					</ul>
                                    </div>
                                    
				</div>
                        </div>
				
                </div>
                

                <?php
            }
            }
        }
        ?>
