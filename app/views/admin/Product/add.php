<div class="page-header">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <div class="d-inline">
                    <h1>Новый товар</h1>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="page-header-breadcrumb">
                <ul class="breadcrumb-title">
                    <li class="breadcrumb-item"><a href="<?php echo ADMIN; ?>"><i class="fa fa-dashboard"></i>
                            Главная</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo ADMIN; ?>/product">Список товаров</a></li>
                    <li class="breadcrumb-item active">Новый товар</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12 p-0">
            <div class="box">
                <form action="<?php echo ADMIN; ?>/product/add" method="post" data-toggle="validator" id="add">
                    <div class="box-body">
                        <div class="card-block tab-icon mb-0 pb-0">
                            <div class="row">
                                <div class="col-lg-9">
                                    <ul class="nav nav-tabs md-tabs " role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="tab" href="#home7" role="tab"
                                               aria-expanded="true">Описание</a>
                                            <div class="slide"></div>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#profile7" role="tab"
                                               aria-expanded="false">Изображение</a>
                                            <div class="slide"></div>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#messages7" role="tab"
                                               aria-expanded="false">Характеристики</a>
                                            <div class="slide"></div>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#settings7"
                                               role="tab">Фильтры</a>
                                            <div class="slide"></div>
                                        </li>
                                    </ul>
                                    <div class="tab-content card-block pl-0 pr-0">
                                        <div class="tab-pane active" id="home7" role="tabpanel" aria-expanded="true">
                                            <div class="form-group has-feedback">
                                                <label for="title">Наименование товара</label>
                                                <input type="text" name="title" class="form-control" id="title"
                                                       placeholder="Наименование товара"
                                                       value="<?php isset($_SESSION['form_data']['title']) ? h($_SESSION['form_data']['title']) : '' ?>"
                                                       required>
                                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                            </div>

                                            <div class="form-group">
                                                <label for="keywords">Ключевые слова</label>
                                                <input type="text" name="keywords" class="form-control" id="keywords"
                                                       value="<?php isset($_SESSION['form_data']['keywords']) ? h($_SESSION['form_data']['keywords']) : '' ?>"
                                                       placeholder="Ключевые слова">
                                            </div>
                                            <div class="form-group">
                                                <label for="description">Описание</label>
                                                <input type="text" name="description" class="form-control"
                                                       value="<?php isset($_SESSION['form_data']['description']) ? h($_SESSION['form_data']['description']) : '' ?>"
                                                       id="description" placeholder="Описание">
                                            </div>
                                            <div class="form-group has-feedback">
                                                <label for="price">Цена</label>
                                                <input type="text" required name="price" class="form-control"
                                                       pattern="^[0-9.]{1,}$"
                                                       value="<?php isset($_SESSION['form_data']['price']) ? h($_SESSION['form_data']['price']) : '' ?>"
                                                       id="price" placeholder="Цена"
                                                       data-error="Допускаються только цифры"
                                                >
                                                <div class="help-block with-errors"></div>
                                            </div>
                                            <div class="form-group has-feedback">
                                                <label for="old_price">Старая цена</label>
                                                <input type="text" required name="old_price" class="form-control"
                                                       pattern="^[0-9.]{1,}$"
                                                       value="<?php isset($_SESSION['form_data']['old_price']) ? h($_SESSION['form_data']['old_price']) : '' ?>"
                                                       id="old_price" placeholder="Старая цена"
                                                       data-error="Допускаються только цифры"
                                                >
                                                <div class="help-block with-errors"></div>
                                            </div>
                                            <div class="form-group has-feedback">
                                                <label for="content">Контент</label>
                                                <textarea type="text" name="content" class="form-control"
                                                          id="editor1" cols="80" rows="10" placeholder="Контент..."
                                                ><?php isset($_SESSION['form_data']['content']) ? $_SESSION['form_data']['content'] : '' ?></textarea>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="profile7" role="tabpanel" aria-expanded="false">
                                            <style>
                                                .multi img {
                                                    margin: 5px;
                                                }
                                            </style>
                                            <div class="row m-0">
                                                <div class="form-group form-control">
                                                    <div class="col-md-12">
                                                        <div class="box box-primary box-solid file-upload text-center">
                                                            <div class="box-header mt-3">
                                                                <h3 class="box-title">Изображение галерея</h3>
                                                            </div>
                                                            <div class="box-body mt-3">
                                                                <div id="multi" class=" btn btn-inverse mb-3"
                                                                     data-url="product/add-image" data-name="multi">
                                                                    Выбрать файл
                                                                </div>
                                                                <div class="multi"></div>
                                                            </div>
                                                            <div class="overlay">
                                                                <i class="fa fa-refresh fa-spin"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="messages7" role="tabpanel" aria-expanded="false">
                                            <div class="form-group">
                                                <label for="related">Связанные товары</label>
                                                <select name="related[]" class="form-control select2" id="related"
                                                        multiple></select>
                                            </div>
                                            <div class="form-group">
                                                <div class="table-responsive">
                                                    <label for="related">Характеристики товара</label>
                                                    <div class="table " id="dynamic_field">
                                                        <div class="row mw-100 m-0">
                                                            <div class="col-md-6 pl-0"><input type="text"
                                                                                              name="titleDesc[]"
                                                                                              placeholder="Наименование характеристики"
                                                                                              class="form-control name_list"/>
                                                                <br>
                                                                <textarea class="w-100" name="descriptionDesc[]"
                                                                          placeholder="Описание характеристики"
                                                                          rows="5"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2 pl-0">
                                                    <button type="button" name="add" id="add_place"
                                                            class="btn btn-success w-100">Добавить поле
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="settings7" role="tabpanel">
                                            <?php new \app\views\widget\filter\Filter(null, WWW . '/filter/admin_filter_tpl.php'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <ul class="nav nav-tabs md-tabs " role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#settings7"
                                               role="tab">Категория</a>
                                            <div class="slide"></div>
                                        </li>
                                    </ul>
                                    <div class="tab-content card-block pl-0 pr-0">
                                        <div class="form-group w-100 ">
                                            <label for="parent_id">Родительская категория</label>
                                            <?php new \app\views\widget\menu\Menu([
                                                'tpl' => WWW . '/menu/select.php',
                                                'container' => 'select',
                                                'cache' => 0,
                                                'cacheKey' => 'admin_select',
                                                'class' => 'form-control',
                                                'attrs' => [
                                                    'name' => 'category_id',
                                                    'id' => 'category_id',
                                                ],
                                                'prepend' => '<option>Выберите категория</option>',
                                            ]) ?>
                                        </div>
                                        <div class="form-group form-control has-feedback ">
                                            <label class="mb-0">
                                                <input type="checkbox" class="js-small" name="status" checked> Статус
                                            </label>
                                        </div>
                                        <div class="form-group form-control has-feedback >
                                                <label class=" mb-0
                                        ">
                                        <input type="checkbox" class="js-small" name="hit"> Хит
                                        </label>
                                    </div>
                                    <div class="form-group form-control has-feedback">
                                        <label class="m-0 d-flex align-items-center">
                                            <span class="d-inline-block mr-2">Скидка:</span> <input style="width:60px"
                                                                                                    type="text"
                                                                                                    class=" form-control mr-2"
                                                                                                    id="sale"
                                                                                                    name="sale"
                                                                                                    value="0"> %
                                        </label>
                                    </div>
                                    <label>Добавить изображение</label>
                                    <div class="form-group form-control">
                                        <div class="box box-primary box-solid file-upload text-center">
                                            <div class="box-body mt-3">
                                                <div id="single" class=" btn btn-inverse " data-url="product/add-image"
                                                     data-name="single">Выбрать файл
                                                </div>
                                                <div class="single mb-3 mt-3"></div>
                                            </div>
                                            <div class="overlay">
                                                <i class="fa fa-refresh fa-spin"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-block">
                        <button type="submit" class="btn btn-success">Добавить</button>
                    </div>
            </div>

            </form>
            <?php if (isset($_SESSION['form_data'])) {
                unset($_SESSION['form_data']);
            } ?>
        </div>
    </div>
    </div>

</section>
<!-- /.content -->