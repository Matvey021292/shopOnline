<div class="tt-breadcrumb">
    <div class="container">
        <ul>
            <li><a href="<?= PATH ?>">Главная</a></li>
            <li>Корзина</li>
        </ul>
    </div>
</div>
<div id="tt-pageContent">
    <div class="container-indent">
        <div class="container">
            <?php if (!empty($_SESSION['cart'])) { ?>
                <h1 class="tt-title-subpages noborder">Оформление заказа</h1>
                <?php foreach ($_SESSION['cart'] as $item) ?>
                    <div class="tt-shopcart-table-02 tt-shopcart-table-03">
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
                    <div class="tt-shopcart-btn">
                        <div class="col-right">
                            <a class="btn-link btn-link_clear" onclick="clearCart()" href="#"><i class="icon-h-02"></i>Очистить
                                корзину</a>
                        </div>
                    </div>
                </div>
                </div>
                <div class="tt-shopcart-col">
                    <div class="row">
                        <?php if(!empty($_SESSION['user'])){ ?>
                            <div class="col-md-6 col-lg-4">
                                <div class="tt-shopcart-box">
                                    <h4 class="tt-title">
                                        Примечание
                                    </h4>
                                    <p>Добавьте примечание или пожелание</p>
                                    <form class="form-default" action="/cart/checkout" method="post">
                                        <textarea class="form-control" name="note" rows="7"></textarea>
                                        <button class="btn btn-lg"><span class="icon icon-check_circle"></span>Заказать</button>
                                    </form>
                                </div>
                            </div>
                        <?php  }else{?>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                                       aria-controls="home" aria-selected="true">Я новый покупатель</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                                       aria-controls="profile" aria-selected="false">Я постоянный клиент</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <div class="tt-login-form">
                                        <div class="row">
                                            <div class="col-xs-12 col-md-6">
                                                <div class="tt-item">
                                                    <h2 class="tt-title">Регистрация</h2>
                                                    <div class="form-default form-top">
                                                        <form action="/cart/checkout" id="customer_login" method="post" novalidate="novalidate" data-toggle="validator" class="needs-validation" >
                                                            <div class="form-group has-feedback">
                                                                <label for="loginInputName">Ваш имя</label>
                                                                <div class="tt-required">*обязательное поле</div>
                                                                <input type="text" name="name" class="form-control" id="loginInputName"
                                                                       value="<?php echo isset($_SESSION['form_data']['name']) ? $_SESSION['form_data']['name'] :''; ?>" required>
                                                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                            </div>
                                                            <div class="form-group has-feedback">
                                                                <label for="loginInputName">Ваш логин</label>
                                                                <div class="tt-required">*обязательное поле</div>
                                                                <input type="text" name="login" class="form-control" id="loginInputLogin"
                                                                       value="<?php echo isset($_SESSION['form_data']['login']) ? $_SESSION['form_data']['login'] :''; ?>" required>
                                                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                            </div>

                                                            <div class="form-group has-feedback">
                                                                <label for="loginInputEmail">Эл. почта</label>
                                                                <div class="tt-required">*обязательное поле</div>
                                                                <input type="email" name="email" class="form-control" id="loginInputEmail"
                                                                       value="<?php echo isset($_SESSION['form_data']['login']) ? $_SESSION['form_data']['email'] :''; ?>" required>
                                                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                            </div>
                                                            <div class="form-group has-feedback">
                                                                <label for="loginInputEmail">Придумайте пароль</label>
                                                                <div class="tt-required">*обязательное поле</div>
                                                                <input type="password" name="password" class="form-control"
                                                                       id="loginInputPassword" value="<?php echo isset($_SESSION['form_data']['password']) ? $_SESSION['form_data']['password'] :''; ?>" data-error="Пароль должен включать не менее 6 символов " data-minlength="6" required>
                                                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                                <div class="help-block with-errors"></div>
                                                            </div>

                                                            <div class="form-group has-feedback">
                                                                <label for="loginInputEmail">Телефон</label>
                                                                <div class="tt-required">*обязательное поле</div>
                                                                <input type="text" name="address" value="<?php echo isset($_SESSION['form_data']['address']) ? $_SESSION['form_data']['address'] :''; ?>" class="form-control" required id="loginInputPhone"
                                                                       placeholder="">
                                                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                            </div>
                                                            <div class="form-group has-feedback">
                                                                <label for="loginInputNote">Добавьте примечание или пожелание</label>
                                                                <textarea id="loginInputNote" class="form-control" name="note" rows="7"></textarea>
                                                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-auto mr-auto">
                                                                    <div class="form-group ">
                                                                        <button class="btn btn-border" type="submit">Оформить заказ</button>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </form>
                                                        <?php if(isset($_SESSION['form_data'])){
                                                            unset($_SESSION['form_data']);
                                                        }?>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-md-6">
                                                <div class="tt-item">
                                                    <h2 class="tt-title">Связь с социальными сетями</h2>
                                                    <p>
                                                        Вы можете зарегистрироваться на «Розетке» с помощью учетных записей социальных сетей
                                                    </p>
                                                    <div class="form-group ">
                                                        <a href="#" class="btn btn-top btn-border">Google</a>
                                                        <a href="#" class="btn btn-top btn-border">Facebook</a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <div class="tt-login-form">
                                        <div class="row">
                                            <div class="col-xs-12 col-md-6">
                                                <div class="tt-item">
                                                    <h2 class="tt-title">Вход</h2>
                                                    <div class="form-default form-top">
                                                        <form action="/user/login" id="customer_login" method="post" novalidate="novalidate" data-toggle="validator" class="needs-validation" >
                                                            <div class="form-group has-feedback">
                                                                <label for="loginInputName">Ваш логин</label>
                                                                <div class="tt-required">*обязательное поле</div>
                                                                <input type="text" name="login" class="form-control" id="loginInputLogin"
                                                                       value="<?php echo isset($_SESSION['form_data']['login']) ? $_SESSION['form_data']['login'] :''; ?>" required>
                                                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                            </div>
                                                            <div class="form-group has-feedback">
                                                                <label for="loginInputEmail">Пароль</label>
                                                                <div class="tt-required">*обязательное поле</div>
                                                                <input type="password" name="password" class="form-control"
                                                                       id="loginInputPassword" value="<?php echo isset($_SESSION['form_data']['password']) ? $_SESSION['form_data']['password'] :''; ?>" data-error="Пароль должен включать не менее 6 символов " data-minlength="6" required>
                                                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                                <div class="help-block with-errors"></div>
                                                            </div>
                                                            <div class="form-group has-feedback">
                                                                <label for="loginInputNote">Добавьте примечание или пожелание</label>
                                                                <textarea id="loginInputNote" class="form-control" name="note" rows="7"></textarea>
                                                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-auto mr-auto">
                                                                    <div class="form-group ">
                                                                        <button class="btn btn-border" type="submit">Вход</button>
                                                                    </div>
                                                                </div>
                                                                <div class="col-auto align-self-end">
                                                                    <div class="form-group has-feedback">
                                                                        <ul class="additional-links">
                                                                            <li><a href="#">Востановить пароль?</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                        <?php if(isset($_SESSION['form_data'])){
                                                            unset($_SESSION['form_data']);
                                                        }?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-md-6">
                                                <div class="tt-item">
                                                    <h2 class="tt-title">Вход через социальную сеть</h2>
                                                    <p>
                                                        Вы можете зарегистрироваться на «Розетке» с помощью учетных записей социальных сетей
                                                    </p>
                                                    <div class="form-group ">
                                                        <a href="#" class="btn btn-top btn-border">Google</a>
                                                        <a href="#" class="btn btn-top btn-border">Facebook</a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                        <div class="col-md-6 col-lg-4">
                            <div class="tt-shopcart-box tt-boredr-large">
                                <table class="tt-shopcart-table01">
                                    <tbody>
                                    <tr>
                                        <th>Количество товаров:</th>
                                        <td class="count-price--cart"><?php echo $_SESSION['cart.qty'] ?></td>
                                    </tr>
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>Итого:</th>
                                        <td><?php echo $_SESSION['cart.currency']['symbol_left'] ?><?php echo $_SESSION['cart.sum'] ?><?php echo $_SESSION['cart.currency']['symbol_right'] ?></td>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } else { ?>
                <h1 class="tt-title-subpages noborder">Корзина пуста</h1>
            <?php } ?>
        </div>
    </div>
</div>