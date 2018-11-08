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
                                    <!--                                    <ul class="tt-megamenu-submenu">-->
                                    <!--                                        <li><a href="index-skin-snowboards.html">Snowboards Shop <img-->
                                    <!--                                                        src="/images/loader.svg"-->
                                    <!--                                                        data-src="/images/tt-skins-img-01.png"-->
                                    <!--                                                        alt="Snowboards Shop"></a></li>-->
                                    <!--                                        <li><a href="index-skin-phones.html">Phones Shop <img-->
                                    <!--                                                        src="/images/loader.svg"-->
                                    <!--                                                        data-src="/images/tt-skins-img-02.png"-->
                                    <!--                                                        alt="Phones Shop"></a></li>-->
                                    <!--                                        <li><a href="index-skin-bikes.html">Bikes Shop <img-->
                                    <!--                                                        src="/images/loader.svg"-->
                                    <!--                                                        data-src="/images/tt-skins-img-03.png"-->
                                    <!--                                                        alt="Bikes Shop"></a></li>-->
                                    <!--                                        <li><a href="index-skin-lingerie.html">Lingerie Shop <img-->
                                    <!--                                                        src="/images/loader.svg"-->
                                    <!--                                                        data-src="/images/tt-skins-img-04.png"-->
                                    <!--                                                        alt="Lingerie Shop"></a></li>-->
                                    <!--                                        <li><a href="index-skin-furniture.html">Furniture Shop <img-->
                                    <!--                                                        src="/images/loader.svg"-->
                                    <!--                                                        data-src="/images/tt-skins-img-05.png"-->
                                    <!--                                                        alt="Furniture Shop"></a></li>-->
                                    <!--                                    </ul>-->
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </li>
                <!--                <li class="dropdown megamenu">-->
                <!--                    <a href="listing-collection.html">SHOP</a>-->
                <!--                    <div class="dropdown-menu">-->
                <!--                        <div class="row tt-col-list">-->
                <!--                            <div class="col">-->
                <!--                                <h6 class="tt-title-submenu"><a href="listing-left-column.html">LISTING-->
                <!--                                        STYLES</a></h6>-->
                <!--                                <ul class="tt-megamenu-submenu">-->
                <!--                                    <li><a href="listing-left-column.html">Listing With Left-->
                <!--                                            Sidebar</a></li>-->
                <!--                                    <li><a href="listing-right-column.html">Listing With Right-->
                <!--                                            Sidebar</a></li>-->
                <!--                                    <li><a href="listing-not-sidebar.html">Listing Not Sidebar</a>-->
                <!--                                    </li>-->
                <!--                                    <li><a href="listing-not-sidebar-full-width.html">Listing Not-->
                <!--                                            Sidebar Full Width</a></li>-->
                <!--                                    <li><a href="listing-metro.html">Listing Metro</a></li>-->
                <!--                                    <li><a href="listing-left-column-with-block.html">Listing With-->
                <!--                                            Custom HTML Block</a></li>-->
                <!--                                    <li><a href="listing-collection.html">Listing Collection</a>-->
                <!--                                    </li>-->
                <!--                                    <li><a href="lookbook.html">Look Book</a></li>-->
                <!--                                </ul>-->
                <!--                            </div>-->
                <!--                            <div class="col">-->
                <!--                                <h6 class="tt-title-submenu"><a href="product.html">PRODUCT PAGE-->
                <!--                                        STYLES</a></h6>-->
                <!--                                <ul class="tt-megamenu-submenu">-->
                <!--                                    <li><a href="product.html">Product Example 1</a></li>-->
                <!--                                    <li><a href="product-02.html">Product Example 2</a></li>-->
                <!--                                    <li><a href="product-03.html">Product Example 3</a></li>-->
                <!--                                    <li><a href="product-04.html">Product Example 4</a></li>-->
                <!--                                    <li><a href="product-variable.html">Product Layout</a></li>-->
                <!--                                    <li><a href="product-three-columns.html">Three Columns</a></li>-->
                <!--                                </ul>-->
                <!--                            </div>-->
                <!--                            <div class="col">-->
                <!--                                <h6 class="tt-title-submenu"><a href="product-variable.html">PRODUCT-->
                <!--                                        PAGE TYPES</a></h6>-->
                <!--                                <ul class="tt-megamenu-submenu">-->
                <!--                                    <li><a href="product.html">Standard Product</a></li>-->
                <!--                                    <li><a href="product-variable.html">Variable Product</a></li>-->
                <!--                                    <li><a href="product-04.html">Grouped Product</a></li>-->
                <!--                                    <li><a href="product-label-new.html">New Product</a></li>-->
                <!--                                    <li><a href="product-label-sale.html">Sale Product</a></li>-->
                <!--                                    <li><a href="product-label-out-of-stock.html">Out Of Stock-->
                <!--                                            Product</a></li>-->
                <!--                                </ul>-->
                <!--                            </div>-->
                <!--                            <div class="col">-->
                <!--                                <h6 class="tt-title-submenu"><a href="shopping_cart_02.html">OTHER-->
                <!--                                        PAGES</a></h6>-->
                <!--                                <ul class="tt-megamenu-submenu">-->
                <!--                                    <li><a href="shopping_cart_02.html">Cart</a></li>-->
                <!--                                    <li><a href="shopping_cart_01.html">Cart With Right Col</a></li>-->
                <!--                                    <li><a href="account.html">Account</a></li>-->
                <!--                                    <li><a href="account_address.html">Account Address</a></li>-->
                <!--                                    <li><a href="account_address_fields.html">Account Address-->
                <!--                                            Fields</a></li>-->
                <!--                                </ul>-->
                <!--                            </div>-->
                <!--                        </div>-->
                <!--                    </div>-->
                <!--                </li>-->
                <!--                <li class="dropdown tt-megamenu-col-01">-->
                <!--                    <a href="blog-listing-without-col.html">BLOG</a>-->
                <!--                    <div class="dropdown-menu">-->
                <!--                        <div class="row tt-col-list">-->
                <!--                            <div class="col">-->
                <!--                                <h6 class="tt-title-submenu"><a-->
                <!--                                        href="blog-listing-without-col.html">BLOG STYLES</a>-->
                <!--                                </h6>-->
                <!--                                <ul class="tt-megamenu-submenu">-->
                <!--                                    <li><a href="blog-listing-without-col.html">Standard Without-->
                <!--                                            Sidebar</a></li>-->
                <!--                                    <li><a href="blog-listing-col-left.html">Standard With Left-->
                <!--                                            Sidebar</a></li>-->
                <!--                                    <li><a href="blog-listing-col-right.html">Standard With Right-->
                <!--                                            Sidebar</a></li>-->
                <!--                                    <li><a href="blog-masonry-col-2.html">Two Colums</a></li>-->
                <!--                                    <li><a href="blog-masonry-col-3.html">Three Colums</a></li>-->
                <!--                                    <li><a href="blog-masonry-col-3-filter.html">Three Colums With-->
                <!--                                            Filter</a></li>-->
                <!--                                </ul>-->
                <!--                            </div>-->
                <!--                            <div class="col">-->
                <!--                                <h6 class="tt-title-submenu"><a href="blog-single-post.html">POST-->
                <!--                                        TYPES</a></h6>-->
                <!--                                <ul class="tt-megamenu-submenu">-->
                <!--                                    <li><a href="blog-single-post.html">Standard</a></li>-->
                <!--                                    <li><a href="blog-single-post-gallery.html">Gallery</a></li>-->
                <!--                                    <li><a href="blog-single-post-link.html">Link</a></li>-->
                <!--                                    <li><a href="blog-single-post-quote.html">Quote</a></li>-->
                <!--                                    <li><a href="blog-single-post-video.html">Video</a></li>-->
                <!--                                    <li><a href="blog-single-post-audio.html">Audio</a></li>-->
                <!--                                </ul>-->
                <!--                            </div>-->
                <!--                        </div>-->
                <!--                    </div>-->
                <!--                </li>-->
                <!--                <li class="dropdown tt-megamenu-col-01">-->
                <!--                    <a href="portfolio-col-wide-four.html">PORTFOLIO</a>-->
                <!--                    <div class="dropdown-menu">-->
                <!--                        <div class="row tt-col-list">-->
                <!--                            <div class="col">-->
                <!--                                <h6 class="tt-title-submenu"><a href="portfolio-col-grid-two.html">BOXED-->
                <!--                                        GRID</a></h6>-->
                <!--                                <ul class="tt-megamenu-submenu">-->
                <!--                                    <li><a href="portfolio-col-grid-two.html">Two Colums</a></li>-->
                <!--                                    <li><a href="portfolio-col-grid-three.html">Three Colums</a>-->
                <!--                                    </li>-->
                <!--                                    <li><a href="portfolio-col-grid-four.html">Four Colums</a></li>-->
                <!--                                    <li><a href="portfolio-col-grid-four-without-filter.html">Four-->
                <!--                                            Colums Without Filter</a></li>-->
                <!--                                </ul>-->
                <!--                            </div>-->
                <!--                            <div class="col">-->
                <!--                                <h6 class="tt-title-submenu"><a-->
                <!--                                        href="portfolio-col-wide-three.html">BOXED WIDE</a></h6>-->
                <!--                                <ul class="tt-megamenu-submenu">-->
                <!--                                    <li><a href="portfolio-col-wide-two.html">Two Colums</a></li>-->
                <!--                                    <li><a href="portfolio-col-wide-three.html">Three Colums</a>-->
                <!--                                    </li>-->
                <!--                                    <li><a href="portfolio-col-wide-four.html">Four Colums</a></li>-->
                <!--                                </ul>-->
                <!--                            </div>-->
                <!--                        </div>-->
                <!--                    </div>-->
                <!--                </li>-->
                <!--                <li class="dropdown tt-megamenu-col-01">-->
                <!--                    <a href="about.html">PAGES</a>-->
                <!--                    <div class="dropdown-menu">-->
                <!--                        <div class="row tt-col-list">-->
                <!--                            <div class="col">-->
                <!--                                <h6 class="tt-title-submenu"><a href="about.html">PAGES</a></h6>-->
                <!--                                <ul class="tt-megamenu-submenu">-->
                <!--                                    <li><a href="about.html">About Example 1</a>-->
                <!--                                        <ul>-->
                <!--                                            <li><a href="about.html">Link Level 1</a></li>-->
                <!--                                            <li>-->
                <!--                                                <a href="about.html">Link Level 1</a>-->
                <!--                                                <ul>-->
                <!--                                                    <li><a href="about.html">Link Level 2</a></li>-->
                <!--                                                    <li>-->
                <!--                                                        <a href="about.html">Link Level 2</a>-->
                <!--                                                        <ul>-->
                <!--                                                            <li><a href="about.html">Link Level-->
                <!--                                                                    3</a></li>-->
                <!--                                                            <li><a href="about.html">Link Level-->
                <!--                                                                    3</a></li>-->
                <!--                                                            <li><a href="about.html">Link Level-->
                <!--                                                                    3</a></li>-->
                <!--                                                            <li>-->
                <!--                                                                <a href="about.html">Link Level-->
                <!--                                                                    3</a>-->
                <!--                                                                <ul>-->
                <!--                                                                    <li>-->
                <!--                                                                        <a href="about.html">Link-->
                <!--                                                                            Level 4</a>-->
                <!--                                                                        <ul>-->
                <!--                                                                            <li>-->
                <!--                                                                                <a href="about.html">Link-->
                <!--                                                                                    Level 5</a></li>-->
                <!--                                                                            <li>-->
                <!--                                                                                <a href="about.html">Link-->
                <!--                                                                                    Level 5</a></li>-->
                <!--                                                                            <li>-->
                <!--                                                                                <a href="about.html">Link-->
                <!--                                                                                    Level 5</a></li>-->
                <!--                                                                            <li>-->
                <!--                                                                                <a href="about.html">Link-->
                <!--                                                                                    Level 5</a></li>-->
                <!--                                                                            <li>-->
                <!--                                                                                <a href="about.html">Link-->
                <!--                                                                                    Level 5</a></li>-->
                <!--                                                                        </ul>-->
                <!--                                                                    </li>-->
                <!--                                                                    <li><a href="about.html">Link-->
                <!--                                                                            Level 4</a></li>-->
                <!--                                                                </ul>-->
                <!--                                                            </li>-->
                <!--                                                            <li><a href="about.html">Link Level-->
                <!--                                                                    3</a></li>-->
                <!--                                                        </ul>-->
                <!--                                                    </li>-->
                <!--                                                    <li><a href="about.html">Link Level 2</a></li>-->
                <!--                                                    <li><a href="about.html">Link Level 2</a></li>-->
                <!--                                                </ul>-->
                <!--                                            </li>-->
                <!--                                            <li><a href="about.html">Link Level 1</a></li>-->
                <!--                                            <li><a href="about.html">Link Level 1</a></li>-->
                <!--                                            <li><a href="about.html">Link Level 1</a></li>-->
                <!--                                        </ul>-->
                <!--                                    </li>-->
                <!--                                    <li><a href="about-02.html">About Example 2</a></li>-->
                <!--                                    <li><a href="contact.html">Contacts Example 1</a></li>-->
                <!--                                    <li><a href="contact-02.html">Contacts Example 2</a></li>-->
                <!--                                    <li><a href="services.html">Services</a></li>-->
                <!--                                    <li><a href="faq.html">FAQ</a></li>-->
                <!--                                    <li><a href="coming-soon.html">Coming Soon</a></li>-->
                <!--                                    <li><a href="page404.html">Page 404</a></li>-->
                <!--                                    <li><a href="typography.html">Typography</a></li>-->
                <!--                                    <li><a href="gift-cart.html">Gift Cart</a></li>-->
                <!--                                </ul>-->
                <!--                            </div>-->
                <!--                        </div>-->
                <!--                    </div>-->
                <!--                </li>-->
                <!--                <li class="dropdown megamenu">-->
                <!--                    <a href="listing-left-column.html">WOMEN</a>-->
                <!--                    <div class="dropdown-menu">-->
                <!--                        <div class="row">-->
                <!--                            <div class="col-sm-8">-->
                <!--                                <div class="row tt-col-list">-->
                <!--                                    <div class="col-sm-3">-->
                <!--                                        <a class="tt-title-submenu" href="listing-left-column.html">-->
                <!--                                            TOPS-->
                <!--                                        </a>-->
                <!--                                        <ul class="tt-megamenu-submenu">-->
                <!--                                            <li><a href="listing-left-column.html">Blouses &amp;-->
                <!--                                                    Shirts</a></li>-->
                <!--                                            <li><a href="listing-left-column.html">Dresses <span-->
                <!--                                                        class="tt-badge tt-new">New</span></a>-->
                <!--                                            </li>-->
                <!--                                            <li>-->
                <!--                                                <a href="listing-left-column.html">Tops &amp;-->
                <!--                                                    T-shirts</a>-->
                <!--                                                <ul>-->
                <!--                                                    <li><a href="listing-left-column.html">Link-->
                <!--                                                            Level 1</a></li>-->
                <!--                                                    <li>-->
                <!--                                                        <a href="listing-left-column.html">Link-->
                <!--                                                            Level 1</a>-->
                <!--                                                        <ul>-->
                <!--                                                            <li><a href="listing-left-column.html">Link-->
                <!--                                                                    Level 2</a></li>-->
                <!--                                                            <li>-->
                <!--                                                                <a href="listing-left-column.html">Link-->
                <!--                                                                    Level 2</a>-->
                <!--                                                                <ul>-->
                <!--                                                                    <li>-->
                <!--                                                                        <a href="listing-left-column.html">Link-->
                <!--                                                                            Level 3</a></li>-->
                <!--                                                                    <li>-->
                <!--                                                                        <a href="listing-left-column.html">Link-->
                <!--                                                                            Level 3</a></li>-->
                <!--                                                                    <li>-->
                <!--                                                                        <a href="listing-left-column.html">Link-->
                <!--                                                                            Level 3</a></li>-->
                <!--                                                                    <li>-->
                <!--                                                                        <a href="listing-left-column.html">Link-->
                <!--                                                                            Level 3</a>-->
                <!--                                                                        <ul>-->
                <!--                                                                            <li>-->
                <!--                                                                                <a href="listing-left-column.html">Link-->
                <!--                                                                                    Level 4</a>-->
                <!--                                                                                <ul>-->
                <!--                                                                                    <li>-->
                <!--                                                                                        <a href="listing-left-column.html">Link-->
                <!--                                                                                            Level-->
                <!--                                                                                            5</a>-->
                <!--                                                                                    </li>-->
                <!--                                                                                    <li>-->
                <!--                                                                                        <a href="listing-left-column.html">Link-->
                <!--                                                                                            Level-->
                <!--                                                                                            5</a>-->
                <!--                                                                                    </li>-->
                <!--                                                                                    <li>-->
                <!--                                                                                        <a href="listing-left-column.html">Link-->
                <!--                                                                                            Level-->
                <!--                                                                                            5</a>-->
                <!--                                                                                    </li>-->
                <!--                                                                                    <li>-->
                <!--                                                                                        <a href="listing-left-column.html">Link-->
                <!--                                                                                            Level-->
                <!--                                                                                            5</a>-->
                <!--                                                                                    </li>-->
                <!--                                                                                    <li>-->
                <!--                                                                                        <a href="listing-left-column.html">Link-->
                <!--                                                                                            Level-->
                <!--                                                                                            5</a>-->
                <!--                                                                                    </li>-->
                <!--                                                                                </ul>-->
                <!--                                                                            </li>-->
                <!--                                                                            <li>-->
                <!--                                                                                <a href="listing-left-column.html">Link-->
                <!--                                                                                    Level 4</a></li>-->
                <!--                                                                        </ul>-->
                <!--                                                                    </li>-->
                <!--                                                                    <li>-->
                <!--                                                                        <a href="listing-left-column.html">Link-->
                <!--                                                                            Level 3</a></li>-->
                <!--                                                                </ul>-->
                <!--                                                            </li>-->
                <!--                                                            <li><a href="listing-left-column.html">Link-->
                <!--                                                                    Level 2</a></li>-->
                <!--                                                            <li><a href="listing-left-column.html">Link-->
                <!--                                                                    Level 2</a></li>-->
                <!--                                                        </ul>-->
                <!--                                                    </li>-->
                <!--                                                    <li><a href="listing-left-column.html">Link-->
                <!--                                                            Level 1</a></li>-->
                <!--                                                    <li><a href="listing-left-column.html">Link-->
                <!--                                                            Level 1</a></li>-->
                <!--                                                    <li><a href="listing-left-column.html">Link-->
                <!--                                                            Level 1</a></li>-->
                <!--                                                </ul>-->
                <!--                                            </li>-->
                <!--                                            <li><a href="listing-left-column.html">Sleeveless-->
                <!--                                                    Tops</a></li>-->
                <!--                                            <li><a href="listing-left-column.html">Sweaters</a></li>-->
                <!--                                            <li><a href="listing-left-column.html">Jackets</a></li>-->
                <!--                                            <li><a href="listing-left-column.html">Outerwear</a>-->
                <!--                                            </li>-->
                <!--                                        </ul>-->
                <!--                                    </div>-->
                <!--                                    <div class="col-sm-3">-->
                <!--                                        <a class="tt-title-submenu" href="listing-left-column.html">-->
                <!--                                            BOTTOMS-->
                <!--                                        </a>-->
                <!--                                        <ul class="tt-megamenu-submenu">-->
                <!--                                            <li><a href="listing-left-column.html">Trousers <span-->
                <!--                                                        class="tt-badge tt-fatured">Fatured</span></a>-->
                <!--                                            </li>-->
                <!--                                            <li>-->
                <!--                                                <a href="listing-left-column.html">Jeans</a>-->
                <!--                                            </li>-->
                <!--                                            <li><a href="listing-left-column.html">Leggings</a></li>-->
                <!--                                            <li><a href="listing-left-column.html">Jumpsuit &amp;-->
                <!--                                                    Shorts</a></li>-->
                <!--                                            <li><a href="listing-left-column.html">Skirts</a></li>-->
                <!--                                            <li><a href="listing-left-column.html">Tights</a></li>-->
                <!--                                        </ul>-->
                <!--                                    </div>-->
                <!--                                    <div class="col-sm-3">-->
                <!--                                        <a class="tt-title-submenu" href="listing-left-column.html">-->
                <!--                                            ACCESSORIES-->
                <!--                                        </a>-->
                <!--                                        <ul class="tt-megamenu-submenu">-->
                <!--                                            <li><a href="listing-left-column.html">Jewellery</a>-->
                <!--                                            </li>-->
                <!--                                            <li><a href="listing-left-column.html">Hats</a></li>-->
                <!--                                            <li><a href="listing-left-column.html">Scarves &amp;-->
                <!--                                                    Snoods</a></li>-->
                <!--                                            <li><a href="listing-left-column.html">Belts</a></li>-->
                <!--                                            <li><a href="listing-left-column.html">Bags</a></li>-->
                <!--                                            <li><a href="listing-left-column.html">Shoes <span-->
                <!--                                                        class="tt-badge tt-sale">Sale 15%</span></a>-->
                <!--                                            </li>-->
                <!--                                            <li><a href="listing-left-column.html">Sunglasses</a>-->
                <!--                                            </li>-->
                <!--                                        </ul>-->
                <!--                                    </div>-->
                <!--                                    <div class="col-sm-3">-->
                <!--                                        <a class="tt-title-submenu" href="listing-left-column.html">-->
                <!--                                            TOP BRANDS-->
                <!--                                        </a>-->
                <!--                                        <ul class="tt-listing-01">-->
                <!--                                            <li><a href="#" target="_blank"><img-->
                <!--                                                        src="/images/loader.svg"-->
                <!--                                                        data-src="/images/brand-img-01.png"-->
                <!--                                                        alt=""></a></li>-->
                <!--                                            <li><a href="#" target="_blank"><img-->
                <!--                                                        src="/images/loader.svg"-->
                <!--                                                        data-src="/images/brand-img-02.png"-->
                <!--                                                        alt=""></a></li>-->
                <!--                                            <li><a href="#" target="_blank"><img-->
                <!--                                                        src="/images/loader.svg"-->
                <!--                                                        data-src="/images/brand-img-03.png"-->
                <!--                                                        alt=""></a></li>-->
                <!--                                            <li><a href="#" target="_blank"><img-->
                <!--                                                        src="/images/loader.svg"-->
                <!--                                                        data-src="/images/brand-img-04.png"-->
                <!--                                                        alt=""></a></li>-->
                <!--                                            <li><a href="#" target="_blank"><img-->
                <!--                                                        src="/images/loader.svg"-->
                <!--                                                        data-src="/images/brand-img-05.png"-->
                <!--                                                        alt=""></a></li>-->
                <!--                                            <li><a href="#" target="_blank"><img-->
                <!--                                                        src="/images/loader.svg"-->
                <!--                                                        data-src="/images/brand-img-06.png"-->
                <!--                                                        alt=""></a></li>-->
                <!--                                        </ul>-->
                <!--                                    </div>-->
                <!--                                </div>-->
                <!--                            </div>-->
                <!--                            <div class="col-sm-4">-->
                <!--                                <a href="listing-left-column.html"-->
                <!--                                   class="tt-title-submenu">SPECIALS</a>-->
                <!--                                <div class="tt-menu-slider header-menu-product arrow-location-03 row">-->
                <!--                                    <div class="col-2">-->
                <!--                                        <div class="tt-product thumbprod-center">-->
                <!--                                            <a href="product.html">-->
                <!--                                                <div class="tt-image-box">-->
                <!--                                                                        <span class="tt-img"><img-->
                <!--                                                                                src="/images/product-01.jpg" alt=""></span>-->
                <!--                                                    <span class="tt-img-roll-over"><img-->
                <!--                                                            src="/images/product-01-02.jpg"-->
                <!--                                                            alt=""></span>-->
                <!--                                                </div>-->
                <!--                                                <div class="tt-description">-->
                <!--                                                    <h2 class="tt-title">Flared Shift Dress</h2>-->
                <!--                                                    <div class="tt-price">-->
                <!--                                                        <span class="new-price">$14</span>-->
                <!--                                                        <span class="old-price">$24</span>-->
                <!--                                                    </div>-->
                <!--                                                    <div class="tt-product-inside-hover">-->
                <!--                                                        <div class="tt-btn-addtocart"-->
                <!--                                                             data-toggle="modal"-->
                <!--                                                             data-target="#modalAddToCartProduct">-->
                <!--                                                            ADD TO CART-->
                <!--                                                        </div>-->
                <!--                                                        <div class="tt-btn-quickview"-->
                <!--                                                             data-toggle="modal"-->
                <!--                                                             data-target="#ModalquickView"></div>-->
                <!--                                                    </div>-->
                <!--                                                </div>-->
                <!--                                            </a>-->
                <!--                                        </div>-->
                <!--                                    </div>-->
                <!--                                    <div class="col-2">-->
                <!--                                        <div class="tt-product thumbprod-center">-->
                <!--                                            <a href="product.html">-->
                <!--                                                <div class="tt-image-box">-->
                <!--                                                                        <span class="tt-img"><img-->
                <!--                                                                                src="/images/product-02.jpg" alt=""></span>-->
                <!--                                                    <span class="tt-img-roll-over"><img-->
                <!--                                                            src="/images/product-02-02.jpg"-->
                <!--                                                            alt=""></span>-->
                <!--                                                </div>-->
                <!--                                                <div class="tt-description">-->
                <!--                                                    <h2 class="tt-title">Flared Shift Dress</h2>-->
                <!--                                                    <div class="tt-price">-->
                <!--                                                        $17-->
                <!--                                                    </div>-->
                <!--                                                    <div class="tt-product-inside-hover">-->
                <!--                                                        <div class="tt-btn-addtocart"-->
                <!--                                                             data-toggle="modal"-->
                <!--                                                             data-target="#modalAddToCartProduct">-->
                <!--                                                            ADD TO CART-->
                <!--                                                        </div>-->
                <!--                                                        <div class="tt-btn-quickview"-->
                <!--                                                             data-toggle="modal"-->
                <!--                                                             data-target="#ModalquickView"></div>-->
                <!--                                                    </div>-->
                <!--                                                </div>-->
                <!--                                            </a>-->
                <!--                                        </div>-->
                <!--                                    </div>-->
                <!--                                    <div class="col-2">-->
                <!--                                        <div class="tt-product thumbprod-center">-->
                <!--                                            <a href="product.html">-->
                <!--                                                <div class="tt-image-box">-->
                <!--                                                                        <span class="tt-img"><img-->
                <!--                                                                                src="/images/product-04.jpg" alt=""></span>-->
                <!--                                                    <span class="tt-img-roll-over"><img-->
                <!--                                                            src="/images/product-04-01.jpg"-->
                <!--                                                            alt=""></span>-->
                <!--                                                </div>-->
                <!--                                                <div class="tt-description">-->
                <!--                                                    <h2 class="tt-title">Flared Shift Dress</h2>-->
                <!--                                                    <div class="tt-price">-->
                <!--                                                        $14-->
                <!--                                                    </div>-->
                <!--                                                    <div class="tt-product-inside-hover">-->
                <!--                                                        <div class="tt-btn-addtocart"-->
                <!--                                                             data-toggle="modal"-->
                <!--                                                             data-target="#modalAddToCartProduct">-->
                <!--                                                            ADD TO CART-->
                <!--                                                        </div>-->
                <!--                                                        <div class="tt-btn-quickview"-->
                <!--                                                             data-toggle="modal"-->
                <!--                                                             data-target="#ModalquickView"></div>-->
                <!--                                                    </div>-->
                <!--                                                </div>-->
                <!--                                            </a>-->
                <!--                                        </div>-->
                <!--                                    </div>-->
                <!--                                    <div class="col-2">-->
                <!--                                        <div class="tt-product thumbprod-center">-->
                <!--                                            <a href="product.html">-->
                <!--                                                <div class="tt-image-box">-->
                <!--                                                                        <span class="tt-img"><img-->
                <!--                                                                                src="/images/product-05.jpg" alt=""></span>-->
                <!--                                                    <span class="tt-img-roll-over"><img-->
                <!--                                                            src="/images/product-05-02.jpg"-->
                <!--                                                            alt=""></span>-->
                <!--                                                </div>-->
                <!--                                                <div class="tt-description">-->
                <!--                                                    <h2 class="tt-title">Flared Shift Dress</h2>-->
                <!--                                                    <div class="tt-price">-->
                <!--                                                        <span class="new-price">$14</span>-->
                <!--                                                        <span class="old-price">$24</span>-->
                <!--                                                    </div>-->
                <!--                                                    <div class="tt-product-inside-hover">-->
                <!--                                                        <div class="tt-btn-addtocart"-->
                <!--                                                             data-toggle="modal"-->
                <!--                                                             data-target="#modalAddToCartProduct">-->
                <!--                                                            ADD TO CART-->
                <!--                                                        </div>-->
                <!--                                                        <div class="tt-btn-quickview"-->
                <!--                                                             data-toggle="modal"-->
                <!--                                                             data-target="#ModalquickView"></div>-->
                <!--                                                    </div>-->
                <!--                                                </div>-->
                <!--                                            </a>-->
                <!--                                        </div>-->
                <!--                                    </div>-->
                <!--                                </div>-->
                <!--                            </div>-->
                <!--                        </div>-->
                <!--                        <div class="row">-->
                <!--                            <div class="col-sm-6">-->
                <!--                                <a href="listing-left-column.html" class="tt-promo-02">-->
                <!--                                    <img src="/images/header-promo-01.jpg" alt="">-->
                <!--                                    <div class="tt-description tt-point-h-l">-->
                <!--                                        <div class="tt-description-wrapper">-->
                <!--                                            <div class="tt-title-small">SUMMER <span-->
                <!--                                                    class="tt-base-color">2018</span></div>-->
                <!--                                            <div class="tt-title-large">NEW ARRIVALS</div>-->
                <!--                                        </div>-->
                <!--                                    </div>-->
                <!--                                </a>-->
                <!--                            </div>-->
                <!--                            <div class="col-sm-6">-->
                <!--                                <a href="listing-left-column.html" class="tt-promo-02">-->
                <!--                                    <img src="/images/header-promo-02.jpg" alt="">-->
                <!--                                    <div class="tt-description tt-point-h-l">-->
                <!--                                        <div class="tt-description-wrapper">-->
                <!--                                            <div class="tt-title-small"><span-->
                <!--                                                    class="tt-white-color">CLEARANCE SALES</span>-->
                <!--                                            </div>-->
                <!--                                            <div class="tt-title-large"><span-->
                <!--                                                    class="tt-white-color">GET UP TO 20% OFF</span>-->
                <!--                                            </div>-->
                <!--                                        </div>-->
                <!--                                    </div>-->
                <!--                                </a>-->
                <!--                            </div>-->
                <!--                        </div>-->
                <!--                    </div>-->
                <!--                </li>-->
                <!--                <li class="dropdown megamenu">-->
                <!--                    <a href="listing-right-column.html">MEN</a>-->
                <!--                    <div class="dropdown-menu">-->
                <!--                        <div class="row">-->
                <!--                            <div class="col-sm-9">-->
                <!--                                <div class="row tt-col-list">-->
                <!--                                    <div class="col-sm-4">-->
                <!--                                        <a href="listing-right-column.html"-->
                <!--                                           class="tt-title-submenu">-->
                <!--                                            TOPS-->
                <!--                                            <img src="/images/loader.svg"-->
                <!--                                                 data-src="/images/header-category-01.jpg" alt="">-->
                <!--                                        </a>-->
                <!--                                        <ul class="tt-megamenu-submenu">-->
                <!--                                            <li><a href="listing-right-column.html">Shirts</a></li>-->
                <!--                                            <li><a href="listing-right-column.html">Sweaters <span-->
                <!--                                                        class="tt-badge tt-new">New</span></a>-->
                <!--                                            </li>-->
                <!--                                            <li>-->
                <!--                                                <a href="listing-right-column.html">Tops &amp;-->
                <!--                                                    T-shirts</a>-->
                <!--                                                <ul>-->
                <!--                                                    <li><a href="listing-right-column.html">Link-->
                <!--                                                            Level 1</a></li>-->
                <!--                                                    <li>-->
                <!--                                                        <a href="listing-right-column.html">Link-->
                <!--                                                            Level 1</a>-->
                <!--                                                        <ul>-->
                <!--                                                            <li><a href="listing-right-column.html">Link-->
                <!--                                                                    Level 2</a></li>-->
                <!--                                                            <li>-->
                <!--                                                                <a href="listing-right-column.html">Link-->
                <!--                                                                    Level 2</a>-->
                <!--                                                                <ul>-->
                <!--                                                                    <li>-->
                <!--                                                                        <a href="listing-right-column.html">Link-->
                <!--                                                                            Level 3</a></li>-->
                <!--                                                                    <li>-->
                <!--                                                                        <a href="listing-right-column.html">Link-->
                <!--                                                                            Level 3</a></li>-->
                <!--                                                                    <li>-->
                <!--                                                                        <a href="listing-right-column.html">Link-->
                <!--                                                                            Level 3</a></li>-->
                <!--                                                                    <li>-->
                <!--                                                                        <a href="listing-right-column.html">Link-->
                <!--                                                                            Level 3</a>-->
                <!--                                                                        <ul>-->
                <!--                                                                            <li>-->
                <!--                                                                                <a href="listing-right-column.html">Link-->
                <!--                                                                                    Level 4</a>-->
                <!--                                                                                <ul>-->
                <!--                                                                                    <li>-->
                <!--                                                                                        <a href="listing-right-column.html">Link-->
                <!--                                                                                            Level-->
                <!--                                                                                            5</a>-->
                <!--                                                                                    </li>-->
                <!--                                                                                    <li>-->
                <!--                                                                                        <a href="listing-right-column.html">Link-->
                <!--                                                                                            Level-->
                <!--                                                                                            5</a>-->
                <!--                                                                                    </li>-->
                <!--                                                                                    <li>-->
                <!--                                                                                        <a href="listing-right-column.html">Link-->
                <!--                                                                                            Level-->
                <!--                                                                                            5</a>-->
                <!--                                                                                    </li>-->
                <!--                                                                                    <li>-->
                <!--                                                                                        <a href="listing-right-column.html">Link-->
                <!--                                                                                            Level-->
                <!--                                                                                            5</a>-->
                <!--                                                                                    </li>-->
                <!--                                                                                    <li>-->
                <!--                                                                                        <a href="listing-right-column.html">Link-->
                <!--                                                                                            Level-->
                <!--                                                                                            5</a>-->
                <!--                                                                                    </li>-->
                <!--                                                                                </ul>-->
                <!--                                                                            </li>-->
                <!--                                                                            <li>-->
                <!--                                                                                <a href="listing-right-column.html">Link-->
                <!--                                                                                    Level 4</a></li>-->
                <!--                                                                            <li>-->
                <!--                                                                                <a href="listing-right-column.html">Link-->
                <!--                                                                                    Level 4</a></li>-->
                <!--                                                                            <li>-->
                <!--                                                                                <a href="listing-right-column.html">Link-->
                <!--                                                                                    Level 4</a></li>-->
                <!--                                                                            <li>-->
                <!--                                                                                <a href="listing-right-column.html">Link-->
                <!--                                                                                    Level 4</a></li>-->
                <!--                                                                        </ul>-->
                <!--                                                                    </li>-->
                <!--                                                                    <li>-->
                <!--                                                                        <a href="listing-right-column.html">Link-->
                <!--                                                                            Level 3</a></li>-->
                <!--                                                                </ul>-->
                <!--                                                            </li>-->
                <!--                                                            <li><a href="listing-right-column.html">Link-->
                <!--                                                                    Level 2</a></li>-->
                <!--                                                            <li><a href="listing-right-column.html">Link-->
                <!--                                                                    Level 2</a></li>-->
                <!--                                                            <li><a href="listing-right-column.html">Link-->
                <!--                                                                    Level 2</a></li>-->
                <!--                                                        </ul>-->
                <!--                                                    </li>-->
                <!--                                                    <li><a href="listing-right-column.html">Link-->
                <!--                                                            Level 1</a></li>-->
                <!--                                                    <li><a href="listing-right-column.html">Link-->
                <!--                                                            Level 1</a></li>-->
                <!--                                                    <li><a href="listing-right-column.html">Link-->
                <!--                                                            Level 1</a></li>-->
                <!--                                                </ul>-->
                <!--                                            </li>-->
                <!--                                            <li><a href="listing-right-column.html">Sleeveless-->
                <!--                                                    Tops</a></li>-->
                <!--                                            <li><a href="listing-right-column.html">Jackets</a></li>-->
                <!--                                            <li><a href="listing-right-column.html">Outerwear</a>-->
                <!--                                            </li>-->
                <!--                                        </ul>-->
                <!--                                    </div>-->
                <!--                                    <div class="col-sm-4">-->
                <!--                                        <a class="tt-title-submenu"-->
                <!--                                           href="listing-right-column.html">-->
                <!--                                            BOTTOMS-->
                <!--                                            <img src="/images/loader.svg"-->
                <!--                                                 data-src="/images/header-category-02.jpg" alt="">-->
                <!--                                        </a>-->
                <!--                                        <ul class="tt-megamenu-submenu">-->
                <!--                                            <li><a href="listing-right-column.html">Trousers <span-->
                <!--                                                        class="tt-badge tt-fatured">Fatured</span></a>-->
                <!--                                            </li>-->
                <!--                                            <li><a href="listing-right-column.html">Jeans</a></li>-->
                <!--                                            <li><a href="listing-right-column.html">Jumpsuit &amp;-->
                <!--                                                    Shorts</a></li>-->
                <!--                                            <li><a href="listing-right-column.html">Skirts</a></li>-->
                <!--                                            <li><a href="listing-right-column.html">Tights</a></li>-->
                <!--                                        </ul>-->
                <!--                                    </div>-->
                <!--                                    <div class="col-sm-4">-->
                <!--                                        <a class="tt-title-submenu"-->
                <!--                                           href="listing-right-column.html">-->
                <!--                                            ACCESSORIES-->
                <!--                                            <img src="/images/loader.svg"-->
                <!--                                                 data-src="/images/header-category-03.jpg" alt="">-->
                <!--                                        </a>-->
                <!--                                        <ul class="tt-megamenu-submenu">-->
                <!--                                            <li><a href="listing-right-column.html">Hats</a></li>-->
                <!--                                            <li><a href="listing-right-column.html">Scarves &amp;-->
                <!--                                                    Snoods</a></li>-->
                <!--                                            <li><a href="listing-right-column.html">Belts</a></li>-->
                <!--                                            <li><a href="listing-right-column.html">Bags</a></li>-->
                <!--                                            <li><a href="listing-right-column.html">Shoes</a></li>-->
                <!--                                            <li><a href="listing-right-column.html">Sunglasses <span-->
                <!--                                                        class="tt-badge tt-sale">Sale 15%</span></a>-->
                <!--                                            </li>-->
                <!--                                        </ul>-->
                <!--                                    </div>-->
                <!--                                </div>-->
                <!--                            </div>-->
                <!--                            <div class="col-sm-3">-->
                <!--                                <div class="tt-offset-7">-->
                <!--                                    <a href="listing-left-column.html" class="tt-promo-02">-->
                <!--                                        <img src="/images/loader.svg"-->
                <!--                                             data-src="/images/header-promo-03.jpg" alt="">-->
                <!--                                        <div class="tt-description tt-point-h-l tt-point-v-t">-->
                <!--                                            <div class="tt-description-wrapper">-->
                <!--                                                <div class="tt-title-small tt-white-color">SALE-->
                <!--                                                </div>-->
                <!--                                                <div class="tt-title-xlarge tt-white-color">70%-->
                <!--                                                    OFF-->
                <!--                                                </div>-->
                <!--                                                <p class="tt-white-color">Free shipping on all US-->
                <!--                                                    order or order above $99</p>-->
                <!--                                                <span class="btn-underline tt-obj-bottom tt-white-color">SHOP NOW!</span>-->
                <!--                                            </div>-->
                <!--                                        </div>-->
                <!--                                    </a>-->
                <!--                                </div>-->
                <!--                            </div>-->
                <!--                        </div>-->
                <!--                    </div>-->
                <!--                </li>-->
                <!--                <li class="dropdown">-->
                <!--                    <a href="index-rtl.html">RTL</a>-->
                <!--                </li>-->
            </ul>
        </nav>
    </div>
</div>
