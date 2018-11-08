<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Редактирование категории <?php echo $category->title;?>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo ADMIN;?>"><i class="fa fa-dashboard"></i> Главная</a></li>
        <li><a href="<?php echo ADMIN;?>/category">Список категорий</a></li>
        <li class="active"><?php echo $category->title;?></li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <form action="<?php echo ADMIN;?>/category/edit" method="post" data-toggle="validator">
                    <div class="box-body">
                        <div class="col-md-6">
                            <div class="form-group has-feedback">
                                <label for="title">Наименование категории</label>
                                <input type="text" name="title" class="form-control" id="title" placeholder="Наименование категории" value="<?php echo h($category->title);?>" required>
                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                            </div>
                            <div class="form-group">
                                <label for="parent_id">Родительская категория</label>
                                <?php new \app\views\widget\menu\Menu([
                                    'tpl' => WWW . '/menu/select.php',
                                    'container' => 'select',
                                    'cache' => 0,
                                    'cacheKey' => 'admin_select',
                                    'class' => 'form-control',
                                    'attrs' => [
                                        'name' => 'parent_id',
                                        'id' => 'parent_id',
                                    ],
                                    'prepend' => '<option value="0">Самостоятельная категория</option>',
                                ]) ?>
                            </div>
                            <div class="form-group">
                                <label for="keywords">Ключевые слова</label>
                                <input type="text" name="keywords" class="form-control" id="keywords" placeholder="Ключевые слова" value="<?php echo h($category->keywords);?>">
                            </div>
                            <div class="form-group">
                                <label for="description">Описание</label>
                                <input type="text" name="description" class="form-control" id="description" placeholder="Описание" value="<?php echo h($category->description);?>">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <label for="description">Изображение на сайте</label>
                                    <div class="box box-primary box-solid file-upload">
                                        <div class="box-header">
                                            <h3 class="box-title">Базовое изображение</h3>
                                        </div>
                                        <div class="box-body">
                                            <div id="single" class="btn btn-default" data-url="category/add-image" data-name="single">Выбрать файл</div>
                                            <div class="single">
                                                <img src="/images/<?php echo $category->image;?>" alt="" style="max-height: 150px;">
                                            </div>
                                        </div>
                                        <div class="overlay">
                                            <i class="fa fa-refresh fa-spin"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <label for="description">Изображение в меню</label>
                                    <div class="box box-primary box-solid file-upload">
                                        <div class="box-header">
                                            <h3 class="box-title">Изображение превью</h3>
                                        </div>
                                        <div class="box-body">
                                            <div id="single-min" class="btn btn-default w-100" data-url="category/add-image" data-name="single-min">Выбрать файл</div>
                                            <div class="single-min">
                                                <img src="/images/<?php echo $category->imagemin;?>" alt="" style="max-height: 150px;">
                                            </div>
                                        </div>
                                        <div class="overlay">
                                            <i class="fa fa-refresh fa-spin"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-footer">
                        <div class="col-md-12">
                            <input type="hidden" name="id" value="<?php echo $category->id;?>">
                            <button type="submit" class="btn btn-success">Сохранить</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</section>
<!-- /.content -->