<section class="content-header">
    <h1>
        Список заказов
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo ADMIN; ?>"><i class="fa fa-dashboard"></i>Главная</a></li>
        <li class="active">Список заказов</li>
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
                                <th>Заказ № </th>
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
                            <?php if($orders){
                                foreach ($orders as $order){?>
                                    <?php $orderstatus = $order['status'] ? 'success':'danger';?>
                                    <tr class="<?php echo $orderstatus;?>">
                                        <td><?php echo $order['id']?></td>
                                        <td><?php echo $order['name']?></td>
                                        <td><?php echo $order['status'] ? 'Завершен':'Новый';?></td>
                                        <td><?php echo $order['sum']?></td>
                                        <td><?php echo $order['currency']?></td>
                                        <td><?php echo $order['date']?></td>
                                        <td><?php echo $order['update_at']?></td>
                                        <td>
                                            <a href="<?php echo ADMIN ?>/order/view?id=<?php echo $order['id'];?>"><i class="fa fa-fw fa-eye"></i></a>
                                            <a class="text-danger delete" href="<?php echo ADMIN ?>/order/delete?id=<?php echo $order['id'];?>"><i class="fa fa-fw fa-close"></i></a>
                                        </td>
                                    </tr>
                                <?php }
                            }else{ ?>
                                <h3>Заказов не найдено</h3>
                                <hr>
                            <?php }?>
                            </tbody>
                        </table>
                    </div>
                    <div class="text-center">
                        <?php echo count($orders)?>
                        <?php if ($pagination->countPages > 1){
                            echo $pagination;
                        }?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
