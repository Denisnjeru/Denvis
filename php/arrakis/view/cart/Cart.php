<?php

namespace arrakis\view\cart;

class Cart extends \arrakis\view\View {

    protected $editable = true;

    public function section($model) {

        if (!\arrakis\model\cart\Cart::isCart()) {
            ?>
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
                <h3 class='text-center'>Your cart is empty.</h3>
                <h4 class='text-center'><a href="<?= PROJECT_URL ?>products/native-australian">Back to shopping.</a></h4>
            </div>
            <?php
        } else {

            $this->displayCart($model);
        }
    }

    public function displayCart($model) {
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
                <div class="row">
                    <div class="col-md-12">
                        <?php
                        if (!$this->editable) {
                            ?>
                        <div class="col-md-12">
                        <div class="row">
                            <h3>Your order:</h3>
                        </div>
                        </div>
                        <?php
                        } else if ($this->editable) {
                            ?>

                            <div class="col-md-12">
                                <!-- Action Buttons -->
                                <div class="row">
                                    <div id=""class="pull-left">
                                        <div class="btn btn-grey" id="restore-cart" style="margin-bottom: 3%">RESTORE LAST SAVED CART</div>
                                        <div id="restore-ok"></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="pull-right">
                                        <a href="<?= PROJECT_URL ?>cart/delete-all" class="btn btn-grey"><i class="glyphicon glyphicon-trash"></i> EMPTY CART</a>
                                        <div class="btn btn-grey" id="save-cart"><i class="glyphicon glyphicon-save icon-white" ></i> SAVE CART</div>
                                        <div id="save-ok"></div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                        <div class="row">
                            <div class="col-md-12">
                                <!-- Shopping Cart Items -->
                                <table class="shopping-cart">

                                    <?php
                                    while ($model->nextProduct()) {
                                        ?>
                                        <!-- Shopping Cart Item -->
                                        <tr>
                                            <!-- Shopping Cart Item Image -->
                                            <td class="image"><a href="<?= PROJECT_URL ?>description/<?= $model->getSpecificationUrl() ?>"><img src='<?= IMAGE_URL . $model->getImage() ?>' alt="Item Name"></a></td>
                                            <!-- Shopping Cart Item Description & Features -->
                                            <td>
                                                <div class="cart-item-title"><a href="<?= PROJECT_URL ?>description/<?= $model->getSpecificationUrl() ?>"><?= $model->getName() ?></a></div>
                                                <div class="feature">Weight/Size: <b><?= $model->getProductOption() ?><?= $model->getUnit() ?> </b></div>
                                                <div class="feature">Unit price: <b>$<?= $model->getItemPrice() ?></b></div>
                                            </td>
                                            <?php
                                            if ($this->editable) {
                                                ?>                                                                
                                                <!-- Shopping Cart Item Quantity -->
                                                <td class="quantity">
                                                    <input class="quantity form-control input-sm input-micro" type="text" value="<?= $model->getQuantity() ?>" id="<?= $model->getSpecificationUrl() . '/' . $model->getProductOption() ?>" >
                                                </td>
                                                <?php
                                            } else {

                                                echo "<td style='text-align:right;width:2em' />" . $model->getQuantity() . "</td>";
                                            }
                                            ?>    
                                            <!-- Shopping Cart Item Price -->
                                            <td class="price">$<?= $model->getFormattedSubtotal() ?></td>
                                            <!-- Shopping Cart Item Actions -->
                                            <?php
                                            if ($this->editable) {
                                                ?>
                                                <td class="actions">
                                                    <a href="<?= PROJECT_URL ?>description/<?= $model->getSpecificationUrl() ?>" class="btn btn-xs btn-grey"><i class="glyphicon glyphicon-pencil"></i></a>
                                                    <a href="<?= PROJECT_URL . 'cart/' . $model->getSpecificationUrl() . '/' . $model->getProductOption() . '/0' ?>" class="btn btn-xs btn-grey"><i class="glyphicon glyphicon-trash"></i></a>
                                                </td>
                                                <?php
                                            }
                                            ?>
                                        </tr>
                                        <!-- End Shopping Cart Item -->

                                        <?php
                                    }
                                    ?>     
                                </table>
                                <!-- End Shopping Cart Items -->
                            </div>
                        </div>
                        <div class="row">
                            <!-- Promotion Code -->
                            <div class="col-md-4  col-md-offset-0 col-sm-6 col-sm-offset-6">

                            </div>
                            <!-- Shipment Options -->
                            <div class="col-md-4 col-md-offset-0 col-sm-6 col-sm-offset-6">

                            </div>

                            <!-- Shopping Cart Totals -->
                            <div class="col-md-4 col-md-offset-0 col-sm-6 col-sm-offset-6">
                                <table class="cart-totals">
                                    <tr>
                                        <td><b>Standard Shipping</b></td>
                                        <td>$<?= number_format($model->getShipping(), 2) ?></td>
                                    </tr>
                                    <?php
                                    if (\arrakis\model\security\Login::isCommercial()) {
                                        ?>
                                        <tr>
                                            <td><b>Discount <?= $model->getDiscountRate() ?>%</b></td>
                                            <td>$<?= number_format($model->getDiscount(), 2) ?></td>
                                        </tr>
                                        <tr class="cart-grand-total">
                                            <td><b>Total</b> (incl. GST)</td>
                                            <td><b>$<?= number_format($model->getDiscCartTotal(), 2) ?></b></td>  
                                        </tr>
                                        <?php
                                    } else {
                                        ?>   

                                        <tr class="cart-grand-total">
                                            <td><b>Total</b> (incl. GST)</td>
                                            <td><b>$<?= number_format($model->getCartTotal(), 2) ?></b></td>
                                        </tr>
                                        <?php
                                    }
                                    ?>

                                </table>
                                <?php
                                if ($this->editable) {
                                    //$displayCheckout = ($model->cartExceedsStock()) ? "none" : "inline";
                                    //$displayCheckout = (\arrakis\model\security\Login::isLoggedIn()) ? $displayCheckout : "none";
                                    // $displayLogin = "none";
                                    //$displayCheckout = "inline";
                                    ?>

                                    <!-- Action Buttons -->
                                    <div class="pull-right">
                                        <a href="<?= PROJECT_URL ?>products/native-australian" class="btn btn-grey">BACK TO SHOP</a>
                                        <a href="<?= PROJECT_URL ?>checkout" class="btn"><i class="glyphicon glyphicon-shopping-cart icon-white"></i> CHECKOUT</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

                    <script type="text/javascript">

                        $(document).ready(function()
                        {
                            $('.quantity').on('change',function(event)
                            {
                                quantity = this.value.trim();
                                id = this.id;
                                location.replace('<?= PROJECT_URL ?>cart/' + id + '/' + quantity);
                            }); 
                                        
                            $('#save-cart').on('click',function(event){
                                            
                                var posting = $.post("<?= PROJECT_URL ?>save-cart",'');
                                // read the response from PHP code
                                       


                                posting.done(function(data){ 
                                            
                                    try{
                                        var response = JSON.parse(data);
                                        console.log(data);   
                                        var message = response.message;

                                        if(data.success == 'yes')
                                        {
                                            $("#save-cart").css('color',"#000");  
                                        }else
                                        {
                                            $("#save-cart").css('color',"#8e6e72");      
                                        }
                                        $("#save-cart").empty().append(message);
                                        
                                    
                                    }catch(e)
                                    {
                                        $('#save-ok').html(data);
                                    }        
                            

                                });
                                        
                                      
                                        
                            });
                                
                            $('#restore-cart').on('click',function(event){
                                            
                                var posting = $.post("<?= PROJECT_URL ?>resume-cart",'');
                                // read the response from PHP code
                                       


                                posting.done(function(data){ 
                                            
                                    try{
                                        var response = JSON.parse(data);
                                        console.log(data);   
                                        var message = response.message;

                                        if(data.success == 'yes')
                                        {
                                            $("#restore-cart").css('color',"#000");
                                           
                                        }else
                                        {
                                            $("#restore-cart").css('color',"#8e6e72");
                                           
                                        }
                                        $("#restore-cart").empty().append(message);                                      
                                    
                                    }catch(e)
                                    {
                                        $('#restore-ok').html(data);
                                         
                                    }        
                            

                                });
                                        
                                      
                                        
                            });
                        });
                    </script>
                    <?php
                }
            }

        }
        ?>