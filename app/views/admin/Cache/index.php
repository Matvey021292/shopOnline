<section class="content-header">
    <h1>
        Очистка кэша
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo ADMIN; ?>"><i class="fa fa-dashboard"></i>Главная</a></li>
        <li class="active">Очистка кэша</li>
    </ol>
</section>

<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover  ">
                            <thead class="thead-dark">
                            <tr>
                                <th>Название</th>
                                <th>Описание</th>
                                <th>Действие</th>

                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Кэш категорий</td>
                                <td>Меню категорий на сайте</td>

                                <td>
                                    <a class="text-danger delete"
                                       href="<?php echo ADMIN ?>/cache/delete?key=category"><i
                                                class="fa fa-fw fa-close"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Кэш фильтров</td>
                                <td>Меню фильтров и груп фильтров</td>
                                <td>
                                    <a class="text-danger delete" href="<?php echo ADMIN ?>/cache/delete?key=filter"><i
                                                class="fa fa-fw fa-close"></i></a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
