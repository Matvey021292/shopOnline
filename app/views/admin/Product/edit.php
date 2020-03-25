<div class="page-header">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <div class="d-inline">
                    <h1> Редактирование товара <?php echo $product->title; ?></h1>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="page-header-breadcrumb">
                <ul class="breadcrumb-title">
                    <li class="breadcrumb-item"><a href="<?php echo ADMIN; ?>"><i class="fa fa-dashboard"></i>
                            Главная</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo ADMIN; ?>/product">Список товаров</a></li>
                    <li class="breadcrumb-item active">Редактирование</li>
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
                <form action="<?php echo ADMIN; ?>/product/edit" method="post" data-toggle="validator" id="add">
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
                                                       value="<?php echo h($product->title); ?>" required>
                                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                            </div>
                                            <div class="form-group">
                                                <label for="keywords">Ключевые слова</label>
                                                <input type="text" name="keywords" class="form-control" id="keywords"
                                                       placeholder="Ключевые слова"
                                                       value="<?php echo h($product->keywords); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="description">Описание</label>
                                                <input type="text" name="description" class="form-control"
                                                       id="description" placeholder="Описание"
                                                       value="<?php echo h($product->description); ?>">
                                            </div>

                                            <div class="form-group has-feedback">
                                                <label for="price">Цена</label>
                                                <input type="text" name="price" class="form-control" id="price"
                                                       placeholder="Цена" pattern="^[0-9.]{1,}$"
                                                       value="<?php echo $product->price; ?>" required
                                                       data-error="Допускаются цифры и десятичная точка">
                                                <div class="help-block with-errors"></div>
                                            </div>

                                            <div class="form-group has-feedback">
                                                <label for="old_price">Старая цена</label>
                                                <input type="text" name="old_price" class="form-control" id="old_price"
                                                       placeholder="Старая цена" pattern="^[0-9.]{1,}$"
                                                       value="<?php echo $product->old_price; ?>"
                                                       data-error="Допускаются цифры и десятичная точка">
                                                <div class="help-block with-errors"></div>
                                            </div>

                                            <div class="form-group has-feedback">
                                                <label for="content">Контент</label>
                                                <textarea name="content" id="editor1" cols="80"
                                                          rows="10"><?php echo $product->content; ?></textarea>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="profile7" role="tabpanel" aria-expanded="false">
                                            <style>
                                                .multi img {
                                                    margin: 5px;
                                                }
                                            </style>
                                            <div class="form-group form-control">
                                                <div class="col-md-12">
                                                    <div class="box box-primary box-solid file-upload text-center">
                                                        <div class="box-header mt-3">
                                                            <h3 class="box-title">Изображение галереи</h3>
                                                        </div>
                                                        <div class="box-body mt-3">
                                                            <div id="multi" class="btn btn-success mb-3"
                                                                 data-url="product/add-image" data-name="multi">Выбрать
                                                                файл
                                                            </div>
                                                            <div class="multi">
                                                                <?php if (!empty($gallery)): ?>
                                                                    <?php foreach ($gallery as $item): ?>
                                                                            <img src="/images/<?php echo $item; ?>"
                                                                                 alt="<?php echo $product->title; ?>"
                                                                                 style="max-height: 150px; cursor: pointer;"
                                                                                 data-id="<?php echo $product->id; ?>"
                                                                                 data-src="<?php echo $item; ?>"
                                                                                 class="del-item">
                                                                    <?php endforeach; ?>
                                                                <?php endif; ?>
                                                            </div>
                                                        </div>
                                                        <div class="overlay">
                                                            <div class="loader-block">
                                                                <svg id="loader2" viewBox="0 0 100 100">
                                                                    <circle id="circle-loader2" cx="50" cy="50"
                                                                            r="45"></circle>
                                                                </svg>
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
                                                        multiple>
                                                    <?php if (!empty($related_product)): ?>
                                                        <?php foreach ($related_product as $item): ?>
                                                            <option value="<?php echo $item['related_id']; ?>"
                                                                    selected><?php echo $item['title']; ?></option>
                                                        <?php endforeach; ?>
                                                    <?php endif; ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <div class="table-responsive">
                                                    <label for="related">Характеристики товара</label>
                                                    <div class="table" id="dynamic_field">
                                                        <div class="row mw-100 m-0">
                                                            <?php if (!empty($descriptions)) { ?>
                                                                <?php foreach ($descriptions as $desc): ?>
                                                                    <div class="col-md-6 pl-0">
                                                                        <input type="text" name="titleDesc[]"
                                                                               value="<?php echo $desc['title']; ?>"
                                                                               placeholder="Enter your Name"
                                                                               class="form-control name_list"/>
                                                                        <br>
                                                                        <textarea class="w-100" name="descriptionDesc[]"
                                                                                  rows="10"><?php echo $desc['description']; ?></textarea>
                                                                    </div>
                                                                <?php endforeach; ?>

                                                            <?php } else { ?>
                                                                <div class="col-md-6 pl-0"><input type="text"
                                                                                                  name="titleDesc[]"
                                                                                                  placeholder="Наименование характеристики"
                                                                                                  class="form-control name_list"/>
                                                                    <br>
                                                                    <textarea class="w-100" name="descriptionDesc[]"
                                                                              placeholder="Описание характеристики"
                                                                              rows="5"></textarea>
                                                                </div>
                                                            <?php } ?>

                                                        </div>

                                                    </div>
                                                    <div class="col-md-2 pl-0">
                                                        <button type="button" name="add" id="add_place"
                                                                class="btn btn-success w-100">Добавить поле
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="settings7" role="tabpanel">
                                            <?php new \app\views\widget\filter\Filter($filter, WWW . '/filter/admin_filter_tpl.php'); ?>
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
                                        <div class="form-group">
                                            <label for="category_id">Родительская категория</label>
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
                                            ]) ?>
                                        </div>
                                        <div class="form-group form-control has-feedback">
                                            <label class="m-0">
                                                <input type="checkbox"
                                                       name="status"<?php echo $product->status ? ' checked' : null; ?>>
                                                Статус
                                            </label>
                                        </div>
                                        <div class="form-group form-control has-feedback">
                                            <label class="m-0">
                                                <input type="checkbox" class="js-small"
                                                       name="hit"<?php echo $product->hit ? ' checked' : null; ?>> Хит
                                            </label>
                                        </div>
                                        <div class="form-group form-control has-feedback">
                                            <label class="m-0 d-flex align-items-center">
                                                <span class="d-inline-block mr-2">Скидка:</span> <input
                                                        style="width:60px" type="text" class=" form-control mr-2"
                                                        id="sale" name="sale" value="<?php echo $product->sale ?>"> %
                                            </label>
                                        </div>
                                        <label>Изображение товара</label>
                                        <div class="form-group form-control" style="position: relative">
                                            <div class="box box-primary box-solid file-upload text-center">
                                                <div class="box-body mt-3">
                                                    <div id="single" class="btn btn-inverse"
                                                         data-url="product/add-image" data-name="single">Выбрать файл
                                                    </div>
                                                    <div class="single  mb-3 mt-3">
                                                        <img src="/images/<?php echo $product->img; ?>" alt=""
                                                             style="max-height: 150px;">
                                                    </div>
                                                </div>
                                                <div class="overlay">
                                                    <div class="loader-block">
                                                        <svg id="loader2" viewBox="0 0 100 100">
                                                            <circle id="circle-loader2" cx="50" cy="50"
                                                                    r="45"></circle>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-block">
                        <input type="hidden" name="id" value="<?php echo $product->id; ?>">
                        <button type="submit" class="btn btn-success">Сохранить</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

