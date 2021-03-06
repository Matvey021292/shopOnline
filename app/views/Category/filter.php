<?php $curr = \shop\App::$app->getProperty('currency');
$cats = \shop\App::$app->getProperty('cats');
?>
<?php if ($products) {
    foreach ($products as $product) { ?>
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 prs_upcom_slide_first">
            <div class="ss_featured_products_box card-cascade narrower card-ecommerce ">
                <div class="btn-toolbar btn-event" role="toolbar"
                     aria-label="Toolbar with button groups">
                    <div class="btn-group mr-2" role="group" aria-label="First group">
                        <button data-id=" <?php echo $product->id; ?>"
                                data-toggle="modal"
                                data-target="#modalPoll" type="button"
                                class="btn-show-fast-prev  btn indigo lighten-2"><i
                                    class="fa fa-star"
                                    aria-hidden="true"></i>
                        </button>
                        <button type="button" class="btn blue lighten-2"><i
                                    class="fa fa-heart"
                                    aria-hidden="true"></i>
                        </button>
                    </div>
                </div>
                <div class="draws">
                    <div class="ss_featured_products_box_img">
                        <?php if ($product->sale) {
                            echo "<span class=\"ss_tag btn-floating d-flex align-items-center justify-content-center btn-outline-danger m-0\">$product->sale%</span>";
                        } else {
                            echo '';
                        } ?>
                        <!--                                                        <span class="ss_offer">топ</span>-->
                        <a class="d-block" href="product/<?php echo $product->alias ?>">
                            <img src="/images/<?php echo $product->img; ?>"
                                 alt="<?php echo $product->title ?>"
                                 class="img-responsive ">
                        </a>
                    </div>
                    <div class="ss_feat_prod_cont_heading_wrapper text-left">
                        <h4>
                            <a href="product/<?php echo $product->alias ?>"><?php echo $product->title; ?></a>
                        </h4>
                        <div class='rating-stars text-left'>
                            <ul class='stars'>
                                <?php for ($i = 1; $i <= 5; $i++) { ?>
                                    <li class='star <?php if ($product->rating / $product->rating_view >= $i) {
                                        echo 'selected';
                                    } ?>' title='Poor' data-value='<?php echo $i; ?>'>
                                        <i class='fa fa-star fa-fw'></i>
                                    </li>
                                <?php } ?>
                            </ul>
                            <?php if ($product->rating_view > 0) { ?>
                                <span class="text-sm">   отзывов <span>:) <?php echo $product->rating_view; ?></span></span>
                            <?php } ?>
                        </div>
                        <div class="mb-1">
                                                            <span class="text-sm "><i
                                                                        class="fa fa-check green-text"></i> Доставка бесплатно </span>
                        </div>
                        <div>
                            <ins class="h5 m-0 text-danger"><?php echo $curr['symbol_left'] ?><?php echo $product->price * $curr['value']; ?>
                                <span><?php echo $curr['symbol_right'] ?></span></ins>
                            <del class="h6 m-0"><?php if ($product->old_price != 0) { ?>
                                    <?php echo $curr['symbol_left'] ?><?php echo $product->old_price * $curr['value']; ?><?php echo $curr['symbol_right'] ?>
                                <?php } ?>
                            </del>
                            <a data-id="<?php echo $product->id; ?>"
                               href="#"
                               title="Добавить товар в список для сравнения"
                               class="w-100 text-dark text-sm d-block add-to-compare p-0 mt-3">
                                <i class="fa fa-random text-danger"
                                   aria-hidden="true"></i> Добавить к
                                сравнению
                            </a>

                        </div>
                    </div>

                    <div class="ss_featured_products_box_footer">
                        <a data-id="<?php echo $product->id; ?>"
                           title="Добавить товар в корзину"
                           href="cart/add?id=<?php echo $product->id; ?>"
                           class="btn d-flex justify-content-between <?php if (!empty($_SESSION['cart_container'])) {
                               echo (in_array($product->id, $_SESSION['cart_container'])) ? 'blue' : 'btn-indigo';
                           } else {
                               echo 'btn-indigo ';
                           } ?> waves-effect add-to-cart-link align-items-center ">
                                            <span class="ml-2 text-white add-cart-text"><?php if (!empty($_SESSION['cart_container'])) {
                                                    echo (in_array($product->id, $_SESSION['cart_container'])) ? 'Добавлено' : 'В корзину';
                                                } else {
                                                    echo 'В корзину';
                                                } ?></span>
                            <span class="btn btn-white  btn-icon"><i
                                        class=" fa fa-<?php if (!empty($_SESSION['cart_container'])) {
                                            echo (in_array($product->id, $_SESSION['cart_container'])) ? 'shopping-cart' : 'plus';
                                        } else {
                                            echo 'plus';
                                        } ?> text-dark"
                                        aria-hidden="true"></i></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
    <div class="d-flex justify-content-center align-items-center w-100">
        <div class="pager_wrapper gc_blog_pagination">
            <?php if ($pagination->countPages > 1) { ?>
                <?php echo $pagination; ?>
            <?php } ?>
        </div>
    </div>
<?php } else { ?>
    <h3>В этой категории товаров пока нет</h3>
<?php } ?>