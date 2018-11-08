<?php if (!empty($_SESSION['cart'])) { ?>
    <div class="container">
        <h1 class="tt-title-subpages noborder">Вы добавили товар в корзину</h1>
        <div class="tt-shopcart-table-02">
            <table>
                <tbody>
                <?php foreach ($_SESSION['cart'] as $id => $item) { ?>
                    <tr>
                        <td>
                            <div class="tt-product-img">
                                <img src="/images/<?php echo $item['img'] ?>"
                                     data-src="/images/<?php echo $item['img'] ?>" alt="<?php echo $item['title'] ?>"
                                     class="loaded" data-was-processed="true">
                            </div>
                        </td>
                        <td>
                            <h2 class="tt-title">
                                <a href="product/<?php echo $item['alias'] ?>"><?php echo $item['title'] ?></a>
                            </h2>
                            <ul class="tt-list-description">
                                <!--                            <li>Size: 22</li>-->
                                <li>Color: Green</li>
                            </ul>
                            <ul class="tt-list-parameters">
                                <li>
                                    <div class="tt-price">
                                        <?php echo $item['price'] ?>
                                    </div>
                                </li>
                                <li>
                                    <div class="detach-quantity-mobile"></div>
                                </li>
                                <li>
                                    <div class="tt-price subtotal">

                                    </div>
                                </li>
                            </ul>
                        </td>
                        <td>
                            <div class="tt-price">
                                <?php echo $item['price'] ?>
                            </div>
                        </td>
                        <td>
                            <div class="detach-quantity-desctope">
                                <div class="tt-input-counter style-01">
                                    <span class="minus-btn"></span>
                                    <input type="text" value="<?php echo $item['qty'] ?>" size="5">
                                    <span class="plus-btn"></span>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="tt-price subtotal">
                                <?php echo $_SESSION['cart.currency']['symbol_left'] ?><?php echo $item['price'] ?><?php echo $_SESSION['cart.currency']['symbol_right'] ?>
                            </div>
                        </td>
                        <td>
                            <a href="#" class="tt-btn-close" data-id="<?php echo $id; ?>"></a>
                        </td>
                    </tr>

                <?php } ?>
                </tbody>
            </table>
            <div class="tt-shopcart-btn">
                <div class="col-right">
                    <a class="btn-link btn-link_clear" onclick="clearCart()" href="#"><i class="icon-h-02"></i>Очистить корзину</a>
                </div>
            </div>
        </div>
        <div class="tt-shopcart-col">
            <div class="row">
                <div class="col-md-12">
                    <div class="tt-shopcart-box tt-boredr-large">
                        <table class="tt-shopcart-table01">
                            <tbody>
                            <tr>
                                <th>Количество товаров: </th>
                                <td class="count-price--cart"><?php echo $_SESSION['cart.qty'] ?></td>
                            </tr>
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>Итого: </th>
                                <td><?php echo $_SESSION['cart.currency']['symbol_left'] ?><?php echo $_SESSION['cart.sum'] ?><?php echo $_SESSION['cart.currency']['symbol_right'] ?></td>
                            </tr>
                            </tfoot>
                        </table>
                        <a href="/cart/view" class="btn btn-lg"><span class="icon icon-check_circle"></span>Оформить заказ</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } else { ?>
    <?php echo "<h3>Корзина пуста</h3>" ?>
<?php } ?>

<!---->
<?php //if (!empty($_SESSION['cart'])) { ?>
<!--    <div class="tt-cart-content">-->
<!--        --><?php //foreach ($_SESSION['cart'] as $id => $item) { ?>
<!--            <div class="tt-cart-list">-->
<!--                <div class="tt-item">-->
<!--                    <a href="product.html">-->
<!--                        <div class="tt-item-img">-->
<!--                            <img src="/images/--><?php //echo $item['img'] ?><!--" data-src="/images/--><?php //echo $item['img'] ?><!--"-->
<!--                                 alt="--><?php //echo $item['title'] ?><!--"-->
<!--                                 data-was-processed="true">-->
<!--                        </div>-->
<!--                        <div class="tt-item-descriptions">-->
<!--                            <h2 class="tt-title"><a-->
<!--                                        href="product/--><?php //echo $item['alias'] ?><!--">--><?php //echo $item['title'] ?><!--</a>-->
<!--                            </h2>-->
<!--                            <ul class="tt-add-info">-->
<!--                                <li>Yellow, Material 2, Size 58,</li>-->
<!--                                <li>Vendor: Addidas</li>-->
<!--                            </ul>-->
<!--                            <div class="tt-quantity">--><?php //echo $item['qty'] ?><!--</div>-->
<!--                            <div class="tt-price"> --><?php //echo $_SESSION['cart.currency']['symbol_left'] ?><!----><?php //echo $item['price'] ?><!----><?php //echo $_SESSION['cart.currency']['symbol_right'] ?><!--</div>-->
<!--                        </div>-->
<!--                    </a>-->
<!--                    <div class="tt-item-close">-->
<!--                        <a href="#" class="tt-btn-close" data-id="--><?php //echo $id; ?><!--"></a>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        --><?php //} ?>
<!--        <div class="tt-cart-total-row">-->
<!--            <div class="tt-cart-total-title">SUBTOTAL:</div>-->
<!--            <div class="tt-cart-total-price">-->
<!--                <td>--><?php //echo $_SESSION['cart.currency']['symbol_left'] ?><!----><?php //echo $_SESSION['cart.sum'] ?><!----><?php //echo $_SESSION['cart.currency']['symbol_right'] ?><!--</td>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="tt-cart-btn">-->
<!--            <div class="tt-item">-->
<!--                <a href="#" class="btn ">PROCEED TO CHECKOUT</a>-->
<!--            </div>-->
<!--            <div class="tt-item">-->
<!--                <a href="shopping_cart_02.html"-->
<!--                   class="btn-link-02 tt-hidden-mobile">View Cart</a>-->
<!--                <a href="shopping_cart_02.html"-->
<!--                   class="btn btn-border tt-hidden-desctope">VIEW CART</a>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<?php //} else { ?>
<!--    --><?php //echo "<h3>Корзина пуста</h3>>" ?>
<?php //} ?>

