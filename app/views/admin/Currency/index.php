<section class="content-header">
    <h1>
        Список валют
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo ADMIN; ?>"><i class="fa fa-dashboard"></i>Главная</a></li>
        <li class="active">Список валют</li>
    </ol>
</section>

<section class="content">
    <a href="<?=ADMIN;?>/currency/add" class="btn btn-primary"><i class="fa fa-fw fa-plus"></i> Добавить валюту</a>
    <br>
    <br>
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover  ">
                            <thead class="thead-dark">
                            <tr>
                                <th>ID</th>
                                <th>Наименование</th>
                                <th>Код</th>
                                <th>Значение</th>
                                <th>Действие</th>

                            </tr>
                            </thead>
                            <tbody>
                            <?php if($currencies){
                                foreach ($currencies as $currency){?>
                                    <tr>
                                        <td><?php echo $currency->id; ?></td>
                                        <td><?php echo $currency->title; ?></td>
                                        <td><?php echo $currency->code; ?></td>
                                        <td><?php echo $currency->value; ?></td>
                                        <td>
                                            <a href="<?php echo ADMIN ?>/currency/edit?id=<?php echo $currency->id;;?>"><i class="fa fa-fw fa-pencil"></i></a>
                                            <a class="text-danger delete" href="<?php echo ADMIN ?>/currency/delete?id=<?php echo $currency->id;;?>"><i class="fa fa-fw fa-close"></i></a>
                                        </td>
                                    </tr>
                                <?php }
                            }?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
