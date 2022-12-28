@extends('layout.front.index')
@section('title')@section('title')
   Home
@endsection
@section('content')
<!-- SLIDER-AREA START  -->
<section class="slider-area slider-style-2">
    <div class="bend niceties preview-2">
        <div id="ensign-nivoslider" class="slides">
            <img src="{{ asset('front-end-assets/img/slider/slider-2/1.jpg') }}" alt="" title="#slider-direction-1"  />
            <img src="{{ asset('front-end-assets/img/slider/slider-2/2.jpg') }}" alt="" title="#slider-direction-1"  />
            <img src="{{ asset('front-end-assets/img/slider/slider-2/3.jpg') }}" alt="" title="#slider-direction-1"  />
        </div>
        <!-- direction 1 -->
        <div id="slider-direction-1" class="t-cn slider-direction">
            <div class="slider-progress"></div>
            <div class="slider-content t-lfl s-tb slider-1">
                <div class="title-container s-tb-c title-compress">
                    <div class="layer-1">
                        <div class="wow fadeInUpBig" data-wow-duration="2s" data-wow-delay="0.5s">
                            <h3 class="slider-title3 text-uppercase mb-0" >welcome to our</h3>
                        </div>
                        <div class="wow fadeInUpBig" data-wow-duration="2.5s" data-wow-delay="0.5s">
                            <h2 class="slider-title1 text-uppercase mb-0"><span class="d-none d-md-block">elegent </span>  furniture</h2>
                        </div>
                        <div class="wow fadeInUpBig" data-wow-duration="3s" data-wow-delay="0.5s">
                            <h2 class="slider-title2 text-uppercase" >gallery 2021</h2>y
                        </div>
                        <div class="wow fadeInUpBig" data-wow-duration="3.5s" data-wow-delay="0.5s">
                            <a href="#" class="button-one style-2 text-uppercase mt-20" data-text="Shop now">Shop now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- direction 2 -->
        <div id="slider-direction-2" class="slider-direction">
            <div class="slider-progress"></div>
            <div class="slider-content t-lfl s-tb slider-1">
                <div class="title-container s-tb-c title-compress">
                    <div class="layer-1">
                        <div class="wow fadeInUpBig" data-wow-duration="1s" data-wow-delay="0.5s">
                            <h3 class="slider-title3 text-uppercase mb-0" >welcome to our</h3>
                        </div>
                        <div class="wow fadeInUpBig" data-wow-duration="1.5s" data-wow-delay="0.5s">
                            <h2 class="slider-title1 text-uppercase"><span class="d-none d-md-block">elegent </span> furniture</h2>
                        </div>
                        <div class="wow fadeInUpBig" data-wow-duration="2s" data-wow-delay="0.5s">
                            <p class="slider-pro-brief">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.  If you are going to use a  passage of Lorem Ipsum, you need to be sure there hidden in the middle of text.</p>
                        </div>
                        <div class="wow fadeInUpBig" data-wow-duration="2.5s" data-wow-delay="0.5s">
                            <a href="#" class="button-one style-2 text-uppercase mt-20" data-text="Shop now">Shop now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- direction 3 -->
        <div id="slider-direction-3" class="slider-direction">
            <div class="slider-progress"></div>
            <div class="slider-content t-lfl s-tb slider-1">
                <div class="title-container s-tb-c title-compress">
                    <div class="layer-1">
                        <div class="wow fadeInUpBig" data-wow-duration="1s" data-wow-delay="0.5s">
                            <h3 class="slider-title3 text-uppercase mb-0" >welcome to our</h3>
                        </div>
                        <div class="wow fadeInUpBig" data-wow-duration="1.5s" data-wow-delay="0.5s">
                            <h2 class="slider-title1 text-uppercase mb-0"><span class="d-none d-md-block">elegent </span> furniture</h2>
                        </div>
                        <div class="wow fadeInUpBig" data-wow-duration="2s" data-wow-delay="0.5s">
                            <h2 class="slider-title2 text-uppercase" >gallery 2021</h2>
                        </div>
                        <div class="wow fadeInUpBig" data-wow-duration="2.5s" data-wow-delay="0.5s">
                            <p class="slider-pro-brief">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.  If you are going to use a  passage of Lorem Ipsum, you need to be sure there hidden in the middle of text.</p>
                        </div>
                        <div class="wow fadeInUpBig" data-wow-duration="3s" data-wow-delay="0.5s">
                            <a href="#" class="button-one style-2 text-uppercase mt-20" data-text="Shop now">Shop now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- SLIDER-AREA END -->
<!-- BANNER-AREA START -->
<div class="banner-area pt-80">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <!-- Single-banner start -->
                <div class="single-banner banner-1 banner-4">
                    <a class="banner-thumb" href="#"><img src="{{ asset('front-end-assets/img/banner/1.jpg') }}" alt="" /></a>
                    <span class="pro-label new-label">new</span>
                    <span class="price">$50.00</span>
                    <div class="banner-brief">
                        <h2 class="banner-title"><a href="#">Product name</a></h2>
                        <p class="mb-0">Furniture</p>
                    </div>
                    <a href="#" class="button-one font-16px" data-text="Buy now">Buy now</a>
                </div>
                <!-- Single-banner end -->
            </div>
            <div class="col-md-7">
                <!-- Single-banner start -->
                <div class="single-banner banner-3">
                    <a class="banner-thumb" href="#"><img src="{{ asset('front-end-assets/img/banner/4.jpg') }}" alt="" /></a>
                    <div class="banner-brief">
                        <h2 class="banner-title">
                            <a class="text-uppercase" href="#">design by <br />hurst <br />modern <br /><span>-2021</span></a>
                        </h2>
                    </div>
                </div>
                <!-- Single-banner end -->
            </div>
        </div>
    </div>
</div>
<!-- BANNER-AREA END -->
<!-- PRODUCT-AREA START -->
<div class="product-area pt-80 pb-30 product-style-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center">
                    <h2 class="title-border">Featured Products</h2>
                </div>
                <div class="product-slider style-2 arrow-left-right">
                    @include('Front._data')
                </div>
            </div>
        </div>
    </div>
</div>
<!-- PRODUCT-AREA END -->
<!-- DISCOUNT-PRODUCT START -->
<div class="discount-product-area discount-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8">
                <div class="row">
                    <div class="discount-product-slider dots-bottom-right">
                        <!-- single-discount-product start -->
                        <div class="col-lg-12">
                            <div class="discount-product">
                                <div class="row">
                                    <div class="col-lg-5 col-md-5 col-sm-6">
                                        <a href="single-blog.html">
                                            <img src="{{ asset('front-end-assets/img/discount/1.jpg') }}" alt="" />
                                        </a>
                                    </div>
                                    <div class="col-lg-7 col-md-7 col-sm-6">
                                        <div class="discount-info">
                                            <h1 class="text-dark-red">Discount 50%</h1>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed does eiusmodes tempor incididunt ut labore labore et labore et dolore magna aliqua. Ut enim ad minim venim.</p>
                                            <a class="button-2 text-dark-red text-uppercase" href="#">GET DISCOUNT <i class="zmdi zmdi-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- single-discount-product end -->
                        <!-- single-discount-product start -->
                        <div class="col-lg-12">
                            <div class="discount-product">
                                <div class="row">
                                    <div class="col-lg-5 col-md-5 col-sm-6">
                                        <a href="single-blog.html">
                                            <img src="{{ asset('front-end-assets/img/discount/6.jpg') }}" alt="" />
                                        </a>
                                    </div>
                                    <div class="col-lg-7 col-md-7 col-sm-6">
                                        <div class="discount-info">
                                            <h1 class="text-dark-red">Discount 50%</h1>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed does eiusmodes tempor incididunt ut labore labore et labore et dolore magna aliqua. Ut enim ad minim venim.</p>
                                            <a class="button-2 text-dark-red text-uppercase" href="#">GET DISCOUNT <i class="zmdi zmdi-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- single-discount-product end -->
                        <!-- single-discount-product start -->
                        <div class="col-lg-12">
                            <div class="discount-product">
                                <div class="row">
                                    <div class="col-lg-5 col-md-5 col-sm-6">
                                        <a href="single-blog.html">
                                            <img src="{{ asset('front-end-assets/img/discount/7.jpg') }}" alt="" />
                                        </a>
                                    </div>
                                    <div class="col-lg-7 col-md-7 col-sm-6">
                                        <div class="discount-info">
                                            <h1 class="text-dark-red">Discount 50%</h1>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed does eiusmodes tempor incididunt ut labore labore et labore et dolore magna aliqua. Ut enim ad minim venim.</p>
                                            <a class="button-2 text-dark-red text-uppercase" href="#">GET DISCOUNT <i class="zmdi zmdi-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- single-discount-product end -->
                        <!-- single-discount-product start -->
                        <div class="col-lg-12">
                            <div class="discount-product">
                                <div class="row">
                                    <div class="col-lg-5 col-md-5 col-sm-6">
                                        <a href="single-blog.html">
                                            <img src="{{ asset('front-end-assets/img/discount/8.jpg') }}" alt="" />
                                        </a>
                                    </div>
                                    <div class="col-lg-7 col-md-7 col-sm-6">
                                        <div class="discount-info">
                                            <h1 class="text-dark-red">Discount 50%</h1>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed does eiusmodes tempor incididunt ut labore labore et labore et dolore magna aliqua. Ut enim ad minim venim.</p>
                                            <a class="button-2 text-dark-red text-uppercase" href="#">GET DISCOUNT <i class="zmdi zmdi-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- single-discount-product end -->
                    </div>
                </div>
            </div>
            <!-- up-comming-product start -->
            <div class="col-lg-4 col-md-4">
                <div class="up-comming-product">
                    <div class="up-comming-img">
                        <a href="#"><img src="{{ asset('front-end-assets/img/product/up-comming.jpg') }}" alt="" /></a>
                    </div>
                    <div class="up-comming-info text-center">
                        <div class="up-comming-brief">
                            <h4 class="post-title"><a href="#">Indoor Furniture</a></h4>
                            <h4 class="comming-pro-price">$ 200.00</h4>
                        </div>
                        <div class="count-down">
                            <div data-countdown="2022/10/08"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- up-comming-product end -->
        </div>
    </div>
</div>
<!-- DISCOUNT-PRODUCT END -->
<!-- PURCHASE-ONLINE-AREA START -->
<div class="purchase-online-area pt-80 product-style-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center">
                    <h2 class="title-border">Purchase Online on Hurst</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12  text-center">
                <!-- Nav tabs -->
                <ul class="tab-menu nav clearfix">
                    <li><a class="active" href="#new-arrivals" data-bs-toggle="tab">New Arrivals</a></li>
                    <li><a href="#best-seller"  data-bs-toggle="tab">Best Seller </a></li>
                    <li><a href="#most-view" data-bs-toggle="tab">Most View </a></li>
                    <li><a href="#discounts" data-bs-toggle="tab">Discounts</a></li>
                </ul>
            </div>
            <div class="col-lg-12">
                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active" id="new-arrivals">
                        <div class="row">
                            <!-- Single-product start -->
                            <div class="col-xl-3 col-lg-4 col-md-6">
                                <div class="single-product">
                                    <div class="product-img">
                                        <span class="pro-label new-label">new</span>
                                        <span class="pro-price-2">$ 56.20</span>
                                        <a href="single-product.html"><img src="{{ asset('front-end-assets/img/product/6.jpg') }}" alt="" /></a>
                                    </div>
                                    <div class="product-info clearfix text-center">
                                        <div class="fix">
                                            <h4 class="post-title"><a href="#">dummy Product name</a></h4>
                                        </div>
                                        <div class="fix">
                                            <span class="pro-rating">
                                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star-half"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star-half"></i></a>
                                            </span>
                                        </div>
                                        <div class="product-action clearfix">
                                            <a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                            <a href="#" data-bs-toggle="modal"  data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
                                            <a href="#" data-bs-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                            <a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single-product end -->
                            <!-- Single-product start -->
                            <div class="col-xl-3 col-lg-4 col-md-6">
                                <div class="single-product">
                                    <div class="product-img">
                                        <span class="pro-label sale-label">sale</span>
                                        <span class="pro-price-2">$ 56.20</span>
                                        <a href="single-product.html"><img src="{{ asset('front-end-assets/img/product/7.jpg') }}" alt="" /></a>
                                    </div>
                                    <div class="product-info clearfix text-center">
                                        <div class="fix">
                                            <h4 class="post-title"><a href="#">dummy Product name</a></h4>
                                        </div>
                                        <div class="fix">
                                            <span class="pro-rating">
                                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star-half"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star-half"></i></a>
                                            </span>
                                        </div>
                                        <div class="product-action clearfix">
                                            <a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                            <a href="#" data-bs-toggle="modal"  data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
                                            <a href="#" data-bs-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                            <a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single-product end -->
                            <!-- Single-product start -->
                            <div class="col-xl-3 col-lg-4 col-md-6">
                                <div class="single-product">
                                    <div class="product-img">
                                        <span class="pro-price-2">$ 56.20</span>
                                        <a href="single-product.html"><img src="{{ asset('front-end-assets/img/product/7.jpg') }}" alt="" /></a>
                                    </div>
                                    <div class="product-info clearfix text-center">
                                        <div class="fix">
                                            <h4 class="post-title"><a href="#">dummy Product name</a></h4>
                                        </div>
                                        <div class="fix">
                                            <span class="pro-rating">
                                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star-half"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star-half"></i></a>
                                            </span>
                                        </div>
                                        <div class="product-action clearfix">
                                            <a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                            <a href="#" data-bs-toggle="modal"  data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
                                            <a href="#" data-bs-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                            <a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single-product end -->
                            <!-- Single-product start -->
                            <div class="col-xl-3 col-lg-4 col-md-6">
                                <div class="single-product">
                                    <div class="product-img">
                                        <span class="pro-label new-label">new</span>
                                        <span class="pro-price-2">$ 56.20</span>
                                        <a href="single-product.html"><img src="{{ asset('front-end-assets/img/product/5.jpg') }}" alt="" /></a>
                                    </div>
                                    <div class="product-info clearfix text-center">
                                        <div class="fix">
                                            <h4 class="post-title"><a href="#">dummy Product name</a></h4>
                                        </div>
                                        <div class="fix">
                                            <span class="pro-rating">
                                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star-half"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star-half"></i></a>
                                            </span>
                                        </div>
                                        <div class="product-action clearfix">
                                            <a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                            <a href="#" data-bs-toggle="modal"  data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
                                            <a href="#" data-bs-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                            <a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single-product end -->
                            <!-- Single-product start -->
                            <div class="col-xl-3 col-lg-4 col-md-6">
                                <div class="single-product">
                                    <div class="product-img">
                                        <span class="pro-label sale-label">sale</span>
                                        <span class="pro-price-2">$ 56.20</span>
                                        <a href="single-product.html"><img src="{{ asset('front-end-assets/img/product/10.jpg') }}"  alt="" /></a>
                                    </div>
                                    <div class="product-info clearfix text-center">
                                        <div class="fix">
                                            <h4 class="post-title"><a href="#">dummy Product name</a></h4>
                                        </div>
                                        <div class="fix">
                                            <span class="pro-rating">
                                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star-half"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star-half"></i></a>
                                            </span>
                                        </div>
                                        <div class="product-action clearfix">
                                            <a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                            <a href="#" data-bs-toggle="modal"  data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
                                            <a href="#" data-bs-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                            <a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single-product end -->
                            <!-- Single-product start -->
                            <div class="col-xl-3 col-lg-4 col-md-6">
                                <div class="single-product">
                                    <div class="product-img">
                                        <span class="pro-price-2">$ 56.20</span>
                                        <a href="single-product.html"><img src="{{ asset('front-end-assets/img/product/8.jpg') }}" alt="" /></a>
                                    </div>
                                    <div class="product-info clearfix text-center">
                                        <div class="fix">
                                            <h4 class="post-title"><a href="#">dummy Product name</a></h4>
                                        </div>
                                        <div class="fix">
                                            <span class="pro-rating">
                                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star-half"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star-half"></i></a>
                                            </span>
                                        </div>
                                        <div class="product-action clearfix">
                                            <a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                            <a href="#" data-bs-toggle="modal"  data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
                                            <a href="#" data-bs-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                            <a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single-product end -->
                            <!-- Single-product start -->
                            <div class="col-xl-3 col-lg-4 col-md-6">
                                <div class="single-product">
                                    <div class="product-img">
                                        <span class="pro-label new-label">new</span>
                                        <span class="pro-price-2">$ 56.20</span>
                                        <a href="single-product.html"><img src="{{ asset('front-end-assets/img/product/11.jpg') }}" alt="" /></a>
                                    </div>
                                    <div class="product-info clearfix text-center">
                                        <div class="fix">
                                            <h4 class="post-title"><a href="#">dummy Product name</a></h4>
                                        </div>
                                        <div class="fix">
                                            <span class="pro-rating">
                                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star-half"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star-half"></i></a>
                                            </span>
                                        </div>
                                        <div class="product-action clearfix">
                                            <a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                            <a href="#" data-bs-toggle="modal"  data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
                                            <a href="#" data-bs-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                            <a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single-product end -->
                            <!-- Single-product start -->
                            <div class="col-xl-3 col-lg-4 col-md-6">
                                <div class="single-product">
                                    <div class="product-img">
                                        <span class="pro-price-2">$ 56.20</span>
                                        <a href="single-product.html"><img src="{{ asset('front-end-assets/img/product/1.jpg') }}" alt="" /></a>
                                    </div>
                                    <div class="product-info clearfix text-center">
                                        <div class="fix">
                                            <h4 class="post-title"><a href="#">dummy Product name</a></h4>
                                        </div>
                                        <div class="fix">
                                            <span class="pro-rating">
                                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star-half"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star-half"></i></a>
                                            </span>
                                        </div>
                                        <div class="product-action clearfix">
                                            <a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                            <a href="#" data-bs-toggle="modal"  data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
                                            <a href="#" data-bs-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                            <a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single-product end -->
                        </div>
                    </div>
                    <div class="tab-pane" id="best-seller">
                        <div class="row">
                            <!-- Single-product start -->
                            <div class="col-xl-3 col-lg-4 col-md-6">
                                <div class="single-product">
                                    <div class="product-img">
                                        <span class="pro-label new-label">new</span>
                                        <span class="pro-price-2">$ 56.20</span>
                                        <a href="single-product.html"><img src="{{ asset('front-end-assets/img/product/8.jpg') }}" alt="" /></a>
                                    </div>
                                    <div class="product-info clearfix text-center">
                                        <div class="fix">
                                            <h4 class="post-title"><a href="#">dummy Product name</a></h4>
                                        </div>
                                        <div class="fix">
                                            <span class="pro-rating">
                                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star-half"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star-half"></i></a>
                                            </span>
                                        </div>
                                        <div class="product-action clearfix">
                                            <a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                            <a href="#" data-bs-toggle="modal"  data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
                                            <a href="#" data-bs-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                            <a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single-product end -->
                            <!-- Single-product start -->
                            <div class="col-xl-3 col-lg-4 col-md-6">
                                <div class="single-product">
                                    <div class="product-img">
                                        <span class="pro-price-2">$ 56.20</span>
                                        <a href="single-product.html"><img src="{{ asset('front-end-assets/img/product/10.jpg') }}" alt="" /></a>
                                    </div>
                                    <div class="product-info clearfix text-center">
                                        <div class="fix">
                                            <h4 class="post-title"><a href="#">dummy Product name</a></h4>
                                        </div>
                                        <div class="fix">
                                            <span class="pro-rating">
                                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star-half"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star-half"></i></a>
                                            </span>
                                        </div>
                                        <div class="product-action clearfix">
                                            <a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                            <a href="#" data-bs-toggle="modal"  data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
                                            <a href="#" data-bs-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                            <a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single-product end -->
                            <!-- Single-product start -->
                            <div class="col-xl-3 col-lg-4 col-md-6">
                                <div class="single-product">
                                    <div class="product-img">
                                        <span class="pro-label sale-label">sale</span>
                                        <span class="pro-price-2">$ 56.20</span>
                                        <a href="single-product.html"><img src="{{ asset('front-end-assets/img/product/11.jpg') }}" alt="" /></a>
                                    </div>
                                    <div class="product-info clearfix text-center">
                                        <div class="fix">
                                            <h4 class="post-title"><a href="#">dummy Product name</a></h4>
                                        </div>
                                        <div class="fix">
                                            <span class="pro-rating">
                                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star-half"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star-half"></i></a>
                                            </span>
                                        </div>
                                        <div class="product-action clearfix">
                                            <a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                            <a href="#" data-bs-toggle="modal"  data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
                                            <a href="#" data-bs-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                            <a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single-product end -->
                            <!-- Single-product start -->
                            <div class="col-xl-3 col-lg-4 col-md-6">
                                <div class="single-product">
                                    <div class="product-img">
                                        <span class="pro-price-2">$ 56.20</span>
                                        <a href="single-product.html"><img src="{{ asset('front-end-assets/img/product/9.jpg') }}" alt="" /></a>
                                    </div>
                                    <div class="product-info clearfix text-center">
                                        <div class="fix">
                                            <h4 class="post-title"><a href="#">dummy Product name</a></h4>
                                        </div>
                                        <div class="fix">
                                            <span class="pro-rating">
                                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star-half"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star-half"></i></a>
                                            </span>
                                        </div>
                                        <div class="product-action clearfix">
                                            <a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                            <a href="#" data-bs-toggle="modal"  data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
                                            <a href="#" data-bs-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                            <a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single-product end -->
                            <!-- Single-product start -->
                            <div class="col-xl-3 col-lg-4 col-md-6">
                                <div class="single-product">
                                    <div class="product-img">
                                        <span class="pro-label sale-label">sale</span>
                                        <span class="pro-price-2">$ 56.20</span>
                                        <a href="single-product.html"><img src="{{ asset('front-end-assets/img/product/7.jpg') }}" alt="" /></a>
                                    </div>
                                    <div class="product-info clearfix text-center">
                                        <div class="fix">
                                            <h4 class="post-title"><a href="#">dummy Product name</a></h4>
                                        </div>
                                        <div class="fix">
                                            <span class="pro-rating">
                                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star-half"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star-half"></i></a>
                                            </span>
                                        </div>
                                        <div class="product-action clearfix">
                                            <a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                            <a href="#" data-bs-toggle="modal"  data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
                                            <a href="#" data-bs-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                            <a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single-product end -->
                            <!-- Single-product start -->
                            <div class="col-xl-3 col-lg-4 col-md-6">
                                <div class="single-product">
                                    <div class="product-img">
                                        <span class="pro-label new-label">new</span>
                                        <span class="pro-price-2">$ 56.20</span>
                                        <a href="single-product.html"><img src="{{ asset('front-end-assets/img/product/4.jpg') }}" alt="" /></a>
                                    </div>
                                    <div class="product-info clearfix text-center">
                                        <div class="fix">
                                            <h4 class="post-title"><a href="#">dummy Product name</a></h4>
                                        </div>
                                        <div class="fix">
                                            <span class="pro-rating">
                                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star-half"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star-half"></i></a>
                                            </span>
                                        </div>
                                        <div class="product-action clearfix">
                                            <a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                            <a href="#" data-bs-toggle="modal"  data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
                                            <a href="#" data-bs-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                            <a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single-product end -->
                            <!-- Single-product start -->
                            <div class="col-xl-3 col-lg-4 col-md-6">
                                <div class="single-product">
                                    <div class="product-img">
                                        <span class="pro-price-2">$ 56.20</span>
                                        <a href="single-product.html"><img src="{{ asset('front-end-assets/img/product/3.jpg') }}" alt="" /></a>
                                    </div>
                                    <div class="product-info clearfix text-center">
                                        <div class="fix">
                                            <h4 class="post-title"><a href="#">dummy Product name</a></h4>
                                        </div>
                                        <div class="fix">
                                            <span class="pro-rating">
                                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star-half"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star-half"></i></a>
                                            </span>
                                        </div>
                                        <div class="product-action clearfix">
                                            <a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                            <a href="#" data-bs-toggle="modal"  data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
                                            <a href="#" data-bs-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                            <a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single-product end -->
                            <!-- Single-product start -->
                            <div class="col-xl-3 col-lg-4 col-md-6">
                                <div class="single-product">
                                    <div class="product-img">
                                        <span class="pro-price-2">$ 56.20</span>
                                        <a href="single-product.html"><img src="{{ asset('front-end-assets/img/product/2.jpg') }}" alt="" /></a>
                                    </div>
                                    <div class="product-info clearfix text-center">
                                        <div class="fix">
                                            <h4 class="post-title"><a href="#">dummy Product name</a></h4>
                                        </div>
                                        <div class="fix">
                                            <span class="pro-rating">
                                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star-half"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star-half"></i></a>
                                            </span>
                                        </div>
                                        <div class="product-action clearfix">
                                            <a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                            <a href="#" data-bs-toggle="modal"  data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
                                            <a href="#" data-bs-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                            <a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single-product end -->
                        </div>
                    </div>
                    <div class="tab-pane" id="most-view">
                        <div class="row">
                            <!-- Single-product start -->
                            <div class="col-xl-3 col-lg-4 col-md-6">
                                <div class="single-product">
                                    <div class="product-img">
                                        <span class="pro-label new-label">new</span>
                                        <span class="pro-price-2">$ 56.20</span>
                                        <a href="single-product.html"><img src="{{ asset('front-end-assets/img/product/2.jpg') }}" alt="" /></a>
                                    </div>
                                    <div class="product-info clearfix text-center">
                                        <div class="fix">
                                            <h4 class="post-title"><a href="#">dummy Product name</a></h4>
                                        </div>
                                        <div class="fix">
                                            <span class="pro-rating">
                                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star-half"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star-half"></i></a>
                                            </span>
                                        </div>
                                        <div class="product-action clearfix">
                                            <a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                            <a href="#" data-bs-toggle="modal"  data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
                                            <a href="#" data-bs-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                            <a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single-product end -->
                            <!-- Single-product start -->
                            <div class="col-xl-3 col-lg-4 col-md-6">
                                <div class="single-product">
                                    <div class="product-img">
                                        <span class="pro-label sale-label">sale</span>
                                        <span class="pro-price-2">$ 56.20</span>
                                        <a href="single-product.html"><img src="{{ asset('front-end-assets/img/product/2.jpg') }}" alt="" /></a>
                                    </div>
                                    <div class="product-info clearfix text-center">
                                        <div class="fix">
                                            <h4 class="post-title"><a href="#">dummy Product name</a></h4>
                                        </div>
                                        <div class="fix">
                                            <span class="pro-rating">
                                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star-half"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star-half"></i></a>
                                            </span>
                                        </div>
                                        <div class="product-action clearfix">
                                            <a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                            <a href="#" data-bs-toggle="modal"  data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
                                            <a href="#" data-bs-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                            <a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single-product end -->
                            <!-- Single-product start -->
                            <div class="col-xl-3 col-lg-4 col-md-6">
                                <div class="single-product">
                                    <div class="product-img">
                                        <span class="pro-label new-label">new</span>
                                        <span class="pro-price-2">$ 56.20</span>
                                        <a href="single-product.html"><img src="{{ asset('front-end-assets/img/product/9.jpg') }}" alt="" /></a>
                                    </div>
                                    <div class="product-info clearfix text-center">
                                        <div class="fix">
                                            <h4 class="post-title"><a href="#">dummy Product name</a></h4>
                                        </div>
                                        <div class="fix">
                                            <span class="pro-rating">
                                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star-half"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star-half"></i></a>
                                            </span>
                                        </div>
                                        <div class="product-action clearfix">
                                            <a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                            <a href="#" data-bs-toggle="modal"  data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
                                            <a href="#" data-bs-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                            <a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single-product end -->
                            <!-- Single-product start -->
                            <div class="col-xl-3 col-lg-4 col-md-6">
                                <div class="single-product">
                                    <div class="product-img">
                                        <span class="pro-label new-label">new</span>
                                        <span class="pro-price-2">$ 56.20</span>
                                        <a href="single-product.html"><img src="{{ asset('front-end-assets/img/product/8.jpg') }}" alt="" /></a>
                                    </div>
                                    <div class="product-info clearfix text-center">
                                        <div class="fix">
                                            <h4 class="post-title"><a href="#">dummy Product name</a></h4>
                                        </div>
                                        <div class="fix">
                                            <span class="pro-rating">
                                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star-half"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star-half"></i></a>
                                            </span>
                                        </div>
                                        <div class="product-action clearfix">
                                            <a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                            <a href="#" data-bs-toggle="modal"  data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
                                            <a href="#" data-bs-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                            <a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single-product end -->
                            <!-- Single-product start -->
                            <div class="col-xl-3 col-lg-4 col-md-6">
                                <div class="single-product">
                                    <div class="product-img">
                                        <span class="pro-label sale-label">sale</span>
                                        <span class="pro-price-2">$ 56.20</span>
                                        <a href="single-product.html"><img src="{{ asset('front-end-assets/img/product/7.jpg') }}" alt="" /></a>
                                    </div>
                                    <div class="product-info clearfix text-center">
                                        <div class="fix">
                                            <h4 class="post-title"><a href="#">dummy Product name</a></h4>
                                        </div>
                                        <div class="fix">
                                            <span class="pro-rating">
                                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star-half"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star-half"></i></a>
                                            </span>
                                        </div>
                                        <div class="product-action clearfix">
                                            <a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                            <a href="#" data-bs-toggle="modal"  data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
                                            <a href="#" data-bs-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                            <a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single-product end -->
                            <!-- Single-product start -->
                            <div class="col-xl-3 col-lg-4 col-md-6">
                                <div class="single-product">
                                    <div class="product-img">
                                        <span class="pro-label new-label">new</span>
                                        <span class="pro-price-2">$ 56.20</span>
                                        <a href="single-product.html"><img src="{{ asset('front-end-assets/img/product/6.jpg') }}" alt="" /></a>
                                    </div>
                                    <div class="product-info clearfix text-center">
                                        <div class="fix">
                                            <h4 class="post-title"><a href="#">dummy Product name</a></h4>
                                        </div>
                                        <div class="fix">
                                            <span class="pro-rating">
                                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star-half"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star-half"></i></a>
                                            </span>
                                        </div>
                                        <div class="product-action clearfix">
                                            <a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                            <a href="#" data-bs-toggle="modal"  data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
                                            <a href="#" data-bs-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                            <a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single-product end -->
                            <!-- Single-product start -->
                            <div class="col-xl-3 col-lg-4 col-md-6">
                                <div class="single-product">
                                    <div class="product-img">
                                        <span class="pro-price-2">$ 56.20</span>
                                        <a href="single-product.html"><img src="{{ asset('front-end-assets/img/product/8.jpg') }}" alt="" /></a>
                                    </div>
                                    <div class="product-info clearfix text-center">
                                        <div class="fix">
                                            <h4 class="post-title"><a href="#">dummy Product name</a></h4>
                                        </div>
                                        <div class="fix">
                                            <span class="pro-rating">
                                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star-half"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star-half"></i></a>
                                            </span>
                                        </div>
                                        <div class="product-action clearfix">
                                            <a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                            <a href="#" data-bs-toggle="modal"  data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
                                            <a href="#" data-bs-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                            <a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single-product end -->
                            <!-- Single-product start -->
                            <div class="col-xl-3 col-lg-4 col-md-6">
                                <div class="single-product">
                                    <div class="product-img">
                                        <span class="pro-label new-label">new</span>
                                        <span class="pro-price-2">$ 56.20</span>
                                        <a href="single-product.html"><img src="{{ asset('front-end-assets/img/product/8.jpg') }}" alt="" /></a>
                                    </div>
                                    <div class="product-info clearfix text-center">
                                        <div class="fix">
                                            <h4 class="post-title"><a href="#">dummy Product name</a></h4>
                                        </div>
                                        <div class="fix">
                                            <span class="pro-rating">
                                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star-half"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star-half"></i></a>
                                            </span>
                                        </div>
                                        <div class="product-action clearfix">
                                            <a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                            <a href="#" data-bs-toggle="modal"  data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
                                            <a href="#" data-bs-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                            <a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single-product end -->
                        </div>
                    </div>
                    <div class="tab-pane" id="discounts">
                        <div class="row">
                            <!-- Single-product start -->
                            <div class="col-xl-3 col-lg-4 col-md-6">
                                <div class="single-product">
                                    <div class="product-img">
                                        <span class="pro-label sale-label">sale</span>
                                        <span class="pro-price-2">$ 56.20</span>
                                        <a href="single-product.html"><img src="{{ asset('front-end-assets/img/product/8.jpg') }}" alt="" /></a>
                                    </div>
                                    <div class="product-info clearfix text-center">
                                        <div class="fix">
                                            <h4 class="post-title"><a href="#">dummy Product name</a></h4>
                                        </div>
                                        <div class="fix">
                                            <span class="pro-rating">
                                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star-half"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star-half"></i></a>
                                            </span>
                                        </div>
                                        <div class="product-action clearfix">
                                            <a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                            <a href="#" data-bs-toggle="modal"  data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
                                            <a href="#" data-bs-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                            <a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single-product end -->
                            <!-- Single-product start -->
                            <div class="col-xl-3 col-lg-4 col-md-6">
                                <div class="single-product">
                                    <div class="product-img">
                                        <span class="pro-label new-label">new</span>
                                        <span class="pro-price-2">$ 56.20</span>
                                        <a href="single-product.html"><img src="{{ asset('front-end-assets/img/product/8.jpg') }}" alt="" /></a>
                                    </div>
                                    <div class="product-info clearfix text-center">
                                        <div class="fix">
                                            <h4 class="post-title"><a href="#">dummy Product name</a></h4>
                                        </div>
                                        <div class="fix">
                                            <span class="pro-rating">
                                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star-half"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star-half"></i></a>
                                            </span>
                                        </div>
                                        <div class="product-action clearfix">
                                            <a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                            <a href="#" data-bs-toggle="modal"  data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
                                            <a href="#" data-bs-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                            <a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single-product end -->
                            <!-- Single-product start -->
                            <div class="col-xl-3 col-lg-4 col-md-6">
                                <div class="single-product">
                                    <div class="product-img">
                                        <span class="pro-price-2">$ 56.20</span>
                                        <a href="single-product.html"><img src="{{ asset('front-end-assets/img/product/8.jpg') }}" alt="" /></a>
                                    </div>
                                    <div class="product-info clearfix text-center">
                                        <div class="fix">
                                            <h4 class="post-title"><a href="#">dummy Product name</a></h4>
                                        </div>
                                        <div class="fix">
                                            <span class="pro-rating">
                                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star-half"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star-half"></i></a>
                                            </span>
                                        </div>
                                        <div class="product-action clearfix">
                                            <a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                            <a href="#" data-bs-toggle="modal"  data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
                                            <a href="#" data-bs-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                            <a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single-product end -->
                            <!-- Single-product start -->
                            <div class="col-xl-3 col-lg-4 col-md-6">
                                <div class="single-product">
                                    <div class="product-img">
                                        <span class="pro-price-2">$ 56.20</span>
                                        <a href="single-product.html"><img src="{{ asset('front-end-assets/img/product/6.jpg') }}" alt="" /></a>
                                    </div>
                                    <div class="product-info clearfix text-center">
                                        <div class="fix">
                                            <h4 class="post-title"><a href="#">dummy Product name</a></h4>
                                        </div>
                                        <div class="fix">
                                            <span class="pro-rating">
                                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star-half"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star-half"></i></a>
                                            </span>
                                        </div>
                                        <div class="product-action clearfix">
                                            <a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                            <a href="#" data-bs-toggle="modal"  data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
                                            <a href="#" data-bs-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                            <a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single-product end -->
                            <!-- Single-product start -->
                            <div class="col-xl-3 col-lg-4 col-md-6">
                                <div class="single-product">
                                    <div class="product-img">
                                        <span class="pro-price-2">$ 56.20</span>
                                        <a href="single-product.html"><img src="{{ asset('front-end-assets/img/product/6.jpg') }}" alt="" /></a>
                                    </div>
                                    <div class="product-info clearfix text-center">
                                        <div class="fix">
                                            <h4 class="post-title"><a href="#">dummy Product name</a></h4>
                                        </div>
                                        <div class="fix">
                                            <span class="pro-rating">
                                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star-half"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star-half"></i></a>
                                            </span>
                                        </div>
                                        <div class="product-action clearfix">
                                            <a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                            <a href="#" data-bs-toggle="modal"  data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
                                            <a href="#" data-bs-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                            <a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single-product end -->
                            <!-- Single-product start -->
                            <div class="col-xl-3 col-lg-4 col-md-6">
                                <div class="single-product">
                                    <div class="product-img">
                                        <span class="pro-price-2">$ 56.20</span>
                                        <a href="single-product.html"><img src="{{ asset('front-end-assets/img/product/6.jpg') }}" alt="" /></a>
                                    </div>
                                    <div class="product-info clearfix text-center">
                                        <div class="fix">
                                            <h4 class="post-title"><a href="#">dummy Product name</a></h4>
                                        </div>
                                        <div class="fix">
                                            <span class="pro-rating">
                                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star-half"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star-half"></i></a>
                                            </span>
                                        </div>
                                        <div class="product-action clearfix">
                                            <a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                            <a href="#" data-bs-toggle="modal"  data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
                                            <a href="#" data-bs-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                            <a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single-product end -->
                            <!-- Single-product start -->
                            <div class="col-xl-3 col-lg-4 col-md-6">
                                <div class="single-product">
                                    <div class="product-img">
                                        <span class="pro-label sale-label">sale</span>
                                        <span class="pro-price-2">$ 56.20</span>
                                        <a href="single-product.html"><img src="{{ asset('front-end-assets/img/product/6.jpg') }}" alt="" /></a>
                                    </div>
                                    <div class="product-info clearfix text-center">
                                        <div class="fix">
                                            <h4 class="post-title"><a href="#">dummy Product name</a></h4>
                                        </div>
                                        <div class="fix">
                                            <span class="pro-rating">
                                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star-half"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star-half"></i></a>
                                            </span>
                                        </div>
                                        <div class="product-action clearfix">
                                            <a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                            <a href="#" data-bs-toggle="modal"  data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
                                            <a href="#" data-bs-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                            <a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single-product end -->
                            <!-- Single-product start -->
                            <div class="col-xl-3 col-lg-4 col-md-6">
                                <div class="single-product">
                                    <div class="product-img">
                                        <span class="pro-label new-label">new</span>
                                        <span class="pro-price-2">$ 56.20</span>
                                        <a href="single-product.html"><img src="{{ asset('front-end-assets/img/product/2.jpg') }}" alt="" /></a>
                                    </div>
                                    <div class="product-info clearfix text-center">
                                        <div class="fix">
                                            <h4 class="post-title"><a href="#">dummy Product name</a></h4>
                                        </div>
                                        <div class="fix">
                                            <span class="pro-rating">
                                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star-half"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star-half"></i></a>
                                            </span>
                                        </div>
                                        <div class="product-action clearfix">
                                            <a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                            <a href="#" data-bs-toggle="modal"  data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
                                            <a href="#" data-bs-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                            <a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single-product end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- PURCHASE-ONLINE-AREA END -->
<!-- BLGO-AREA START -->
<div class="blog-area blog-2 pt-50">
    <div class="container">
        <!-- Section-title start -->
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center">
                    <h2 class="title-border">From The Blog</h2>
                </div>
            </div>
        </div>
        <!-- Section-title end -->
        <div class="row">
            <!-- Single-blog start -->
            <div class="col-lg-4 col-md-6">
                <div class="single-blog mt-30">
                    <div class="blog-photo">
                        <a href="#"><img src="{{ asset('front-end-assets/img/blog/3.jpg') }}" alt="" /></a>
                        <div class="like-share text-center fix">
                            <a href="#"><i class="zmdi zmdi-favorite"></i><span>89 Like</span></a>
                            <a href="#"><i class="zmdi zmdi-comments"></i><span>59 Comments</span></a>
                            <a href="#"><i class="zmdi zmdi-share"></i><span>29 Share</span></a>
                        </div>
                    </div>
                    <div class="blog-info">
                        <div class="post-meta fix">
                            <div class="post-date floatleft"><span class="text-dark-red">30</span></div>
                            <div class="post-year floatleft">
                                <p class="text-uppercase text-dark-red mb-0">June, 2021</p>
                                <h4 class="post-title"><a href="#" tabindex="0">Farniture drawing 2021</a></h4>
                            </div>
                        </div>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered If you are going to use a passage  Lorem Ipsum, you alteration in some form.</p>
                        <a href="#" class="button-2 text-dark-red">Read more...</a>
                    </div>
                </div>
            </div>
            <!-- Single-blog end -->
            <!-- Single-blog start -->
            <div class="col-lg-4 col-md-6">
                <div class="single-blog mt-30">
                    <div class="blog-photo">
                        <a href="#"><img src="{{ asset('front-end-assets/img/blog/4.jpg') }}" alt="" /></a>
                        <div class="like-share text-center fix">
                            <a href="#"><i class="zmdi zmdi-favorite"></i><span>89 Like</span></a>
                            <a href="#"><i class="zmdi zmdi-comments"></i><span>59 Comments</span></a>
                            <a href="#"><i class="zmdi zmdi-share"></i><span>29 Share</span></a>
                        </div>
                    </div>
                    <div class="blog-info">
                        <div class="post-meta fix">
                            <div class="post-date floatleft"><span class="text-dark-red">30</span></div>
                            <div class="post-year floatleft">
                                <p class="text-uppercase text-dark-red mb-0">June, 2021</p>
                                <h4 class="post-title"><a href="#" tabindex="0">Farniture drawing 2021</a></h4>
                            </div>
                        </div>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered If you are going to use a passage  Lorem Ipsum, you alteration in some form.</p>
                        <a href="#" class="button-2 text-dark-red">Read more...</a>
                    </div>
                </div>
            </div>
            <!-- Single-blog end -->
            <!-- Single-blog start -->
            <div class="col-lg-4 col-md-6">
                <div class="single-blog mt-30">
                    <div class="blog-photo">
                        <a href="#"><img src="{{ asset('front-end-assets/img/blog/5.jpg') }}" alt="" /></a>
                        <div class="like-share text-center fix">
                            <a href="#"><i class="zmdi zmdi-favorite"></i><span>89 Like</span></a>
                            <a href="#"><i class="zmdi zmdi-comments"></i><span>59 Comments</span></a>
                            <a href="#"><i class="zmdi zmdi-share"></i><span>29 Share</span></a>
                        </div>
                    </div>
                    <div class="blog-info">
                        <div class="post-meta fix">
                            <div class="post-date floatleft"><span class="text-dark-red">30</span></div>
                            <div class="post-year floatleft">
                                <p class="text-uppercase text-dark-red mb-0">June, 2021</p>
                                <h4 class="post-title"><a href="#" tabindex="0">Farniture drawing 2021</a></h4>
                            </div>
                        </div>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered If you are going to use a passage  Lorem Ipsum, you alteration in some form.</p>
                        <a href="#" class="button-2 text-dark-red">Read more...</a>
                    </div>
                </div>
            </div>
            <!-- Single-blog end -->
        </div>
    </div>
</div>
<!-- BLGO-AREA END -->
<!-- BRAND-LOGO-AREA START -->
<div class="brand-logo-area pt-80">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="brand">
                    <div class="brand-slider">
                        <div class="single-brand">
                            <a href="https://themeforest.net/user/bootexperts/portfolio" target="_blank"><img src="{{ asset('front-end-assets/img/brand/1.png') }}" alt="" /></a>
                        </div>
                        <div class="single-brand">
                            <a href="https://themeforest.net/user/codecarnival/portfolio" target="_blank"><img src="{{ asset('front-end-assets/img/brand/2.png') }}" alt="" /></a>
                        </div>
                        <div class="single-brand">
                            <a href="https://themeforest.net/user/devitems/portfolio" target="_blank"><img src="{{ asset('front-end-assets/img/brand/3.png') }}" alt="" /></a>
                        </div>
                        <div class="single-brand">
                            <a href="https://themeforest.net/user/hastech/portfolio" target="_blank"><img src="{{ asset('front-end-assets/img/brand/4.png') }}" alt="" /></a>
                        </div>
                        <div class="single-brand">
                            <a href="https://psdrightsell.com/" target="_blank"><img src="{{ asset('front-end-assets/img/brand/5.png') }}" alt="" /></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
