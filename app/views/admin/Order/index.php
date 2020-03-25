<div class="page-header">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <div class="d-inline">
                    <h4>Список заказов</h4>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="page-header-breadcrumb">
                <ul class="breadcrumb-title">
                    <li class="breadcrumb-item"><a href="<?php echo ADMIN; ?>"><i
                                    class="fa fa-dashboard"></i>Главная</a></li>
                    <li class="breadcrumb-item active">Список заказов</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="page-body">
    <!-- Edit With Button card start -->
    <div class="card">
        <div class="card-block">
            <div class="table-responsive">
                <table class="table  table-bordered" id="example-2">
                    <thead>
                    <tr>
                        <th>Заказ №</th>
                        <th>Покупатель</th>
                        <th>Статус</th>
                        <th>Сумма</th>
                        <th>Валюта</th>
                        <th>Дата создания</th>
                        <th>Дата изменения</th>
                        <th>Действия</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php if ($orders) {
                        foreach ($orders as $order) {
                            ?>
                            <?php $orderstatus = $order['status'] ? '' : 'table-danger'; ?>
                            <tr class="<?php echo $orderstatus; ?>">
                                <td><?php echo $order['id'] ?></td>
                                <td><?php echo $order['name'] ?></td>
                                <td><?php echo $order['status'] ? 'Завершен' : 'Новый'; ?></td>
                                <td><?php echo $order['sum'] ?></td>
                                <td><?php echo $order['currency'] ?></td>
                                <td><?php echo $order['date'] ?></td>
                                <td><?php echo $order['update_at'] ?></td>
                                <td>
                                    <div class="tabledit-toolbar btn-toolbar" style="text-align: left;">
                                        <div class="btn-group btn-group-sm" style="float: none;">
                                            <a href="<?php echo ADMIN ?>/order/view?id=<?php echo $order['id']; ?>"
                                               class="tabledit-edit-button btn btn-primary waves-effect waves-light"
                                               style="float: none;margin: 5px;"><span
                                                        class="icofont icofont-ui-edit"></span></a>
                                            <a href="<?php echo ADMIN ?>/order/delete?id=<?php echo $order['id']; ?>"
                                               class="delete tabledit-delete-button btn btn-danger waves-effect waves-light"
                                               style="float: none;margin: 5px;"><span
                                                        class="icofont icofont-ui-delete"></span></a>
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
                <div class="text-center">
                    <?php echo count($orders) ?>
                    <?php if ($pagination->countPages > 1) {
                        echo $pagination;
                    } ?>
                </div>
            </div>

        </div>
    </div>
</div>
