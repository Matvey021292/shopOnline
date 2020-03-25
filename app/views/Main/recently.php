<div class="ss_feat_cate_wrapper">
    <?php if (!empty($recentlyViewed)): ?>
        <div class="ss_heading_box">
            <div class="ss_heading">
                <h3>Просмотренные</h3>
            </div>
        </div>
        <div class="ss_toprated_slider">
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <div class="ss_toprated_slider_box">
                        <ul>
                            <?php foreach ($recentlyViewed as $item): ?>
                                <li>
                                    <div class="ss_toprated_slider_box_img">
                                        <a href="product/<?php echo $item['alias']; ?>">
                                            <img width=""
                                                 src="images/<?php echo $item['img']; ?>"
                                                 alt="<?php echo $item['title']; ?>">
                                        </a>
                                    </div>
                                    <div class="ss_toprated_slider_box_text">
                                        <h4 class="mb-0">
                                            <a href="product/<?php echo $item['alias']; ?>"><?php echo $item['title']; ?></a>
                                        </h4>

                                        <ins><?php echo $curr['symbol_left']; ?><?= $item['price'] * $curr['value']; ?>
                                            <span><?= $curr['symbol_right']; ?></span></ins>
                                        <?php if ($item['old_price']): ?>
                                            <del><?= $curr['symbol_left']; ?><?= $item['old_price'] * $curr['value']; ?>
                                                <span><?= $curr['symbol_right']; ?></span></del>
                                        <?php endif; ?>
                                        <a data-id="<?php echo $item->id; ?>"
                                           title="Добавить товар в корзину"
                                           href="cart/add?id=<?php echo $item->id; ?>"
                                           class="min-btn btn  <?php if (!empty($_SESSION['cart_container'])) {
                                               echo (in_array($item->id, $_SESSION['cart_container'])) ? 'blue' : 'btn-indigo';
                                           } else {
                                               echo 'btn-indigo ';
                                           } ?> waves-effect add-to-cart-link align-items-center ">
                                            <span class="ml-2 text-white add-cart-text"><?php if (!empty($_SESSION['cart_container'])) {
                                                    echo (in_array($item->id, $_SESSION['cart_container'])) ? 'Добавлено' : 'В корзину';
                                                } else {
                                                    echo 'В корзину';
                                                } ?></span>
<!--                                            <span class="btn btn-white  btn-icon"><i-->
<!--                                                        class=" fa fa---><?php //if (!empty($_SESSION['cart_container'])) {
//                                                            echo (in_array($item->id, $_SESSION['cart_container'])) ? 'shopping-cart' : 'plus';
//                                                        } else {
//                                                            echo 'plus';
//                                                        } ?><!-- text-dark"-->
<!--                                                        aria-hidden="true"></i></span>-->
                                        </a>
                                    </div>
                                </li>
                            <?php endforeach; ?>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <div class="ss_addver_sidebar">
        <a href="#">
            <img src="images\content\add-04.jpeg" alt="Add">
        </a>
    </div>
</div>