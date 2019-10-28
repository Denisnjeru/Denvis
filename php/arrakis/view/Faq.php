<?php
namespace arrakis\view;

class Faq extends View{
    
    
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
    <!-- Questions -->
    <div class="section main">
        <div class="container">
            <div class="row">
                <div class="col-md-12 faq-wrapper">
                    <div class="panel-group" id="accordion2">
                        <h3>General Questions</h3>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse1">
                                    Do you have a physical shop?
                                </a>
                            </div>
                            <div id="collapse1" class="accordion-body collapse">
                                <div class="accordion-inner">
                                    <div class="answer">Answer:</div>
                                    <p>We operate as an online shop and don't have a shop. 
                                        By keeping it online, we are able to minimise some of the costs and make sure we offer only high quality products to our customers.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse2">
                                    Do your products contain preservatives?
                                </a>
                            </div>
                            <div id="collapse2" class="accordion-body collapse">
                                <div class="accordion-inner">
                                    <div class="answer">Answer:</div>
                                    <p>No. All of our spices are preservative free and organic. The blends are combined and carefully hand prepared from quality ingredients and do not contain any artificial colouring nor flavouring.</p>		
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse3">
                                    Are your spices gluten-free?
                                </a>
                            </div>
                            <div id="collapse3" class="accordion-body collapse">
                                <div class="accordion-inner">
                                    <div class="answer">Answer:</div>
                                    <p>Yes, all of our spices are gluten-free, we don't use any flour or any other gluten products in the process of making our spices.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse4">
                                        How should I store my spices?
                                </a>
                            </div>
                            <div id="collapse4" class="accordion-body collapse">
                                <div class="accordion-inner">
                                    <div class="answer">Answer:</div>
                                    <p>All the spices you purchase from Spice Arakis should be kept in an air tight container in a cool and dry place. Keep it away from air, moisture and heat so avoid at all cost containers that don't close properly.</p>
                                </div>
                            </div>
                        </div>
                        <h3>Orders and payments</h3>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse5">
                                    How much do you charge for postal services?
                                </a>
                            </div>
                            <div id="collapse5" class="accordion-body collapse">
                                <div class="accordion-inner">
                                    <div class="answer">Answer:</div>
                                    <p>We aim to keep the postal price as low as we can. The cost will vary depending on the size of the order and the location.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse6">
                                    Do you ship outside of Australia?
                                </a>
                            </div>
                            <div id="collapse6" class="accordion-body collapse">
                                <div class="accordion-inner">
                                    <div class="answer">Answer:</div>
                                    <p>No we don't ship outside of Australia.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse7">
                                        What currency do you use?
                                </a>
                            </div>
                            <div id="collapse7" class="accordion-body collapse">
                                <div class="accordion-inner">
                                    <div class="answer">Answer:</div>
                                    <p>All payments are charged at AUD$.</p>
                                </div>
                            </div>
                        </div>							
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse8">
                                    Is it safe to use my credit card on your site?
                                </a>
                            </div>
                            <div id="collapse8" class="accordion-body collapse">
                                <div class="accordion-inner">
                                    <div class="answer">Answer:</div>
                                    <p>We do our absolute best to ensure that every credit card transaction is highly secure. We use Paypal and we do not store card information for extra security.</p>
                                </div>
                            </div>
                        </div>
                        <h3>Return and refunds</h3>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse9">
                                    Can I return something I have purchased if and get a full refund?
                                </a>
                            </div>
                            <div id="collapse9" class="accordion-body collapse">
                                <div class="accordion-inner">
                                    <div class="answer">Answer:</div>
                                    <p>Absolutely, we are more than happy for you to send back the unopened item and we will refund you in full the price of the item.However, keep in mind that for change you will need to cover for the postage: please include a prepaid post satchel if you wish to exchange the product.</p>
                                </div>
                            </div>
                        </div>
                        <h3>Account</h3><a name="account"></a>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse10">
                                    What are the account types?
                                </a>
                            </div>
                            <div id="collapse10" class="accordion-body collapse">
                                <div class="accordion-inner">
                                    <div class="answer">Answer:</div>
                                    <p>At registration. you will be asked to select your account type from Private and Professional.<.br> 
                                        In order to obtain a professional account, you will be asked to provide your company details including the ABN number.</br>                                                                                
                                        We reserve the right to verify that the company details provided are real and that the company operates within the hospitality or food supply industry.</br>
                                        Providing false or misleading details will result in the cancellation of the account.</p>                                        
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse11">
                                    What is the advantage of having a professional account?
                                </a>
                            </div>
                            <div id="collapse11" class="accordion-body collapse">
                                <div class="accordion-inner">
                                    <div class="answer">Answer:</div>
                                    <p>All professional users can have a discount on the total of the order. The discount will be displayed in the shopping cart.</p>                                                                                
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse12">
                                    I can't access my account, what should I do?
                                </a>
                            </div>
                            <div id="collapse12" class="accordion-body collapse">
                                <div class="accordion-inner">
                                    <div class="answer">Answer:</div>
                                    <p>Our systems are designed with a high security system which will block any access when more than 5 failed logins have been attempted. If you are unable to access your account, please contact us and one of our friendly staff will be happy to help you.
Alternatively, please make sure you keep your weekly intake of omega 3 oils to an acceptable level to avoid any forgetful password login episodes.</p>                                                                                
                                </div>
                            </div>
                        </div>
                    </div> <!-- /accordion -->
                </div> <!-- /faq-wrapper -->
            </div> <!-- /row -->
        </div> <!-- /container -->
    </div> <!-- /section -->
    <!-- END questions  -->
        <?php
        
    }
}



?>
