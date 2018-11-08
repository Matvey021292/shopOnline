<?php $curr = \shop\App::$app->getProperty('currency');
$cats = \shop\App::$app->getProperty('cats');
?>
<?php if ($products) {
    foreach ($products as $product) { ?>
        <div class="col-6 col-md-4 tt-col-item">
            <div class="tt-product thumbprod-center">
                <div class="tt-image-box">
                    <a href="product/<?php echo $product->alias; ?>" class="tt-btn-quickview" data-tooltip="tt-tooltip"
                       data-placement="left" data-title="Quick View" data-toggle="modal"
                       data-target="#ModalquickView"></a>
                    <a href="product/<?php echo $product->alias; ?>">
                                <span class="tt-img">
                                    <img src="/images/<?php echo $product->img; ?>"
                                         data-src="/images/<?php echo $product->img; ?>"
                                         alt="<?php echo $product->title ?>" class="loaded" data-was-processed="true">
                                </span>
                        <span class="tt-img-roll-over"><img src="/images/<?php echo $product->img; ?>"
                                                            data-src="/images/<?php echo $product->img; ?>"
                                                            alt="<?php echo $product->title ?>" class="loaded"
                                                            data-was-processed="true"></span>
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
                    <h2 class="tt-title"><a
                                href="product/<?php echo $product->alias; ?>"><?php echo $product->title; ?></a>
                    </h2>
                    <div class="tt-price">
                        <span class="new-price"><?php echo $curr['symbol_left'] ?><?php echo $product->price * $curr['value']; ?><?php echo $curr['symbol_right'] ?></span>
                        <?php if ($product->old_price) { ?>
                            <span class="tt-price old-price"><?php echo $curr['symbol_left'] ?><?php echo $product->old_price * $curr['value']; ?><?php echo $curr['symbol_right'] ?></span>
                        <?php } ?>
                    </div>

                    <div class="tt-product-inside-hover">
                        <a href="cart/add?id=<?php echo $product->id ?>"
                           class="add-to-cart-link tt-btn-addtocart thumbprod-button-bg" data-toggle="modal"
                           data-target="#modalAddToCartProduct"
                           data-id="<?php echo $product->id; ?>"><?php echo ADDCART; ?></a>
                        <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"></a>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
    </div>
    <nav aria-label="Page navigation example" class="wrap-pagination">
    <p class="justify-content-center text-center mb-2 mt-5"><?php echo count($products) ?> товара(ов)
        из <?php echo $total; ?></p>
    <?php if ($pagination->countPages > 1) { ?>
        <?php echo $pagination; ?>
    <?php } ?>
<?php } else{ ?>
                                <h3>Товаров не найдено</h3>
                            <?php  } ?>