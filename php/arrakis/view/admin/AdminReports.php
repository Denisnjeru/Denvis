<?php
namespace arrakis\view\admin;

class AdminReports extends \arrakis\view\View{
    
    
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
            <div class="row admin-response"><p><?= $this->controller->getMessage() ?></p></div>
            <div class="row">
        <!-- Service Menu -->
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
                        <li><a href="<?= PROJECT_URL ?>admin">Users</a></li>
                        <li><a href="<?= PROJECT_URL ?>admin-categories">Categories</a></li>
                        <li><a href="<?= PROJECT_URL ?>admin-products">Products</a></li>
                        <li><a href="<?= PROJECT_URL ?>admin-reports">Reports</a></li>
                    </ul>				
                </div>   
                <!-- End Service Menu -->               
	    	<div class="col-md-9">                    
                    <div class="row">
                                <!-- Report -->
                                <div class="col-sm-4">
                                <div class="shop-item" style="padding-top: 8%;">
                                        <div class="image">
                                            <i class="glyphicon glyphicon-usd" style="font-size: 4em; color: #e7dbc3;"></i>
                                        </div>
                                        <div class="title">
                                                <h3>Sales Report</h3>
                                        </div>
                                         <div class="description">
                                            <form action="/" id="sales" novalidate="novalidate">   
                                                <p>Display sales by date range.<br/>
                                                Please input dates below.</p>
                                                <div class="form-group">
                                        <label for="city"><i class="icon-user"></i> <b>From:</b></label>
                                        <input class="form-control" id="from" type="text" placeholder="YYYY-MM-DD" value="" name="<?= $ctrl::FORM_FROM_DATE?>" >
                                        </div>
                                        <div class="form-group">
                                        <label for="state"><i class="icon-user"></i> <b>To:</b></label>
                                        <input class="form-control" id="to" type="text" placeholder="YYYY-MM-DD" value="" name="<?= $ctrl::FORM_TO_DATE?>">
                                        </div>
                                        <div class="form-group">                                
                                            <button type="submit" id="submit-report-sales"class="btn pull-right">View Report</button>
                                            <div class="clearfix"></div>
                                        </div>   
                                            </form>
                                        </div>
                  
                                        </div>  
                                        </div>	<!-- End Report -->
                                         <!-- Report -->
                                <div class="col-sm-4">
                                <div class="shop-item" style="padding-top: 8%;">
                                        <div class="image">
                                            <i class="glyphicon glyphicon-usd" style="font-size: 4em; color: #e7dbc3;"></i>
                                        </div>
                                        <div class="title">
                                                <h3>Total Sales</h3>
                                        </div>
                                         <div class="description">
                                            <form action="/" id="salesTotal" novalidate="novalidate">   
                                                <p>Display total of sales by date range.<br/>
                                                Please input dates below.</p>
                                                <div class="form-group">
                                        <label for="city"><i class="icon-user"></i> <b>From:</b></label>
                                        <input class="form-control" id="fromTotal" type="text" placeholder="YYYY-MM-DD" value="" name="<?= $ctrl::FORM_FROM_DATE?>" >
                                        </div>
                                        <div class="form-group">
                                        <label for="state"><i class="icon-user"></i> <b>To:</b></label>
                                        <input class="form-control" id="toTotal" type="text" placeholder="YYYY-MM-DD" value="" name="<?= $ctrl::FORM_TO_DATE?>">
                                        </div>
                                        <div class="form-group">                                
                                            <button type="submit" id="submit-report-sales-total"class="btn pull-right">View Report</button>
                                            <div class="clearfix"></div>
                                        </div>   
                                            </form>
                                        </div>
                  
                                        </div>  
                                        </div>	<!-- End Report -->
                                        <!-- Report -->
                                        <div class="col-sm-4">
                                        <div class="shop-item" style="padding-top: 8%;">
                                        <div class="image">
                                                <a href="<?= PROJECT_URL?>"><i class="glyphicon glyphicon-star" style="font-size: 4em; color: #e7dbc3;"></i></a>
                                        </div>
                                        <div class="title">
                                                <h3><a href="<?= PROJECT_URL?>">Product sales</a></h3>
                                        </div>
                                        <div class="actions">
                                                <a href="<?= PROJECT_URL . 'admin-reports-bestsellers' ?>" class="btn">View bestsellers</a>
                                        </div>  
                                </div>  
                                </div>	<!-- End Report -->
                                <!-- Report -->
                                <div class="col-sm-4">
                                <div class="shop-item" style="padding-top: 8%;">
                                        <div class="image">
                                            <a href="<?= PROJECT_URL?>"><i class="glyphicon glyphicon-shopping-cart" style="font-size: 4em; color: #e7dbc3;"></i></a>
                                        </div>
                                        <div class="title">
                                                <h3><a href="<?= PROJECT_URL?>">Shopping Cart</a></h3>
                                        </div>
                                        <div class="actions">
                                                <a href="<?= PROJECT_URL . 'admin-reports-shopping-cart' ?>" class="btn"><i class="icon-shopping-cart icon-white"></i> View </a>
                                        </div>
                                </div>  
                                </div>	<!-- End Report -->
                                </div>
                    <div class="row">
                        <!-- Report -->
                                <div class="col-sm-4">
                                <div class="shop-item" style="padding-top: 8%;">
                                        <div class="image">
                                            <a href="<?= PROJECT_URL?>"><i class="glyphicon glyphicon-user" style="font-size: 4em; color: #e7dbc3;"></i></a>
                                        </div>
                                        <div class="title">
                                                <h3>Users</h3>
                                        </div>
                                        <div class="description">
                                            <form action="/" id="users" novalidate="novalidate">   
                                                <p>Display users by location.<br/>
                                                Please input city, state or postcode.</p>
                                                <div class="form-group">
                                        <label for="city"><i class="icon-user"></i> <b>City:</b></label>
                                        <input class="form-control" id="city" type="text" placeholder="city" value="" name="<?= $ctrl::FORM_CITY?>" >
                                        </div>
                                        <div class="form-group">
                                        <label for="state"><i class="icon-user"></i> <b>State:</b></label>
                                        <input class="form-control" id="state" type="text" placeholder="eg: NSW" value="" name="<?= $ctrl::FORM_STATE?>">
                                        </div>
                                        <div class="form-group">
                                        <label for="postcode"><i class="icon-user"></i> <b>Postcode:</b></label>
                                        <input class="form-control" id="postcode" type="text" placeholder="postcode" value="" name="<?= $ctrl::FORM_POSTCODE?>">
                                        </div>
                                        <div class="form-group">                                
                                            <button type="submit" id="submit-report-users"class="btn pull-right">View Report</button>
                                            <div class="clearfix"></div>
                                        </div>   
                                            </form>
                                        </div>
                                       
                                </div>  
                                </div>	<!-- End Report -->
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        <script>
            var city = 'null';
            var state = 'null';
            var postcode = 'null';
            
        $(document).ready(function()
                {
                    $('#city').on('change',function(event)
                    {
                        city = this.value.trim();   
                        console.log(city);
                    });
                    $('#city').blur(function() {
                        if(!$.trim(this.value).length) { // zero-length string AFTER a trim
                        city = 'null';
                        }
                    });
                    $('#state').on('change',function(event)
                    {
                        state = this.value.trim(); 
                        console.log(state);
                    });
                    $('#state').blur(function() {
                        if(!$.trim(this.value).length) { // zero-length string AFTER a trim
                        state = 'null';
                        }
                    });
                    $('#postcode').on('change',function(event)
                    {
                        postcode = this.value.trim();   
                        console.log(postcode);
                    });
                     $('#postcode').blur(function() {
                        if(!$.trim(this.value).length) { // zero-length string AFTER a trim
                        postcode = 'null';
                        }
                    }); 
             

                   $('#users').on('submit',function(event)
                    {
                        event.preventDefault();
                        location.replace('<?= PROJECT_URL ?>admin-reports-users/' + city + '/' + state + '/' + postcode);
                        console.log(city + state + postcode);
                    }    
                ); 
             
                });
                
                
                
 //**********************************
            var from = 'null';
            var to = 'null';
            
        $(document).ready(function()
                {
                    $('#from').on('change',function(event)
                    {
                        from = this.value.trim();   
                        console.log(from);
                    });
                    $('#from').blur(function() {
                        if(!$.trim(this.value).length) { // zero-length string AFTER a trim
                        from = 'null';
                        }
                    });
                    $('#to').on('change',function(event)
                    {
                        to = this.value.trim(); 
                        console.log(to);
                    });
                    $('#to').blur(function() {
                        if(!$.trim(this.value).length) { // zero-length string AFTER a trim
                        to = 'null';
                        }
                    });
             

                   $('#sales').on('submit',function(event)
                    {
                        event.preventDefault();
                        location.replace('<?= PROJECT_URL ?>admin-reports-sales/' + from + '/' + to);
                        console.log(from + to);
                    }    
                ); 
             
                });
        
        //**********************************
            var fromTotal = 'null';
            var toTotal = 'null';
            
        $(document).ready(function()
                {
                    $('#fromTotal').on('change',function(event)
                    {
                        fromTotal = this.value.trim();   
                        console.log(fromTotal);
                    });
                    $('#fromTotal').blur(function() {
                        if(!$.trim(this.value).length) { // zero-length string AFTER a trim
                        fromTotal = 'null';
                        }
                    });
                    $('#toTotal').on('change',function(event)
                    {
                        toTotal = this.value.trim(); 
                        console.log(toTotal);
                    });
                    $('#toTotal').blur(function() {
                        if(!$.trim(this.value).length) { // zero-length string AFTER a trim
                        toTotal = 'null';
                        }
                    });
             

                   $('#salesTotal').on('submit',function(event)
                    {
                        event.preventDefault();
                        location.replace('<?= PROJECT_URL ?>admin-reports-sales-total/' + fromTotal + '/' + toTotal);
                        console.log(fromTotal + toTotal);
                    }    
                ); 
             
                });
        
        
        </script>
        

        <?php
        
    }
}
?>
