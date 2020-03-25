<li class="dropdown ">
    <?php $parent = isset($category['childs']); ?>
    <a href="category/<?php echo $category['alias'] ?>"><span><img class="image-menu-category" src="images/<?php echo $category['imagemin'] ?>" alt=""><?php echo $category['title'] ?>
            <img src="/images/<?php echo $category['imagemin'] ?>" alt=""></span></a>
    <?php if (isset($category['childs'])) { ?>
       <ul>
          <div class="flex-col">
              <?php echo $this->getMenuHtml($category['childs']); ?>
          </div>
       </ul>
    <?php } ?>

</li>

