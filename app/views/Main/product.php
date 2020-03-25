<div class="item-prevision owl-carousel owl-theme">
    <?php $count = 0; ?>
    <?php foreach ($new_product as $product) { ?>
        <?php echo ($count % 2 == 0 || $count == 0) ? "<div class='item'>" : ''; ?>
        <?php require 'product_single.php'?>
        <?php echo ($count % 2 != 0) ? "</div>" : ''; ?>
        <?php $count++; ?>
    <?php } ?>
</div>
