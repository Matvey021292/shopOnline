<div class="ss_feat_cate_wrapper">
    <div class="ss_feat_cate_slider">
        <div class="owl-carousel owl-theme">
            <?php foreach ($cats as $cat) { ?>
                <div class="item">
                    <div class="card ">
                        <div class="card-image"
                            <?php if (strlen($cat->image) > 0): ?>
                                style="background: url('/images/<?php echo $cat->image ?>') no-repeat center;"
                            <?php else: ?>
                                style="background-image: url(https://mdbootstrap.com/img/Photos/Horizontal/Work/4-col/img%20%2814%29.jpg);"
                            <?php endif; ?>
                        >
                            <a href="/category/<?php echo $cat->alias ?>">
                                <div class=" d-flex h-100 mask blue-gradient-rgba">
                                    <div class="first-content align-self-center p-3">
                                        <h3 class="card-title text-white"><?php echo $cat->title ?></h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
