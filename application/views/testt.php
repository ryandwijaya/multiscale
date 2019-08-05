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
                           
                           <?php 
                           foreach ($banner as $key => $ban) { ?>
                               
                            
                                
                            
                            <div class="single-slider-item">
                                <div class="hero-slider-item-wrapper" style="background-image: url('assets/upload/images/banner/<?= $ban['banner_foto'] ?>');">
                                    <div class="container">
                                        <div class="row ">
                                            <div class="col-lg-12">
                                                <div class="hero-slider-content hero-slider-content--left-space p-4" style="background-color: #343a4073!important;">
                                                    <p class="slider-title slider-title--big-light text-light">Neraca Multiscale</p>
                                                    <p class="slider-title slider-title--big-bold text-light"><?= $ban['banner_judul'] ?></p>
                                                    <p class="slider-title slider-title--small text-light"><?= $ban['banner_deskripsi'] ?></p>
                                                    <a class="hero-slider-button btn-light" href="shop-left-sidebar.html"> <i class="ion-ios-plus-empty"></i> Lihat</a>
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
                                <?php
                                $no = 1;
                                 foreach ($kategori as $key => $value): ?>
                                    
                                    
                                <a class="nav-item nav-link <?php if ($key==0): ?>
                                active
                            <?php endif ?>" id="product-tab-'<?= $no ?>'" data-toggle="tab" href="#<?= str_replace(' ','-',$value['kategori_nama']) ?>" role="tab" aria-selected="true"><?= $value['kategori_nama'] ?></a>
                                
                                <?php 
                                $no++;
                                endforeach ?>
                                
                                
                            </div>
                        </div>

                        <!--=======  End of tab product navigation  =======-->

                        <!--=======  tab product content  =======-->
                        <div class="tab-content">

                            <?php 
                            $noo = 1;
                            foreach ($kategori as $index => $va): ?>
                                
                            
                            <div class="tab-pane fade show <?php if ($index==0): ?>
                                active
                            <?php endif ?>" id="<?= str_replace(' ','-',$va['kategori_nama']) ?>" role="tabpanel" aria-labelledby="product-tab-'<?= $noo ?>'">
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
                                        

                                    <?php 
                                        $list_produk = $this->ProdukModel->lihat_produk_by_kategori($va['kategori_id']);
                                     ?>


                                    <?php foreach ($list_produk as $val): ?>
                                        
                                        
                                        <div class="col">
                                            <!--=======  single grid product  =======-->
                                            <div class="single-grid-product">
                                                <div class="single-grid-product__image">

                                                    <a href="<?= base_url() ?>produk/<?= $val['produk_id'] ?>">
                                                        <img src="<?= base_url() ?>assets/upload/images/produk/<?= $val['produk_foto'] ?>" class="img-fluid" alt="">
                                                        <img src="<?= base_url() ?>assets/upload/images/produk/<?= $val['produk_foto'] ?>" class="img-fluid" alt="">
                                                    </a>

                                                    
                                                </div>
                                                <div class="single-grid-product__content">
                                                    <div class="single-grid-product__category-rating">
                                                        <span class="category"><a href="<?= base_url() ?>produk/<?= $val['produk_id'] ?>"><?= $val['kategori_nama'] ?></a></span>
                                                        <span class="rating"></span>
                                                    </div>

                                                     <a href="<?= base_url() ?>produk/<?= $val['produk_id'] ?>"><h5><?= $val['produk_nama'] ?></h5></a>       
                                                     <p class="single-grid-product__price"><?= $val['produk_deskripsi'] ?></p>
                                                </div>
                                            </div>
                                            <!--=======  End of single grid product  =======-->
                                        </div>
                                    <?php endforeach ?>
                                        

                                    </div>
                                </div>
                                <!--=======  End of single row slider wrapper  =======-->
                            </div>
                            <?php 
                            $noo++;
                            endforeach ?>
    
                            
                        </div>
                        <!--=======  End of tab product content  =======-->
                    </div>

                    <!--=======  End of tab slider wrapper  =======-->
                </div>
            </div>
        </div>
    </div>
    <!--====================  End of single row slider tab  ====================-->