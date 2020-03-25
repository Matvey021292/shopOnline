<?php $parent = isset($category['childs']); ?>
<div class="tt-desctop-parent-menu tt-parent-box">
    <div class="tt-desctop-menu">
        <nav>
            <ul>
                <li class="dropdown tt-megamenu-col-02 selected">
                    <a href="category/<?php echo $category['alias'] ?>"><?php echo $category['title'] ?></a>
                    <div class="dropdown-menu">
                        <div class="row tt-col-list">
                            <div class="col">
                                <?php if(isset($category['childs'])){?>
                                    <?php echo $this->getMenuHtml($category['childs']);?>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </nav>
    </div>
</div>
