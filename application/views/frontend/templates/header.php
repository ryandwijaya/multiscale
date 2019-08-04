<!DOCTYPE html>
<html class="no-js" lang="zxx">



<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Nerace Multi Scale</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="icon" href="<?= base_url() ?>assets/frontend/img/favicon.ico">

    <!--=============================================
    =            CSS  files       =
    =============================================-->

    <!-- Vendor CSS -->
    <link href="<?= base_url() ?>assets/frontend/css/vendors.css" rel="stylesheet">
    <!-- Main CSS -->
    <link href="<?= base_url() ?>assets/frontend/css/style.css" rel="stylesheet">


</head>

<body>
    <!--====================  header area ====================-->
    <div class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!--=======  header wrapper  =======-->
                    <div class="header-wrapper d-none d-lg-flex">
                        <!-- logo -->
                        <div class="logo">
                            <a href="<?= base_url() ?>">
                                <img src="<?= base_url() ?>assets/frontend/img/logo.png" class="img-fluid" alt="" width="80%">
                            </a>
                        </div>
                        <!-- menu wrapper -->
                        <div class="navigation-menu-wrapper">
                            <nav>
                                <ul>
                                     <li><a href="<?= base_url() ?>">HOME</a></li>

                                    <li class="menu-item-has-children"><a href="#">PAGES</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item-has-children"><a href="#">Page List One</a>
                                                <ul class="sub-menu">
                                                    <li><a href="cart.html">Cart</a></li>
                                                    <li><a href="checkout.html">Checkout</a></li>
                                                    <li><a href="wishlist.html">Wishlist</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children"><a href="#">page list two</a>
                                                <ul class="sub-menu">
                                                    <li><a href="my-account.html">My Account</a></li>
                                                    <li><a href="<?= base_url() ?>login">Login</a></li>
                                                    <li><a href="faq.html">FAQ</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children"><a href="#">Page list three</a>
                                                <ul class="sub-menu">
                                                    <li><a href="compare.html">Compare</a></li>
                                                    <li><a href="contact.html">Contact</a></li>
                                                    <li><a href="about.html">About Us</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="menu-item-has-children"><a href="#">SHOP</a>
                                        <ul class="mega-menu four-column">
                                            <li><a href="#">Shop Grid</a>
                                                <ul>
                                                    <li><a href="shop-3-column.html">shop 3 column</a></li>
                                                    <li><a href="shop-4-column.html">shop 4 column</a></li>
                                                    <li><a href="shop-left-sidebar.html">shop left sidebar</a></li>
                                                    <li><a href="shop-right-sidebar.html">shop right sidebar</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="shop-list-left-sidebar.html">Shop List</a>
                                                <ul>
                                                    <li><a href="shop-list.html">shop List</a></li>
                                                    <li><a href="shop-list-left-sidebar.html">shop List Left Sidebar</a></li>
                                                    <li><a href="shop-list-right-sidebar.html">shop List Right Sidebar</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="single-product.html">Single Product</a>
                                                <ul>
                                                    <li><a href="single-product.html">Single Product</a></li>
                                                    <li><a href="single-product-variable.html">Single Product variable</a></li>
                                                    <li><a href="single-product-affiliate.html">Single Product affiliate</a></li>
                                                    <li><a href="single-product-group.html">Single Product group</a></li>
                                                    <li><a href="single-product-tabstyle-2.html">Tab Style 2</a></li>
                                                    <li><a href="single-product-tabstyle-3.html">Tab Style 3</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="single-product.html">Single Product</a>
                                                <ul>
                                                    <li><a href="single-product-gallery-left.html">Gallery Left</a></li>
                                                    <li><a href="single-product-gallery-right.html">Gallery Right</a></li>
                                                    <li><a href="single-product-sticky-left.html">Sticky Left</a></li>
                                                    <li><a href="single-product-sticky-right.html">Sticky Right</a></li>
                                                    <li><a href="single-product-slider-box.html">Slider Box</a></li>
                                                </ul>
                                            </li>
                                            
                                        </ul>
                                    </li>

                                    <li class="menu-item-has-children"><a href="#">INDUSTRI</a>
                                        <ul class="sub-menu" style="width: 300px;">
                                            <li><a href="blog-left-sidebar.html">Kimiar</a></li>
                                            <li><a href="blog-right-sidebar.html">Farmasi dan Bioteknologi</a></li>
                                            <li><a href="blog-post-left-sidebar.html">Solusi Makanan dan Minuman</a></li>
                                            <li><a href="blog-post-right-sidebar.html">Akademis dan Pendidikan</a></li>
                                            <li><a href="blog-post-image-format.html">Laboratorium Pengujian dan Lembaga Kesehatan</a></li>
                                            <li><a href="blog-post-image-gallery.html">Komponen Logam, Plastik, dan Elektronik</a></li>
                                            <li><a href="blog-post-audio-format.html">Bahan Baku dan Perhiasan</a></li>
                                            <li><a href="blog-post-video-format.html">Pulp, Kertas & Tekstil</a></li>
                                            <li><a href="blog-post-video-format.html">Utilitas dan Pengelolaan Kota</a></li>
                                            <li><a href="blog-post-video-format.html">Ritel</a></li>
                                            <li><a href="blog-post-video-format.html">Rekayasa Mesin dan Peralatan Manufaktur</a></li>
                                            <li><a href="blog-post-video-format.html">Utilitas dan Pemerintahan</a></li>
                                            <li><a href="blog-post-video-format.html">Tranportasi dan Logistik</a></li>
                                        </ul>
                                    </li>
                                    
                                    <li class="menu-item-has-children"><a href="blog-left-sidebar.html">TENTANG KAMI</a>
                                        <ul class="sub-menu" style="width: 200px;">
                                            <li><a href="blog-left-sidebar.html">Job & Career</a></li>
                                            <li><a href="blog-right-sidebar.html">Quality</a></li>
                                            <li><a href="blog-right-sidebar.html">Keterangan Bisnis</a></li>
                                            <li><a href="blog-right-sidebar.html">Inovasi dan Kualitas</a></li>
                                            <li><a href="blog-right-sidebar.html">Keberadaan Secara Global</a></li>
                                            <li><a href="blog-right-sidebar.html">Sustainability</a></li>
                                            <li><a href="blog-right-sidebar.html">Management</a></li>
                                            <li><a href="blog-right-sidebar.html">Investor Relations</a></li>
                                            <li><a href="blog-right-sidebar.html">Ruang Berita</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="<?= base_url() ?>contact">CONTACT</a></li>
                                </ul>
                            </nav>
                        </div>
                        <!-- header icon -->
                        <div class="header-icon-wrapper">
                            <ul class="icon-list">
                                <li>
                                    <a href="javascript:void(0)" id="search-overlay-trigger">
                                        <i class="ion-ios-search-strong"></i>
                                    </a>
                                </li>
                                
                                <li>
                                    <div class="header-settings-icon">
                                        <a href="javascript:void(0)" class="header-settings-trigger" id="header-settings-trigger">
                                            <div class="setting-button">
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                            </div>
                                        </a>

                                        <!-- settings menu -->
                                        <div class="settings-menu-wrapper" id="settings-menu-wrapper">
                                            <div class="single-settings-block">
                                                <h4 class="title">MY ACCOUNT </h4>
                                                <ul>
                                                    <li><a href="<?= base_url() ?>login">Register</a></li>
                                                    <li><a href="<?= base_url() ?>login">Login</a></li>
                                                </ul>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--=======  End of header wrapper  =======-->

                    <!--=======  mobile navigation area  =======-->

                    <div class="header-mobile-navigation d-block d-lg-none">
                        <div class="row align-items-center">
                            <div class="col-6 col-md-6">
                                <div class="header-logo">
                                    <a href="index.html">
                                        <img src="<?= base_url() ?>assets/frontend/img/logo.png" class="img-fluid" alt="" width="80%">
                                    </a>
                                </div>
                            </div>
                            <div class="col-6 col-md-6">
                                <div class="mobile-navigation text-right">
                                    <div class="header-icon-wrapper">
                                        <ul class="icon-list justify-content-end">
                                            <li>
                                                <div class="header-cart-icon">
                                                    <a href="cart.html">
                                                        <i class="ion-bag"></i>
                                                        <span class="counter">3</span>
                                                    </a>
                                                </div>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)" class="mobile-menu-icon" id="mobile-menu-trigger"><i class="fa fa-bars"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--=======  End of mobile navigation area  =======-->

                </div>
            </div>
        </div>
    </div>
    <!--====================  End of header area  ====================-->

   <div class="page-content-area">
        <div class="container mt-5">
            <?php if ($this->session->flashdata('alert') == 'success_mail') { ?>
                <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-success hide-it">
                        <span>SUSKES!! Pesan anda sudah terkirim, kami akan merespon pesan anda melalui email. Pastikan email yang tertera adalah email aktif, Thx.</span>
                    </div>
                </div>
            </div>
            <?php } ?>
            

            
            
   
