<div class="container-indent">
    <div class="container text-left p-0">
        <h2 class="tt-title">Вход в личный кабинет</h2>
        <div class="tt-login-form">
            <div class="tt-item">
                <div class="form-default form-top">
                    <form action="user/login"
                          data-toggle="validator"
                          id="customer_login"
                          method="post"
                          novalidate="novalidate"
                          data-toggle="validator"
                          class="needs-validation">
                        <div class="md-form form-group has-feedback">
                            <input type="text"
                                   name="login"
                                   class="form-control"
                                   id="loginInputLogin"
                                   сы и ответы
                                   value=""
                                   data-error="Логин должен включать не менее 3 символов"
                                   data-minlength="3"
                                   required>
                            <span class="glyphicon form-control-feedback"
                                  aria-hidden="true"></span>
                            <label for="loginInputLogin"
                                   class="font-weight-light">Ваш
                                логин</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="md-form form-group has-feedback">
                            <input type="password"
                                   name="password"
                                   class="form-control"
                                   id="loginInputPassword"
                                   value=""
                                   data-error="Пароль должен включать не менее 6 символов"
                                   data-minlength="6"
                                   required>
                            <span class="glyphicon form-control-feedback"
                                  aria-hidden="true"></span>
                            <label for="loginInputPassword"
                                   class="font-weight-light">Пароль</label>
                            <span class="show-pass waves-effect waves-light"><i
                                    class="fas fa-unlock"></i></span>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="row">
                            <div class="col-auto mr-auto">
                                <div class="form-group ">
                                    <button class="btn btn-border btn-indigo m-0"
                                            type="submit">
                                        Войти
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
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