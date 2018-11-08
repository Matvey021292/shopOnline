<section class="content-header">
    <h1>
        Список пользователей
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo ADMIN; ?>"><i class="fa fa-dashboard"></i>Главная</a></li>
        <li class="active"> Список пользователей</li>
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
                                <th>ID</th>
                                <th>Логин</th>
                                <th>Email</th>
                                <th>Имя</th>
                                <th>Роль</th>
                                <th>Телефон</th>
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
                                        <td>
                                            <a href="<?php echo ADMIN ?>/user/edit?id=<?php echo $user->id; ?>"><i
                                                        class="fa fa-fw fa-eye"></i></a>
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
                        <?php echo count($users) ?>
                        <?php if ($pagination->countPages > 1) {
                            echo $pagination;
                        } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
