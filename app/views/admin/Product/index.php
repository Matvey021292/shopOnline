<section class="content-header">
    <h1>
        Список товаров
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo ADMIN; ?>"><i class="fa fa-dashboard"></i>Главная</a></li>
        <li class="active"> Список товаров</li>
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
                                <th>ID товара </th>
                                <th>Изображение</th>
                                <th>Наименование</th>
                                <th>Цена</th>
                                <th>Категория</th>
                                <th>Стату</th>
                                <th>Действия</th>
                            </tr>
                            </thead>
                            <tbody>
                            <style>
                                .product_image{
                                    max-width: 50px;
                                }
                            </style>
                            <?php if($products){
                                foreach ($products as $product){?>

                                    <?php $productstatus = $product['status'] ? '':'danger';?>
                                    <tr class="<?php echo $productstatus;?>">
                                        <td><?php echo $product['id']?></td>
                                        <td><img class="product_image" src="/images/<?php echo $product['img']?>" alt=""></td>
                                        <td><?php echo $product['title']?></td>
                                        <td><?php echo $product['price']?></td>
                                        <td><?php echo $product['cat']?></td>
                                        <td><?php echo $product['status'] ? "On" : "Off"?></td>
                                        <td>
                                            <a href="<?php echo ADMIN ?>/product/edit?id=<?php echo $product['id'];?>"><i class="fa fa-fw fa-eye"></i></a>
                                            <a class="text-danger delete" href="<?php echo ADMIN ?>/product/delete?id=<?php echo $product['id'];?>"><i class="fa fa-fw fa-close"></i></a>
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
                        <div><?php echo count($products)  ?> товара(ов) из <?php echo $count?></div>
                        <?php if ($pagination->countPages > 1){
                            echo $pagination;
                        }?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
