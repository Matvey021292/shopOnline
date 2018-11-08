<?php foreach ($this->groups as $group_id => $group_item) { ?>
    <div class="tt-collapse open">
        <h3 class="tt-collapse-title"><?php echo $group_item; ?></h3>
        <div class="tt-collapse-content" style="">
            <ul class="tt-list-row">
                <?php if (isset($this->attrs[$group_id])){ ?>
                    <?php foreach ($this->attrs[$group_id] as $attr_id => $value): ?>
                        <?php
                        if (!empty($filter) && in_array($attr_id, $filter)) {
                            $checked = ' checked';
                        } else {
                            $checked = null;
                        }
                        ?>
                        <label>
                            <input type="checkbox" name="checkbox" class="js-switch"
                                   value="<?= $attr_id; ?>" <?= $checked; ?>><i></i><?= $value; ?>
                        </label>
                    <?php endforeach; ?>
                <?php }?>
            </ul>
        </div>
    </div>
<?php } ?>