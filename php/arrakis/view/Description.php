<?php

namespace arrakis\view;

class Description extends View {

    
    public function section($product) {
        ?>
        <!-- Page Title -->
		<div class="section section-breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
                                            <h1><a href="<?= PROJECT_URL . 'products/native-australian'?>">Products</a> > <a href="<?= PROJECT_URL . 'products/' . $product->getCategoryUrl()?>"><?= $product->getCategoryName() ?></a> > <?= $product->getName() ?></h1>
					</div>
				</div>
			</div>
		</div>
        
        <div class="section main">
	    	<div class="container">
	    		<div class="row">
	    			<!-- Product Image -->
	    			<div class="col-sm-6">
	    				<div class="product-image-large">
	    					<img src="<?= IMAGE_URL . $product->getImage() ?>" alt="<?= $product->getName() ?>">
	    				</div>
	    			</div>
	    			<!-- End Product Image -->
	    			<!-- Product Summary & Options -->
	    			<div class="col-sm-6 product-details">
	    				<h4><?= $product->getName() ?></h4>
	    				<div class="price">
							<span class="price-was"></span> $<?= $product->getPriceDefault() ?>
						</div>
						<h5>Quick Overview</h5>
                                                <p><?= $product->getDescription() ?></p>
                                        <table class="shop-item-selections">	
                                                        <tr>
                                                                <td><b>Available</b></td>
                                                        </tr>
							<tr>
								<td><b>Weight/Size:</b></td>
								<td>
									<div class="dropdown">
                                                                            <a class="btn btn-sm btn-grey" data-toggle="dropdown" href="#" ><span id="selected-product-option"><?= $product->getOptions()[0] ?></span><?= $product->getUnit() ?> <b class="caret"></b></a>
                                                                        <ul class="dropdown-menu" role="menu">
                                                                            <?php
                                                                          
                                                                        foreach($product->getOptions() as $option)
                                                                        {
                                                                        ?>
                                                                         <li role="menuitem" class="product-options"><?= $option ?></li>
                                                                        <?php 
                                                                        } 
                                                      
                                                                        ?>
                                                                        </ul>
									</div>
								</td>                                               
							</tr>
                                                        <script>
                                                            var selectedProductOption = '<?= $product->getOptions()[0] ?>';
                                                            
                                                            $(document).ready(function(){
       
                                                                $(".product-options").on('click',function(){

                                                                   var option = $(this).html();
                                                                   selectedProductOption = option;
                                                                   $('#selected-product-option').html(option);
                                                                   $('.add-to-cart').attr("href", "<?= PROJECT_URL . 'cart/' . $product->getSpecificationUrl() . '/'?>" + selectedProductOption + '/' + quantity);
                                                                });
                                                                
                                                                
                                                            });
                                                            </script>
							<tr>
								<td><b>Quantity:</b></td>
								<td>
									<input type="text" class=" quantity form-control input-sm input-micro" value="1">
								</td>
                                                                
							</tr>
							<!-- Add to Cart Button -->
							<tr>
								<td>&nbsp;</td>
								<td>
                                                                    <?php 
                                                                    if ($product->getOptions()[0] > $product->getInStock()) 
                                                                    {
                                                                    ?>
                                                                    
                                                                        <a href="#" class="add-to-cart btn btn"><i class="icon-shopping-cart icon-white"></i>Out of stock</a>
                                                                    <?php
                                                                    } else {
                                                                        
                                                                    ?>
                                                                    <a href="<?= PROJECT_URL . 'cart/' . $product->getSpecificationUrl()?>" class="add-to-cart btn btn"><i class="icon-shopping-cart icon-white"></i> Add to Cart</a>
                                                                    <script type="text/javascript">

                                                                        var quantity = 1;


                                                                        $(document).ready(function()
                                                                        {

                                                                          $('.add-to-cart').attr("href", "<?= PROJECT_URL . 'cart/' . $product->getSpecificationUrl() . '/'?>" + selectedProductOption + '/' + quantity);


                                                                            $('.quantity').on('change',function(event)
                                                                            {
                                                                                quantity = this.value.trim();
                                                                                id = this.id;
                                                                                $('.add-to-cart').attr("href", "<?= PROJECT_URL . 'cart/' . $product->getSpecificationUrl() . '/'?>" + selectedProductOption + '/' + quantity);
                                                                            }    
                                                                        ); 
                                                                        });

                                                                    </script>
                                                                    <?php
                                                                    }
                                                                    ?>
                                                                
                                                                </td>
							</tr>
						</table>
	    			</div>
	    			<!-- End Product Summary & Options -->
	    			
	    		</div>
			</div>
		</div>
        
                <?php
            }

        }
        ?>
