<div class="ss_footer_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div class="widget ss_footer_widget">
                    <h4 class="widget-title"><i class="fa fa-user" aria-hidden="true"></i> My Account</h4>
                    <ul>
                        <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> My Account</a>
                        </li>
                        <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Personal Information</a>
                        </li>
                        <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Address</a>
                        </li>
                        <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Discount</a>
                        </li>
                        <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Order History</a>
                        </li>
                        <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> My Credit Slip</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div class="widget ss_footer_widget">
                    <h4 class="widget-title"><i class="fa fa-user" aria-hidden="true"></i> Our Services</h4>
                    <ul>
                        <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Shipping &amp; Return</a>
                        </li>
                        <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> International Shipping</a>
                        </li>
                        <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Affliates</a>
                        </li>
                        <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Careers</a>
                        </li>
                        <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> FAQ’s</a>
                        </li>
                        <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Secure Shoping</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div class="widget ss_footer_widget">
                    <h4 class="widget-title"><i class="fa fa-user" aria-hidden="true"></i> company info</h4>
                    <ul>
                        <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> About Us</a>
                        </li>
                        <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Delivery Information</a>
                        </li>
                        <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Pribacy &amp; Policy</a>
                        </li>
                        <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Terms &amp; Conditions</a>
                        </li>
                        <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Manufactures</a>
                        </li>
                        <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Suppliers</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div class="widget ss_address_widget">
                    <h4 class="widget-title"><i class="fa fa-user" aria-hidden="true"></i> Get In Touch</h4>
                    <ul>
                        <li><span>Head Office:</span>
                            <p>Web Company Name, 125, Colis Street ABC45 India #010101</p>
                        </li>
                        <li><span>Phone:</span>
                            <p>+1-804-548-5214
                                <br>+1-804-548-5215</p>
                        </li>
                        <li><span>Email:</span>
                            <p><a href="#">store@example.com</a>
                                <br><a href="#">support@example.com</a>
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="ss_copyright_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <p>© Copyright 2019 by <a href="#">big basket</a> - All Right Reserved</p>
                </div>
            </div>
        </div>
    </div>
</div>

<footer>
    <div class="modal cart-modal  fade" id="modalAddToCartProduct" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered ">
            <div class="modal-content ">

            </div>
        </div>
    </div>
</footer>
    <?php $curr = \shop\App::$app->getProperty('currency'); ?>
    <script>
        var path = "<?php echo PATH;?>",
            course = "<?php echo $curr['value'];?>",
            symbolLeft = "<?php echo $curr['symbol_left']; ?>",
            symbolRight = "<?php echo $curr['symbol_right']; ?>";
    </script>
    <?php include_once 'script.php'?>
    <script>

        $(window).on("load", function () {

            var wow = new WOW({
                boxClass: 'wow',
                animateClass: 'animated',
                offset: 0,
                mobile: true,
                live: true
            });
            wow.init();
        });
    </script>
