<div class="ss_latest_products_wrapper">
    <div class="ss_featured_products_tab">
        <div class="ss_heading">
            <h3>Популярные товары</h3>
        </div>
    </div>
    <div class="ss_best_seller">
        <div class="owl-carousel owl-theme item-prevision">
            <?php if ($hits) {
                foreach ($hits as $product) { ?>
                    <?php echo ($count % 2 == 0 || $count == 0) ? "<div class='item'>" : ''; ?>
                    <?php require 'product_single.php' ?>
                    <?php echo ($count % 2 != 0) ? "</div>" : ''; ?>
                    <?php $count++; ?>
                <?php }
            } ?>
        </div>
    </div>
</div>