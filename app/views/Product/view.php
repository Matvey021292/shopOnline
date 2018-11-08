<div class="tt-breadcrumb">
    <div class="container">
        <ul>
            <?php echo $breackrumbs; ?>
        </ul>
    </div>
</div>

<div id="tt-pageContent">
    <div class="container-indent">
        <!-- mobile product slider  -->
        <div class="tt-mobile-product-layout visible-xs">
            <div class="tt-mobile-product-slider arrow-location-center slick-animated-show-js">
                <div><img src="/images/product-01.jpg" alt=""></div>
                <div><img src="/images/product-01-02.jpg" alt=""></div>
                <div><img src="/images/product-01-03.jpg" alt=""></div>
                <div><img src="/images/product-01-04.jpg" alt=""></div>

            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-6 hidden-xs">
                    <div class="tt-product-vertical-layout">
                        <div class="tt-product-single-img">
                            <div>
                                <button class="tt-btn-zomm tt-top-right"><i class="icon-f-86"></i></button>
                                <img class="zoom-product" src='/images/<?php echo $product->img; ?>'
                                     data-zoom-image="/images/<?php echo $product->img; ?>" alt="">
                            </div>
                        </div>

                        <div class="tt-product-single-carousel-vertical">
                            <ul id="smallGallery" class="tt-slick-button-vertical  slick-animated-show-js">
                                <?php if ($gallery){ ?>
                                <?php foreach ($gallery as $item) { ?>
                                    <li><a class="zoomGalleryActive" href="#"
                                           data-image="/images/<?php echo $item->img; ?>"
                                           data-zoom-image="/images/<?php echo $item->img; ?>"><img
                                                    src="/images/<?php echo $item->img; ?>" alt=""></a></li>
                                <?php } ?>
                            </ul>

                            <?php } ?>
                        </div>
                    </div>
                </div>
                <?php $curr = \shop\App::$app->getProperty('currency');
                $cats = \shop\App::$app->getProperty('cats');
                ?>


                <div class="col-md-12 col-lg-6">
                    <div class="tt-product-single-info">
                        <h1 class="tt-title"><?php echo $product->title ?></h1>
                        <div class="tt-price">
                            <span class="new-price"><?php echo $curr['symbol_left'] ?><span
                                        id="base-price"><?php echo $product->price * $curr['value']; ?></span><?php echo $curr['symbol_right'] ?></span>
                            <?php if ($product->old_price) { ?>
                                <span class="tt-price old-price"><?php echo $curr['symbol_left'] ?><?php echo $product->old_price * $curr['value']; ?><?php echo $curr['symbol_right'] ?></span>
                            <?php } ?>
                        </div>
                        <div class="tt-review">
                            <div class="tt-rating">
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star-half"></i>
                                <i class="icon-star-empty"></i>
                            </div>
                            <a class="product-page-gotocomments-js" href="#">(1 Customer Review)</a>
                        </div>
                        <div class="tt-wrapper">
                            <?php echo $product->content; ?>
                        </div>
                        <!--                        --><?php //if ($mods) { ?>
                        <div class="tt-option-block">
                            <ul class="tt-options-swatch">
                                <?php foreach ($mods as $mod) { ?>
                                    <li><a data-title="<?php echo $mod->title ?>"
                                           data-mode="<?php echo $mod->id ?>"
                                           data-price="<?php echo $mod->price * $curr['value'] ?>"
                                           class="options-color tt-color-bg-01" href="#"><?php echo $mod->title ?></a>
                                    </li>
                                <?php } ?>
                            </ul>
                        </div>
                        <div class="tt-wrapper">
                            <div class="tt-countdown_box_02">
                                <div class="tt-countdown_inner">
                                    <div class="tt-countdown"
                                         data-date="2018-11-01"
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
                                    <a href="card/add?id=<?php echo $product->id; ?>"
                                       class="btn btn-lg add-to-cart-link" data-id="<?php echo $product->id; ?>"><i
                                                class="icon-f-39"></i>ADD TO CART</a>
                                </div>
                            </div>
                        </div>
<!--                        <div class="tt-wrapper">-->
<!--                            <ul class="tt-list-btn">-->
<!--                                <li><a class="btn-link" href="#"><i class="icon-n-072"></i>ADD TO WISH LIST</a></li>-->
<!--                                <li><a class="btn-link" href="#"><i class="icon-n-08"></i>ADD TO COMPARE</a></li>-->
<!--                            </ul>-->
<!--                        </div>-->
                        <div class="tt-wrapper">
                            <div class="tt-add-info">
                                <ul>
                                    <!--                                    <li><span>Vendor:</span> Polo</li>-->
                                    <!--                                    <li><span>Product Type:</span> T-Shirt</li>-->
                                    <li><span>Category:</span> <a
                                                href="/category/<?php echo $cats[$product->category_id]['alias'] ?>"><?php echo $cats[$product->category_id]['title'] ?></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="tt-collapse-block">
<!--                            <div class="tt-item">-->
<!--                                <div class="tt-collapse-title">DESCRIPTION</div>-->
<!--                                <div class="tt-collapse-content">-->
<!--                                    Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor-->
<!--                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud-->
<!--                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute-->
<!--                                    irure dolor in reprehenderit in voluptate velit esse cillum.-->
<!---->
<!--                                </div>-->
<!--                            </div>-->
                            <?php if (!empty($products_desc)) { ?>
                                <div class="tt-item active">
                                    <div class="tt-collapse-title">Технические характеристики</div>
                                    <div class="tt-collapse-content">
                                        <table class="tt-table-03">
                                            <tbody>
                                            <?php foreach ($products_desc as $product_desc) { ?>
                                                <tr>
                                                    <td><?php echo $product_desc['title']?>:</td>
                                                    <td><?php echo $product_desc['description']?></td>
                                                </tr>
                                            <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-indent wrapper-social-icon">
        <div class="container">
            <ul class="tt-social-icon justify-content-center">
                <li><a class="icon-g-64" href="http://www.facebook.com/"></a></li>
                <li><a class="icon-h-58" href="http://www.facebook.com/"></a></li>
                <li><a class="icon-g-66" href="http://www.twitter.com/"></a></li>
                <li><a class="icon-g-67" href="http://www.google.com/"></a></li>
                <li><a class="icon-g-70" href="https://instagram.com/"></a></li>
            </ul>
        </div>
    </div>
    <?php if ($related) { ?>
        <div class="container-indent">
            <div class="container container-fluid-custom-mobile-padding">
                <div class="tt-block-title text-left">
                    <h3 class="tt-title-small">RELATED PRODUCT</h3>
                </div>
                <div class="tt-carousel-products row arrow-location-right-top tt-alignment-img tt-layout-product-item slick-animated-show-js">
                    <?php foreach ($related as $item) { ?>
                        <div class="col-2 col-md-4 col-lg-3">
                            <div class="tt-product thumbprod-center">
                                <div class="tt-image-box">
                                    <a href="#" class="tt-btn-quickview" data-toggle="modal"
                                       data-target="#ModalquickView"></a>
                                    <a href="#" class="tt-btn-wishlist"></a>
                                    <a href="#" class="tt-btn-compare"></a>
                                    <a href="/product/<?php echo $item['alias'] ?>">
                                        <span class="tt-img"><img class="mw-100"
                                                                  src="/images/<?php echo $item['img']; ?>"
                                                                  alt="<?php echo $item['title']; ?>"></span>
                                        <span class="tt-img-roll-over"><img src="/images/<?php echo $item['img']; ?>"
                                                                            alt="<?php echo $item['title']; ?>"></span>
                                    </a>
                                </div>
                                <div class="tt-description">
                                    <div class="tt-row">
                                        <ul class="tt-add-info">
                                            <li><a href="#">T-SHIRTS</a></li>
                                        </ul>
                                    </div>
                                    <h2 class="tt-title"><a
                                                href="<?php echo $item['alias']; ?>"><?php echo $item['title'] ?></a>
                                    </h2>
                                    <div class="tt-price">


                                        <span class="new-price"><?php echo $curr['symbol_left'] ?><?php echo $item['price'] * $curr['value']; ?><?php echo $curr['symbol_right'] ?></span>
                                        <?php if ($item['old_price']) { ?>
                                            <span class="tt-price  old-price"><?php echo $curr['symbol_left'] ?><?php echo $item['old_price'] * $curr['value']; ?><?php echo $curr['symbol_right'] ?></span>
                                        <?php } ?>
                                    </div>
                                    <div class="tt-product-inside-hover">
                                        <div class="tt-row-btn">
                                            <a href="cart/add?=<?php echo $item['id']; ?>"
                                               data-id="<?php echo $item['id']; ?>"
                                               class="add-to-cart-link tt-btn-addtocart thumbprod-button-bg"
                                               data-toggle="modal" data-target="#modalAddToCartProduct">ADD TO CART</a>
                                        </div>
                                        <div class="tt-row-btn">
                                            <a href="#" class="tt-btn-quickview" data-toggle="modal"
                                               data-target="#ModalquickView"></a>
                                            <a href="#" class="tt-btn-wishlist"></a>
                                            <a href="#" class="tt-btn-compare"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>

                </div>
            </div>
        </div>
    <?php } ?>
</div>