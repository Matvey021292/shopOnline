<div class="modal-body">
    <?php if (!empty($_SESSION['cart'])) { ?>
        <div class="container">
            <div class="table-responsive cart-calculations border-0">
                <div class="table ">
                    <div class="p-1 row">
                        <div class="col-md-8 pr-4">
                            <div class="modal-header border-0 d-flex justify-content-start pb-0 pl-0">
                                <span class="cd-cart"><em><?php echo (!empty($_SESSION['cart.qty'])) ? $_SESSION['cart.qty'] : '0'; ?></em></span>
                                <h3 class="tt-title-subpages noborder text-center h2 text-indigo mb-0"> Товары в корзине</h3>
                            </div>
                            <hr>
                            <div class="product-cart-container" id="product-cart-container">
                                <?php foreach ($_SESSION['cart'] as $id => $item) { ?>
                                    <div class="d-flex flex-wrap cart-container" data-id="<?php echo $id; ?>">
                                        <div class="img-wrap">
                                            <img src="/images/<?php echo replaceUrlImage($item['img'],'sm'); ?>"
                                                 data-src="/images/<?php echo replaceUrlImage($item['img'],'sm'); ?>"
                                                 alt="<?php echo $item['title'] ?>"
                                                 class="loaded mw-100 img-webp" data-was-processed="true">

                                        </div>
                                        <div class="description-wrapper d-flex flex-column ml-2 flex-auto justify-content-between">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <h5 class="mb-0"><a class=" btn-link text-dark"
                                                                    href="product/<?php echo $item['alias'] ?>"><?php echo $item['title'] ?></a>
                                                </h5>
                                                <a data-id="<?php echo $id; ?>" type="button"
                                                   class="tt-btn-close btn-bg-round  m-0 btn-floating  btn-sm waves-effect waves-light">
                                                    <i class="fas fa-times"></i>
                                                </a>
                                            </div>
                                            <div class="description-content d-flex align-items-center justify-content-between">
                                                <div class="h5 ">
                                                    <div class="cart_page_price text-danger"> <?php echo $_SESSION['cart.currency']['symbol_left'] ?><?php echo $item['price'] ?>
                                                        <span class="d-inline 1 m-0 symbol_price"><?php echo $_SESSION['cart.currency']['symbol_right'] ?></span>
                                                    </div>
                                                    <del class="h6 m-0"><?php if ($item['old_price'] != 0) { ?>
                                                            <?php echo $_SESSION['cart.currency']['symbol_left'] ?><?php echo $item['old_price'] ?><?php echo $_SESSION['cart.currency']['symbol_right'] ?>
                                                        <?php } ?>
                                                    </del>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <div class="h6 mb-0 mr-2 input-group-number d-flex">
                                                        <button class="input-group-number-minus"><i
                                                                    class="fa fa-minus"></i>
                                                        </button>
                                                        <input onkeydown="javascript: return ((event.keyCode>47)&&(event.keyCode<58))"
                                                               class="number-input" value="<?php echo $item['qty'] ?>"
                                                               type="text">
                                                        <button class="input-group-number-plus"><i
                                                                    class="fa fa-plus"></i>
                                                        </button>
                                                    </div>
                                                    <div class="cart_page_totl mb-0  h5 text-right text-danger ">
                                                        <span><?php echo $_SESSION['cart.currency']['symbol_left'] ?><?php echo $item['price'] * $item['qty'] ?></span><b
                                                                class="symbol_price"><?php echo $_SESSION['cart.currency']['symbol_right'] ?></b>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="col-md-3 right-modal">
                            <div class="modal-header p-0 border-0">
                                <a href="javascript:void(0)" type="button"
                                   class="btn-close btn-floating  btn-bg-round btn-large waves-effect waves-light btn-danger "
                                   data-dismiss="modal" aria-hidden="true"><i class="fas fa-times"></i></a>
                            </div>
                            <div class="modal-dialog modal-sm modal-notify modal-danger modal-side modal-top-right notifay-delete-modal"
                                 role="document">
                                <div class="modal-content text-center">
                                    <div class="modal-header d-flex justify-content-center ">
                                        <p class="heading">Удалить товар?</p>
                                    </div>
                                    <div class="modal-body">
                                        <div class="d-flex flex-wrap cart-container justify-content-center" data-id="6">
                                            <div class="img-wrap"></div>
                                            <div class="description-wrapper d-flex flex-column ml-2 flex-auto justify-content-between">
                                                <div class="d-flex justify-content-between align-items-center text-center">
                                                    <h5 class="w-100">
                                                        <a class=" btn-link text-dark" href="product/citizen-at0696-59e"></a>
                                                    </h5>
                                                </div>
                                                <div class="description-content">
                                                    <div class="cart_page_price h5 text-danger"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer flex-center border-0">
                                        <a href=""
                                           class="btn btn-ok  btn-outline-danger waves-effect waves-light ">Да</a>
                                        <a type="button" class="btn btn-no  btn-danger waves-effect ">Нет</a>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-cart-info-container">
                                <div class="layout-material"></div>
                                <div class="right-modal-title">
                                    <h3 class="text-uppercase  text-center  ">Ваш заказ</h3>
                                </div>
                                <div class="right-modal-content mt-5 mb-5 text-left">
                                    <div class="h5">Количество: <span id="count-price--cart"
                                                                      class="count-price--cart"><?php echo $_SESSION['cart.qty'] ?></span>
                                    </div>

                                    <div class="h5">К оплате:
                                        <div>
                                            <span id="qty_sum"
                                                  class=" qty_sum text-danger "><?php echo $_SESSION['cart.currency']['symbol_left'] ?><?php echo $_SESSION['cart.sum'] ?> </span><b
                                                    class="text-danger symbol_price"><?php echo $_SESSION['cart.currency']['symbol_right'] ?></b>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column ">
                                        <span class="text-sm text-right"><i class="fa fa-check green-text"></i> Доставка бесплатно </span>
                                    </div>
                                    <hr class="mt-1 mb-1">
                                    <a class=" btn-link_clear text-indigo  m-0 text-sm text-right" onclick="clearCart()"
                                       href="#"><i
                                                class="far fa-trash-alt"></i> Очистить корзину</a>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="shop_btn_wrapper shop_car_btn_wrapper w-100 mb-2 cart-btn-dn">
                                        <a href="/cart/view"
                                           class="btn   btn-indigo  btn-custom--round">
                                            Оформить</a>
                                        <a class="btn   btn-outline-indigo close-modal btn-custom--round"
                                           href="javascript:void(0)">
                                            Продолжить
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php } else { ?>
        <?php echo "<div class='d-flex justify-content-center align-items-center flex-column cart-empty'><h3 class='tt-title-subpages h2 mb-3 mt-4 text-center'>Ooo! #Корзинапуста :(</h3>
    <img class='mb-2' src='/images/web/ecom-cart.gif' alt='cart'>
<a class='btn d-flex btn-floating-custom justify-content-between  btn-indigo  close-modal p-2 ' href=\"javascript:void(0)\">
<span class='text-white'> Продолжить покупки</span>
</a>
</div> " ?>
    <?php } ?>
</div>
