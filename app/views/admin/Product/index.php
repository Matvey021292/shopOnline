<div class="page-header">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <div class="d-inline">
                    <h1> Список товаров</h1>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="page-header-breadcrumb">
                <ul class="breadcrumb-title">
                    <li class="breadcrumb-item"><a href="<?php echo ADMIN; ?>"><i class="fa fa-dashboard"></i>Главная</a></li>
                    <li class="breadcrumb-item active"> Список товаров</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<section class="page-body">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <a style="color: #fff;" href="<?php echo ADMIN?>/product/add" class="btn btn-success">Добавить товар</a>
                </div>
                <div class="card-block">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover  ">
                            <thead class="thead-dark">
                            <tr>
                                <th>ID товара </th>
<!--                                <th>Изображение</th>-->
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
<!--                                        <td><img class="product_image" src="/images/--><?php //echo $product['img']?><!--" alt=""></td>-->
                                        <td><?php echo $product['title']?></td>
                                        <td><?php echo $product['price']?></td>
                                        <td><?php echo $product['cat']?></td>
                                        <td><?php echo $product['status'] ? "On" : "Off"?></td>
                                        <td>
                                            <div class="tabledit-toolbar btn-toolbar" style="text-align: left;">
                                                <div class="btn-group btn-group-sm" style="float: none;">
                                                    <a href="<?php echo ADMIN ?>/product/edit?id=<?php echo $product['id'];?>"class="tabledit-edit-button btn btn-primary waves-effect waves-light" style="float: none;margin: 5px;"><span class="icofont icofont-ui-edit"></span></a>
                                                    <a href="<?php echo ADMIN ?>/product/delete?id=<?php echo $product['id'];?>" class="delete tabledit-delete-button btn btn-danger waves-effect waves-light" style="float: none;margin: 5px;"><span class="icofont icofont-ui-delete"></span></a>
                                                </div>
                                            </div>
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
                    <br>
                    <div class="text-center">
                        <div><?php echo count($products)  ?> товара(ов) из <?php echo $count?></div>
                        <br>
                        <?php if ($pagination->countPages > 1){
                            echo $pagination;
                        }?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
