<div class="page-header">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <div class="d-inline">
                    <h4>Панель управления</h4>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="page-header-breadcrumb">
                <ul class="breadcrumb-title">
                    <li class="breadcrumb-item"><a href="<?php echo ADMIN; ?>">Главная</a>
                    </li></ul>
            </div>
        </div>
    </div>
</div>
<section class="content">
    <div class="row">
        <div class="col-xl-3 col-md-6">
            <div class="card bg-c-yellow text-white">
                <div class="card-block">
                    <a href="<?php echo ADMIN ?>/user" class="row align-items-center">
                        <div class="col">
                            <p class="m-b-5">Пользователи</p>
                            <h4 class="m-b-0"><?php echo $countUsers; ?></h4>
                        </div>
                        <div class="col col-auto text-right">
                            <i class="feather icon-user f-50 text-c-yellow"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-c-green text-white">
                <div class="card-block">
                    <a href="<?php echo ADMIN; ?>/category" class="row align-items-center">
                        <div class="col">
                            <p class="m-b-5">Категории</p>
                            <h4 class="m-b-0"><?php echo $countCategories; ?></h4>
                        </div>
                        <div class="col col-auto text-right">
                            <i class="feather icon-credit-card f-50 text-c-green"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-c-pink text-white">
                <div class="card-block">
                    <a href="<?php echo ADMIN ?>/product" class="row align-items-center">
                        <div class="col">
                            <p class="m-b-5">Товаров на сайте</p>
                            <h4 class="m-b-0"><?php echo $countProducts; ?></h4>
                        </div>
                        <div class="col col-auto text-right">
                            <i class="feather icon-book f-50 text-c-pink"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-c-blue text-white">
                <div class="card-block">
                    <a href="<?php echo ADMIN ?>/order" class="row align-items-center">
                        <div class="col">
                            <p class="m-b-5">Новые заказы</p>
                            <h4 class="m-b-0"><?php echo $countNewOrders ? $countNewOrders : ''; ?></h4>
                        </div>
                        <div class="col col-auto text-right">
                            <i class="feather icon-shopping-cart f-50 text-c-blue"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>

    </div>
</section>
