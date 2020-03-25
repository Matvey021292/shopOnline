<div class="page-header">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <div class="d-inline">
                    <h1>
                        Редактирование группы фильтров <?=h($group->title);?>
                    </h1>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="page-header-breadcrumb">
                <ul class="breadcrumb-title">
                    <li class="breadcrumb-item"><a href="<?=ADMIN;?>"><i class="fa fa-dashboard"></i> Главная</a></li>
                    <li class="breadcrumb-item"><a href="<?=ADMIN;?>/filter/attribute-group">Группы фильтров</a></li>
                    <li class="breadcrumb-item active">Редактирование</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <form action="<?=ADMIN;?>/filter/group-edit" method="post" data-toggle="validator">
                    <div class="box-body">
                        <div class="form-group has-feedback">
                            <label for="title">Наименование группы</label>
                            <input type="text" name="title" class="form-control" id="title" placeholder="Наименование группы" required value="<?=h($group->title);?>">
                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        </div>
                        <div class="form-group">
                            <?php if (!empty($cat)){
                                foreach ( $cat as $k => $item) {?>
                                    <label for="<?php echo $item['alias']?>" class="mr-2 mb-0">
                                        <input type="checkbox" <?php if(in_array($item['title'],$catChecked)){echo 'checked';}?> value="<?php echo $item['title']?>" class="flat-red js-small"  id="<?php echo $item['alias']?>" name="cat[]"> <?php echo $item['title']?>
                                    </label>
                                <?php }
                            }?>
                        </div>
                    </div>

                    <div class="box-footer">
                        <input type="hidden" name="id" value="<?=$group->id;?>">
                        <button type="submit" class="btn btn-success">Сохранить</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</section>
<!-- /.content -->