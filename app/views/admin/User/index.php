<div class="page-header">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <div class="d-inline">
                    <h1>   Список пользователей</h1>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="page-header-breadcrumb">
                <ul class="breadcrumb-title">
                    <li class="breadcrumb-item"><a href="<?php echo ADMIN; ?>"><i class="fa fa-dashboard"></i> Главная</a></li>
                    <li class="breadcrumb-item active">Список пользователей</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover  ">
                            <thead class="thead-dark">
                            <tr>
                                <th>ID</th>
                                <th>Логин</th>
                                <th>Email</th>
                                <th>Имя</th>
                                <th>Роль</th>
                                <th>Телефон</th>
                                <th>Адрес</th>
                                <th>Действия</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php if ($users) {
                                foreach ($users as $user) {

                                    ?>

                                    <tr>
                                        <td><?php echo $user->id ?></td>
                                        <td><?php echo $user->login ?></td>
                                        <td><?php echo $user->email ?></td>
                                        <td><?php echo $user->name ?></td>
                                        <td><?php echo $user->role ?></td>
                                        <td><?php echo $user->address ?></td>
                                        <th>Адрес</th>
                                        <td>
                                            <div class="tabledit-toolbar btn-toolbar" style="text-align: left;">
                                                <div class="btn-group btn-group-sm" style="float: none;">
                                                    <a href="<?php echo ADMIN ?>/user/edit?id=<?php echo $user->id; ?>"class="tabledit-edit-button btn btn-primary waves-effect waves-light" style="float: none;margin: 5px;"><span class="icofont icofont-ui-edit"></span></a>
                                                </div>
                                            </div>

                                        </td>
                                    </tr>
                                <?php }
                            } else { ?>
                                <h3>Заказов не найдено</h3>
                                <hr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="text-center">
                        Всего пользователей: <?php echo count($users) ?>
                        <br>
                        <br>
                        <?php if ($pagination->countPages > 1) {
                            echo $pagination;
                        } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
