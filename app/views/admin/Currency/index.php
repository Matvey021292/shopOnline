<div class="page-header">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <div class="d-inline">
                    <h1>
                        Список валют
                    </h1>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="page-header-breadcrumb">
                <ul class="breadcrumb-title">
                    <li class="breadcrumb-item"><a href="<?php echo ADMIN; ?>"><i class="fa fa-dashboard"></i> Главная</a></li>
                    <li class="breadcrumb-item active">Список валют</li>
                </ul>
            </div>
        </div>
    </div>
</div>
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
                                            <div class="btn-group btn-group-sm" style="float: none;">
                                                <a href="<?php echo ADMIN ?>/currency/edit?id=<?php echo $currency->id;;?>" class=" tabledit-edit-button btn btn-primary waves-effect waves-light" style="float: none;margin: 5px;"><span class="icofont icofont-ui-edit"></span></a>
                                                <a href="<?php echo ADMIN ?>/currency/delete?id=<?php echo $currency->id;;?>" class="delete tabledit-edit-button btn btn-primary waves-effect waves-light" style="float: none;margin: 5px;"><span class="icofont icofont-ui-delete"></span></a>
                                            </div>
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
