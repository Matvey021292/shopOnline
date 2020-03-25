<div class="page-header">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <div class="d-inline">
                    <h1>   Редактирование пользователя <?php echo h($user->login) ?></h1>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="page-header-breadcrumb">
                <ul class="breadcrumb-title">
                    <li class="breadcrumb-item"><a href="<?php echo ADMIN; ?>"><i class="fa fa-dashboard"></i> Главная</a></li>
                    <li class="breadcrumb-item "><a href="<?php echo ADMIN; ?>/user">Список пользователей</a></li>
                    <li class="breadcrumb-item active">Редактирование пользователя</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <form action="<?php echo ADMIN; ?>/user/edit" method="post" data-toggle="validator">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="login"> Логин</label>
                            <input type="text" class="form-control has-feedback" name="login" id="login"
                                   value="<?php echo h($user->login) ?>" required>
                            <span class="glyphicon glyphicon-lock form-control-feedback"></span>

                        </div>
                        <div class="form-group">
                            <label for="password"> Пароль </label>
                            <input type="text" class="form-control has-feedback" name="password" id="password"
                                   placeholder="password">

                        </div>
                        <div class="form-group">
                            <label for="email"> Email</label>
                            <input type="text" class="form-control has-feedback" name="email" id="email"
                                   value="<?php echo h($user->email) ?>" required>
                            <span class="glyphicon glyphicon-lock form-control-feedback"></span>

                        </div>
                        <div class="form-group">
                            <label for="name"> Имя</label>
                            <input type="text" class="form-control has-feedback" name="name" id="name"
                                   value="<?php echo h($user->name) ?>" required>
                            <span class="glyphicon glyphicon-lock form-control-feedback"></span>

                        </div>
                        <div class="form-group">
                            <label for="address">Телефон </label>
                            <input type="text" class="form-control has-feedback" name="address" id="address"
                                   value="<?php echo h($user->address) ?>" required>
                            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                        </div>
                        <div class="form-group">
                            <label for="role">Роль</label>
                            <select name="role" id="role" class="form-control">
                                <option value="user" <?php if ($user->role == 'user') echo 'selected' ?>>Пользователь
                                </option>
                                <option value="admin" <?php if ($user->role == 'admin') echo 'selected' ?>>
                                    Администратор
                                </option>
                            </select>

                        </div>
                    </div>
                    <div class="box-footer">
                        <input type="hidden" name="id" value="<?php echo $user->id ?>">
                        <button type="submit" class="btn btn-primary">Сохранить</button>
                    </div>
                </form>
            </div>
            <br>
            <h3>Заказы пользователя</h3>
        <div class="box box-body">
            <?php if ($orders) { ?>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover  ">
                        <thead class="thead-dark">
                        <tr>
                            <th>ID</th>
                            <th>Статус</th>
                            <th>Сумма</th>
                            <th>Дата создания</th>
                            <th>Дата изменения</th>
                            <th>Действия</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php foreach ($orders as $order){?>
                            <?php $orderstatus = $order['status'] ? 'success':'danger';?>
                            <tr class="<?php echo $orderstatus;?>">
                                <td><?php echo $order['id']?></td>
                                <td><?php echo $order['status'] ? 'Завершен':'Новый';?></td>
                                <td><?php echo $order['sum']?><?php echo $order['currency']?></td>
                                <td><?php echo $order['date']?></td>
                                <td><?php echo $order['update_at']?></td>
                                <td>
                                    <div class="tabledit-toolbar btn-toolbar" style="text-align: left;">
                                        <div class="btn-group btn-group-sm" style="float: none;">
                                            <a href="<?php echo ADMIN ?>/order/view?id=<?php echo $order['id'];?>""class="tabledit-edit-button btn btn-primary waves-effect waves-light" style="float: none;margin: 5px;"><span class="icofont icofont-ui-edit"></span></a>
                                        </div>
                                    </div>
                                    <a href="<?php echo ADMIN ?>/order/view?id=<?php echo $order['id'];?>"><i class="fa fa-fw fa-eye"></i></a>
                                </td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            <?php } else { ?>
                <p class="text-danger">Заказов не найдено...</p>
            <?php } ?>
        </div>
        </div>
    </div>
</section>
