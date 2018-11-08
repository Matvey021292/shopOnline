<div class="tt-login-form">
    <div class="row">
        <div class="col-xs-12 col-md-6">
            <div class="tt-item">
                <h2 class="tt-title">Регистрация</h2>
                <div class="form-default form-top">
                    <form id="customer_login" action="user/signup" method="post" novalidate="novalidate" data-toggle="validator" class="needs-validation" >
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
                        <div class="row">
                            <div class="col-auto mr-auto">
                                <div class="form-group ">
                                    <button class="btn btn-border" type="submit">Регистрация</button>
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