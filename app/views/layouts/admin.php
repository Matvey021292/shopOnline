<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <base href="/adminlte/">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <?= $this->getMeta(); ?>
    <meta name="author" content="#">
    <link rel="icon" href="dist/images/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="bower_components/select2/dist/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="dist/css/feather.css">
    <link rel="stylesheet" type="text/css" href="dist/css/style.css">
    <link rel="stylesheet" type="text/css" href="dist/css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" type="text/css" href="dist/css/icofont.css">

    <link rel="stylesheet" href="css.css">
</head>
<body>
<script>
    var path = "<?php echo PATH;?>";
    var adminpath = "<?php echo ADMIN;?>";
</script>
<div class="theme-loader">
    <div class="ball-scale">
        <div class='contain'>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
        </div>
    </div>
</div>
<div id="pcoded" class="pcoded">
    <div class="pcoded-overlay-box"></div>
    <div class="pcoded-container navbar-wrapper">
        <nav class="navbar header-navbar pcoded-header">
            <div class="navbar-wrapper">
                <div class="navbar-logo">
                    <a class="mobile-menu" id="mobile-collapse" href="#!">
                        <i class="feather icon-menu"></i>
                    </a>
                    <a href="<?php echo PATH ?>" target="_blank">
                        <img class="img-fluid"  src="dist/images/logo.png" alt="Theme-Logo" />
                    </a>
                    <a class="mobile-options">
                        <i class="feather icon-more-horizontal"></i>
                    </a>
                </div>
                <div class="navbar-container container-fluid">
                    <ul class="nav-left">
                        <li class="header-search">
                            <div class="main-search morphsearch-search">
                                <div class="input-group">
                                    <span class="input-group-addon search-close"><i class="feather icon-x"></i></span>
                                    <input type="text" class="form-control">
                                    <span class="input-group-addon search-btn"><i class="feather icon-search"></i></span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#!" onclick="javascript:toggleFullScreen()">
                                <i class="feather icon-maximize full-screen"></i>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav-right">
                        <li class="user-profile header-notification">
                            <div class="dropdown-primary dropdown">
                                <div class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="dist/images/avatar-4.jpg" class="img-radius" alt="User-Profile-Image">
                                    <span><?php echo $_SESSION['user']['name'] ?></span>
                                    <i class="feather icon-chevron-down"></i>
                                </div>
                                <ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                    <li>
                                        <a href="<?php echo ADMIN ?>/user/edit?id=<?php echo $_SESSION['user']['id'] ?>">
                                            <i class="feather icon-user"></i> Profile
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/user/logout">
                                            <i class="feather icon-log-out"></i> Logout
                                        </a>
                                    </li>
                                </ul>

                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div id="sidebar" class="users p-chat-user showChat">
            <div class="had-container">
                <div class="card card_main p-fixed users-main">
                    <div class="user-box">
                        <div class="chat-inner-header">
                            <div class="back_chatBox">
                                <div class="right-icon-control">
                                    <input type="text" class="form-control  search-text" placeholder="Search Friend" id="search-friends">
                                    <div class="form-icon">
                                        <i class="icofont icofont-search"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- Sidebar inner chat end-->
        <div class="pcoded-main-container">
            <div class="pcoded-wrapper">
                <nav class="pcoded-navbar">
                    <div class="pcoded-inner-navbar main-menu">
                        <div class="pcoded-navigatio-lavel">Меню</div>
                        <ul class="pcoded-item pcoded-left-item">
                            <li>
                                <a href="<?php echo ADMIN ?>">
                                    <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                                    <span class="pcoded-mtext">Главная</span>
                                </a>
                            </li>

                            <li class="">
                                <a href="<?php echo ADMIN ?>/order">
                                    <span class="pcoded-micon"><i class="feather icon-shopping-cart"></i></span>
                                    <span class="pcoded-mtext">Заказы</span>
                                </a>
                            </li>
                        </ul>
                        <div class="pcoded-navigatio-lavel">Категории</div>
                        <ul class="pcoded-item pcoded-left-item">
                            <li class="pcoded-hasmenu">
                                <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="feather icon-box"></i></span>
                                    <span class="pcoded-mtext" >Категории</span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class=" ">
                                        <a href="<?php echo ADMIN ?>/category">
                                            <span class="pcoded-mtext" >Список категорий</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="<?php echo ADMIN ?>/category/add">
                                            <span class="pcoded-mtext" >Добавить категорию</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="pcoded-hasmenu">
                                <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="feather icon-package"></i></span>
                                    <span class="pcoded-mtext">Товары</span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class=" ">
                                        <a href="<?php echo ADMIN ?>/product">
                                            <span class="pcoded-mtext" >Список товаров</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="<?php echo ADMIN ?>/product/add">
                                            <span class="pcoded-mtext" >Новый товар</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                        </ul>
                        <div class="pcoded-navigatio-lavel">Пользователи</div>
                        <ul class="pcoded-item pcoded-left-item">
                            <li class="pcoded-hasmenu ">
                                <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="feather icon-users"></i></span>
                                    <span class="pcoded-mtext" >Пользователи</span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class="">
                                        <a href="<?php echo ADMIN ?>/user">
                                            <span class="pcoded-mtext" >Список пользователей</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="<?php echo ADMIN ?>/user/add">
                                            <span class="pcoded-mtext" >Новый пользователь</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <div class="pcoded-navigatio-lavel">Фильтры</div>
                        <ul class="pcoded-item pcoded-left-item">
                            <li class="pcoded-hasmenu">
                                <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="feather icon-filter"></i></span>
                                    <span class="pcoded-mtext" >Фильтры</span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class=" ">
                                        <a  href="<?= ADMIN ?>/filter/attribute-group">
                                            <span class="pcoded-mtext" >Группы фильтров</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="<?php echo ADMIN ?>/filter/group-add">
                                            <span class="pcoded-mtext" >Добавить группу</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a  href="<?= ADMIN ?>/filter/attribute">
                                            <span class="pcoded-mtext" >Фильтры</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a  href="<?php echo ADMIN ?>/filter/attribute-add"">
                                            <span class="pcoded-mtext" >Добавить фильтр</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <div class="pcoded-navigatio-lavel">Настройки</div>
                        <ul class="pcoded-item pcoded-left-item">
                            <li class=" ">
                                <a href="<?php echo ADMIN ?>/cache">
                                    <span class="pcoded-micon"><i class="feather icon-layers"></i><b>A</b></span>
                                    <span class="pcoded-mtext" >Кэширование</span>
                                </a>
                            </li>
                            <li class="pcoded-hasmenu">
                                <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="feather icon-corner-up-right"></i></span>
                                    <span class="pcoded-mtext" >Валюты</span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class=" ">
                                        <a href="<?= ADMIN ?>/currency">
                                            <span class="pcoded-mtext" >Валюты</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="<?= ADMIN ?>/currency/add">
                                            <span class="pcoded-mtext" >Новая валюта</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="pcoded-content">
                    <div class="pcoded-inner-content">
                        <div class="main-body">
                            <div class="page-wrapper">
                                <div class="page-body">
                                        <?php if (isset($_SESSION['error'])) { ?>
                                            <div class="alert alert-danger">
                                                <?php echo $_SESSION['error'];
                                                unset($_SESSION['error']); ?>
                                            </div>
                                        <?php } ?>
                                        <?php if (isset($_SESSION['success'])) { ?>
                                            <div class="alert alert-success">
                                                <?php echo $_SESSION['success'];
                                                unset($_SESSION['success']); ?>
                                            </div>
                                        <?php } ?>
                                        <?php echo $content; ?>
<!--                                        --><?php
//                                        $logs = \R::getDatabaseAdapter()
//                                            ->getDatabase()
//                                            ->getLogger();
//
//                                        debug($logs->grep('SELECT'));
//                                        ?>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="dist/js/jquery.min.js"></script>
<script src="dist/js/ajaxupload.js"></script>
<script src="dist/js/switchery.min.js"></script>

<script src="bower_components/select2/dist/js/select2.full.js"></script>
<script type="text/javascript" src="dist/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="dist/js/popper.min.js"></script>
<script type="text/javascript" src="dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="dist/js/jquery.slimscroll.js"></script>
<script type="text/javascript" src="dist/js/modernizr.js"></script>
<script type="text/javascript" src="dist/js/Chart.js"></script>
<script src="dist/js/amcharts.js"></script>
<script src="dist/js/serial.js"></script>
<script src="dist/js/light.js"></script>
<script src="dist/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script type="text/javascript" src="dist/js/SmoothScroll.js"></script>
<script src="dist/js/pcoded.min.js"></script>
<script src="dist/js/vartical-layout.min.js"></script>
<script src="dist/js/swithces.js"></script>
<script type="text/javascript" src="dist/js/custom-dashboard.js"></script>
<script type="text/javascript" src="dist/js/script.min.js"></script>
<script src="bower_components/ckeditor/ckeditor.js"></script>
<script src="js.js"></script>

</body>
</html>
