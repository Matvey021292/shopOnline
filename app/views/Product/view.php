<?php $curr = \shop\App::$app->getProperty('currency');
$cats = \shop\App::$app->getProperty('cats'); ?>


<div class="cc_ps_top_product_main_wrapper single-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <?php $count = 0; ?>
                        <?php foreach ($gallery as $k => $v): ?>
                            <div class="carousel-item <?php echo ($count == 0) ? 'active' : ''; ?>">
                                <img  class="img-webp d-block m-auto mw-100 w-auto drift-demo-trigger"  src="/images/<?php  echo replaceUrlImage($v['img'],'lg'); ?>"
                                     alt="First slide" data-zoom="/images/<?php echo $v['img']; ?>">
                            </div>
                            <?php
                            $count++;
                        endforeach;
                        ?>
                    </div>
                    <a class="carousel-control-prev" href="#carousel-thumb" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    </a>
                    <a class="carousel-control-next" href="#carousel-thumb" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    </a>
                    <ol class="carousel-indicators">

                        <?php $count = 0; ?>
                        <?php foreach ($gallery as $k => $v): ?>
                            <li data-target="#carousel-thumb" data-slide-to="<?php echo $count;?>" class="<?php echo ($count == 0) ? 'active' : ''; ?>">
                                <img class="d-block w-100"
                                     src="/images/<?php echo replaceUrlImage($v['img'],'sm') ?>"
                                     class="img-fluid" >
                            </li>
                            <?php
                            $count++;
                        endforeach;
                        ?>
                    </ol>
                </div>
                <!--/.Carousel Wrapper-->
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="btc_shop_single_prod_right_section detail">
                    <div class="btc_shop_sin_pro_icon_wrapper">
                        <div class='rating-stars text-left'>
                            <ul class='stars mt-0'>
                                <?php for ($i = 1; $i <= 5; $i++) { ?>
                                    <li class='star <?php if ($product->rating / $product->rating_view >= $i) {
                                        echo 'selected';
                                    } ?>' title='Poor'
                                        data-value='<?php echo $i; ?>'>
                                        <i class='fa fa-star fa-fw'></i>
                                    </li>
                                <?php } ?>
                            </ul>
                            <?php if ($product->rating_view > 0) { ?>
                                <span class="text-md">   отзывов <span>:) <?php echo $product->rating_view; ?></span></span>
                            <?php } ?>
                        </div>
                        <div class="ss_featured_products_box_img_list_cont ss_featured_products_box_img_list_cont_single">
                            <h4><a href="#"><?php echo $product->title ?></a></h4>
                            <ins class="h3 m-0 text-danger"><?php echo $curr['symbol_left'] ?><?php echo $product->price * $curr['value']; ?>
                                <span><?php echo $curr['symbol_right'] ?></span></ins>
                            <del class="h5 m-0 text-grey"><?php if ($product->old_price != 0) { ?>
                                    <?php echo $curr['symbol_left'] ?><?php echo $product->old_price * $curr['value']; ?><?php echo $curr['symbol_right'] ?>
                                <?php } ?>
                            </del>
                        </div>
                    </div>
                    <div class="btc_shop_prod_quanty_bar">
                        <div class="row">

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <a data-id="<?php echo $product->id; ?>"
                                   href="#"
                                   title="Добавить товар в список для сравнения"
                                   class="w-100 text-dark text-sm d-block add-to-compare p-0 mb-2">
                                    <i class="fa fa-random text-danger"
                                       aria-hidden="true"></i> Добавить к
                                    сравнению
                                </a>
                                <div class="d-flex">
                                    <a data-id="<?php echo $product->id; ?>"
                                       title="Добавить товар в корзину"
                                       href="cart/add?id=<?php echo $product->id; ?>"
                                       class="btn d-flex mr-3 justify-content-between <?php if (!empty($_SESSION['cart_container'])) {
                                           echo (in_array($product->id, $_SESSION['cart_container'])) ? 'blue' : 'btn-indigo';
                                       } else {
                                           echo 'btn-indigo ';
                                       } ?> waves-effect add-to-cart-link align-items-center ">
                                            <span class="text-white add-cart-text"><?php if (!empty($_SESSION['cart_container'])) {
                                                    echo (in_array($product->id, $_SESSION['cart_container'])) ? 'Добавлено' : 'В корзину';
                                                } else {
                                                    echo 'В корзину';
                                                } ?></span>
                                    </a>
                                    <button type="button" class="btn m-0 blue lighten-2"><i
                                                class="fa fa-heart"
                                                aria-hidden="true"></i>
                                    </button>
                                </div>
                                <div class="single-cat-list">
                                    Категория : <a
                                            href="/category/<?php echo $products_cat['alias'] ?>"><?php echo $products_cat['title'] ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Grid row-->
        <div class="row mt-5">
            <style>
                .fixed-link-left {
                    position: absolute;
                    right: 30px;
                    width: 30px;
                    height: 30px;
                    top: 10px;
                }

                .fixed-link-left img {
                    max-width: 30px;
                }

                .classic-tabs .nav.tabs-custom {
                    border-bottom: 1px solid #ebebeb;
                    border-top: 1px solid #ebebeb;
                    border-radius: 0 !important;
                }

                .classic-tabs .nav.tabs-custom li a {
                    text-transform: uppercase;
                    font-weight: 500;
                    color: #888;
                    display: block;
                    border-bottom: 3px solid transparent !important;
                    margin: 0 !important;
                }

                .classic-tabs .nav li:first-child {
                    padding-left: 0;
                    margin-left: 0;
                }

                .classic-tabs .nav li a.active {
                    color: #3a54d6;
                    border-bottom: 3px solid #3a54d6 !important;
                }

                .tabs-custom-content {
                    border-right: 0;
                    padding-left: 0;
                }

                .content-single-desc ul {
                    text-align: left;
                    padding-left: 30px;
                }

                .content-single-desc ul li {
                    list-style: disc;
                }

                .content-single-desc img {
                    margin: 10px 0;
                }

                .cc_ps_deliv_main_wrapper {
                    position: relative;
                    justify-content: space-between;
                    display: flex;
                }

                .cc_ps_bottom_cont_list_wrapper {
                    width: auto;
                }

                .cc_ps_bottom_cont_heading_wrapper {
                    width: auto;
                    background: #fff;
                    z-index: 1;
                    padding-right: 2px;
                }

                .cc_ps_bottom_cont_list_wrapper {
                    padding-left: 2px;
                    background: #fff;
                    z-index: 1;
                }

                .cc_ps_deliv_main_wrapper:after {
                    position: absolute;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    overflow: hidden;
                    bottom: 0;
                    white-space: nowrap;
                    content: ". . . . . . . . . . . . . . . . . . . . " ". . . . . . . . . . . . . . . . . . . . " ". . . . . . . . . . . . . . . . . . . . " ". . . . . . . . . . . . . . . . . . . . " ". . . . . . . . . . . . . . . . . . . . " ". . . . . . . . . . . . . . . . . . . . " ". . . . . . . . . . . . . . . . . . . . " ". . . . . . . . . . . . . . . . . . . . " ". . . . . . . . . . . . . . . . . . . . ";
                    color: #bcbcbc;
                }
            </style>
            <!--Grid column-->
            <div class="col-md-8">
                <div class="classic-tabs">
                    <ul class="nav tabs-custom">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#panel1" role="tab">Все о товаре</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#panel2" role="tab">Характеристики</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#panel3" role="tab">Фото</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#panel4" role="tab">Отзывы</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#panel5" role="tab">Цены в интеренете</a>
                        </li>
                    </ul>
                </div>

                <div class="tab-content tabs-custom-content">
                    <div class="tab-pane fade in show active" id="panel1" role="tabpanel">
                        <div class="content-single-desc">
                            <?php echo $product->content ?>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="panel2" role="tabpanel">
                        <?php foreach ($products_desc as $prod_desc): ?>
                            <div class="cc_ps_deliv_main_wrapper pt-0">
                                <div class="cc_ps_bottom_cont_heading_wrapper">
                                    <p><?php echo $prod_desc['title']; ?></p>
                                </div>
                                <div class="cc_ps_bottom_cont_list_wrapper">
                                    <ul>
                                        <li><?php echo $prod_desc['description']; ?></li>
                                    </ul>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="tab-pane fade" id="panel3" role="tabpanel">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima, soluta
                            doloribus
                            reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora,
                            placeat
                            ratione porro voluptate odit minima.</p>
                    </div>
                    <div class="tab-pane fade" id="panel4" role="tabpanel">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima, soluta
                            doloribus
                            reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora,
                            placeat
                            ratione porro voluptate odit minima.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima, soluta
                            doloribus
                            reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora,
                            placeat
                            ratione porro voluptate odit minima.</p>
                    </div>
                    <div class="tab-pane fade" id="pane5" role="tabpanel">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima, soluta
                            doloribus
                            reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora,
                            placeat
                            ratione porro voluptate odit minima.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima, soluta
                            doloribus
                            reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora,
                            placeat
                            ratione porro voluptate odit minima.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">


            </div>
            <!--Grid column-->

        </div>
        <!--Grid row-->
    </div>
</div>


<?php //if ($recentlyViewed): ?>
<!--    <div class="latestproducts">-->
<!--        <div class="product-one">-->
<!--            <h3>Недавно просмотренные:</h3>-->
<!--            --><?php //foreach ($recentlyViewed as $item): ?>
<!--                <div class="col-md-4 product-left p-left">-->
<!--                    <div class="product-main simpleCart_shelfItem">-->
<!--                        <a href="product/-->
<? //= $item['alias']; ?><!--" class="mask"><img class="img-responsive zoom-img"-->
<!--                                                                                   src="images/-->
<? //= $item['img']; ?><!--"-->
<!--                                                                                   alt=""/></a>-->
<!--                        <div class="product-bottom">-->
<!--                            <h3><a href="product/--><? //= $item['alias']; ?><!--">-->
<? //= $item['title']; ?><!--</a></h3>-->
<!--                            <p>Explore Now</p>-->
<!--                            <h4>-->
<!--                                <a class="item_add add-to-cart-link" href="cart/add?id=-->
<? //= $item['id']; ?><!--"-->
<!--                                   data-id="--><? //= $item['id']; ?><!--"><i></i></a>-->
<!--                                <span class="item_price">--><? //= $curr['symbol_left']; ?><!---->
<? //= $item['price'] * $curr['value']; ?><!----><? //= $curr['symbol_right']; ?><!--</span>-->
<!--                                --><?php //if ($item['old_price']): ?>
<!--                                    <del>--><? //= $curr['symbol_left']; ?><!---->
<? //= $item['old_price'] * $curr['value']; ?><!----><? //= $curr['symbol_right']; ?><!--</del>-->
<!--                                --><?php //endif; ?>
<!--                            </h4>-->
<!--                        </div>-->
<!--                        <div class="srch">-->
<!--                            <span>-50%</span>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            --><?php //endforeach; ?>
<!--            <div class="clearfix"></div>-->
<!--        </div>-->
<!--    </div>-->
<?php //endif; ?>
<!--    --><?php //if ($related) { ?>
<!--        <div class="container-indent">-->
<!--            <div class="container container-fluid-custom-mobile-padding">-->
<!--                <div class="tt-block-title text-left">-->
<!--                    <h3 class="tt-title-small">RELATED PRODUCT</h3>-->
<!--                </div>-->
<!--                <div class="tt-carousel-products row arrow-location-right-top tt-alignment-img tt-layout-product-item slick-animated-show-js">-->
<!--                    --><?php //foreach ($related as $item) { ?>
<!--                        <div class="col-2 col-md-4 col-lg-3">-->
<!--                            <div class="tt-product thumbprod-center">-->
<!--                                <div class="tt-image-box">-->
<!--                                    <a href="#" class="tt-btn-quickview" data-toggle="modal"-->
<!--                                       data-target="#ModalquickView"></a>-->
<!--                                    <a href="#" class="tt-btn-wishlist"></a>-->
<!--                                    <a href="#" class="tt-btn-compare"></a>-->
<!--                                    <a href="/product/--><?php //echo $item['alias'] ?><!--">-->
<!--                                        <span class="tt-img"><img class="mw-100"-->
<!--                                                                  src="/images/-->
<?php //echo $item['img']; ?><!--"-->
<!--                                                                  alt="-->
<?php //echo $item['title']; ?><!--"></span>-->
<!--                                        <span class="tt-img-roll-over"><img src="/images/-->
<?php //echo $item['img']; ?><!--"-->
<!--                                                                            alt="-->
<?php //echo $item['title']; ?><!--"></span>-->
<!--                                    </a>-->
<!--                                </div>-->
<!--                                <div class="tt-description">-->
<!--                                    <div class="tt-row">-->
<!--                                        <ul class="tt-add-info">-->
<!--                                            <li><a href="#">T-SHIRTS</a></li>-->
<!--                                        </ul>-->
<!--                                    </div>-->
<!--                                    <h2 class="tt-title"><a-->
<!--                                                href="--><?php //echo $item['alias']; ?><!--">-->
<?php //echo $item['title'] ?><!--</a>-->
<!--                                    </h2>-->
<!--                                    <div class="tt-price">-->
<!---->
<!---->
<!--                                        <span class="new-price">--><?php //echo $curr['symbol_left'] ?><!---->
<?php //echo $item['price'] * $curr['value']; ?><!----><?php //echo $curr['symbol_right'] ?><!--</span>-->
<!--                                        --><?php //if ($item['old_price']) { ?>
<!--                                            <span class="tt-price  old-price">-->
<?php //echo $curr['symbol_left'] ?><!----><?php //echo $item['old_price'] * $curr['value']; ?><!---->
<?php //echo $curr['symbol_right'] ?><!--</span>-->
<!--                                        --><?php //} ?>
<!--                                    </div>-->
<!--                                    <div class="tt-product-inside-hover">-->
<!--                                        <div class="tt-row-btn">-->
<!--                                            <a href="cart/add?=--><?php //echo $item['id']; ?><!--"-->
<!--                                               data-id="--><?php //echo $item['id']; ?><!--"-->
<!--                                               class="add-to-cart-link tt-btn-addtocart thumbprod-button-bg"-->
<!--                                               data-toggle="modal" data-target="#modalAddToCartProduct">ADD TO CART</a>-->
<!--                                        </div>-->
<!--                                        <div class="tt-row-btn">-->
<!--                                            <a href="#" class="tt-btn-quickview" data-toggle="modal"-->
<!--                                               data-target="#ModalquickView"></a>-->
<!--                                            <a href="#" class="tt-btn-wishlist"></a>-->
<!--                                            <a href="#" class="tt-btn-compare"></a>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    --><?php //} ?>
<!---->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    --><?php //} ?>

