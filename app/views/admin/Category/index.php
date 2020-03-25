<div class="page-header">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <div class="d-inline">
                    <h1>Список категорий</h1>

                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="page-header-breadcrumb">
                <ul class="breadcrumb-title">
                    <li class="breadcrumb-item"><a href="<?php echo ADMIN; ?>"><i
                                    class="fa fa-dashboard"></i>Главная</a></li>
                    <li class="breadcrumb-item active">Список категорий</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-body">
                    <?php new \app\views\widget\menu\Menu([
                        'tpl' => WWW . '/menu/category_admin.php',
                        'container' => 'div',
                        'cache' => 0,
                        'cacheKey' => 'admin_cat',
                        'class' => 'list-group list-group-root well',
                    ]) ?>
                </div>
            </div>
        </div>
    </div>
</section>
<br>
<div class="box-header">
    <a style="color: #fff;" href="<?php echo ADMIN?>/category/add" class="btn btn-success">Добавить категорию</a>
</div>
<!-- /.content -->