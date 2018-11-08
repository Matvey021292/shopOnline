<?php $curr = \shop\App::$app->getProperty('currency'); ?>
<div id="tt-pageContent">
    <div class="container-indent nomargin">
        <div class="container-fluid">
            <div class="row">
                <div class="slider-revolution revolution-default">
                    <div class="tp-banner-container">
                        <div class="tp-banner revolution">
                            <ul>
                                <li data-thumb="/images/slide-01.jpg" data-transition="fade" data-slotamount="1"
                                    data-masterspeed="1000" data-saveperformance="off" data-title="Slide">
                                    <img src="/images/slide-01.jpg" alt="slide1" data-bgposition="center center"
                                         data-bgfit="cover" data-bgrepeat="no-repeat">
                                    <div class="tp-caption tp-caption1 lft stb"
                                         data-x="center"
                                         data-y="center"
                                         data-hoffset="0"
                                         data-voffset="0"
                                         data-speed="600"
                                         data-start="900"
                                         data-easing="Power4.easeOut"
                                         data-endeasing="Power4.easeIn">
                                        <div class="tp-caption1-wd-1 tt-base-color">Multipurpose</div>
                                        <div class="tp-caption1-wd-2">Premium<br>Html Template</div>
                                        <div class="tp-caption1-wd-3">30 skins, powerful features, great support,
                                            exclusive offer
                                        </div>
                                        <div class="tp-caption1-wd-4"><a href="listing-left-column.html" target="_blank"
                                                                         class="btn btn-xl" data-text="SHOP NOW!">SHOP
                                                NOW!</a></div>
                                    </div>
                                </li>
                                <li data-thumb="/images/slide-02.jpg" data-transition="fade" data-slotamount="1"
                                    data-masterspeed="1000" data-saveperformance="off" data-title="Slide">
                                    <img src="/images/slide-02.jpg" alt="slide1" data-bgposition="center center"
                                         data-bgfit="cover" data-bgrepeat="no-repeat">
                                    <div class="tp-caption tp-caption1 lft stb"
                                         data-x="center"
                                         data-y="center"
                                         data-hoffset="0"
                                         data-voffset="0"
                                         data-speed="600"
                                         data-start="900"
                                         data-easing="Power4.easeOut"
                                         data-endeasing="Power4.easeIn">
                                        <div class="tp-caption1-wd-1 tt-white-color">Ready To</div>
                                        <div class="tp-caption1-wd-2 tt-white-color">Use Unique<br>Demos</div>
                                        <div class="tp-caption1-wd-3 tt-white-color">Optimized for speed, website that
                                            sells
                                        </div>
                                        <div class="tp-caption1-wd-4"><a href="listing-left-column.html" target="_blank"
                                                                         class="btn btn-xl" data-text="SHOP NOW!">SHOP
                                                NOW!</a></div>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php if ($cats){ ?>
        <div class="container-indent0">
            <div class="container-fluid">
                <div class="row tt-layout-promo-box">
                    <div class="col-sm-12 ">
                        <div class="row">
                            <?php foreach ($cats as $cat ){ ?>
                                <div class="col-sm-3">
                                    <a href="/category/<?php echo $cat->alias?>" class="tt-promo-box tt-one-child hover-type-2">
                                        <img src="/images/<?php echo $cat->image?>" data-src="/images/<?php echo $cat->image?>" alt="<?php echo $cat->title?>">
                                        <div class="tt-description">
                                            <div class="tt-description-wrapper">
                                                <div class="tt-background"></div>
                                                <div class="tt-title-small"><?php echo $cat->title?></div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   <?php  }?>

    <div class="container-indent container-indent-tranding">
        <div class="container container-fluid-custom-mobile-padding">
            <div class="tt-block-title">
                <h1 class="tt-title">ПОПУЛЯРНЫЕ ТОВАРЫ</h1>
            </div>
            <div class="row tt-layout-product-item">

                <?php if ($hits) {
                    foreach ($hits as $hit) { ?>
                        <div class="col-6 col-md-4 col-lg-3">
                            <div class="tt-product thumbprod-center">
                                <div class="tt-image-box">
                                    <a href="product/<?php echo $hit->alias ?>" class="tt-btn-quickview"
                                       data-tooltip="tt-tooltip" data-placement="left"
                                       data-title="Quick View" data-toggle="modal" data-target="#ModalquickView"></a>
                                    <a href="product/<?php echo $hit->alias ?>">
                                <span class="tt-img">
                                    <img src="/images/loader.svg" data-src="/images/<?php echo $hit->img; ?>"
                                         alt="<?php echo $hit->title; ?>">
                                </span>
                                        <span class="tt-img-roll-over"><img src="/images/loader.svg"
                                                                            data-src="/images/<?php echo $hit->img; ?>"
                                                                            alt="<?php echo $hit->title; ?> "></span>
                                        <span class="tt-label-location">
									<span class="tt-label-new">New</span>
								</span>
                                    </a>
                                </div>
                                <div class="tt-description">
                                    <div class="tt-row">
                                        <ul class="tt-add-info">
                                            <li><a href="#">T-SHIRTS</a></li>
                                        </ul>
                                        <div class="tt-rating">
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                            <i class="icon-star-half"></i>
                                            <i class="icon-star-empty"></i>
                                        </div>
                                    </div>
                                    <h2 class="tt-title"><a
                                                href="product/<?php echo $hit->alias ?>"><?php echo $hit->title; ?> </a>
                                    </h2>
                                    <div class="tt-price">
                                        <span class="new-price"><?php echo $curr['symbol_left']?><?php echo $hit->price*$curr['value']; ?><?php echo $curr['symbol_right']?></span>
                                        <div class="tt-price  old-price" >
                                            <?php if ($hit->old_price != 0) { ?>
                                                <?php echo $curr['symbol_left']?><?php echo $hit->old_price*$curr['value']; ?><?php echo $curr['symbol_right']?>
                                            <?php } ?>
                                        </div>
                                    </div>

                                    <div class="tt-product-inside-hover">
                                        <a data-id="<?php echo $hit->id; ?>"href="cart/add?id=<?php echo $hit->id; ?>"
                                           class="add-to-cart-link tt-btn-addtocart thumbprod-button-bg"
                                           data-toggle="modal"
                                           data-target="#modalAddToCartProduct">ADD TO CART</a>
                                        <a href="#" class="tt-btn-quickview" data-toggle="modal"
                                           data-target="#ModalquickView"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php }
                } ?>

            </div>
        </div>
    </div>
    <div class="container-indent">
        <div class="container-fluid-custom">
            <div class="row tt-layout-promo-box">
                <div class="col-sm-6 col-md-4">
                    <a href="listing-left-column.html" class="tt-promo-box">
                        <img src="/images/loader.svg" data-src="/images/index-promo-img-07.jpg" alt="">
                        <div class="tt-description">
                            <div class="tt-description-wrapper">
                                <div class="tt-background"></div>
                                <div class="tt-title-small">FALL-WINTER CLEARANCE SALES</div>
                                <div class="tt-title-large">GET UP TO <span class="tt-base-color">50% OFF</span></div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-md-4">
                    <a href="listing-left-column.html" class="tt-promo-box">
                        <img src="/images/loader.svg" data-src="/images/index-promo-img-08.jpg" alt="">
                        <div class="tt-description">
                            <div class="tt-description-wrapper">
                                <div class="tt-background"></div>
                                <div class="tt-title-small">SUMMER <span class="tt-base-color">2018</span></div>
                                <div class="tt-title-large">NEW ARRIVALS</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-md-4">
                    <a href="listing-left-column.html" class="tt-promo-box">
                        <img src="/images/loader.svg" data-src="/images/index-promo-img-09.jpg" alt="">
                        <div class="tt-description">
                            <div class="tt-background"></div>
                            <div class="tt-description-wrapper">
                                <div class="tt-background"></div>
                                <div class="tt-title-small">NEW COLLECTION</div>
                                <div class="tt-title-large"><span class="tt-base-color">HANDBAGS</span></div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-indent">
        <div class="container container-fluid-custom-mobile-padding">
            <div class="tt-block-title">
                <h2 class="tt-title">BEST SELLER</h2>
                <div class="tt-description">TOP SALE IN THIS WEEK</div>
            </div>
            <div class="row tt-layout-product-item">
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="tt-product thumbprod-center">
                        <div class="tt-image-box">
                            <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"></a>
                            <a href="product.html">
                                <span class="tt-img"><img src="/images/loader.svg" data-src="/images/product-16.jpg"
                                                          alt=""></span>
                                <span class="tt-img-roll-over"><img src="/images/loader.svg"
                                                                    data-src="/images/product-16-01.jpg" alt=""></span>
                            </a>
                            <div class="tt-countdown_box">
                                <div class="tt-countdown_inner">
                                    <div class="tt-countdown"
                                         data-date="2018-11-14"
                                         data-year="Yrs"
                                         data-month="Mths"
                                         data-week="Wk"
                                         data-day="Day"
                                         data-hour="Hrs"
                                         data-minute="Min"
                                         data-second="Sec"></div>
                                </div>
                            </div>

                        </div>
                        <div class="tt-description">
                            <div class="tt-row">
                                <ul class="tt-add-info">
                                    <li><a href="#">T-SHIRTS</a></li>
                                </ul>
                            </div>
                            <h2 class="tt-title"><a href="product.html">Flared Shift Dress</a></h2>
                            <div class="tt-price">
                                $24
                            </div>
                            <div class="tt-product-inside-hover">
                                <a href="#" class="tt-btn-addtocart thumbprod-button-bg" data-toggle="modal"
                                   data-target="#modalAddToCartProduct">ADD TO CART</a>
                                <a href="#" class="tt-btn-quickview" data-toggle="modal"
                                   data-target="#ModalquickView"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="tt-product thumbprod-center">
                        <div class="tt-image-box">
                            <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"></a>
                            <a href="product.html">
                                <span class="tt-img"><img src="/images/loader.svg" data-src="/images/product-46.jpg"
                                                          alt=""></span>
                                <span class="tt-img-roll-over"><img src="/images/loader.svg"
                                                                    data-src="/images/product-46-01.jpg" alt=""></span>
                            </a>
                        </div>
                        <div class="tt-description">
                            <div class="tt-row">
                                <ul class="tt-add-info">
                                    <li><a href="#">T-SHIRTS</a></li>
                                </ul>
                                <div class="tt-rating">
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star-half"></i>
                                    <i class="icon-star-empty"></i>
                                </div>
                            </div>
                            <h2 class="tt-title"><a href="product.html">Flared Shift Dress</a></h2>
                            <div class="tt-price">
                                $8
                            </div>
                            <div class="tt-option-block">
                                <ul class="tt-options-swatch">
                                    <li class="active"><a class="options-color" href="#">
										<span class="swatch-img">
											<img src="/images/texture-img-06.jpg" alt="">
										</span>
                                            <span class="swatch-label color-black"></span>
                                        </a></li>
                                    <li><a class="options-color" href="#">
										<span class="swatch-img">
											<img src="/images/texture-img-07.jpg" alt="">
										</span>
                                            <span class="swatch-label color-black"></span>
                                        </a></li>
                                    <li><a class="options-color" href="#">
										<span class="swatch-img">
											<img src="/images/texture-img-08.jpg" alt="">
										</span>
                                            <span class="swatch-label color-black"></span>
                                        </a></li>
                                </ul>
                            </div>
                            <div class="tt-product-inside-hover">
                                <a href="#" class="tt-btn-addtocart thumbprod-button-bg" data-toggle="modal"
                                   data-target="#modalAddToCartProduct">ADD TO CART</a>
                                <a href="#" class="tt-btn-quickview" data-toggle="modal"
                                   data-target="#ModalquickView"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="tt-product thumbprod-center">
                        <div class="tt-image-box">
                            <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"></a>
                            <a href="product.html">
                                <span class="tt-img"><img src="/images/loader.svg" data-src="/images/product-18.jpg"
                                                          alt=""></span>
                                <span class="tt-img-roll-over"><img src="/images/loader.svg"
                                                                    data-src="/images/product-18-01.jpg" alt=""></span>
                            </a>
                        </div>
                        <div class="tt-description">
                            <div class="tt-row">
                                <ul class="tt-add-info">
                                    <li><a href="#">T-SHIRTS</a></li>
                                </ul>
                            </div>
                            <h2 class="tt-title"><a href="product.html">Flared Shift Dress</a></h2>
                            <div class="tt-price">
                                $46
                            </div>
                            <div class="tt-option-block">
                                <ul class="tt-options-swatch">
                                    <li><a class="options-color tt-color-bg-01" href="#"></a></li>
                                    <li><a class="options-color tt-color-bg-02" href="#"></a></li>
                                </ul>
                            </div>
                            <div class="tt-product-inside-hover">
                                <a href="#" class="tt-btn-addtocart thumbprod-button-bg" data-toggle="modal"
                                   data-target="#modalAddToCartProduct">ADD TO CART</a>
                                <a href="#" class="tt-btn-quickview" data-toggle="modal"
                                   data-target="#ModalquickView"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="tt-product thumbprod-center">
                        <div class="tt-image-box">
                            <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"></a>
                            <a href="product.html">
                                <span class="tt-img"><img src="/images/loader.svg" data-src="/images/product-19.jpg"
                                                          alt=""></span>
                                <span class="tt-img-roll-over"><img src="/images/loader.svg"
                                                                    data-src="/images/product-19-02.jpg" alt=""></span>
                            </a>
                        </div>
                        <div class="tt-description">
                            <div class="tt-row">
                                <ul class="tt-add-info">
                                    <li><a href="#">T-SHIRTS</a></li>
                                </ul>
                                <div class="tt-rating">
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                </div>
                            </div>
                            <h2 class="tt-title"><a href="product.html">Flared Shift Dress</a></h2>
                            <div class="tt-price">
                                $35
                            </div>
                            <div class="tt-product-inside-hover">
                                <a href="#" class="tt-btn-addtocart thumbprod-button-bg" data-toggle="modal"
                                   data-target="#modalAddToCartProduct">ADD TO CART</a>
                                <a href="#" class="tt-btn-quickview" data-toggle="modal"
                                   data-target="#ModalquickView"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="tt-product thumbprod-center">
                        <div class="tt-image-box">
                            <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"></a>
                            <a href="product.html">
                                <span class="tt-img"><img src="/images/loader.svg" data-src="/images/product-41.jpg"
                                                          alt=""></span>
                                <span class="tt-img-roll-over"><img src="/images/loader.svg"
                                                                    data-src="/images/product-41-01.jpg" alt=""></span>
                            </a>
                        </div>
                        <div class="tt-description">
                            <div class="tt-row">
                                <ul class="tt-add-info">
                                    <li><a href="#">T-SHIRTS</a></li>
                                </ul>
                                <div class="tt-rating">
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                </div>
                            </div>
                            <h2 class="tt-title"><a href="product.html">Flared Shift Dress</a></h2>
                            <div class="tt-price">
                                $124
                            </div>
                            <div class="tt-product-inside-hover">
                                <a href="#" class="tt-btn-addtocart thumbprod-button-bg" data-toggle="modal"
                                   data-target="#modalAddToCartProduct">ADD TO CART</a>
                                <a href="#" class="tt-btn-quickview" data-toggle="modal"
                                   data-target="#ModalquickView"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="tt-product thumbprod-center">
                        <div class="tt-image-box">
                            <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"></a>
                            <a href="product.html">
                                <span class="tt-img"><img src="/images/loader.svg" data-src="/images/product-02.jpg"
                                                          alt=""></span>
                                <span class="tt-img-roll-over"><img src="/images/loader.svg"
                                                                    data-src="/images/product-02-03.jpg" alt=""></span>
                            </a>
                        </div>
                        <div class="tt-description">
                            <div class="tt-row">
                                <ul class="tt-add-info">
                                    <li><a href="#">T-SHIRTS</a></li>
                                </ul>
                            </div>
                            <h2 class="tt-title"><a href="product.html">Flared Shift Dress</a></h2>
                            <div class="tt-price">
                                $43
                            </div>
                            <div class="tt-product-inside-hover">
                                <a href="#" class="tt-btn-addtocart thumbprod-button-bg" data-toggle="modal"
                                   data-target="#modalAddToCartProduct">ADD TO CART</a>
                                <a href="#" class="tt-btn-quickview" data-toggle="modal"
                                   data-target="#ModalquickView"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="tt-product thumbprod-center">
                        <div class="tt-image-box">
                            <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"></a>
                            <a href="product.html">
                                <span class="tt-img"><img src="/images/loader.svg" data-src="/images/product-05.jpg"
                                                          alt=""></span>
                                <span class="tt-img-roll-over"><img src="/images/loader.svg"
                                                                    data-src="/images/product-05-02.jpg" alt=""></span>
                            </a>
                        </div>
                        <div class="tt-description">
                            <div class="tt-row">
                                <ul class="tt-add-info">
                                    <li><a href="#">T-SHIRTS</a></li>
                                </ul>
                            </div>
                            <h2 class="tt-title"><a href="product.html">Flared Shift Dress</a></h2>
                            <div class="tt-price">
                                $124
                            </div>
                            <div class="tt-product-inside-hover">
                                <a href="#" class="tt-btn-addtocart thumbprod-button-bg" data-toggle="modal"
                                   data-target="#modalAddToCartProduct">ADD TO CART</a>
                                <a href="#" class="tt-btn-quickview" data-toggle="modal"
                                   data-target="#ModalquickView"></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-md-4 col-lg-3">
                    <div class="tt-product thumbprod-center">
                        <div class="tt-image-box">
                            <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"></a>
                            <a href="product.html">
                                <span class="tt-img"><img src="/images/loader.svg" data-src="/images/product-33.jpg"
                                                          alt=""></span>
                                <span class="tt-img-roll-over"><img src="/images/loader.svg"
                                                                    data-src="/images/product-33-01.jpg" alt=""></span>
                            </a>
                        </div>
                        <div class="tt-description">
                            <div class="tt-row">
                                <ul class="tt-add-info">
                                    <li><a href="#">T-SHIRTS</a></li>
                                </ul>
                                <div class="tt-rating">
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star-half"></i>
                                    <i class="icon-star-empty"></i>
                                </div>
                            </div>
                            <h2 class="tt-title"><a href="product.html">Flared Shift Dress</a></h2>
                            <div class="tt-price">
                                $54
                            </div>
                            <div class="tt-product-inside-hover">
                                <a href="#" class="tt-btn-addtocart thumbprod-button-bg" data-toggle="modal"
                                   data-target="#modalAddToCartProduct">ADD TO CART</a>
                                <a href="#" class="tt-btn-quickview" data-toggle="modal"
                                   data-target="#ModalquickView"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-indent">
        <div class="container">
            <div class="tt-block-title">
                <h2 class="tt-title">LATES FROM BRANDS</h2>
                <div class="tt-description">THE FRESHEST AND MOST EXCITING NEWS</div>
            </div>
            <div class="tt-blog-thumb-list">
                <div class="row">
                    <?php
                    if ($brands) {
                        foreach ($brands as $brand) { ?>
                            <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                                <div class="tt-blog-thumb">
                                    <div class="tt-img">
                                        <a href="blog-single-post.html" target="_blank"><img src="/images/loader.svg"
                                                                                             data-src="/images/<?php echo $brand->img ?>"
                                                                                             alt=""></a>
                                    </div>
                                    <div class="tt-title-description">
                                        <div class="tt-background"></div>
                                        <div class="tt-tag">
                                            <a href="blog-single-post.html">FASHION</a>
                                        </div>
                                        <div class="tt-title">
                                            <a href="blog-single-post.html"><?php echo $brand->title; ?></a>
                                        </div>
                                        <p>
                                            <?php
                                            echo $brand->description;
                                            ?>
                                        </p>
                                        <div class="tt-meta">
                                            <div class="tt-autor">
                                                by <a href="#">ADRIAN</a> on January 14, 2017
                                            </div>
                                            <div class="tt-comments">
                                                <a href="#"><i class="tt-icon icon-f-88"></i>7</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <div class="container-indent">
        <div class="container-fluid">
            <div class="tt-block-title">
                <h2 class="tt-title"><a target="_blank" href="https://www.instagram.com/wokieeshop/">@ FOLLOW</a> US ON
                </h2>
                <div class="tt-description">INSTAGRAM</div>
            </div>
            <div class="row">
                <div id="instafeed" class="instafeed-fluid"
                     data-accessToken="8626857013.dd09515.0fcd8351c65140d48f5a340693af1c3f"
                     data-clientId="dd095157744c4bd0a67181fc4906e5b6"
                     data-userId="8626857013"
                     data-limitImg="6">
                </div>
            </div>
        </div>
    </div>
    <div class="container-indent">
        <div class="container">
            <div class="row tt-services-listing">
                <div class="col-xs-12 col-md-6 col-lg-4">
                    <a href="#" class="tt-services-block">
                        <div class="tt-col-icon">
                            <i class="icon-f-48"></i>
                        </div>
                        <div class="tt-col-description">
                            <h4 class="tt-title">FREE SHIPPING</h4>
                            <p>Free shipping on all US order or order above $99</p>
                        </div>
                    </a>
                </div>
                <div class="col-xs-12 col-md-6 col-lg-4">
                    <a href="#" class="tt-services-block">
                        <div class="tt-col-icon">
                            <i class="icon-f-35"></i>
                        </div>
                        <div class="tt-col-description">
                            <h4 class="tt-title">SUPPORT 24/7</h4>
                            <p>Contact us 24 hours a day, 7 days a week</p>
                        </div>
                    </a>
                </div>
                <div class="col-xs-12 col-md-6 col-lg-4">
                    <a href="#" class="tt-services-block">
                        <div class="tt-col-icon">
                            <i class="icon-e-09"></i>
                        </div>
                        <div class="tt-col-description">
                            <h4 class="tt-title">30 DAYS RETURN</h4>
                            <p>Simply return it within 24 days for an exchange.</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>