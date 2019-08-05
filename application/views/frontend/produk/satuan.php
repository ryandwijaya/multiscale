
            <div class="row">
                <div class="col-lg-12">
                    <!--=======  page wrapper  =======-->
                    <div class="page-wrapper">
                        <div class="page-content-wrapper">
                            <!--=======  single product main content area  =======-->
                            <div class="single-product-main-content-area section-space">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <!--=======  product details slider area  =======-->

                                        <div class="product-details-slider-area">


                                            <div class="big-image-wrapper">

                                                <div class="product-details-big-image-slider-wrapper product-details-big-image-slider-wrapper--bottom-space ht-slick-slider" 
                                                >
                                                    <div class="single-image text-center p-5">
                                                        <img src="<?= base_url() ?>assets/upload/images/produk/<?= $produk['produk_foto'] ?>" class="img-fluid" alt="" style="width: 80%; margin:0 auto;">
                                                    </div>
                                                    
                                                </div>
                                            </div>


                                            
                                        </div>

                                        <!--=======  End of product details slider area  =======-->
                                    </div>
                                    <div class="col-lg-6">
                                        <!--=======  single product content description  =======-->
                                        <div class="single-product-content-description">
                                            <p class="single-info"><?= $produk['kategori_nama'] ?></a> </p>
                                            <h4 class="product-title"><?= $produk['produk_nama'] ?></h4>
                                            

                                            <p class="single-grid-product__price"><span class="discounted-price text-success">Rp. <?= $produk['produk_harga'] ?></span></p>

                                            <p class="single-info">Product Code: <span class="value">CODE123</span> </p>
                                            <p class="single-info">Availability: <span class="value">In Stock</span> </p>

                                            <p class="product-description"><?= $produk['produk_deskripsi'] ?></p>

                                            <!-- <div class="product-countdown" data-countdown="2019/09/01"></div> -->

                                            

            


                                        </div>
                                        <!--=======  End of single product content description  =======-->
                                    </div>
                                </div>
                            </div>
                            <!--=======  End of single product main content area  =======-->
                            <!--=======  product description review   =======-->

                            <div class="product-description-review-area">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <!--=======  product description review container  =======-->

                                        <div class="tab-slider-wrapper product-description-review-container  section-space--inner">
                                            <nav>
                                                <div class="nav nav-tabs justify-content-center" id="nav-tab" role="tablist">
                                                    <a class="nav-item nav-link active" id="description-tab" data-toggle="tab" href="#product-description" role="tab" aria-selected="true">Description</a>
                                                    <a class="nav-item nav-link" id="review-tab" data-toggle="tab" href="#review" role="tab" aria-selected="false">Reviews (1)</a>
                                                </div>
                                            </nav>
                                            <div class="tab-content" id="nav-tabContent">
                                                <div class="tab-pane fade show active" id="product-description" role="tabpanel" aria-labelledby="description-tab">
                                                    <!--=======  product description  =======-->

                                                    <div class="product-description">
                                                        <p>
                                                            <?= $produk['produk_deskripsi'] ?>
                                                        </p>
                                                    </div>

                                                    <!--=======  End of product description  =======-->
                                                </div>
                                                <div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby="review-tab">
                                                    <!--=======  review content  =======-->

                                                    <div class="product-rating-wrap">
                                                        
                                                        
                                                        <div class="ratings-wrapper">

                                                            <div class="sin-ratings">
                                                                <div class="rating-author">
                                                                    <h3>Cristopher Lee</h3>
                                                                    <div class="rating-star">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <span>(5)</span>
                                                                    </div>
                                                                </div>
                                                                <p>enim ipsam voluptatem quia voluptas sit
                                                                    aspernatur aut odit aut fugit, sed quia res eos
                                                                    qui ratione voluptatem sequi Neque porro
                                                                    quisquam est, qui dolorem ipsum quia dolor sit
                                                                    amet, consectetur, adipisci veli</p>
                                                            </div>

                                                            <div class="sin-ratings">
                                                                <div class="rating-author">
                                                                    <h3>Rashed Mahmud</h3>
                                                                    <div class="rating-star">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <span>(5)</span>
                                                                    </div>
                                                                </div>
                                                                <p>enim ipsam voluptatem quia voluptas sit
                                                                    aspernatur aut odit aut fugit, sed quia res eos
                                                                    qui ratione voluptatem sequi Neque porro
                                                                    quisquam est, qui dolorem ipsum quia dolor sit
                                                                    amet, consectetur, adipisci veli</p>
                                                            </div>

                                                            <div class="sin-ratings">
                                                                <div class="rating-author">
                                                                    <h3>Hasan Mubarak</h3>
                                                                    <div class="rating-star">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <span>(5)</span>
                                                                    </div>
                                                                </div>
                                                                <p>enim ipsam voluptatem quia voluptas sit
                                                                    aspernatur aut odit aut fugit, sed quia res eos
                                                                    qui ratione voluptatem sequi Neque porro
                                                                    quisquam est, qui dolorem ipsum quia dolor sit
                                                                    amet, consectetur, adipisci veli</p>
                                                            </div>

                                                        </div>
                                                        <div class="rating-form-wrapper fix">
                                                            <h3>Add your Comments</h3>
                                                            <form action="#">
                                                                <div class="rating-form row">
                                                                    <div class="col-12 mb-15">
                                                                        <h5>Rating:</h5>
                                                                        <div class="rating-star fix">
                                                                            <i class="fa fa-star-o"></i>
                                                                            <i class="fa fa-star-o"></i>
                                                                            <i class="fa fa-star-o"></i>
                                                                            <i class="fa fa-star-o"></i>
                                                                            <i class="fa fa-star-o"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6 col-12 form-group">
                                                                        <label for="name">Name:</label>
                                                                        <input id="name" placeholder="Name" type="text">
                                                                    </div>
                                                                    <div class="col-md-6 col-12 form-group">
                                                                        <label for="email">Email:</label>
                                                                        <input id="email" placeholder="Email" type="text">
                                                                    </div>
                                                                    <div class="col-12 form-group">
                                                                        <label for="your-review">Your Review:</label>
                                                                        <textarea name="review" id="your-review" placeholder="Write a review"></textarea>
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <input value="add review" type="submit">
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>

                                                    <!--=======  End of review content  =======-->
                                                </div>
                                            </div>
                                        </div>

                                        <!--=======  End of product description review container  =======-->
                                    </div>
                                </div>
                            </div>

                            <!--=======  End of product description review   =======-->
                            
                        </div>
                    </div>
                    <!--=======  End of page wrapper  =======-->
                </div>
            </div>
       
    <!--====================  End of page content area  ====================-->