<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Новый товар
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo ADMIN; ?>"><i class="fa fa-dashboard"></i> Главная</a></li>
        <li><a href="<?php echo ADMIN; ?>/product">Список товаров</a></li>
        <li class="active">Новый товар</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <form action="<?php echo ADMIN; ?>/product/add" method="post" data-toggle="validator" id="add">
                    <div class="box-body">
                       <div class="col-lg-6">
                           <div class="form-group has-feedback">
                               <label for="title">Наименование товара</label>
                               <input type="text" name="title" class="form-control" id="title"
                                      placeholder="Наименование товара"
                                      value="<?php isset($_SESSION['form_data']['title']) ? h($_SESSION['form_data']['title']) : '' ?>"
                                      required>
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
                                       'name' => 'category_id',
                                       'id' => 'category_id',
                                   ],
                                   'prepend' => '<option>Выберите категория</option>',
                               ]) ?>
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
                        <div class="col-lg-6">
                            <div class="col-md-12">
                                <label for="">Загрузка изображений</label>
                            </div>
                            <div class="form-group">

                                <div class="col-md-4">
                                    <div class="box box-danger box-solid file-upload">
                                        <div class="box-header">
                                            <h3 class="box-title">Базовое изображение</h3>
                                        </div>
                                        <div class="box-body">
                                            <div id="single" class="btn btn-success" data-url="product/add-image" data-name="single">Выбрать файл</div>
                                            <p><small>Рекомендуемые размеры: 125х200</small></p>
                                            <div class="single"></div>
                                        </div>
                                        <div class="overlay">
                                            <i class="fa fa-refresh fa-spin"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="box box-primary box-solid file-upload">
                                        <div class="box-header">
                                            <h3 class="box-title">Картинки галереи</h3>
                                        </div>
                                        <div class="box-body">
                                            <div id="multi" class="btn btn-success" data-url="product/add-image" data-name="multi">Выбрать файл</div>
                                            <p><small>Рекомендуемые размеры: 700х1000</small></p>
                                            <div class="multi"></div>
                                        </div>
                                        <div class="overlay">
                                            <i class="fa fa-refresh fa-spin"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="related">Связанные товары</label>
                                    <select name="related[]" class="form-control select2" id="related" multiple></select>
                                </div>
                                <div class="form-group">
                                    <div class="table-responsive">
                                        <label for="related">Характеристики товара</label>
                                        <table class="table table-bordered" id="dynamic_field">
                                            <tr>
                                                <td><input type="text" name="titleDesc[]" placeholder="Наименование характеристики" class="form-control name_list" />
                                                    <br>
                                                    <textarea class="w-100" name="descriptionDesc[]"  placeholder="Описание характеристики" rows="5"></textarea>
                                                </td>
                                                <td><button type="button" name="add" id="add_place"   class="btn btn-success w-100">Добавить поле</button></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="col-md-12">
                                <?php new \app\views\widget\filter\Filter(null, WWW . '/filter/admin_filter_tpl.php'); ?>


                            </div>
                            <div class="col-md-2">
                                <div class="form-group has-feedback">
                                    <label>
                                        <input type="checkbox" name="status" checked> Статус
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group has-feedback">
                                    <label>
                                        <input type="checkbox" name="hit"> Хит
                                    </label>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="box-footer">
                       <div class="col-md-12">
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