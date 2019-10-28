<?php
namespace arrakis\view;

class About extends View{
    
    
    public function section($model) {
        
        ?>
        <!-- Breadcrumbs -->
    <div class="section section-breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1><?= $this->title ?></h1>
                </div>
            </div>
        </div>
    </div>
    <!-- END Breadcrumbs -->
    <div class="section main">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <h3>We are after The Spice!</h3>
                    <p>&nbsp;</p>
                    <p>Arrakis takes its name from the omonimous planet from the science fiction masterpiece “Dune” written by Frank Herbert in 1965.</br> 
                        The planet is believed to be the most valuable planet in the Dune universe because</p>
                    <p style="font-style: italic; font-size: 1.3em">“ ... it is here — and only here — where spice is found. The spice. 
                        Without it there is no commerce in the Empire, there is no civilization. ”</p>
                    <p style="text-align: right; font-style: italic">Dune, Frank Herbert</p>
                    <p>Spices are ingredients widely used in every country of the world and very important to all populations at all historical times.
As far back as 2600BC, there are records of the Egyptians feeding spices obtained from Asia to labourers building the great pyramid of Cheops, to give them strength.
The importance of spices is demonstrated by their use as currency in certain historical periods. 
In human history, spices have played a very important role and for long periods spice sourcing and exchange has been the propellant for human explorations.</p>
                    <p>At Arrakis we are all passionate about fine recipes and we all support a sustainable, meat free lifestyle.</p>
                </div>
                <div class="col-sm-4">
                    <div class="product-image-large">
                        <p>
                            <img src="<?=IMAGE_URL?>arrakis-planet.jpg" alt="Item Name">
                            Arrakis, Dune
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End about section -->
        <?php
        
    }
}



?>
