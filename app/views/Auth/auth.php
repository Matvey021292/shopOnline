<div class="container-indent">
    <div class="container">
        <h1 class="tt-title-subpages noborder">Вход в аккаунт</h1>
        <div class="tt-login-form">
            <div class="row">
                <div class="col-xs-12 col-md-6">
                    <div class="tt-item">
                        <h2 class="tt-title">Вход</h2>
                        <div class="form-default form-top">
                            <form  action="user/login" id="customer_login" method="post" novalidate="novalidate" data-toggle="validator" class="needs-validation" >
                                <div class="form-group has-feedback">
                                    <label for="loginInputName">Ваш логин</label>
                                    <div class="tt-required">*обязательное поле</div>
                                    <input type="text" name="login" class="form-control" id="loginInputLogin"
                                           value="" required>
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                </div>
                                <div class="form-group has-feedback">
                                    <label for="loginInputEmail">Пароль</label>
                                    <div class="tt-required">*обязательное поле</div>
                                    <input type="password" name="password" class="form-control"
                                           id="loginInputPassword" value="" data-error="Пароль должен включать не менее 6 символов " data-minlength="6" required>
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="row">
                                    <div class="col-auto mr-auto">
                                        <div class="form-group ">
                                            <button class="btn btn-border" type="submit">Войти</button>
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
