<?php
namespace arrakis\view;

class Home extends View{
    
    
    public function section($model) {
        
  
 
        ?>
      <!-- Homepage Slider -->
    <div class="homepage-slider">
        <div id="sequence">
            <ul class="sequence-canvas">
                <!-- Slide 1 -->
                <li class="bg4">
                        <!-- Slide Image -->
                        <img class="slide-img" src="<?=IMAGE_URL?>homepage-slider/slide1.png" alt="Slide 1" />
                </li>
                <!-- End Slide 1 -->
                <!-- Slide 2 -->
                <li class="bg3">
                        <!-- Slide Image -->
                        <img class="slide-img" src="<?=IMAGE_URL?>homepage-slider/slide2.png" alt="Slide 2" />
                </li>
                <!-- End Slide 2 -->
                <!-- Slide 3 -->
                <li class="bg1">
                        <!-- Slide Image -->
                        <img class="slide-img" src="<?=IMAGE_URL?>homepage-slider/slide3.png" alt="Slide 3" />
                </li>
                <!-- End Slide 3 -->
            </ul>
            <div class="sequence-pagination-wrapper">
                    <ul class="sequence-pagination">
                            <li>1</li>
                            <li>2</li>
                            <li>3</li>
                    </ul>
            </div>
        </div>
    </div>
    <!-- End Homepage Slider -->
    <!-- Breadcrumbs -->
    <div class="section section-breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Product Gallery</h1>
                </div>
            </div>
        </div>
    </div>
  <?php
     
  if(!$this->controller->getError())
    {
        $this->controller->getHomeSlider()->viewAction();
    }
  ?>
   
        <!-- Call to action bar -->
    <div class="section section-white loginBar" style="margin-top: 10px">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="calltoaction-wrapper">
                        <h3>Login to purchase our products!</h3> 
                        <a href="<?= PROJECT_URL ?>login" class="btn">Login</a>
                        <a href="<?= PROJECT_URL ?>register" class="btn">Register</a>
                        <a href="<?= PROJECT_URL ?>categories" class="btn">Just Browse</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Call to Action Bar -->
        </div><!--/section-->
    <!-- End product slider -->
        <?php
        
    }
}



?>
