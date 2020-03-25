
<div class="page-header">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <div class="d-inline">
                    <h1>
                        Новая категория
                    </h1>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="page-header-breadcrumb">
                <ul class="breadcrumb-title">
                    <li class="breadcrumb-item" ><a href="<?php echo ADMIN;?>"><i class="fa fa-dashboard"></i> Главная</a></li>
                    <li class="breadcrumb-item" ><a href="<?php echo ADMIN;?>/category">Список категорий</a></li>
                    <li class="breadcrumb-item active">Новая категория</li>
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
                <form action="<?php echo ADMIN;?>/category/add" method="post" data-toggle="validator">
                    <div class="box-body">
                        <div class="col-md-6">
                            <div class="form-group has-feedback">
                                <label for="title">Наименование категории</label>
                                <input type="text" name="title" class="form-control" id="title" placeholder="Наименование категории" required>
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
                                <input type="text" name="keywords" class="form-control" id="keywords" placeholder="Ключевые слова">
                            </div>
                            <div class="form-group">
                                <label for="description">Описание</label>
                                <input type="text" name="description" class="form-control" id="description" placeholder="Описание">
                            </div>
                        </div>

                    </div>
                    <div class="row m-0">
                        <div class="col-md-3">
                          <div class="card">
                              <div class="form-group">
                                  <div class="col-md-12">
                                      <div class="box box-primary box-solid file-upload text-center">
                                          <div class="box-header mt-3">
                                              <h3 class="box-title">Базовое изображение</h3>
                                          </div>
                                          <div class="box-body mt-3">
                                              <div id="single" class="btn btn-inverse mb-3" data-url="category/add-image" data-name="single">Выбрать файл</div>
                                              <div class="single"></div>
                                          </div>
                                          <div class="overlay">
                                              <i class="fa fa-refresh fa-spin"></i>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                            <div class="form-group">
                                  <div class="col-md-12">
                                      <div class="box box-primary box-solid file-upload text-center">
                                          <div class="box-header mt-3">
                                              <h3 class="box-title">Изображение превью</h3>
                                          </div>
                                          <div class="box-body mt-3">
                                              <div id="single-min" class=" btn btn-inverse mb-3" data-url="category/add-image" data-name="single-min">Выбрать файл</div>
                                              <div class="single-min"></div>
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
                      <div class="box-footer">
                          <div class="col-md-12">
                          <button type="submit" class="btn btn-success">Добавить</button>
                          </div>
                      </div>

                </form>
            </div>
        </div>
    </div>

</section>
<!-- /.content -->