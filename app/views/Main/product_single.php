<div class="ss_featured_products_box card-cascade narrower card-ecommerce card-product-wrapper">
    <div class="btn-toolbar btn-event" role="toolbar"
         aria-label="Toolbar with button groups">
        <div class="btn-group mr-2" role="group" aria-label="First group">
            <button data-id=" <?php echo $product->id; ?>"
                    data-toggle="modal"
                    data-target="#modalPoll"
                    class="btn-show-fast-prev btn indigo lighten-2">
                <i class="fa fa-star" aria-hidden="true"></i>
            </button>
            <button
                    data-id="<?php echo $product->id; ?>"
                    class="btn  lighten-2 add-product--like
                       <?php if (!empty($_SESSION['like_container'])) {
                        echo (in_array($product->id, $_SESSION['like_container'])) ? ' red' : 'blue';
                    } else {
                        echo 'blue';
                    } ?> ">
                <i class="fa fa-heart" aria-hidden="true"></i>
            </button>
        </div>
    </div>
    <div class="draws">
        <div class="ss_featured_products_box_img">
            <?php if ($product->sale) {
                echo "<span class=\"ss_tag btn-floating d-flex align-items-center justify-content-center btn-outline-danger m-0\">$product->sale%</span>";
            } ?>
            <a class="d-block" href="product/<?php echo $product->alias ?>">
                <img src="/images/<?php echo replaceUrlImage($product->img, 'md'); ?>"
                     alt="<?php echo $product->title ?>"
                     class="img-responsive img-webp">
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
                <span class="text-sm "><i class="fa fa-check green-text"></i> Доставка бесплатно </span>
            </div>
            <div>
                <ins class="h5 m-0 text-danger"><?php echo $curr['symbol_left'] ?><?php echo $product->price * $curr['value']; ?>
                    <span><?php echo $curr['symbol_right'] ?></span></ins>
                <del class="h6 m-0"><?php if ($product->old_price != 0) { ?>
                        <?php echo $curr['symbol_left'] ?><?php echo $product->old_price * $curr['value']; ?><?php echo $curr['symbol_right'] ?>
                    <?php } ?>
                </del>

            </div>
        </div>
        <div class="ss_featured_products_box_footer flex-column">
            <a data-id="<?php echo $product->id; ?>"
               title="Добавить товар в корзину"
               href="cart/add?id=<?php echo $product->id; ?>"
               class="btn d-flex justify-content-between <?php if (!empty($_SESSION['cart_container'])) {
                   echo (in_array($product->id, $_SESSION['cart_container'])) ? 'blue' : 'btn-indigo';
               } else {
                   echo 'btn-indigo ';
               } ?> waves-effect add-to-cart-link align-items-center ">
                                            <span class=" text-white add-cart-text"><?php if (!empty($_SESSION['cart_container'])) {
                                                    echo (in_array($product->id, $_SESSION['cart_container'])) ? 'Добавлено' : 'В корзину';
                                                } else {
                                                    echo 'В корзину';
                                                } ?></span>

            </a>
            <a data-id="<?php echo $product->id; ?>"
               href="javascript:void(0)"
               title="Добавить товар в список для сравнения"
               class="w-100 text-center text-dark text-sm add-to-compare p-0 mt-2 <?php if (!empty($_SESSION['compare_container'])) {
                   echo (in_array($product->id, $_SESSION['compare_container'])) ? ' disabled' : '';
               } ?> ">
                <i class="fa fa-random text-danger"
                   aria-hidden="true"></i>
                <?php if (!empty($_SESSION['compare_container'])) {
                    echo (in_array($product->id, $_SESSION['compare_container'])) ? ' Товар добавлен в список' : 'Добавить к  сравнению';
                } else {
                    echo 'Добавить к  сравнению';
                } ?>
            </a>
        </div>
        <a data-id="<?php echo $product->id; ?>"
           href="javascript:void(0)"
           title="Добавить товар в список для сравнения"
           class="w-100 text-left text-dark text-sm add-to-compare p-0 mt-3 <?php if (!empty($_SESSION['compare_container'])) {
               echo (in_array($product->id, $_SESSION['compare_container'])) ? ' disabled' : '';
           } ?> ">
            <i class="fa fa-random text-danger"
               aria-hidden="true"></i>
            <?php if (!empty($_SESSION['compare_container'])) {
                echo (in_array($product->id, $_SESSION['compare_container'])) ? ' Товар добавлен в список' : 'Добавить к  сравнению';
            } else {
                echo 'Добавить к  сравнению';
            } ?>
        </a>
    </div>
</div>