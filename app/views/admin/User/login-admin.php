<div class="login-box">
    <div class="login-logo">
        <a href="javascript:void(0)"><b>Admin</b>LTE</a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">Sign in to start your session</p>
        <?php
            if (isset($_SESSION['error'])){ ?>
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-ban"></i> Ошибка</h4>
                   <?php echo $_SESSION['error']; unset($_SESSION['error']);?>
                </div>
            <?php }
        ?>
        <form action="<?php echo ADMIN?>/user/login-admin" method="post">
            <div class="form-group has-feedback">
                <input name="login" type="text" class="form-control" placeholder="Login">
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input name="password" type="password" class="form-control" placeholder="Password">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row">
<!--                <div class="col-xs-8">-->
<!--                    <div class="checkbox icheck">-->
<!--                        <label>-->
<!--                            <input type="checkbox"> Remember Me-->
<!--                        </label>-->
<!--                    </div>-->
<!--                </div>-->
                <!-- /.col -->
                <div class="col-xs-12">
                    <button type="submit" class="w-100 btn btn-primary btn-block btn-flat">Sign In</button>
                </div>
                <!-- /.col -->
            </div>
        </form>

<!--        <div class="social-auth-links text-center">-->
<!--            <p>- OR -</p>-->
<!--            <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using-->
<!--                Facebook</a>-->
<!--            <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using-->
<!--                Google+</a>-->
<!--        </div>-->
        <!-- /.social-auth-links -->

<!--        <a href="#">I forgot my password</a><br>-->
<!--        <a href="register.html" class="text-center">Register a new membership</a>-->

    </div>
    <!-- /.login-box-body -->
</div>