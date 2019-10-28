<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?=$this->title?> - Arrakis</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="<?= CSS_URL?>bootstrap.min.css">
        <link rel="stylesheet" href="<?= CSS_URL?>icomoon-social.css">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600,800' rel='stylesheet' type='text/css'>
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <link rel="stylesheet" href="<?= CSS_URL?>leaflet.css" />
		<!--[if lte IE 8]>
		    <link rel="stylesheet" href="css/leaflet.ie.css" />
		<![endif]-->
		<link rel="stylesheet" href="<?= CSS_URL?>main.css">

        <script src="<?= JS_URL?>modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
        

<!-- Navigation & Logo-->
    <div class="mainmenu-wrapper">
        <div class="container">
            <!--  Top Navigation extras -->
                <div class="menuextras">
                    <div class="extras">
                        <ul>
                            <!--Dropdown Search field-->
                            <li class="searchMenu">
                                <div class="dropdown">
                                    <a class="" data-toggle="dropdown" href="#">
                                        <i class="glyphicon glyphicon-search icon-white"></i>
                                    </a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li role="menuitem" style="padding:0px"> 
                                       <form id="search-form"> 
                                                <div class="input-group">
                                                    <input class="form-control input-md search " id="search-field" type="text">
                                                    <span class="input-group-btn">
                                                        <button class="btn btn-md" type="button"> 
                                                            <i class="glyphicon glyphicon-search icon-white" id="search-button"></i>
                                                        </button>                                                    
                                                    </span>
                                                </div>
                                           </form>
                                         </li>
                                    </ul>
                                </div>
                            </li>	
                            <!--END Dropdown Search field-->  
                            
                            <!--CHECK IF LOGGED IN-->  
                            <?php
                             if(\arrakis\model\security\Login::isLoggedIn()){

                            ?>
                            <li><a href="<?= PROJECT_URL ?>change-details">Account</a></li>
                            <li><a href="<?= PROJECT_URL ?>logout">Logout</a></li>
                            <?php }else{ ?>
                            <li><a href="<?= PROJECT_URL ?>register">Register</a></li>
                            <li><a href="<?= PROJECT_URL ?>login">Login</a></li>
                            <?php } ?>
                            <li class="shopping-cart-items"><i class="glyphicon glyphicon-shopping-cart icon-white"></i> <a href="<?= PROJECT_URL ?>cart"><b><?= arrakis\model\cart\Cart::getCartItemCount()?> items</b></a>
                            </li>
                        </ul>
                    </div><!-- /extras -->
                </div><!-- /menuextras -->
                <!-- END Top Navigation extras -->
                <!-- Menu -->
                <nav id="mainmenu" class="mainmenu">
                    <ul>
                        <li class="logo-wrapper">
                            <a href="<?= PROJECT_URL ?>home"><img src="<?= IMAGE_URL?>arrakis-logo.png" alt="Arrakis Spice Emporium"></a>
                        </li>
                        <li>
                            <a href="<?= PROJECT_URL ?>about">About</a>
                        </li>
                        <li class="has-submenu">
                        <a href="products.html">Shop</a>
                        <!-- Sub Menu -->
                        <div class="mainmenu-submenu">
                            <div class="container mainmenu-submenu-inner"> 
                                <div>
                                    <h4>Spices</h4>
                                    <ul>
                                        <li><a href="<?= PROJECT_URL ?>products/native-australian">Native Australian</a></li>
                                        <li><a href="<?= PROJECT_URL ?>products/whole-spices">Whole spices</a></li>
                                        <li><a href="<?= PROJECT_URL ?>products/grounded-spices">Grounded spices</a></li>                                        
                                        <li><a href="<?= PROJECT_URL ?>products/chilli">Chilli</a></li>
                                    </ul>
                                </div>
                                <div>
                                    <h4>Condiments</h4>
                                    <ul>
                                        <li><a href="<?= PROJECT_URL ?>products/salt">Salt</a></li>
                                        <li><a href="<?= PROJECT_URL ?>products/evo-oil">EVO Oil</a></li>                                        
                                    </ul>
                                </div>
                                <div>
                                    <h4>Mushrooms</h4>
                                    <ul>
                                        <li><a href="<?= PROJECT_URL ?>products/truffle">Truffle</a></li>
                                        <li><a href="<?= PROJECT_URL ?>products/dried-mushrooms">Dried mushrooms</a></li>
                                    </ul>
                                </div>
                            </div> <!-- /mainmenu-submenu-inner -->
                        </div> <!-- /mainmenu-submenu -->
                        <!-- END Submenu -->
                    </li>
                    <li>
                        <a href="<?= PROJECT_URL ?>contacts">Contacts</a>
                    </li>
                    <?php
                        if(\arrakis\model\security\Login::isAdmin()){

                       ?>
                       <li><a href="<?= PROJECT_URL ?>admin">Admin</a></li>
                    <?php } ?>
                            
                </ul>
            </nav>
            <!-- END Menu -->
        </div><!--/container-->
    </div><!--/mainmenu-wrapper-->
    <!-- END Navigation & Logo -->
    
    
    <!-- END Header-->
		