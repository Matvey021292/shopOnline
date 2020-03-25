<?php foreach ($this->groups as $group_id => $group_item) { ?>

    <div class="cc_pc_first_accordion_wrapper cc_pc_second_accordion_wrapper card">
        <div class="cc_pc_accordion">
            <ul class="accordion m-0 collapsible m-0" data-collapsible="expandable"
            ">
            <li class="default ">
                <div class="link cc_product_heading collapsible-header active">
                    <a data-toggle="collapse" class="d-block" href="#goup-id-<?php echo $group_id; ?>" role="button"
                       aria-expanded="false"
                       aria-controls="#goup-id-<?php echo $group_id; ?>"><?php echo $group_item; ?><i
                                class="fa fa-chevron-down"></i></a>
                </div>

                <ul class="collapse multi-collapse" id="goup-id-<?php echo $group_id; ?>">
                    <li>
                        <div class="content">
                            <div class="box">
                                <?php if (isset($this->attrs[$group_id])) { ?>
                                    <?php foreach ($this->attrs[$group_id] as $attr_id => $value): ?>
                                        <?php
                                        if (!empty($filter) && in_array($attr_id, $filter)) {
                                            $checked = ' checked';
                                        } else {
                                            $checked = null;
                                        }
                                        ?>
                                        <div class="text-dark mb-2 text-filter">

                                            <input id="filter<?php echo $attr_id; ?>" type="checkbox" name="checkbox"
                                                   class="js-switch "
                                                   value="<?php echo $attr_id; ?>" <?php echo $checked; ?>>
                                            <label class="d-inline-block ml-2 mb-0 text-checkbox"
                                                   for="filter<?php echo $attr_id; ?>"><?php echo $value; ?></label>
                                        </div>
                                    <?php endforeach; ?>
                                <?php } ?>
                            </div>
                        </div>
                    </li>

                </ul>
            </li>
            </ul>
        </div>
    </div>
<?php } ?>