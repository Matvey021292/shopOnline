<div class="container-indent">
    <div class="container text-left p-0">
        <h2 class="tt-title tt-title-subpages noborder"> Регистрация аккаунта</h2>
        <div class="tt-login-form">
            <div class="tt-item">
                <div class="form-default form-top">
                    <form id="customer_register"
                          action="user/signup"
                          method="post"
                          novalidate="novalidate"
                          data-toggle="validator"
                          class="needs-validation">
                        <div class="md-form form-group has-feedback">
                            <input type="text"
                                   name="name"
                                   class="form-control"
                                   id="RegloginInputName"
                                   value="<?php echo (!empty($_SESSION['form_data'])) ? $_SESSION['form_data']['name'] : ''; ?>"
                                   required>
                            <label for="RegloginInputName"
                                   class="font-weight-light">Имя</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="md-form form-group has-feedback">
                            <input type="text"
                                   name="login"
                                   class="form-control"
                                   id="RegloginInputLogin"
                                   value="<?php echo (!empty($_SESSION['form_data'])) ? $_SESSION['form_data']['login'] : ''; ?>"
                                   required>
                            <label for="RegloginInputLogin"
                                   class="font-weight-light">Логин</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="md-form form-group has-feedback">
                            <input type="email"
                                   name="email"
                                   class="form-control"
                                   id="RegloginInputEmail"
                                   value="<?php echo (!empty($_SESSION['form_data'])) ? $_SESSION['form_data']['email'] : ''; ?>"
                                   required>
                            <label for="RegloginInputEmail"
                                   class="font-weight-light">Эл.почта</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="md-form form-group has-feedback">
                            <input type="password"
                                   name="password"
                                   class="form-control"
                                   id="RegloginInputPassword"
                                   value="<?php echo (!empty($_SESSION['form_data'])) ? $_SESSION['form_data']['password'] : ''; ?>"
                                   data-error="Пароль должен включать не менее 6 символов "
                                   data-minlength="6"
                                   required>
                            <label for="RegloginInputPassword"
                                   class="font-weight-light">Пароль</label>
                            <span class="show-pass waves-effect waves-light"><i
                                    class="fas fa-unlock"></i></span>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="md-form form-group has-feedback">
                            <input type="text"
                                   name="phone"
                                   class="form-control"
                                   id="RegloginInputPhone"
                                   value="<?php echo (!empty($_SESSION['form_data'])) ? $_SESSION['form_data']['phone'] : ''; ?>"
                                   required>
                            <label for="RegloginInputPhone"
                                   class="font-weight-light">Телефон</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="row">
                            <div class="col-auto mr-auto">
                                <div class="form-group ">
                                    <button class="btn btn-border btn-indigo m-0"
                                            type="submit">
                                        Регистрация
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="tt-item">
                <h5 class="tt-title">Вход через
                    социальную
                    сеть</h5>
                <p class="text-sm">
                    Вы можете зарегистрироваться на
                    сайте с
                    помощью
                    учетных записей социальных сетей
                </p>
                <div class="form-group ">
                    <button type="button"
                            class="social-btn btn  mr-md-3 z-depth-1a text-indigo">
                        <img src="/images/header/facebook.svg"
                             alt="">
                    </button>
                    <button type="button"
                            class="social-btn btn btn-white  z-depth-1a text-indigo">
                        <img src="/images/header/search.svg"
                             alt="">
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>