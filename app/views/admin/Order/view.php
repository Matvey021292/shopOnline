<section class="content-header">
    <h1>
        Заказ № <?php echo $order['id']; ?>
        <?php if (!$order['status'] ) { ?>
            <a href="<?php echo ADMIN; ?>/order/change?id=<?php echo $order['id']?>&status=1" class="btn btn-success btn-xs">Одобрить</a>
      <?php   }else{ ?>
            <a href="<?php echo ADMIN; ?>/order/change?id=<?php echo $order['id']?>&status=0" class="btn btn-primary btn-xs">Вернуть на обрботку</a>
       <?php  }?>
        <a href="<?php echo ADMIN; ?>/order/delete?id=<?php echo $order['id']?>" class="btn btn-danger delete btn-xs">Удалить заказ</a>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo ADMIN; ?>"><i class="fa fa-dashboard"></i>Главная</a></li>
        <li class=""><a href="<?php echo ADMIN; ?>/order">Список заказов</a></li>
        <li class=""> Заказ № <?php echo $order['id'] ?>  </li>
    </ol>
</section>

<section class="content">
    <div class="row">
        <div class="col-md-12">
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
            <h3>Детали заказа</h3>
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
</section>
