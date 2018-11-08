<!DOCTYPE html>
<html lang="en">
<head>

    <base href="/">
    <meta charset="utf-8">
    <?php
    echo $this->getMeta();
    ?>
    <meta name="keywords" content="HTML5 Template">
    <meta name="description" content="Wokiee - Responsive HTML5 Template">
    <meta name="author" content="wokiee">
    <link rel="shortcut icon" href="./favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/ionicons.min.css">
    <link rel="stylesheet" href="/css/theme.css">
<!--    <link rel="stylesheet" href="/css/bootstrap.min.css">-->



</head>
<body>
<div id="loader-wrapper">
    <div id="loader">
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
    </div>
</div>
<div class="tt-promo-fixed">
    <button class="tt-btn-close"></button>
    <div class="tt-img">
        <a href="product.html"><img src="/images/loader.svg" data-src="/images/product-14.jpg" alt=""></a>
    </div>
    <div class="tt-description">
        <div class="tt-box-top">
            <p>
                Someone purchsed a
            </p>
            <p>
                <a href="#">
                    Lorem ipsum dolor sit amet conse ctetur adipisicing elit...
                </a>
            </p>
        </div>
        <div class="tt-info">
            14 Minutes ago from New York, USA
        </div>
    </div>
</div>
<header>
    <!-- tt-mobile-header -->
    <div class="tt-mobile-header">
        <div class="container-fluid">
            <div class="tt-header-row">
                <div class="tt-mobile-parent-menu">
                    <div class="tt-menu-toggle">
                        <i class="icon-03"></i>
                    </div>
                </div>
                <div class="tt-mobile-parent-search tt-parent-box"></div>
                <div class="tt-mobile-parent-cart tt-parent-box"></div>
                <div class="tt-mobile-parent-account tt-parent-box"></div>
                <div class="tt-mobile-parent-multi tt-parent-box"></div>
            </div>
        </div>
        <div class="container-fluid tt-top-line">
            <div class="row">
                <div class="tt-logo-container">
                    <a class="tt-logo tt-logo-alignment" href="<?php echo PATH; ?>"><img src="/images/logo.png" alt=""></a>
                </div>
            </div>
        </div>
    </div>
    <!-- tt-desktop-header -->
    <div class="tt-desktop-header">
        <div class="container">
            <div class="tt-header-holder">
                <div class="tt-col-obj tt-obj-logo">
                    <!-- logo -->
                    <a class="tt-logo tt-logo-alignment" href="<?php echo PATH; ?>"><img src="/images/logo.png" alt=""></a>
                    <!-- /logo -->
                </div>
                <div class="tt-col-obj tt-obj-menu">
                    <!-- tt-menu -->
                    <div class="menu-container">
                        <div class="menu">
                            <?php new \app\views\widget\menu\Menu(['tpl' => WWW . '/menu/menu.php']) ?>
                        </div>
                    </div>

                    <!-- /tt-menu -->
                </div>
                <div class="tt-col-obj tt-obj-options obj-move-right">
                    <!-- tt-search -->
                    <div class="tt-desctop-parent-search tt-parent-box">
                        <div class="tt-search tt-dropdown-obj">
                            <button class="tt-dropdown-toggle" >
                                <i class="icon-f-85"></i>
                            </button>
                            <div class="tt-dropdown-menu">
                                <div class="container">
                                    <form method="get" action="search" autocomplete="off">
                                        <div class="tt-col">
                                            <input type="text" name="s" class="tt-search-input typeahead" id="typeahead" placeholder="Поиск">
                                            <button class="tt-btn-search" type="submit"></button>
                                        </div>
                                        <div class="tt-col">
                                            <button class="tt-btn-close icon-g-80"></button>
                                        </div>
                                        <div class="tt-info-text">
                                            Что вы хотите купить?
                                        </div>
                                        <div class="search-results">
                                            <ul>
                                                <li>
                                                    <a href="product.html">
                                                        <div class="thumbnail"><img src="/images/loader.svg"
                                                                                    data-src="/images/product-03.jpg"
                                                                                    alt=""></div>
                                                        <div class="tt-description">
                                                            <div class="tt-title">Flared Shift Bag</div>
                                                            <div class="tt-price">
                                                                <span class="new-price">$14</span>
                                                                <span class="old-price">$24</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /tt-search -->
                    <!-- tt-cart -->
                    <div class="tt-desctop-parent-cart tt-parent-box">
                        <div class="tt-cart tt-dropdown-obj">
                            <button class="tt-dropdown-toggle" data-toggle="modal" data-target="#modalAddToCartProduct" onclick="getCart()">
                                <i class="icon-f-39"></i>
                                <?php if(!empty($_SESSION['cart'])){ ?>
                                    <span class="tt-badge-cart"><?php echo $_SESSION['cart.qty']?></span>
                                <?php }else{ ?>
                                    <span class="tt-badge-cart">0</span>
                               <?php  }?>

                            </button>
                            <div class="tt-dropdown-menu">
                                <div class="tt-mobile-add">
                                    <h6 class="tt-title">SHOPPING CART</h6>
                                    <button class="tt-close">Close</button>
                                </div>
                                <div class="tt-dropdown-inner">
                                    <div class="tt-cart-layout">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /tt-cart -->
                    <!-- tt-account -->
                    <div class="tt-desctop-parent-account tt-parent-box">
                        <div class="tt-account tt-dropdown-obj">
                            <button class="tt-dropdown-toggle"><i class="icon-f-94"></i></button>
                            <div class="tt-dropdown-menu">
                                <div class="tt-mobile-add">
                                    <button class="tt-close">Close</button>
                                </div>
                                <div class="tt-dropdown-inner">
                                    <ul>
<!--                                        <li><a href="login.html"><i class="icon-f-94"></i>Account</a></li>-->
<!--                                        <li><a href="page404.html"><i class="icon-f-68"></i>Check Out</a></li>-->
<!--                                        <li><a href="login.html"><i class="icon-f-76"></i>Sign In</a></li>-->
<!--                                        <li><a href="page404.html"><i class="icon-f-77"></i>Sign Out</a></li>-->
<!--                                        <li><a href="create-account.html"><i class="icon-f-94"></i>Register</a></li>-->
                                        <?php if(!empty($_SESSION['user'])){?>
                                            <li><a href="login.html"><i class="icon-f-94"></i><?php echo $_SESSION['user']['name']?></a></li>
                                            <li><a href="/user/logout"><i class="icon-f-77"></i>Выход</a></li>
                                        <?php }else{?>
                                            <li><a href="/user/login"><i class="icon-f-76"></i>Вход</a></li>
                                            <li><a href="/user/signup"><i class="icon-f-94"></i>Регистрация</a></li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /tt-account -->
                    <!-- tt-langue and tt-currency -->
                    <div class="tt-desctop-parent-multi tt-parent-box">
                        <div class="tt-multi-obj tt-dropdown-obj">
                            <button class="tt-dropdown-toggle"><i class="icon-f-79"></i></button>
                            <div class="tt-dropdown-menu">
                                <div class="tt-mobile-add">
                                    <button class="tt-close">Close</button>
                                </div>
                                <div class="tt-dropdown-inner">
<!--                                    <ul>-->
<!--                                        <li class="active"><a href="#">English</a></li>-->
<!--                                        <li><a href="#">Deutsch</a></li>-->
<!--                                        <li><a href="#">Español</a></li>-->
<!--                                        <li><a href="#">Français</a></li>-->
<!--                                    </ul>-->
                                    <ul>
                                        <?php new \app\views\widget\currency\Currency(); ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /tt-langue and tt-currency -->
                </div>
            </div>
        </div>
    </div>
    <!-- stuck nav -->
    <div class="tt-stuck-nav">
        <div class="container">
            <div class="tt-header-row ">
                <div class="tt-stuck-parent-menu"></div>
                <div class="tt-stuck-parent-search tt-parent-box"></div>
                <div class="tt-stuck-parent-cart tt-parent-box"></div>
                <div class="tt-stuck-parent-account tt-parent-box"></div>
                <div class="tt-stuck-parent-multi tt-parent-box"></div>
            </div>
        </div>
    </div>
</header>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php if(isset($_SESSION['error'])){ ?>
                <div class="alert alert-danger">
                    <?php echo $_SESSION['error']; unset($_SESSION['error']);?>
                </div>
          <?php   }?>
            <?php if(isset($_SESSION['success'])){ ?>
                <div class="alert alert-success">
                    <?php echo $_SESSION['success']; unset($_SESSION['success']);?>
                </div>
            <?php   }?>
        </div>
    </div>
</div>
<?php echo $content; ?>
<footer>
    <div class="tt-footer-default tt-color-scheme-02">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-9">
                    <div class="tt-newsletter-layout-01">
                        <div class="tt-newsletter">
                            <div class="tt-mobile-collapse">
                                <h4 class="tt-collapse-title">
                                    BE IN TOUCH WITH US:
                                </h4>
                                <div class="tt-collapse-content">
                                    <form id="newsletterform" class="form-inline form-default" method="post"
                                          novalidate="novalidate" action="#">
                                        <div class="form-group">
                                            <input type="text" name="email" class="form-control"
                                                   placeholder="Enter your e-mail">
                                            <button type="submit" class="btn">JOIN US</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-auto">
                    <ul class="tt-social-icon">
                        <li><a class="icon-g-64" target="_blank" href="http://www.facebook.com/"></a></li>
                        <li><a class="icon-h-58" target="_blank" href="http://www.facebook.com/"></a></li>
                        <li><a class="icon-g-66" target="_blank" href="http://www.twitter.com/"></a></li>
                        <li><a class="icon-g-67" target="_blank" href="http://www.google.com/"></a></li>
                        <li><a class="icon-g-70" target="_blank" href="https://instagram.com/"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="tt-footer-col tt-color-scheme-01">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-2 col-xl-3">
                    <div class="tt-mobile-collapse">
                        <h4 class="tt-collapse-title">
                            CATEGORIES
                        </h4>
                        <div class="tt-collapse-content">
                            <ul class="tt-list">
                                <li><a href="listing-collection.html">Women</a></li>
                                <li><a href="listing-collection.html">Men</a></li>
                                <li><a href="listing-collection.html">Accessories</a></li>
                                <li><a href="listing-collection.html">Shoes</a></li>
                                <li><a href="listing-collection.html">New Arrivals</a></li>
                                <li><a href="listing-collection.html">Clearence</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-2 col-xl-3">
                    <div class="tt-mobile-collapse">
                        <h4 class="tt-collapse-title">
                            MY ACCOUNT
                        </h4>
                        <div class="tt-collapse-content">
                            <ul class="tt-list">
                                <li><a href="account_order.html">Orders</a></li>
                                <li><a href="page404.html">Compare</a></li>
                                <li><a href="page404.html">Wishlist</a></li>
                                <li><a href="login.html">Log In</a></li>
                                <li><a href="create-account.html">Register</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="tt-mobile-collapse">
                        <h4 class="tt-collapse-title">
                            ABOUT
                        </h4>
                        <div class="tt-collapse-content">
                            <p>
                                Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore. Lorem ipsum dolor sit amet conse ctetur adipisicing
                                elit, seddo eiusmod tempor incididunt ut labore etdolore.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="tt-newsletter">
                        <div class="tt-mobile-collapse">
                            <h4 class="tt-collapse-title">
                                CONTACTS
                            </h4>
                            <div class="tt-collapse-content">
                                <address>
                                    <p><span>Address:</span> 2548 Broaddus Maple Court Avenue, Madisonville KY 4783,
                                        United States of America</p>
                                    <p><span>Phone:</span> +777 2345 7885; +777 2345 7886</p>
                                    <p><span>Hours:</span> 7 Days a week from 10 am to 6 pm</p>
                                    <p><span>E-mail:</span> <a href="mailto:info@mydomain.com">info@mydomain.com</a></p>
                                </address>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tt-footer-custom">
        <div class="container">
            <div class="tt-row">
                <div class="tt-col-left">
                    <div class="tt-col-item tt-logo-col">
                        <!-- logo -->
                        <a class="tt-logo tt-logo-alignment" href="<?php echo PATH; ?>">
                            <img src="/images/logo.png" alt="">
                        </a>
                        <!-- /logo -->
                    </div>
                    <div class="tt-col-item">
                        <!-- copyright -->
                        <div class="tt-box-copyright">
                            &copy; Wokiee 2018. All Rights Reserved
                        </div>
                        <!-- /copyright -->
                    </div>
                </div>
                <div class="tt-col-right">
                    <div class="tt-col-item">
                        <!-- payment-list -->
                        <ul class="tt-payment-list">
                            <li><a href="page404.html"><span class="icon-Stripe"><span class="path1"></span><span
                                                class="path2"></span><span class="path3"></span><span
                                                class="path4"></span><span class="path5"></span><span
                                                class="path6"></span><span class="path7"></span><span
                                                class="path8"></span><span class="path9"></span><span
                                                class="path10"></span><span class="path11"></span><span
                                                class="path12"></span>
			                </span></a></li>
                            <li><a href="page404.html"> <span class="icon-paypal-2">
			                <span class="path1"></span><span class="path2"></span><span class="path3"></span><span
                                                class="path4"></span><span class="path5"></span><span
                                                class="path6"></span>
			                </span></a></li>
                            <li><a href="page404.html"><span class="icon-visa">
			                <span class="path1"></span><span class="path2"></span><span class="path3"></span><span
                                                class="path4"></span><span class="path5"></span>
			                </span></a></li>
                            <li><a href="page404.html"><span class="icon-mastercard">
			                <span class="path1"></span><span class="path2"></span><span class="path3"></span><span
                                                class="path4"></span><span class="path5"></span><span
                                                class="path6"></span><span class="path7"></span><span
                                                class="path8"></span><span class="path9"></span><span
                                                class="path10"></span><span class="path11"></span><span
                                                class="path12"></span><span class="path13"></span>
			                </span></a></li>
                            <li><a href="page404.html"><span class="icon-discover">
			                <span class="path1"></span><span class="path2"></span><span class="path3"></span><span
                                                class="path4"></span><span class="path5"></span><span
                                                class="path6"></span><span class="path7"></span><span
                                                class="path8"></span><span class="path9"></span><span
                                                class="path10"></span><span class="path11"></span><span
                                                class="path12"></span><span class="path13"></span><span
                                                class="path14"></span><span class="path15"></span><span
                                                class="path16"></span>
			                </span></a></li>
                            <li><a href="page404.html"><span class="icon-american-express">
			                <span class="path1"></span><span class="path2"></span><span class="path3"></span><span
                                                class="path4"></span><span class="path5"></span><span
                                                class="path6"></span><span class="path7"></span><span
                                                class="path8"></span><span class="path9"></span><span
                                                class="path10"></span><span class="path11"></span>
			                </span></a></li>
                        </ul>
                        <!-- /payment-list -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<a href="#" class="tt-back-to-top">BACK TO TOP</a>
<!-- modal (AddToCartProduct) -->
<div class="modal  fade" id="modalAddToCartProduct" tabindex="-1" role="dialog" aria-label="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content ">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span
                            class="icon icon-clear"></span></button>
            </div>
            <div class="modal-body">
                <div class="tt-modal-addtocart mobile">
                    <div class="tt-modal-messages">
                        <i class="icon-f-68"></i> Added to cart successfully!
                    </div>
                    <a href="#" class="btn-link btn-close-popup">CONTINUE SHOPPING</a>
                    <a href="shopping_cart_02.html" class="btn-link">VIEW CART</a>
                    <a href="page404.html" class="btn-link">PROCEED TO CHECKOUT</a>
                </div>
                <div class="tt-modal-addtocart desctope">
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <div class="tt-modal-messages">
                                <i class="icon-f-68"></i> Added to cart successfully!
                            </div>
                            <div class="tt-modal-product">
                                <div class="tt-img">
                                    <img src="/images/loader.svg" data-src="/images/product-01.jpg" alt="">
                                </div>
                                <h2 class="tt-title"><a href="product.html">Flared Shift Dress</a></h2>
                                <div class="tt-qty">
                                    QTY: <span>1</span>
                                </div>
                            </div>
                            <div class="tt-product-total">
                                <div class="tt-total">
                                    TOTAL: <span class="tt-price">$324</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <a href="#" class="tt-cart-total">
                                There are 1 items in your cart
                                <div class="tt-total">
                                    TOTAL: <span class="tt-price">$324</span>
                                </div>
                            </a>
                            <a href="#" class="btn btn-border btn-close-popup">CONTINUE SHOPPING</a>
                            <a href="shopping_cart_02.html" class="btn btn-border">VIEW CART</a>
                            <a href="#" class="btn">PROCEED TO CHECKOUT</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- modal (quickViewModal) -->
<div class="modal  fade" id="ModalquickView" tabindex="-1" role="dialog" aria-label="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content ">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span
                            class="icon icon-clear"></span></button>
            </div>
            <div class="modal-body">
                <div class="tt-modal-quickview desctope">
                    <div class="row">
                        <div class="col-12 col-md-5 col-lg-6">
                            <div class="tt-mobile-product-slider arrow-location-center">
                                <div><img src="/images/loader.svg" data-src="/images/product-01.jpg" alt=""></div>
                                <div><img src="/images/loader.svg" data-src="/images/product-01-02.jpg" alt=""></div>
                                <div><img src="/images/loader.svg" data-src="/images/product-01-03.jpg" alt=""></div>
                                <div><img src="/images/loader.svg" data-src="/images/product-01-04.jpg" alt=""></div>

                            </div>
                        </div>
                        <div class="col-12 col-md-7 col-lg-6">
                            <div class="tt-product-single-info">
                                <div class="tt-add-info">
                                    <ul>
                                        <li><span>SKU:</span> 001</li>
                                        <li><span>Availability:</span> 40 in Stock</li>
                                    </ul>
                                </div>
                                <h2 class="tt-title">Cotton Blend Fleece Hoodie</h2>
                                <div class="tt-price">
                                    <span class="new-price">$29</span>
                                    <span class="old-price"></span>
                                </div>
                                <div class="tt-review">
                                    <div class="tt-rating">
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star-half"></i>
                                        <i class="icon-star-empty"></i>
                                    </div>
                                    <a href="#">(1 Customer Review)</a>
                                </div>
                                <div class="tt-wrapper">
                                    Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                                </div>
                                <div class="tt-swatches-container">
                                    <div class="tt-wrapper">
                                        <div class="tt-title-options">SIZE</div>
                                        <form class="form-default">
                                            <div class="form-group">
                                                <select class="form-control">
                                                    <option>21</option>
                                                    <option>25</option>
                                                    <option>36</option>
                                                </select>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tt-wrapper">
                                        <div class="tt-title-options">COLOR</div>
                                        <form class="form-default">
                                            <div class="form-group">
                                                <select class="form-control">
                                                    <option>Red</option>
                                                    <option>Green</option>
                                                    <option>Brown</option>
                                                </select>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tt-wrapper">
                                        <div class="tt-title-options">TEXTURE:</div>
                                        <ul class="tt-options-swatch options-large">
                                            <li><a class="options-color" href="#">
												<span class="swatch-img">
													<img src="/images/loader.svg" data-src="/images/texture-img-01.jpg"
                                                         alt="">
												</span>
                                                    <span class="swatch-label color-black"></span>
                                                </a></li>
                                            <li class="active"><a class="options-color" href="#">
												<span class="swatch-img">
													<img src="/images/loader.svg" data-src="/images/texture-img-02.jpg"
                                                         alt="">
												</span>
                                                    <span class="swatch-label color-black"></span>
                                                </a></li>
                                            <li><a class="options-color" href="#">
												<span class="swatch-img">
													<img src="/images/loader.svg" data-src="/images/texture-img-03.jpg"
                                                         alt="">
												</span>
                                                    <span class="swatch-label color-black"></span>
                                                </a></li>
                                            <li><a class="options-color" href="#">
												<span class="swatch-img">
													<img src="/images/loader.svg" data-src="/images/texture-img-04.jpg"
                                                         alt="">
												</span>
                                                    <span class="swatch-label color-black"></span>
                                                </a></li>
                                            <li><a class="options-color" href="#">
												<span class="swatch-img">
													<img src="/images/loader.svg" data-src="/images/texture-img-05.jpg"
                                                         alt="">
												</span>
                                                    <span class="swatch-label color-black"></span>
                                                </a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="tt-wrapper">
                                    <div class="tt-row-custom-01">
                                        <div class="col-item">
                                            <div class="tt-input-counter style-01">
                                                <span class="minus-btn"></span>
                                                <input type="text" value="1" size="5">
                                                <span class="plus-btn"></span>
                                            </div>
                                        </div>
                                        <div class="col-item">
                                            <a href="#" class="btn btn-lg"><i class="icon-f-39"></i>ADD TO CART</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- modalVideoProduct -->
<!--<div class="modal fade" id="modalVideoProduct" tabindex="-1" role="dialog" aria-label="myModalLabel" aria-hidden="true">-->
<!--    <div class="modal-dialog modal-video">-->
<!--        <div class="modal-content ">-->
<!--            <div class="modal-header">-->
<!--                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span-->
<!--                            class="icon icon-clear"></span></button>-->
<!--            </div>-->
<!--            <div class="modal-body">-->
<!--                <div class="modal-video-content">-->
<!---->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!-- modal (ModalSubsribeGood) -->
<!--<div class="modal  fade" id="ModalSubsribeGood" tabindex="-1" role="dialog" aria-label="myModalLabel"-->
<!--     aria-hidden="true">-->
<!--    <div class="modal-dialog modal-xs">-->
<!--        <div class="modal-content ">-->
<!--            <div class="modal-header">-->
<!--                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span-->
<!--                            class="icon icon-clear"></span></button>-->
<!--            </div>-->
<!--            <div class="modal-body">-->
<!--                <div class="tt-modal-subsribe-good">-->
<!--                    <i class="icon-f-68"></i> You have successfully signed!-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!-- Modal (newsletter) -->
<!--<div class="modal  fade" id="Modalnewsletter" tabindex="-1" role="dialog" aria-label="myModalLabel" aria-hidden="true"-->
<!--     data-pause=2000>-->
<!--    <div class="modal-dialog modal-sm">-->
<!--        <div class="modal-content ">-->
<!--            <div class="modal-header">-->
<!--                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span-->
<!--                            class="icon icon-clear"></span></button>-->
<!--            </div>-->
<!--            <form>-->
<!--                <div class="modal-body no-background">-->
<!--                    <div class="tt-modal-newsletter">-->
<!--                        <div class="tt-modal-newsletter-promo">-->
<!--                            <div class="tt-title-small">BE THE FIRST<br> TO KNOW ABOUT</div>-->
<!--                            <div class="tt-title-large">WOKIEE</div>-->
<!--                            <p>-->
<!--                                HTML FASHION DROPSHIPPING THEME-->
<!--                            </p>-->
<!--                        </div>-->
<!--                        <p>-->
<!--                            By subscribe, you accept the terms &amp; privacy policy<br>-->
<!--                        </p>-->
<!--                        <div class="subscribe-form form-default">-->
<!--                            <div class="row-subscibe">-->
<!--                                <div class="input-group">-->
<!--                                    <input type="text" class="form-control" placeholder="Enter your e-mail">-->
<!--                                    <button type="submit" class="btn">JOIN US</button>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="checkbox-group">-->
<!--                                <input type="checkbox" id="checkBox1">-->
<!--                                <label for="checkBox1">-->
<!--                                    <span class="check"></span>-->
<!--                                    <span class="box"></span>-->
<!--                                    Don’t Show This Popup Again-->
<!--                                </label>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </form>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<?php
$curr = \shop\App::$app->getProperty('currency')
?>
<script>
    var path = "<?php echo PATH;?>",
        course = "<?php echo $curr['value'];?>",
        symbolLeft = "<?php echo $curr['symbol_left']; ?>",
        symbolRight = "<?php echo $curr['symbol_right']; ?>";
</script>
<?php

$logs = \R::getDatabaseAdapter()
    ->getDatabase()
    ->getLogger();
debug($logs->grep('SELECT'))
?>
<script src="/js/jquery.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/jquery.elevatezoom.js"></script>
<script src="/js/slick.min.js"></script>
<script src="/js/perfect-scrollbar.min.js"></script>
<script src="/js/panelmenu.js"></script>
<script src="/js/instafeed.min.js"></script>
<script src="/js/jquery.themepunch.tools.min.js"></script>
<script src="/js/jquery.themepunch.revolution.min.js"></script>
<script src="/js/jquery.plugin.min.js"></script>
<script src="/js/jquery.countdown.min.js"></script>
<script src="/js/jquery.magnific-popup.min.js"></script>
<script src="/js/lazyload.min.js"></script>
<script src="/js/typeahead.js"></script>
<script src="/js/main.js"></script>
<script src="/js/validator.min.js"></script>
<!--<script src="/js/jquery.form.js"></script>-->
<!--<script src="/js/jquery.validate.min.js"></script>-->
<!--<script src="/js/jquery.form-init.js"></script>-->
<script src="/js/megamenu.js"></script>

</body>
</html>