<?php if (!empty($_SESSION['compare'])): ?>
    <?php foreach ($_SESSION['compare'] as $id => $item): ?>
        <div class="item ">
            <div class="ss_featured_products_box card-cascade narrower card-ecommerce ">
                <div class="draws">
                    <div class="ss_featured_products_box_img">
                        <a class="d-block" href="product/<?php echo $item['alias']?>">
                            <img src="/images/<?php echo $item['img']?>" alt="Citizen JP1010-00E" class="img-responsive ">
                        </a>
                    </div>
                    <div class="ss_feat_prod_cont_heading_wrapper text-left">
                        <h4>
                            <a href="product/<?php echo $item['alias']?>"><?php echo $item['title']?></a>
                        </h4>
                        <div class="cart_page_price text-danger"> <?php echo $_SESSION['cart.currency']['symbol_left'] ?><?php echo $item['price'] ?>
                            <span class="d-inline 1 m-0 symbol_price"><?php echo $_SESSION['cart.currency']['symbol_right'] ?></span>
                        </div>
                    </div>
                </div>
                <a href="product/<?php echo $item['alias']?>"" class="btn-link-product btn-link-product--sm"><i class="fas fa-plus"></i></a>
            </div>
        </div>
    <?php endforeach; ?>
<?php endif; ?>