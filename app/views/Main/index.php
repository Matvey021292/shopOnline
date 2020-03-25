<?php $curr = \shop\App::$app->getProperty('currency'); ?>
<div class="clearfix"></div>
<?php include_once 'carousel.php'?>
<div class="ss_latest_products_wrapper mt-5 ">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="ss_featured_products_tab">
                    <div class="ss_heading">
                        <h3>Новинки</h3>
                    </div>
                </div>
                <div class="ss_latest_products ss_latest_products-new">
                <?php include_once 'product.php' ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Advertisement Wrapper Start -->
<div class="ss_advertisement_wrapper">
    <?php include_once 'banner.php' ?>
</div>
<!-- Advertisement Wrapper End -->

<!-- Latest Products Wrapper End -->
<div id="tt-pageContent">
    <?php if ($cats) { ?>
        <div class="ss_mixproducts_wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <?php include_once 'recently.php' ?>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                        <?php include_once 'category.php' ?>
                        <?php include_once 'popular.php' ?>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
</div>
</div>




