<div class="page-header">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <div class="d-inline">
                    <h2>
                        Заказ № <?php echo $order['id']; ?>
                    </h2>

                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="page-header-breadcrumb">
                <ul class="breadcrumb-title">
                    <li class="breadcrumb-item"><a href="<?php echo ADMIN; ?>"><i
                                    class="fa fa-dashboard"></i>Главная</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo ADMIN; ?>/order">Список заказов</a></li>
                    <li class="breadcrumb-item active"> Заказ № <?php echo $order['id'] ?>  </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="page-body">
    <div class="card">
        <div class="card-block">
            <div class="box">
                <div class="box-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover  ">
                            <?php $orderstatus = $order['status'] ? 'success' : 'danger'; ?>
                            <tbody class="<?php echo $orderstatus; ?>">
                            <tr>
                                <td>Номер заказа</td>
                                <td><?php echo $order['id'] ?></td>
                            </tr>
                            <tr>
                                <td>Имя заказа</td>
                                <td><?php echo $order['name'] ?></td>
                            </tr>
                            <tr>
                                <td>Статус заказа</td>
                                <td><?php echo $order['status'] ? 'Завершен' : 'Новый'; ?></td>

                            </tr>
                            <tr>
                                <td>Количество товаров</td>
                                <td><?php echo count($order_products);?></td>

                            </tr>
                            <tr>
                                <td>Сума заказа</td>
                                <td><?php echo $order['sum'] ?></td>

                            </tr>
                            <tr>
                                <td>Валюта заказа</td>
                                <td><?php echo $order['currency'] ?></td>

                            </tr>
                            <tr>
                                <td>Дата заказа</td>
                                <td><?php echo $order['date'] ?></td>

                            </tr>
                            <tr>
                                <td>Обновление заказа</td>
                                <td><?php echo $order['update_at'] ?></td>

                            </tr>
                            <tr>
                                <td>Примечание заказа</td>
                                <td><?php echo $order['note'] ?></td>

                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <?php if (!$order['status'] ) { ?>
                <a href="<?php echo ADMIN; ?>/order/change?id=<?php echo $order['id']?>&status=1" class="btn btn-success btn-xs">Одобрить</a>
            <?php   }else{ ?>
                <a href="<?php echo ADMIN; ?>/order/change?id=<?php echo $order['id']?>&status=0" class="btn btn-primary btn-xs">Вернуть на обрботку</a>
            <?php  }?>
            <a href="<?php echo ADMIN; ?>/order/delete?id=<?php echo $order['id']?>" class="btn btn-danger delete btn-xs">Удалить заказ</a>
        </div>
    </div>
</div>
<div class="page-header">
<h2>Детали заказа</h2>
</div>
<div class="page-body">
    <div class="card">
        <div class="card-block">
            <div class="box">
                <div class="box-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover  ">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Наименование</th>
                                <th>Коли-во</th>
                                <th>Цена</th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php $qty = 0;
                            foreach ($order_products as $product){ ?>
                                <tr>
                                    <th><?php echo $product->id?></th>
                                    <th><?php echo $product->title?></th>
                                    <th><?php echo $product->qty; $qty += $product->qty; ?></th>
                                    <th><?php echo $product->price?></th>
                                </tr>
                            <?php  }
                            ?>
                            <tr>
                                <td colspan="2"><b>Итого:</b></td>
                                <td><b><?php echo $qty; ?></b></td>
                                <td><b><?php echo $order['sum']?> </b><?php echo $order['currency']?></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>