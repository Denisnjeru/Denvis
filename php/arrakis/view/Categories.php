<?php

namespace arrakis\view;
class Categories extends View {
    
       public function section($m3) {
       ?>
        <header>		
        <h2 class="container text-center page-header"><?=$this->title?></h2> 
        </header>      
        <article class="container">
        <!-- Example row of columns -->
        <nav class="row">

        <?php
        while($m3->next()){
        ?>
            <a href= "products.php?id=<?=$m3->getId()?>">
            <section class="col-md-3 col-sm-6 col-xs-12 text-center">       
                <img src="<?= IMAGE_URL.$m3->getImage() ?>" height='100px'>
                <p><?=$m3->getname()?></p>
            </section>
            </a>
            <?php
        };
        ?>
       </nav>    
       </article>
       <?php
    }
}

?>
