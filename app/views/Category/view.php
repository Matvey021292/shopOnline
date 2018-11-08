<?php $curr = \shop\App::$app->getProperty('currency');
$cats = \shop\App::$app->getProperty('cats');
?>
<div class="tt-breadcrumb">
    <div class="container">
        <ul>
           <?php echo  $breadcrumbs;?>
        </ul>
    </div>
</div>

<div id="tt-pageContent">
    <div class="container-indent container-indent-tranding">
        <div class="container container-fluid-custom-mobile-padding">
            <div class="row ">
                <div class="col-md-4 col-lg-3 col-xl-3 leftColumn aside">
                    <div class="loader-aside"></div>
                    <?php new \app\views\widget\filter\Filter()?>
                </div>
                <div class="col-md-12 col-lg-9 col-xl-9">
                    <div class="content-indent container-fluid-custom-mobile-padding-02">
                        <div class="tt-filters-options">
                            <h1 class="tt-title">
                                <?php echo $category->title;?><span class="tt-title-total">(<?php echo $total ?>)</span>
                            </h1>
                            <div class="tt-btn-toggle">
                                <a href="#">FILTER</a>
                            </div>
                            <div class="tt-sort">
                                <select>
                                    <option value="Default Sorting">Default Sorting</option>
                                    <option value="Default Sorting">Default Sorting 02</option>
                                    <option value="Default Sorting">Default Sorting 03</option>
                                </select>
                                <select>
                                    <option value="Show">Show</option>
                                    <option value="9">9</option>
                                    <option value="16">16</option>
                                    <option value="32">32</option>
                                </select>
                            </div>
                            <div class="tt-quantity">
                                <a href="#" class="tt-col-one" data-value="tt-col-one"></a>
                                <a href="#" class="tt-col-two tt-show-siblings" data-value="tt-col-two"></a>
                                <a href="#" class="tt-col-three active tt-show" data-value="tt-col-three"></a>
                                <a href="#" class="tt-col-four tt-show-siblings" data-value="tt-col-four"></a>
                                <a href="#" class="tt-col-six" data-value="tt-col-six"></a>
                            </div>
                        </div>
                        <div class="tt-product-listing row">
                            <?php if($products){
                            foreach ($products as $product){ ?>
                                <div class="col-6 col-md-4 tt-col-item">
                                    <div class="tt-product thumbprod-center">
                                        <div class="tt-image-box">
                                            <a href="product/<?php echo $product->alias;?>" class="tt-btn-quickview" data-tooltip="tt-tooltip" data-placement="left" data-title="Quick View" data-toggle="modal" data-target="#ModalquickView"></a>
                                            <a href="product/<?php echo $product->alias;?>">
                                <span class="tt-img">
                                    <img src="/images/<?php echo $product->img;?>" data-src="/images/<?php echo $product->img;?>" alt="<?php echo $product->title?>" class="loaded" data-was-processed="true">
                                </span>
                                                <span class="tt-img-roll-over"><img src="/images/<?php echo $product->img;?>" data-src="/images/<?php echo $product->img;?>" alt="<?php echo $product->title?>" class="loaded" data-was-processed="true"></span>
                                                <span class="tt-label-location">
									<span class="tt-label-new">New</span>
								</span>
                                            </a>
                                        </div>
                                        <div class="tt-description">
                                            <div class="tt-row">

                                                <div class="tt-rating">
                                                    <i class="icon-star"></i>
                                                    <i class="icon-star"></i>
                                                    <i class="icon-star"></i>
                                                    <i class="icon-star-half"></i>
                                                    <i class="icon-star-empty"></i>
                                                </div>
                                            </div>
                                            <h2 class="tt-title"><a href="product/<?php echo $product->alias;?>"><?php echo $product->title;?></a>
                                            </h2>
                                            <div class="tt-price">
                                                <span class="new-price"><?php echo $curr['symbol_left'] ?><?php echo $product->price * $curr['value']; ?><?php echo $curr['symbol_right'] ?></span>
                                                <?php if ($product->old_price) { ?>
                                                    <span class="tt-price old-price"><?php echo $curr['symbol_left'] ?><?php echo $product->old_price * $curr['value']; ?><?php echo $curr['symbol_right'] ?></span>
                                                <?php } ?>
                                            </div>

                                            <div class="tt-product-inside-hover">
                                                <a  href="cart/add?id=<?php echo $product->id?>" class="add-to-cart-link tt-btn-addtocart thumbprod-button-bg" data-toggle="modal" data-target="#modalAddToCartProduct" data-id="<?php echo $product->id; ?>"><?php echo ADDCART; ?></a>
                                                <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php  } ?>
                            <nav aria-label="Page navigation example" class="wrap-pagination">
                                <p class="justify-content-center text-center mb-2 mt-5"><?php echo count($products) ?> товара(ов) из <?php echo $total;?></p>
                                <?php if($pagination->countPages > 1){ ?>
                                    <?php echo $pagination; ?>
                                <?php } ?>
                                <?php    }else{ ?>
                                    <h3>В этой категории товаров пока нет</h3>
                                <?php  }?>
                            </nav>
                        </div>

                        </div>
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