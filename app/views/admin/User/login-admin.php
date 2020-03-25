<div class="login-box">
    <div class="login-box-body">
        <div class="text-center">
            <img src="dist/images/logo.png" alt="logo.png">
        </div>
        <form action="<?php echo ADMIN?>/user/login-admin" method="post" class="md-float-material form-material">
            <div class="auth-box card">
                <div class="card-block">

                    <div class="row m-b-20">
                        <div class="col-md-12">
                            <h3 class="text-center txt-primary">Sign In</h3>
                        </div>
                    </div>
                    <?php
                    if (isset($_SESSION['error'])){ ?>
                        <div class="alert alert-danger alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <h4><i class="icon fa fa-ban"></i> Ошибка</h4>
                            <?php echo $_SESSION['error']; unset($_SESSION['error']);?>
                        </div>
                    <?php }
                    ?>
                    <div class="form-group has-feedback">
                        <input name="login" type="text" class="form-control" placeholder="Login" value="<?php echo !empty($_SESSION['auth_login']) ?  $_SESSION['auth_login'] : ''?>">
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input name="password" type="password" class="form-control" placeholder="Password" value="<?php echo !empty($_SESSION['auth_password']) ?  $_SESSION['auth_password'] : ''?>">
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">Sign In</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
