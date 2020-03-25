<header>
    <div class="container mt-3 mb-2">
        <div class="row">
            <div class="col-md-4">
                <div class="logo-wrapper d-inline-flex flex-column">
                    <a href="" class="logo_web">QuicFox.ua</a>
<!--                    <span>онлайн интрернет магизин </span>-->
                </div>
            </div>
            <div class="col-md-8">
                <ul class="nav header_nav__top justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link active" href="#"> Главная </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"> Контакты</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"> Доставка и оплата </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#"> Гарантия</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pr-0" href="#">  Вопросы и ответы</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
<nav class="custom-navbar  fixed-top fixed-nav-product--menu">
    <ul class=" mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="#"> Главная </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#"> Контакты</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Доставка и оплата </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#"> Гарантия</a>
        </li>
        <li class="nav-item ">
            <a class="nav-link " href="#">Вопросы и ответы</a>
        </li>
    </ul>
</nav>

<div class="fixed-nav-product fixed-nav-product--like">
    <h5 class="fixed-nav-product--title">Товары в списке Нравиться</h5>
    <div class="overflow-container">
    </div>
</div>

<?php if (empty($_SESSION['user'])) { ?>
    <div class="auth-modal-wrap fixed-nav-product fixed-nav-product--auth ">
        <a href="javascript:void(0)" type="button"
           class="btn-auth-close btn-floating btn-large waves-effect waves-light btn-danger "
           aria-hidden="true"><i class="fas fa-times"></i></a>
        <div class="modal-dialog  modal-notify modal-danger " role="document">
            <div class="modal-content text-center">
                <div class="modal-body">
                    <ul class="nav nav-tabs nav-justified md-tabs indigo"
                        id="myTabJust"
                        role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab-just"
                               data-toggle="tab"
                               href="#home-just" role="tab"
                               aria-controls="home-just"
                               aria-selected="true">Войти</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab-just"
                               data-toggle="tab"
                               href="#profile-just" role="tab"
                               aria-controls="profile-just"
                               aria-selected="false">Зарегистрироваться</a>
                        </li>
                    </ul>
                    <div class="tab-content  pt-5" id="myTabContentJust">
                        <div class="tab-pane fade show active" id="home-just"
                             role="tabpanel"
                             aria-labelledby="home-tab-just">
                            <?php include_once 'form/auth.php' ?>
                        </div>
                        <div class="tab-pane fade" id="profile-just"
                             role="tabpanel"
                             aria-labelledby="profile-tab-just">
                            <?php include_once 'form/register.php' ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } else { ?>
    <div class="auth-modal-wrap auth-modal-wrap--min fixed-nav-product fixed-nav-product--auth">
        <a href="javascript:void(0)" type="button"
           class="btn-auth-close btn-floating btn-large waves-effect waves-light btn-danger "
           aria-hidden="true"><i class="fas fa-times"></i></a>
        <div class="modal-dialog  modal-notify modal-danger " role="document">
            <div class="modal-content text-left">
                <div class="modal-body">
                    <div class="list-group list-group-flush ">
                        <?php include_once 'form/modal_auth.php' ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>

<div class="fixed-nav-product fixed-nav-product--compare">
    <h5 class="fixed-nav-product--title">Товары в списке Сравнения</h5>
    <div class="overflow-container">
    </div>
</div>

<div class="overflow-bg"></div>
<!--Main Navigation-->
<header>
    <div class="ss_middle_header_wrapper">
        <div class="container ">
            <div class="row">
                <div class="col-md-3">
                    <div class="ss_categories_box">
                        <nav>
                            <ul class="list-group vertical-menu yamm make-absolute nav">
                                <li class="list-group-item button-dropdown"><a href="javascript:void(0)"
                                                                               class="dropdown-toggle fisrt_drop text-white active">
                                <span class="d-flex justify-content-between"><b>Каталог товаров</b> <i
                                            class="fa fa-chevron-down mr-2 "></i></span></a>
                                    <ul class="dropdown-menu p-0" style="display: block">
                                        <?php new \app\views\widget\menu\Menu(['tpl' => WWW . '/menu/menu.php'], '') ?>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="ss_info_area">
                        <ul>
                            <li>
                                <div class="ss_search_box">
                                    <div class="tt-typeaheads">
                                        <form action="search" method="get" autocomplete="off">
                                            <div class="tt-col">
                                                <input type="text" name="s" class="tt-search-input typeahead" id="typeahead"
                                                       placeholder="Поиск">
                                            </div>
                                            <button><i class="fa fa-search" aria-hidden="true"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
</header>
<div class="notification_container notification-fixed">
    <div class="ss_notification_box">
        <div class="btn-show-menu">
            <a class="navbar-toggler third-button" type="button"  data-open-modal=".fixed-nav-product--menu">
                <div class="animated-icon3"><span></span><span></span><span></span></div>
            </a>
        </div>
        <ul>
            <li>
                <div class="ss_login_box">
                    <a href="javascript:void(0)" class="user-dropdown btn-gradient-dark" data-open-modal=".fixed-nav-product--auth">
                        <em class="btn-text-cont">
                            Вход в <br> кабинет
                        </em>
                        <?php if (!empty($_SESSION['user'])) { ?>
                            <span class="logo_auth_user"><?php echo $_SESSION['user']['name'][0] ?></span>
                        <?php } else { ?>
                            <svg x="0px" y="0px" width="25" viewBox="0 0 438.529 438.529"
                                 style="enable-background:new 0 0 438.529 438.529;">
                                <g>
                                    <g>
                                        <path d="M219.265,219.267c30.271,0,56.108-10.71,77.518-32.121c21.412-21.411,32.12-47.248,32.12-77.515    c0-30.262-10.708-56.1-32.12-77.516C275.366,10.705,249.528,0,219.265,0S163.16,10.705,141.75,32.115    c-21.414,21.416-32.121,47.253-32.121,77.516c0,30.267,10.707,56.104,32.121,77.515    C163.166,208.557,189.001,219.267,219.265,219.267z"
                                              fill="#fff"/>
                                        <path d="M419.258,335.036c-0.668-9.609-2.002-19.985-3.997-31.121c-1.999-11.136-4.524-21.457-7.57-30.978    c-3.046-9.514-7.139-18.794-12.278-27.836c-5.137-9.041-11.037-16.748-17.703-23.127c-6.666-6.377-14.801-11.465-24.406-15.271    c-9.617-3.805-20.229-5.711-31.84-5.711c-1.711,0-5.709,2.046-11.991,6.139c-6.276,4.093-13.367,8.662-21.266,13.708    c-7.898,5.037-18.182,9.609-30.834,13.695c-12.658,4.093-25.361,6.14-38.118,6.14c-12.752,0-25.456-2.047-38.112-6.14    c-12.655-4.086-22.936-8.658-30.835-13.695c-7.898-5.046-14.987-9.614-21.267-13.708c-6.283-4.093-10.278-6.139-11.991-6.139    c-11.61,0-22.222,1.906-31.833,5.711c-9.613,3.806-17.749,8.898-24.412,15.271c-6.661,6.379-12.562,14.086-17.699,23.127    c-5.137,9.042-9.229,18.326-12.275,27.836c-3.045,9.521-5.568,19.842-7.566,30.978c-2,11.136-3.332,21.505-3.999,31.121    c-0.666,9.616-0.998,19.466-0.998,29.554c0,22.836,6.949,40.875,20.842,54.104c13.896,13.224,32.36,19.835,55.39,19.835h249.533    c23.028,0,41.49-6.611,55.388-19.835c13.901-13.229,20.845-31.265,20.845-54.104C420.264,354.502,419.932,344.652,419.258,335.036    z"
                                              fill="#fff"/>
                                    </g>
                                </g>
                            </svg>
                        <?php } ?>
                    </a>

                </div>
            </li>
            <li>
                <a href="#" data-open-modal=".fixed-nav-product--like" class="like-count btn-gradient-rouse">
                    <em class="btn-text-cont"> Товары в <br> нравиться </em>
                    <svg width='25' viewBox="0 0 456.814 456.814"
                         style="enable-background:new 0 0 456.814 456.814;">
                        <g>
                            <path fill="#fff" d="M441.11,252.677c10.468-11.99,15.704-26.169,15.704-42.54c0-14.846-5.432-27.692-16.259-38.547
    			c-10.849-10.854-23.695-16.278-38.541-16.278h-79.082c0.76-2.664,1.522-4.948,2.282-6.851c0.753-1.903,1.811-3.999,3.138-6.283
    			c1.328-2.285,2.283-3.999,2.852-5.139c3.425-6.468,6.047-11.801,7.857-15.985c1.807-4.192,3.606-9.9,5.42-17.133
    			c1.811-7.229,2.711-14.465,2.711-21.698c0-4.566-0.055-8.281-0.145-11.134c-0.089-2.855-0.574-7.139-1.423-12.85
    			c-0.862-5.708-2.006-10.467-3.43-14.272c-1.43-3.806-3.716-8.092-6.851-12.847c-3.142-4.764-6.947-8.613-11.424-11.565
    			c-4.476-2.95-10.184-5.424-17.131-7.421c-6.954-1.999-14.801-2.998-23.562-2.998c-4.948,0-9.227,1.809-12.847,5.426
    			c-3.806,3.806-7.047,8.564-9.709,14.272c-2.666,5.711-4.523,10.66-5.571,14.849c-1.047,4.187-2.238,9.994-3.565,17.415
    			c-1.719,7.998-2.998,13.752-3.86,17.273c-0.855,3.521-2.525,8.136-4.997,13.845c-2.477,5.713-5.424,10.278-8.851,13.706
    			c-6.28,6.28-15.891,17.701-28.837,34.259c-9.329,12.18-18.94,23.695-28.837,34.545c-9.899,10.852-17.131,16.466-21.698,16.847
    			c-4.755,0.38-8.848,2.331-12.275,5.854c-3.427,3.521-5.14,7.662-5.14,12.419v183.01c0,4.949,1.807,9.182,5.424,12.703
    			c3.615,3.525,7.898,5.38,12.847,5.571c6.661,0.191,21.698,4.374,45.111,12.566c14.654,4.941,26.12,8.706,34.4,11.272
    			c8.278,2.566,19.849,5.328,34.684,8.282c14.849,2.949,28.551,4.428,41.11,4.428h4.855h21.7h10.276
    			c25.321-0.38,44.061-7.806,56.247-22.268c11.036-13.135,15.697-30.361,13.99-51.679c7.422-7.042,12.565-15.984,15.416-26.836
    			c3.231-11.604,3.231-22.74,0-33.397c8.754-11.611,12.847-24.649,12.272-39.115C445.395,268.286,443.971,261.055,441.11,252.677z"
                            />
                            <path fill="#fff" d="M100.5,191.864H18.276c-4.952,0-9.235,1.809-12.851,5.426C1.809,200.905,0,205.188,0,210.137v182.732
    			c0,4.942,1.809,9.227,5.426,12.847c3.619,3.611,7.902,5.421,12.851,5.421H100.5c4.948,0,9.229-1.81,12.847-5.421
    			c3.616-3.62,5.424-7.904,5.424-12.847V210.137c0-4.949-1.809-9.231-5.424-12.847C109.73,193.672,105.449,191.864,100.5,191.864z
    			 M67.665,369.308c-3.616,3.521-7.898,5.281-12.847,5.281c-5.14,0-9.471-1.76-12.99-5.281c-3.521-3.521-5.281-7.85-5.281-12.99
    			c0-4.948,1.759-9.232,5.281-12.847c3.52-3.617,7.85-5.428,12.99-5.428c4.949,0,9.231,1.811,12.847,5.428
    			c3.617,3.614,5.426,7.898,5.426,12.847C73.091,361.458,71.286,365.786,67.665,369.308z"/>
                        </g>
                    </svg>
                    <?php echo(isset($_SESSION['like.qty']) ? "<span>" . $_SESSION['like.qty'] . "</span>" : '') ?>
                </a>
            </li>
            <li>
                <a href="#" data-open-modal=".fixed-nav-product--compare" class="compare-count btn-gradient-orange">
                    <em class="btn-text-cont"> Товары в <br> сравнении </em>
                    <svg width="25" viewBox="0 0 45.363 45.363"
                         style="enable-background:new 0 0 45.363 45.363;">
                        <g>
                            <g>
                                <path d="M1.788,16.945c0.388,0.385,0.913,0.601,1.459,0.601l27.493-0.035v3.831c0.003,0.836,0.556,1.586,1.329,1.904    c0.771,0.314,1.658,0.135,2.246-0.459l9.091-9.18c1.062-1.071,1.06-2.801-0.009-3.868l-9.137-9.134    c-0.59-0.591-1.479-0.768-2.25-0.446c-0.77,0.319-1.271,1.074-1.27,1.908L30.74,5.9L3.219,5.937    C2.08,5.94,1.161,6.864,1.163,8.004l0.018,7.483C1.182,16.034,1.401,16.56,1.788,16.945z"
                                      fill="#fff"/>
                                <path d="M42.146,27.901l-27.522-0.035l-0.001-3.834c0.002-0.835-0.5-1.587-1.27-1.907c-0.771-0.321-1.66-0.146-2.25,0.445    l-9.136,9.135c-1.067,1.064-1.071,2.796-0.009,3.866l9.09,9.181c0.588,0.596,1.475,0.772,2.247,0.458    c0.772-0.316,1.326-1.066,1.329-1.904v-3.83l27.493,0.035c0.547,0,1.072-0.216,1.459-0.602s0.605-0.91,0.607-1.456L44.2,29.97    C44.203,28.83,43.284,27.903,42.146,27.901z"
                                      fill="#fff"/>
                            </g>
                        </g>
                    </svg>
                    <?php echo(isset($_SESSION['compare.qty']) ? "<span>" . $_SESSION['compare.qty'] . "</span>" : '') ?>
                </a>
            </li>
            <li>
                <a href="#" class="cart-count dropdown-toggle  btn-gradient-blue tt-dropdown-toggle"
                   data-toggle="modal" data-target="#exampleModal" onclick="getCart()">
                    <em class="btn-text-cont"> Товары в <br> корзине </em>
                    <svg x="0px" y="0px" viewBox="0 0 30.511 30.511"
                         style="enable-background:new 0 0 30.511 30.511;"
                         width="25">
                        <g>
                            <path d="M26.818,19.037l3.607-10.796c0.181-0.519,0.044-0.831-0.102-1.037   c-0.374-0.527-1.143-0.532-1.292-0.532L8.646,6.668L8.102,4.087c-0.147-0.609-0.581-1.19-1.456-1.19H0.917   C0.323,2.897,0,3.175,0,3.73v1.49c0,0.537,0.322,0.677,0.938,0.677h4.837l3.702,15.717c-0.588,0.623-0.908,1.531-0.908,2.378   c0,1.864,1.484,3.582,3.38,3.582c1.79,0,3.132-1.677,3.35-2.677h7.21c0.218,1,1.305,2.717,3.349,2.717   c1.863,0,3.378-1.614,3.378-3.475c0-1.851-1.125-3.492-3.359-3.492c-0.929,0-2.031,0.5-2.543,1.25h-8.859   c-0.643-1-1.521-1.31-2.409-1.345l-0.123-0.655h13.479C26.438,19.897,26.638,19.527,26.818,19.037z M25.883,22.828   c0.701,0,1.27,0.569,1.27,1.27s-0.569,1.27-1.27,1.27s-1.271-0.568-1.271-1.27C24.613,23.397,25.182,22.828,25.883,22.828z    M13.205,24.098c0,0.709-0.576,1.286-1.283,1.286c-0.709-0.002-1.286-0.577-1.286-1.286s0.577-1.286,1.286-1.286   C12.629,22.812,13.205,23.389,13.205,24.098z"
                                  fill="#fff"/>
                        </g>
                    </svg>
                    <?php if (!empty($_SESSION['cart'])) { ?>
                        <span class="tt-badge-cart">
                                                <?php echo $_SESSION['cart.qty'] ?></span>
                    <?php } else { ?>
                    <?php } ?>
                </a>
            </li>

        </ul>
    </div>

</div>
