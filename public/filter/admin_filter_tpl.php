<div class="nav-tabs-custom" id="filter">
    <div class="">
        <ul class="nav nav-tabs  tabs">
            <?php $i = 1; foreach($this->groups as $group_id => $group_item): ?>
                <li class='nav-item'><a class="nav-link <?php if($i == 1) echo " active";  ?>" href="#tab_<?= $group_id ?>" data-toggle="tab" aria-expanded="true"><?= $group_item ?></a></li>
                <?php $i++; endforeach; ?>
            <li class="text-right nav-item">
                <a href="#" class="nav-link btn btn-danger" id="reset-filter" >Сброс</a>
            </li>
            <style>
                #reset-filter{
                    position: absolute;
                    right: 0
                }
            </style>
        </ul>
        <div class="tab-content mt-4 ml-2">
            <?php if(!empty($this->attrs[$group_id])): ?>
                <?php $i = 1; foreach($this->groups as $group_id => $group_item): ?>
                    <div class="tab-pane<?php if($i == 1) echo ' active' ?>" id="tab_<?= $group_id ?>">
                        <?php foreach($this->attrs[$group_id] as $attr_id => $value): ?>
                            <?php
                            if(!empty($this->filter) && in_array($attr_id, $this->filter)){
                                $checked = ' checked';
                            }else{
                                $checked = null;
                            }
                            ?>
                            <div class="form-group form-radio radio">
                                <label>
                                    <input type="radio" name="attrs[<?= $group_id ?>]" value="<?= $attr_id ?>"<?= $checked ?>> <?= $value ?>
                                    <i class="helper"></i>
                                </label>
                            </div>
                            <?php $i++; endforeach; ?>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>

    </div>

</div>