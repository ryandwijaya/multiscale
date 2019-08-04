 <!--====================  hero slider area ====================-->

    <div class="hero-slider-area section-space">
        <div class="container wide">
            <div class="row">
                <div class="col-lg-12">
                    <!--=======  hero slider wrapper  =======-->

                    <div class="hero-slider-wrapper">
                        <div class="ht-slick-slider" data-slick-setting='{
                        "slidesToShow": 1,
                        "slidesToScroll": 1,
                        "arrows": true,
                        "dots": true,
                        "autoplay": true,
                        "autoplaySpeed": 5000,
                        "speed": 1000,
                        "fade": true,
                        "infinite": true,
                        "prevArrow": {"buttonClass": "slick-prev", "iconClass": "ion-chevron-left" },
                        "nextArrow": {"buttonClass": "slick-next", "iconClass": "ion-chevron-right" }
                    }' data-slick-responsive='[
                        {"breakpoint":1501, "settings": {"slidesToShow": 1} },
                        {"breakpoint":1199, "settings": {"slidesToShow": 1, "arrows": false} },
                        {"breakpoint":991, "settings": {"slidesToShow": 1, "arrows": false} },
                        {"breakpoint":767, "settings": {"slidesToShow": 1, "arrows": false} },
                        {"breakpoint":575, "settings": {"slidesToShow": 1, "arrows": false} },
                        {"breakpoint":479, "settings": {"slidesToShow": 1, "arrows": false} }
                    ]'>

                            <!--=======  single slider item  =======-->
                            <?php for ($i = 0; $i <5 ; $i++) { ?>  
                                
                            
                            <div class="single-slider-item">
                                <div class="hero-slider-item-wrapper" style="background-image: url('assets/frontend/img/hero-slider/<?= $i ?>.jpg');">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="hero-slider-content hero-slider-content--left-space">
                                                    <p class="slider-title slider-title--big-light">AMAZING PRODUCT!</p>
                                                    <p class="slider-title slider-title--big-bold">WALL CLOCK</p>
                                                    <p class="slider-title slider-title--small">Let your Wall reflect the luxurious side of you with our Unique Design 24ct.gold plated Wall Clock.</p>
                                                    <a class="hero-slider-button" href="shop-left-sidebar.html"> <i class="ion-ios-plus-empty"></i> Lihat</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--=======  End of single slider item  =======-->
                            <?php } ?>
                           

                            <!--=======  End of single slider item  =======-->

                        </div>
                    </div>

                    <!--=======  End of hero slider wrapper  =======-->
                </div>
            </div>
        </div>
    </div>

    <!--====================  End of hero slider area  ====================-->


     <!--====================  single row slider tab ====================-->
    <div class="single-row-slider-tab-area section-space">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!--=======  section title  =======-->
                    <div class="section-title-wrapper text-center section-space--half">
                        <h2 class="section-title">Our Products</h2>
                        <p class="section-subtitle">Mirum est notare quam littera gothica, quam nunc putamus parum claram anteposuerit litterarum formas.</p>
                    </div>
                    <!--=======  End of section title  =======-->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!--=======  tab slider wrapper  =======-->

                    <div class="tab-slider-wrapper">
                        <!--=======  tab product navigation  =======-->

                        <div class="tab-product-navigation">
                            <div class="nav nav-tabs justify-content-center" id="nav-tab2" role="tablist">
                                <a class="nav-item nav-link active" id="product-tab-1" data-toggle="tab" href="#product-series-1" role="tab" aria-selected="true">Decoration</a>
                                <a class="nav-item nav-link" id="product-tab-2" data-toggle="tab" href="#product-series-2" role="tab" aria-selected="false">Lighting</a>
                                <a class="nav-item nav-link" id="product-tab-3" data-toggle="tab" href="#product-series-3" role="tab" aria-selected="false">Storage</a>
                                
                            </div>
                        </div>

                        <!--=======  End of tab product navigation  =======-->

                        <!--=======  tab product content  =======-->
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="product-series-1" role="tabpanel" aria-labelledby="product-tab-1">
                                <!--=======  single row slider wrapper  =======-->
                                <div class="single-row-slider-wrapper">
                                    <div class="ht-slick-slider" data-slick-setting='{
                                    "slidesToShow": 4,
                                    "slidesToScroll": 1,
                                    "arrows": true,
                                    "autoplay": false,
                                    "autoplaySpeed": 5000,
                                    "speed": 1000,
                                    "infinite": false,
                                    "prevArrow": {"buttonClass": "slick-prev", "iconClass": "ion-chevron-left" },
                                    "nextArrow": {"buttonClass": "slick-next", "iconClass": "ion-chevron-right" }
                                }' data-slick-responsive='[
                                    {"breakpoint":1501, "settings": {"slidesToShow": 4} },
                                    {"breakpoint":1199, "settings": {"slidesToShow": 4, "arrows": false} },
                                    {"breakpoint":991, "settings": {"slidesToShow": 3, "arrows": false} },
                                    {"breakpoint":767, "settings": {"slidesToShow": 2, "arrows": false} },
                                    {"breakpoint":575, "settings": {"slidesToShow": 2, "arrows": false} },
                                    {"breakpoint":479, "settings": {"slidesToShow": 1, "arrows": false} }
                                ]'>

                                    <?php for ($i = 0; $i <6 ; $i++) { ?>
                                        
                                    
                                        <div class="col">
                                            <!--=======  single grid product  =======-->
                                            <div class="single-grid-product">
                                                <div class="single-grid-product__image">

                                                    <a href="<?= base_url() ?>product">
                                                        <img src="<?= base_url() ?>assets/frontend/img/product-neraca/good.jpeg" class="img-fluid" alt="">
                                                        <img src="<?= base_url() ?>assets/frontend/img/product-neraca/good.jpeg" class="img-fluid" alt="">
                                                    </a>

                                                    
                                                </div>
                                                <div class="single-grid-product__content">
                                                    <div class="single-grid-product__category-rating">
                                                        <span class="category"><a href="shop-left-sidebar.html">Timbangan</a></span>
                                                        <span class="rating">
                                                        <i class="ion-android-star active"></i>
                                                        <i class="ion-android-star active"></i>
                                                        <i class="ion-android-star active"></i>
                                                        <i class="ion-android-star active"></i>
                                                        <i class="ion-android-star-outline"></i>
                                                    </span>
                                                    </div>

                                                     <a href="<?= base_url() ?>product"><h5>Nama Product</h5></a>       
                                                     <p class="single-grid-product__price">Lorem ipsum dolor sit amet,   consectetur adipisicing elit. Ad tenetur sed tempore eligendi architecto a. Est vel et quo fugiat hic veritatis amet atque rerum maiores! Optio, quas, vero. Impedit.</p>
                                                </div>
                                            </div>
                                            <!--=======  End of single grid product  =======-->
                                        </div>
                                    <?php } ?>
                                        

                                    </div>
                                </div>
                                <!--=======  End of single row slider wrapper  =======-->
                            </div>
                            <div class="tab-pane fade" id="product-series-2" role="tabpanel" aria-labelledby="product-tab-2">
                                <!--=======  single row slider wrapper  =======-->
                                <div class="single-row-slider-wrapper">
                                    <div class="ht-slick-slider" data-slick-setting='{
                                    "slidesToShow": 4,
                                    "slidesToScroll": 1,
                                    "arrows": true,
                                    "autoplay": false,
                                    "autoplaySpeed": 5000,
                                    "speed": 1000,
                                    "infinite": false,
                                    "prevArrow": {"buttonClass": "slick-prev", "iconClass": "ion-chevron-left" },
                                    "nextArrow": {"buttonClass": "slick-next", "iconClass": "ion-chevron-right" }
                                }' data-slick-responsive='[
                                    {"breakpoint":1501, "settings": {"slidesToShow": 4} },
                                    {"breakpoint":1199, "settings": {"slidesToShow": 4, "arrows": false} },
                                    {"breakpoint":991, "settings": {"slidesToShow": 3, "arrows": false} },
                                    {"breakpoint":767, "settings": {"slidesToShow": 2, "arrows": false} },
                                    {"breakpoint":575, "settings": {"slidesToShow": 2, "arrows": false} },
                                    {"breakpoint":479, "settings": {"slidesToShow": 1, "arrows": false} }
                                ]'>

                                        <?php for ($i = 0; $i < 5 ; $i++) { ?>
                                            
                                        
                                        <div class="col">
                                            <!--=======  single grid product  =======-->
                                            <div class="single-grid-product">
                                                <div class="single-grid-product__image">
                                                    
                                                    <a href="<?= base_url() ?>product">
                                                        <img src="<?= base_url() ?>assets/frontend/img/product-neraca/tim-mikro.jpeg" class="img-fluid" alt="">
                                                       <img src="<?= base_url() ?>assets/frontend/img/product-neraca/tim-mikro.jpeg" class="img-fluid" alt="">
                                                    </a>

                                                    
                                                </div>
                                                <div class="single-grid-product__content">
                                                    <div class="single-grid-product__category-rating">
                                                        <span class="category"><a href="shop-left-sidebar.html">Vase</a></span>
                                                        <span class="rating">
                                                        <i class="ion-android-star active"></i>
                                                        <i class="ion-android-star active"></i>
                                                        <i class="ion-android-star active"></i>
                                                        <i class="ion-android-star active"></i>
                                                        <i class="ion-android-star-outline"></i>
                                                    </span>
                                                    </div>

                                                     <a href="<?= base_url() ?>product"><h5>Nama Product</h5></a>
                                                     <p class="single-grid-product__price">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque veritatis illo amet ipsa, mollitia, reprehenderit obcaecati tenetur repudiandae, dolor labore adipisci nemo reiciendis voluptate laudantium. Amet, dolorem officiis est eveniet.</p>
                                                </div>
                                            </div>
                                            <!--=======  End of single grid product  =======-->
                                        </div>
                                        <?php } ?>
                                        

                                    </div>
                                </div>
                                <!--=======  End of single row slider wrapper  =======-->
                            </div>
                            <div class="tab-pane fade" id="product-series-3" role="tabpanel" aria-labelledby="product-tab-3">
                                <!--=======  single row slider wrapper  =======-->
                                <div class="single-row-slider-wrapper">
                                    <div class="ht-slick-slider" data-slick-setting='{
                                    "slidesToShow": 4,
                                    "slidesToScroll": 1,
                                    "arrows": true,
                                    "autoplay": false,
                                    "autoplaySpeed": 5000,
                                    "speed": 1000,
                                    "infinite": false,
                                    "prevArrow": {"buttonClass": "slick-prev", "iconClass": "ion-chevron-left" },
                                    "nextArrow": {"buttonClass": "slick-next", "iconClass": "ion-chevron-right" }
                                }' data-slick-responsive='[
                                    {"breakpoint":1501, "settings": {"slidesToShow": 4} },
                                    {"breakpoint":1199, "settings": {"slidesToShow": 4, "arrows": false} },
                                    {"breakpoint":991, "settings": {"slidesToShow": 3, "arrows": false} },
                                    {"breakpoint":767, "settings": {"slidesToShow": 2, "arrows": false} },
                                    {"breakpoint":575, "settings": {"slidesToShow": 2, "arrows": false} },
                                    {"breakpoint":479, "settings": {"slidesToShow": 1, "arrows": false} }
                                ]'>
                                    <?php for ($i = 0; $i < 5 ; $i++) { ?>
                                            
                                        
                                        <div class="col">
                                            <!--=======  single grid product  =======-->
                                            <div class="single-grid-product">
                                                <div class="single-grid-product__image">
                                                    
                                                    <a href="<?= base_url() ?>product">
                                                        <img src="<?= base_url() ?>assets/frontend/img/product-neraca/tim-mikro.jpeg" class="img-fluid" alt="">
                                                       <img src="<?= base_url() ?>assets/frontend/img/product-neraca/tim-mikro.jpeg" class="img-fluid" alt="">
                                                    </a>

                                                    
                                                </div>
                                                <div class="single-grid-product__content">
                                                    <div class="single-grid-product__category-rating">
                                                        <span class="category"><a href="shop-left-sidebar.html">Vase</a></span>
                                                        <span class="rating">
                                                        <i class="ion-android-star active"></i>
                                                        <i class="ion-android-star active"></i>
                                                        <i class="ion-android-star active"></i>
                                                        <i class="ion-android-star active"></i>
                                                        <i class="ion-android-star-outline"></i>
                                                    </span>
                                                    </div>

                                                     <a href="<?= base_url() ?>product"><h5>Nama Product</h5></a>
                                                     <p class="single-grid-product__price">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque veritatis illo amet ipsa, mollitia, reprehenderit obcaecati tenetur repudiandae, dolor labore adipisci nemo reiciendis voluptate laudantium. Amet, dolorem officiis est eveniet.</p>
                                                </div>
                                            </div>
                                            <!--=======  End of single grid product  =======-->
                                        </div>
                                        <?php } ?>
                                        


                                    </div>
                                </div>
                                <!--=======  End of single row slider wrapper  =======-->
                            </div>
                            
                        </div>
                        <!--=======  End of tab product content  =======-->
                    </div>

                    <!--=======  End of tab slider wrapper  =======-->
                </div>
            </div>
        </div>
    </div>
    <!--====================  End of single row slider tab  ====================-->