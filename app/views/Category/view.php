<?php $curr = \shop\App::$app->getProperty('currency');
$cats = \shop\App::$app->getProperty('cats');
?>
<!--<div class="tt-breadcrumb">-->
<!--    <div class="container">-->
<!--        <ul>-->
<!--           --><?php //echo  $breadcrumbs;?>
<!--        </ul>-->
<!--    </div>-->
<!--</div>-->

<div class="cc_pc_accordion_main_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 hidden-sm hidden-xs aside">
                <div class="loader-aside"></div>
                <?php new \app\views\widget\filter\Filter() ?>
            </div>
            <div class="col-lg-9  col-md-9 col-sm-12 col-xs-12 sidebar2_main_wrapper ">
                <div class="sidebar_widget2 mt-0 ">
                    <div class="filter-area d-flex align-items-center justify-content-between mb-0">
                        <div class="showpro mt-0">
                            <p> <?php echo count($products) ?> товара(ов) из <?php echo $total; ?></p>
                        </div>
                        <div class="d-flex align-items-center ">
                            <div class="mr-4">
                                <!--Blue select-->
                                <?php if (!empty($_GET['sort'])): ?>
                                    <select class="mdb-select md-form colorful-select dropdown-primary sort-dropdown m-0">
                                        <option <?php echo ($_GET['sort'] === 'cheap') ? 'selected' : ''; ?>
                                                value="cheap"> от дешевых к дорогим
                                        </option>
                                        <option <?php echo ($_GET['sort'] === 'expensive') ? 'selected' : ''; ?>
                                                value="expensive">от дорогих к дешевым
                                        </option>
                                        <option <?php echo ($_GET['sort'] === 'popularity') ? 'selected' : ''; ?>
                                                value="popularity">популярные
                                        </option>
                                        <option <?php echo ($_GET['sort'] === 'novelty') ? 'selected' : ''; ?>
                                                value="novelty">новинки
                                        </option>
                                        <option <?php echo ($_GET['sort'] === 'rank') ? 'selected' : ''; ?>
                                                value="rank">по рейтингу
                                        </option>
                                    </select>
                                <?php else: ?>
                                    <select class="mdb-select md-form colorful-select dropdown-primary sort-dropdown m-0">
                                        <option value="cheap"> от дешевых к дорогим</option>
                                        <option value="expensive">от дорогих к дешевым</option>
                                        <option value="popularity" selected>популярные</option>
                                        <option value="novelty">новинки</option>
                                        <option value="rank">по рейтингу</option>
                                    </select>
                                <?php endif; ?>
                                <!--/Blue select-->
                            </div>
                            <div class="list-grid">
                                <ul class="list-inline nav nav-pills">

                                    <?php if (!empty($_GET['list'])): ?>
                                        <li><a data-toggle="pill" href="#grid"
                                               class="<?php echo ($_GET['list'] === 'grid') ? 'active show' : ''; ?>"><i
                                                        class="fa fa-th-large"></i></a>
                                        </li>
                                        <li><a data-toggle="pill" href="#list"
                                               class="<?php echo ($_GET['list'] === 'list') ? 'active show' : ''; ?>"><i
                                                        class="fa fa-list"></i></a>
                                        </li>
                                    <?php else: ?>
                                        <li class="active"><a data-toggle="pill" href="#grid"><i
                                                        class="fa fa-th-large"></i></a>
                                        </li>
                                        <li><a data-toggle="pill" href="#list"><i class="fa fa-list"></i></a>
                                        </li>
                                    <?php endif; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p-0">
                        <div class="tab-content">
                            <div id="grid" class="tab-pane fade  <?php  if(!empty($_GET['list'])) { echo ($_GET['list'] === 'grid') ?  'in active show' : '';}else{ echo 'in active show'; } ?>">
                                <div class="preloader-container preloader fixed">
                                    <div class="container-center">
                                        <div class="preloader-wrapper big active">
                                            <div class="spinner-layer spinner-blue-only">
                                                <div class="circle-clipper left">
                                                    <div class="circle"></div>
                                                </div>
                                                <div class="gap-patch">
                                                    <div class="circle"></div>
                                                </div>
                                                <div class="circle-clipper right">
                                                    <div class="circle"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row tt-product-listing ">
                                    <?php if ($products) {
                                        foreach ($products as $product) { ?>
                                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 prs_upcom_slide_first ">
                                                <div class="ss_featured_products_box card-cascade narrower card-ecommerce ">
                                                    <div class="btn-toolbar btn-event" role="toolbar"
                                                         aria-label="Toolbar with button groups">
                                                        <div class="btn-group mr-2" role="group"
                                                             aria-label="First group">
                                                            <button data-id=" <?php echo $product->id; ?>"
                                                                    data-toggle="modal"
                                                                    data-target="#modalPoll" type="button"
                                                                    class="btn-show-fast-prev  btn indigo lighten-2"><i
                                                                        class="fa fa-star"
                                                                        aria-hidden="true"></i>
                                                            </button>
                                                            <button type="button" class="btn blue lighten-2"><i
                                                                        class="fa fa-heart"
                                                                        aria-hidden="true"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="draws">
                                                        <div class="ss_featured_products_box_img">
                                                            <?php if ($product->sale) {
                                                                echo "<span class=\"ss_tag btn-floating d-flex align-items-center justify-content-center btn-outline-danger m-0\">$product->sale%</span>";
                                                            } else {
                                                                echo '';
                                                            } ?>
                                                            <!--                                                        <span class="ss_offer">топ</span>-->
                                                            <a class="d-block"
                                                               href="product/<?php echo $product->alias ?>">
                                                                <img src="/images/<?php echo $product->img; ?>"
                                                                     alt="<?php echo $product->title ?>"
                                                                     class="img-responsive ">
                                                            </a>
                                                        </div>
                                                        <div class="ss_feat_prod_cont_heading_wrapper text-left">
                                                            <h4>
                                                                <a href="product/<?php echo $product->alias ?>"><?php echo $product->title; ?></a>
                                                            </h4>
                                                            <div class='rating-stars text-left'>
                                                                <ul class='stars'>
                                                                    <?php for ($i = 1; $i <= 5; $i++) { ?>
                                                                        <li class='star <?php if ($product->rating / $product->rating_view >= $i) {
                                                                            echo 'selected';
                                                                        } ?>' title='Poor'
                                                                            data-value='<?php echo $i; ?>'>
                                                                            <i class='fa fa-star fa-fw'></i>
                                                                        </li>
                                                                    <?php } ?>
                                                                </ul>
                                                                <?php if ($product->rating_view > 0) { ?>
                                                                    <span class="text-sm">   отзывов <span>:) <?php echo $product->rating_view; ?></span></span>
                                                                <?php } ?>
                                                            </div>
                                                            <div class="mb-1">
                                                            <span class="text-sm "><i
                                                                        class="fa fa-check green-text"></i> Доставка бесплатно </span>
                                                            </div>
                                                            <div>
                                                                <ins class="h5 m-0 text-danger"><?php echo $curr['symbol_left'] ?><?php echo $product->price * $curr['value']; ?>
                                                                    <span><?php echo $curr['symbol_right'] ?></span>
                                                                </ins>
                                                                <del class="h6 m-0"><?php if ($product->old_price != 0) { ?>
                                                                        <?php echo $curr['symbol_left'] ?><?php echo $product->old_price * $curr['value']; ?><?php echo $curr['symbol_right'] ?>
                                                                    <?php } ?>
                                                                </del>
                                                                <a data-id="<?php echo $product->id; ?>"
                                                                   href="#"
                                                                   title="Добавить товар в список для сравнения"
                                                                   class="w-100 text-dark text-sm d-block add-to-compare p-0 mt-3">
                                                                    <i class="fa fa-random text-danger"
                                                                       aria-hidden="true"></i> Добавить к
                                                                    сравнению
                                                                </a>

                                                            </div>
                                                        </div>
                                                        <div class="ss_featured_products_box_footer">
                                                            <a data-id="<?php echo $product->id; ?>"
                                                               title="Добавить товар в корзину"
                                                               href="cart/add?id=<?php echo $product->id; ?>"
                                                               class="btn d-flex justify-content-between <?php if (!empty($_SESSION['cart_container'])) {
                                                                   echo (in_array($product->id, $_SESSION['cart_container'])) ? 'blue' : 'btn-indigo';
                                                               } else {
                                                                   echo 'btn-indigo ';
                                                               } ?> waves-effect add-to-cart-link align-items-center ">
                                            <span class="ml-2 text-white add-cart-text"><?php if (!empty($_SESSION['cart_container'])) {
                                                    echo (in_array($product->id, $_SESSION['cart_container'])) ? 'Добавлено' : 'В корзину';
                                                } else {
                                                    echo 'В корзину';
                                                } ?></span>
                                                                <span class="btn btn-white  btn-icon"><i
                                                                            class=" fa fa-<?php if (!empty($_SESSION['cart_container'])) {
                                                                                echo (in_array($product->id, $_SESSION['cart_container'])) ? 'shopping-cart' : 'plus';
                                                                            } else {
                                                                                echo 'plus';
                                                                            } ?> text-dark"
                                                                            aria-hidden="true"></i></span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php } ?>
                                        <div class="d-flex justify-content-center align-items-center w-100">
                                            <div class="pager_wrapper gc_blog_pagination">
                                                <?php if ($pagination->countPages > 1) { ?>
                                                    <?php echo $pagination; ?>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    <?php } else { ?>
                                        <h3>В этой категории товаров пока нет</h3>
                                    <?php } ?>
                                </div>
                            </div>
                            <div id="list" class="tab-pane fade <?php echo ($_GET['list'] === 'list') ? 'in active show' : ''; ?>">
                                <div class="row tt-product-listing">
                                    <div class="preloader-container preloader fixed">
                                        <div class="container-center">
                                            <div class="preloader-wrapper big active">
                                                <div class="spinner-layer spinner-blue-only">
                                                    <div class="circle-clipper left">
                                                        <div class="circle"></div>
                                                    </div>
                                                    <div class="gap-patch">
                                                        <div class="circle"></div>
                                                    </div>
                                                    <div class="circle-clipper right">
                                                        <div class="circle"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php if ($products) {
                                        foreach ($products as $product) { ?>
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 p-0">
                                                <div class="prs_mcc_list_movie_main_wrapper">
                                                    <div class="btn-toolbar btn-event" role="toolbar"
                                                         aria-label="Toolbar with button groups">
                                                        <div class="btn-group mr-2" role="group"
                                                             aria-label="First group">
                                                            <button data-id=" <?php echo $product->id; ?>"
                                                                    data-toggle="modal"
                                                                    data-target="#modalPoll" type="button"
                                                                    class="btn-show-fast-prev  btn indigo lighten-2"><i
                                                                        class="fa fa-star"
                                                                        aria-hidden="true"></i>
                                                            </button>
                                                            <button type="button" class="btn blue lighten-2"><i
                                                                        class="fa fa-heart"
                                                                        aria-hidden="true"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="ss_featured_products_box_img ss_featured_products_box_img_list">
                                                        <div class="ss_featured_products_box_img">
                                                            <?php if ($product->sale) {
                                                                echo "<span class=\"ss_tag btn-floating d-flex align-items-center justify-content-center btn-outline-danger m-0\">$product->sale%</span>";
                                                            } else {
                                                                echo '';
                                                            } ?>
                                                            <!--                                                        <span class="ss_offer">топ</span>-->
                                                            <a class="d-block"
                                                               href="product/<?php echo $product->alias ?>">
                                                                <img src="/images/<?php echo $product->img; ?>"
                                                                     alt="<?php echo $product->title ?>"
                                                                     class="img-responsive ">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="ss_featured_products_box_img_list_cont">
                                                        <div class="ss_feat_prod_cont_heading_wrapper">
                                                            <div class="ss_feat_prod_cont_heading_wrapper text-left">
                                                                <h4>
                                                                    <a href="product/<?php echo $product->alias ?>"><?php echo $product->title; ?></a>
                                                                </h4>
                                                                <div class='rating-stars text-left'>
                                                                    <ul class='stars'>
                                                                        <?php for ($i = 1; $i <= 5; $i++) { ?>
                                                                            <li class='star <?php if ($product->rating / $product->rating_view >= $i) {
                                                                                echo 'selected';
                                                                            } ?>' title='Poor'
                                                                                data-value='<?php echo $i; ?>'>
                                                                                <i class='fa fa-star fa-fw'></i>
                                                                            </li>
                                                                        <?php } ?>
                                                                    </ul>
                                                                    <?php if ($product->rating_view > 0) { ?>
                                                                        <span class="text-sm">   отзывов <span>:) <?php echo $product->rating_view; ?></span></span>
                                                                    <?php } ?>
                                                                </div>
                                                                <div class="mb-1">
                                                            <span class="text-sm "><i
                                                                        class="fa fa-check green-text"></i> Доставка бесплатно </span>
                                                                </div>
                                                                <div>
                                                                    <ins class="h5 m-0 text-danger"><?php echo $curr['symbol_left'] ?><?php echo $product->price * $curr['value']; ?>
                                                                        <span><?php echo $curr['symbol_right'] ?></span>
                                                                    </ins>
                                                                    <del class="h6 m-0"><?php if ($product->old_price != 0) { ?>
                                                                            <?php echo $curr['symbol_left'] ?><?php echo $product->old_price * $curr['value']; ?><?php echo $curr['symbol_right'] ?>
                                                                        <?php } ?>
                                                                    </del>
                                                                    <a data-id="<?php echo $product->id; ?>"
                                                                       href="#"
                                                                       title="Добавить товар в список для сравнения"
                                                                       class="w-100 text-dark text-sm d-block add-to-compare p-0 mt-3">
                                                                        <i class="fa fa-random text-danger"
                                                                           aria-hidden="true"></i> Добавить к
                                                                        сравнению
                                                                    </a>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="ss_featured_products_box_footer ss_featured_products_box_footer_list mt-2">
                                                            <div class="ss_featured_products_box_footer">
                                                                <a data-id="<?php echo $product->id; ?>"
                                                                   title="Добавить товар в корзину"
                                                                   href="cart/add?id=<?php echo $product->id; ?>"
                                                                   class="btn d-flex justify-content-between <?php if (!empty($_SESSION['cart_container'])) {
                                                                       echo (in_array($product->id, $_SESSION['cart_container'])) ? 'blue' : 'btn-indigo';
                                                                   } else {
                                                                       echo 'btn-indigo ';
                                                                   } ?> waves-effect add-to-cart-link align-items-center ">
                                            <span class="ml-2 text-white add-cart-text"><?php if (!empty($_SESSION['cart_container'])) {
                                                    echo (in_array($product->id, $_SESSION['cart_container'])) ? 'Добавлено' : 'В корзину';
                                                } else {
                                                    echo 'В корзину';
                                                } ?></span>
                                                                    <span class="btn btn-white  btn-icon"><i
                                                                                class=" fa fa-<?php if (!empty($_SESSION['cart_container'])) {
                                                                                    echo (in_array($product->id, $_SESSION['cart_container'])) ? 'shopping-cart' : 'plus';
                                                                                } else {
                                                                                    echo 'plus';
                                                                                } ?> text-dark"
                                                                                aria-hidden="true"></i></span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php } ?>
                                        <div class="d-flex justify-content-center align-items-center w-100">
                                            <div class="pager_wrapper gc_blog_pagination">
                                                <?php if ($pagination->countPages > 1) { ?>
                                                    <?php echo $pagination; ?>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    <?php } else { ?>
                                        <h3>В этой категории товаров пока нет</h3>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
