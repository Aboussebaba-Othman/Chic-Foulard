@extends('layout.default')
@section('content')


        <section class="slider-main-area bg-black-light">
            <div class="main-slider an-si">
                <div class="bend niceties preview-2 hm-ver-1">
                    <div id="ensign-nivoslider-2" class="slides">
                        <img src="img/slider/slider-2.jpg" alt="" title="#slider-direction-1">
                        <img src="img/slider/slider-1.jpg" alt="" title="#slider-direction-3">
                        <img src="img/slider/slider-3.jpg" alt="" title="#slider-direction-2">
                    </div>
                    <!-- direction 1 -->
                    <div id="slider-direction-3" class="t-cn slider-direction Builder">
                        <div class="slide-all">
                            <!-- layer 1 -->
                            <div class="layer-1">
                                <h2 class="title5">new collection</h2>
                            </div>
                            <!-- layer 2 -->
                            <div class="layer-2">
                                <h2 class="title6">Men’s Fashion</h2>
                            </div>
                            <!-- layer 2 -->
                            <div class="layer-2">
                                <p class="title0">Save Up To 40% Off</p>
                            </div>
                            <!-- layer 3 -->
                            <div class="layer-3">
                                <a class="min1" href="#">Shop Now</a>
                            </div>
                        </div>
                    </div>
                    <div id="slider-direction-1" class="t-cn slider-direction Builder">
                        <div class="slide-all slide2">
                            <!-- layer 1 -->
                            <div class="layer-1">
                                <h2 class="title5">new collection</h2>
                            </div>
                            <!-- layer 2 -->
                            <div class="layer-2">
                                <h2 class="title6">Women’s Fashion</h2>
                            </div>
                            <!-- layer 2 -->
                            <div class="layer-2">
                                <p class="title0">Save Up To 40% Off</p>
                            </div>
                            <!-- layer 3 -->
                            <div class="layer-3">
                                <a class="min1" href="#">Shop Now</a>
                            </div>
                        </div>
                    </div>
                    <div id="slider-direction-2" class="t-cn slider-direction Builder">
                        <div class="slide-all2">
                            <!-- layer 1 -->
                            <div class="layer-1">
                                <h2 class="title5 s3">summer fashion for season</h2>
                            </div>
                            <!-- layer 2 -->
                            <div class="layer-2">
                                <h2 class="title6 s3">Women collection</h2>
                            </div>
                            <!-- layer 2 -->
                            <div class="layer-2">
                                <p class="title0 s3">Save Up To 40% Off</p>
                            </div>
                            <!-- layer 3 -->
                            <div class="layer-3">
                                <a class="min1" href="#">Shop Now</a>
                            </div>
                        </div>
                    </div>
			    </div>
            </div>
    </section>
        <div class="product-tab-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="features-tab indicator-style2">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="vc_tta-tab"><a href="#home" aria-controls="home" role="tab" data-bs-toggle="tab">BESTSELLER</a></li>
                                <li class="vc_tta-tab" role="presentation"><a class="active" href="#profile" aria-controls="profile" role="tab" data-bs-toggle="tab">NOUVEAUX PRODUITS</a></li>
                                {{-- <li class="vc_tta-tab" role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-bs-toggle="tab">MUST HAVE</a></li> --}}
                            </ul>
                          <!-- Tab panes -->
                            <div class="tab-content jump">
                                <div role="tabpanel" class="tab-pane" id="home">
                                    <div class="features-curosel2 indicator-style2 owl-carousel">
                                        <div class="tb-product-item-inner tb2 pct-last">
                                            <img alt="" src="img/product/1.jpg">
                                            {{-- <a class="la-icon" href="#productModal" title="Quick View" data-bs-toggle="modal"><i class="fa fa-eye"></i></a> --}}
                                            <div class="tb-content">
                                                <div class="tb-it">
                                                    <div class="tb-beg">
                                                        <a href="#">Leather Bag</a>
                                                    </div>
                                                    {{-- <div class="tb-product-wrap-price-rating">
                                                        <div class="tb-product-price font-noraure-3">
                                                            <span class="amount">$180.00</span>
                                                            <span class="amount2 ana">$170.00</span>
                                                        </div>
                                                    </div> --}}
                                                    {{-- <div class="last-cart l-mrgn">
                                                        <a class="las3" href="#"><i class="fa fa-heart"></i></a>
                                                        <a class="las4" href="#">Add To Cart</a>
                                                        <a class="las3 las7" href="#"><i class="fa fa-retweet"></i></a>
                                                    </div> --}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tb-product-item-inner tb2 pct-last">
                                            {{-- <span class="onsale two">Sale!</span> --}}
                                            <img alt="" src="img/product/9.jpg">
                                            {{-- <a class="la-icon" href="#productModal" title="Quick View" data-bs-toggle="modal"><i class="fa fa-eye"></i></a> --}}
                                            <div class="tb-content">
                                                <div class="tb-it">
                                                    <div class="tb-beg">
                                                        <a href="#">Glasses</a>
                                                    </div>
                                                    {{-- <div class="tb-product-wrap-price-rating">
                                                        <div class="tb-product-price font-noraure-3">
                                                            <span class="amount2 ana">$79.00 - </span>
                                                            <span class="amount2 ana">$100.00</span>
                                                        </div>
                                                    </div> --}}
                                                    {{-- <div class="last-cart l-mrgn">
                                                        <a class="las3" href="#"><i class="fa fa-heart"></i></a>
                                                        <a class="las4" href="#">Add To Cart</a>
                                                        <a class="las3 las7" href="#"><i class="fa fa-retweet"></i></a>
                                                    </div> --}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tb-product-item-inner tb2 pct-last">
                                            {{-- <span class="onsale">Sale!</span> --}}
                                            <img alt="" src="img/product/2 - Copie.jpg">
                                            {{-- <a class="la-icon" href="#productModal" title="Quick View" data-bs-toggle="modal"><i class="fa fa-eye"></i></a> --}}
                                            <div class="tb-content">
                                                <div class="tb-it">
                                                    <div class="tb-beg">
                                                        <a href="#">Skin Shoulder Bag</a>
                                                    </div>
                                                    {{-- <div class="tb-product-wrap-price-rating">
                                                        <div class="tb-product-price font-noraure-3">
                                                            <span class="amount2 ana">$170.00</span>
                                                        </div>
                                                    </div> --}}
                                                    {{-- <div class="last-cart l-mrgn">
                                                        <a class="las3" href="#"><i class="fa fa-heart"></i></a>
                                                        <a class="las4" href="#">Add To Cart</a>
                                                        <a class="las3 las7" href="#"><i class="fa fa-retweet"></i></a>
                                                    </div> --}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tb-product-item-inner tb2 pct-last">
                                            {{-- <span class="onsale">Sale!</span> --}}
                                            <img alt="" src="img/product/6 - Copie.jpg">
                                            {{-- <a class="la-icon" href="#productModal" title="Quick View" data-bs-toggle="modal"><i class="fa fa-eye"></i></a> --}}
                                            <div class="tb-content">
                                                <div class="tb-it">
                                                    <div class="tb-beg">
                                                        <a href="#">Vintage Glasses</a>
                                                    </div>
                                                    {{-- <div class="tb-product-wrap-price-rating">
                                                        <div class="tb-product-price font-noraure-3">
                                                            <span class="amount2 ana">$199.00</span>
                                                        </div>
                                                    </div> --}}
                                                    {{-- <div class="last-cart l-mrgn">
                                                        <a class="las3" href="#"><i class="fa fa-heart"></i></a>
                                                        <a class="las4" href="#">Add To Cart</a>
                                                        <a class="las3 las7" href="#"><i class="fa fa-retweet"></i></a>
                                                    </div> --}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tb-product-item-inner tb2 pct-last">
                                            <img alt="" src="img/product/5 - Copie.jpg">
                                            {{-- <a class="la-icon" href="#productModal" title="Quick View" data-bs-toggle="modal"><i class="fa fa-eye"></i></a> --}}
                                            <div class="tb-content">
                                                <div class="tb-it">
                                                    <div class="tb-beg">
                                                        <a href="#">Luxury Leather Bag</a>
                                                    </div>
                                                    {{-- <div class="tb-product-wrap-price-rating">
                                                        <div class="tb-product-price font-noraure-3">
                                                            <span class="amount2 ana">$150.00</span>
                                                        </div>
                                                    </div> --}}
                                                    {{-- <div class="last-cart l-mrgn">
                                                        <a class="las3" href="#"><i class="fa fa-heart"></i></a>
                                                        <a class="las4" href="#">Add To Cart</a>
                                                        <a class="las3 las7" href="#"><i class="fa fa-retweet"></i></a>
                                                    </div> --}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tb-product-item-inner tb2 pct-last">
                                            {{-- <span class="onsale two">Sale!</span> --}}
                                            <img alt="" src="img/product/3 - Copie.jpg">
                                            {{-- <a class="la-icon" href="#productModal" title="Quick View" data-bs-toggle="modal"><i class="fa fa-eye"></i></a> --}}
                                            <div class="tb-content">
                                                <div class="tb-it">
                                                    <div class="tb-beg">
                                                        <a href="#">Vintage Lambskin Shoe</a>
                                                    </div>
                                                    {{-- <div class="tb-product-wrap-price-rating">
                                                        <div class="tb-product-price font-noraure-3">
                                                            <span class="amount">$180.00</span>
                                                            <span class="amount2 ana">$170.00</span>
                                                        </div>
                                                    </div> --}}
                                                    {{-- <div class="last-cart l-mrgn">
                                                        <a class="las3" href="#"><i class="fa fa-heart"></i></a>
                                                        <a class="las4" href="#">Add To Cart</a>
                                                        <a class="las3 las7" href="#"><i class="fa fa-retweet"></i></a>
                                                    </div> --}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tb-product-item-inner tb2 pct-last">
                                            {{-- <span class="onsale">Sale!</span> --}}
                                            <img alt="" src="img/product/4 - Copie.jpg">
                                            {{-- <a class="la-icon" href="#productModal" title="Quick View" data-bs-toggle="modal"><i class="fa fa-eye"></i></a> --}}
                                            <div class="tb-content">
                                                <div class="tb-it">
                                                    <div class="tb-beg">
                                                        <a href="#">Skin Shoulder Bag</a>
                                                    </div>
                                                    {{-- <div class="tb-product-wrap-price-rating">
                                                        <div class="tb-product-price font-noraure-3">
                                                            <span class="amount2 ana">$170.00</span>
                                                        </div>
                                                    </div> --}}
                                                    {{-- <div class="last-cart l-mrgn">
                                                        <a class="las3" href="#"><i class="fa fa-heart"></i></a>
                                                        <a class="las4" href="#">Add To Cart</a>
                                                        <a class="las3 las7" href="#"><i class="fa fa-retweet"></i></a>
                                                    </div> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane active" id="profile">
                                    <div class="features-curosel2 indicator-style2 owl-carousel">
                                        <div class="tb-product-item-inner tb2 pct-last">
                                            {{-- <span class="onsale two">Sale!</span> --}}
                                            <img alt="" src="img/product/10.jpg">
                                            {{-- <a class="la-icon" href="#productModal" title="Quick View" data-bs-toggle="modal"><i class="fa fa-eye"></i></a> --}}
                                            <div class="tb-content">
                                                <div class="tb-it">
                                                    <div class="tb-beg">
                                                        <a href="#">Vintage Lambskin Shoe</a>
                                                    </div>
                                                    {{-- <div class="tb-product-wrap-price-rating">
                                                        <div class="tb-product-price font-noraure-3">
                                                            <span class="amount2 ana">$170.00</span>
                                                        </div>
                                                    </div> --}}
                                                    {{-- <div class="last-cart l-mrgn">
                                                        <a class="las3" href="#"><i class="fa fa-heart"></i></a>
                                                        <a class="las4" href="#">Add To Cart</a>
                                                        <a class="las3 las7" href="#"><i class="fa fa-retweet"></i></a>
                                                    </div> --}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tb-product-item-inner tb2 pct-last">
                                            <img alt="" src="img/product/2.jpg">
                                            <div class="tb-content">
                                                <div class="tb-it">
                                                    <div class="tb-beg">
                                                        <a href="#">Leather Shoe</a>
                                                    </div>
                                                    {{-- <div class="tb-product-wrap-price-rating">
                                                        <div class="tb-product-price font-noraure-3">
                                                            <span class="amount2 ana">$220.00</span>
                                                        </div>
                                                    </div> --}}
                                                    {{-- <div class="last-cart l-mrgn">
                                                        <a class="las3" href="#"><i class="fa fa-heart"></i></a>
                                                        <a class="las4" href="#">Add To Cart</a>
                                                        <a class="las3 las7" href="#"><i class="fa fa-retweet"></i></a>
                                                    </div> --}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tb-product-item-inner tb2 pct-last">
                                            {{-- <span class="onsale two">Sale!</span> --}}
                                            <img alt="" src="img/product/8.jpg">
                                            <div class="tb-content">
                                                <div class="tb-it">
                                                    <div class="tb-beg">
                                                        <a href="#">Vintage Shoulder Bag</a>
                                                    </div>
                                                    {{-- <div class="tb-product-wrap-price-rating">
                                                        <div class="tb-product-price font-noraure-3">
                                                            <span class="amount2 ana">$99.00</span>
                                                        </div>
                                                    </div> --}}
                                                    {{-- <div class="last-cart l-mrgn">
                                                        <a class="las3" href="#"><i class="fa fa-heart"></i></a>
                                                        <a class="las4" href="#">Add To Cart</a>
                                                        <a class="las3 las7" href="#"><i class="fa fa-retweet"></i></a>
                                                    </div> --}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tb-product-item-inner tb2 pct-last">
                                            <img alt="" src="img/product/7.jpg">
                                            <div class="tb-content">
                                                <div class="tb-it">
                                                    <div class="tb-beg">
                                                        <a href="#">Leather Bag</a>
                                                    </div>
                                                    {{-- <div class="tb-product-wrap-price-rating">
                                                        <div class="tb-product-price font-noraure-3">
                                                            <span class="amount">$180.00</span>
                                                            <span class="amount2 ana">$170.00</span>
                                                        </div>
                                                    </div> --}}
                                                    {{-- <div class="last-cart l-mrgn">
                                                        <a class="las3" href="#"><i class="fa fa-heart"></i></a>
                                                        <a class="las4" href="#">Add To Cart</a>
                                                        <a class="las3 las7" href="#"><i class="fa fa-retweet"></i></a>
                                                    </div> --}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tb-product-item-inner tb2 pct-last">
                                            {{-- <span class="onsale">Sale!</span> --}}
                                            <img alt="" src="img/product/6.jpg">
                                            <div class="tb-content">
                                                <div class="tb-it">
                                                    <div class="tb-beg">
                                                        <a href="#">Vintage Glasses</a>
                                                    </div>
                                                    {{-- <div class="tb-product-wrap-price-rating">
                                                        <div class="tb-product-price font-noraure-3">
                                                            <span class="amount2 ana">$120.00</span>
                                                        </div>
                                                    </div> --}}
                                                    {{-- <div class="last-cart l-mrgn">
                                                        <a class="las3" href="#"><i class="fa fa-heart"></i></a>
                                                        <a class="las4" href="#">Add To Cart</a>
                                                        <a class="las3 las7" href="#"><i class="fa fa-retweet"></i></a>
                                                    </div> --}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tb-product-item-inner tb2 pct-last">
                                            {{-- <span class="onsale two">Sale!</span> --}}
                                            <img alt="" src="img/product/5.jpg">
                                            <div class="tb-content">
                                                <div class="tb-it">
                                                    <div class="tb-beg">
                                                        <a href="#">Luxury Leather Bag</a>
                                                    </div>
                                                    {{-- <div class="tb-product-wrap-price-rating">
                                                        <div class="tb-product-price font-noraure-3">
                                                            <span class="amount2 ana">$170.00</span>
                                                        </div>
                                                    </div> --}}
                                                    {{-- <div class="last-cart l-mrgn">
                                                        <a class="las3" href="#"><i class="fa fa-heart"></i></a>
                                                        <a class="las4" href="#">Add To Cart</a>
                                                        <a class="las3 las7" href="#"><i class="fa fa-retweet"></i></a>
                                                    </div> --}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tb-product-item-inner tb2 pct-last">
                                            <img alt="" src="img/product/4.jpg">
                                            <div class="tb-content">
                                                <div class="tb-it">
                                                    <div class="tb-beg">
                                                        <a href="#">Leather Bag</a>
                                                    </div>
                                                    {{-- <div class="tb-product-wrap-price-rating">
                                                        <div class="tb-product-price font-noraure-3">
                                                            <span class="amount">$180.00</span>
                                                            <span class="amount2 ana">$170.00</span>
                                                        </div>
                                                    </div> --}}
                                                    {{-- <div class="last-cart l-mrgn">
                                                        <a class="las3" href="#"><i class="fa fa-heart"></i></a>
                                                        <a class="las4" href="#">Add To Cart</a>
                                                        <a class="las3 las7" href="#"><i class="fa fa-retweet"></i></a>
                                                    </div> --}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tb-product-item-inner tb2 pct-last">
                                            {{-- <span class="onsale">Sale!</span> --}}
                                            <img alt="" src="img/product/3.jpg">
                                            <div class="tb-content">
                                                <div class="tb-it">
                                                    <div class="tb-beg">
                                                        <a href="#">Vintage Lambskin Shoe</a>
                                                    </div>
                                                    {{-- <div class="tb-product-wrap-price-rating">
                                                        <div class="tb-product-price font-noraure-3">
                                                            <span class="amount2 ana">$250.00</span>
                                                        </div>
                                                    </div> --}}
                                                    {{-- <div class="last-cart l-mrgn">
                                                        <a class="las3" href="#"><i class="fa fa-heart"></i></a>
                                                        <a class="las4" href="#">Add To Cart</a>
                                                        <a class="las3 las7" href="#"><i class="fa fa-retweet"></i></a>
                                                    </div> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="messages">
                                    <div class="features-curosel2 indicator-style2 owl-carousel">
                                        <div class="tb-product-item-inner tb2 pct-last">
                                            {{-- <span class="onsale">Sale!</span> --}}
                                            <img alt="" src="img/product/6.jpg">
                                            <div class="tb-content">
                                                <div class="tb-it">
                                                    <div class="tb-beg">
                                                        <a href="#">Vintage Glasses</a>
                                                    </div>
                                                    {{-- <div class="tb-product-wrap-price-rating">
                                                        <div class="tb-product-price font-noraure-3">
                                                            <span class="amount2 ana">$170.00</span>
                                                        </div>
                                                    </div> --}}
                                                    {{-- <div class="last-cart l-mrgn">
                                                        <a class="las3" href="#"><i class="fa fa-heart"></i></a>
                                                        <a class="las4" href="#">Add To Cart</a>
                                                        <a class="las3 las7" href="#"><i class="fa fa-retweet"></i></a>
                                                    </div> --}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tb-product-item-inner tb2 pct-last">
                                            {{-- <span class="onsale two">Sale!</span> --}}
                                            <img alt="" src="img/product/5.jpg">
                                            <div class="tb-content">
                                                <div class="tb-it">
                                                    <div class="tb-beg">
                                                        <a href="#">Luxury Leather Bag</a>
                                                    </div>
                                                    {{-- <div class="tb-product-wrap-price-rating">
                                                        <div class="tb-product-price font-noraure-3">
                                                            <span class="amount2 ana">$160.00</span>
                                                        </div>
                                                    </div> --}}
                                                    {{-- <div class="last-cart l-mrgn">
                                                        <a class="las3" href="#"><i class="fa fa-heart"></i></a>
                                                        <a class="las4" href="#">Add To Cart</a>
                                                        <a class="las3 las7" href="#"><i class="fa fa-retweet"></i></a>
                                                    </div> --}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tb-product-item-inner tb2 pct-last">
                                            <img alt="" src="img/product/4.jpg">
                                            <div class="tb-content">
                                                <div class="tb-it">
                                                    <div class="tb-beg">
                                                        <a href="#">Leather Bag</a>
                                                    </div>
                                                    {{-- <div class="tb-product-wrap-price-rating">
                                                        <div class="tb-product-price font-noraure-3">
                                                            <span class="amount">$180.00</span>
                                                            <span class="amount2 ana">$170.00</span>
                                                        </div>
                                                    </div> --}}
                                                    {{-- <div class="last-cart l-mrgn">
                                                        <a class="las3" href="#"><i class="fa fa-heart"></i></a>
                                                        <a class="las4" href="#">Add To Cart</a>
                                                        <a class="las3 las7" href="#"><i class="fa fa-retweet"></i></a>
                                                    </div> --}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tb-product-item-inner tb2 pct-last">
                                            {{-- <span class="onsale">Sale!</span> --}}
                                            <img alt="" src="img/product/3.jpg">
                                            <div class="tb-content">
                                                <div class="tb-it">
                                                    <div class="tb-beg">
                                                        <a href="#">Vintage Lambskin Shoe</a>
                                                    </div>
                                                    {{-- <div class="tb-product-wrap-price-rating">
                                                        <div class="tb-product-price font-noraure-3">
                                                            <span class="amount2 ana">$270.00</span>
                                                        </div>
                                                    </div> --}}
                                                    {{-- <div class="last-cart l-mrgn">
                                                        <a class="las3" href="#"><i class="fa fa-heart"></i></a>
                                                        <a class="las4" href="#">Add To Cart</a>
                                                        <a class="las3 las7" href="#"><i class="fa fa-retweet"></i></a>
                                                    </div> --}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tb-product-item-inner tb2 pct-last">
                                            {{-- <span class="onsale two">Sale!</span> --}}
                                            <img alt="" src="img/product/2.jpg">
                                            <div class="tb-content">
                                                <div class="tb-it">
                                                    <div class="tb-beg">
                                                        <a href="#">Leather Shoe</a>
                                                    </div>
                                                    {{-- <div class="tb-product-wrap-price-rating">
                                                        <div class="tb-product-price font-noraure-3">
                                                            <span class="amount2 ana">$120.00</span>
                                                        </div>
                                                    </div> --}}
                                                    {{-- <div class="last-cart l-mrgn">
                                                        <a class="las3" href="#"><i class="fa fa-heart"></i></a>
                                                        <a class="las4" href="#">Add To Cart</a>
                                                        <a class="las3 las7" href="#"><i class="fa fa-retweet"></i></a>
                                                    </div> --}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tb-product-item-inner tb2 pct-last">
                                            <img alt="" src="img/product/1.jpg">
                                            <div class="tb-content">
                                                <div class="tb-it">
                                                    <div class="tb-beg">
                                                        <a href="#">Leather Bag</a>
                                                    </div>
                                                    {{-- <div class="tb-product-wrap-price-rating">
                                                        <div class="tb-product-price font-noraure-3">
                                                            <span class="amount">$180.00</span>
                                                            <span class="amount2 ana">$170.00</span>
                                                        </div>
                                                    </div> --}}
                                                    {{-- <div class="last-cart l-mrgn">
                                                        <a class="las3" href="#"><i class="fa fa-heart"></i></a>
                                                        <a class="las4" href="#">Add To Cart</a>
                                                        <a class="las3 las7" href="#"><i class="fa fa-retweet"></i></a>
                                                    </div> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>	
                        		
                    </div>
                </div>
            </div>
        </div>
        
        <section class="client-area home-2 stripe-parallax-bg" data-parallax-speed="0.5">
            <div class="client-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-12 text-center">
                            <div class="client">
                                <div class="pro-text">
                                    <h3>Que disent les clients ?</h3>
                                    <img src="img/icon-img/underline-style-1.png" alt="">
                                </div>
                                <div class="client-all owl-carousel">
                                    <div class="client-slider">
                                        <div class="sppb-testimonial-message">
                                            <p>““Ce thème est entièrement personnalisable, épuré et offre toutes les options souhaitées. Vous ne souhaitez pas une mise en page plein écran ? Un simple mot ajouté au code suffit pour transformer le site en une version boîte… Le support client est absolument incomparable. Chaque question reçoit une aide précieuse, bien plus que ce que l'on pourrait attendre compte tenu du prix. Je ne peux que le recommander […]</p>
                                        </div>
                                        <div class="client-img">
                                            <img src="img/testimonial/item-11.png" alt="">
                                            <a href="#">
                                                <div class="ro-title">John Doe</div>
                                            </a>
                                            <span class="ro-company">Technical Support - Olker</span>
                                        </div>
                                    </div>
                                    <div class="client-slider">
                                        <div class="sppb-testimonial-message">
                                            <p>““Ce thème est entièrement personnalisable, épuré et offre toutes les options souhaitées. Vous ne souhaitez pas une mise en page plein écran ? Un simple mot ajouté au code suffit pour transformer le site en une version boîte… Le support client est absolument incomparable. Chaque question reçoit une aide précieuse, bien plus que ce que l'on pourrait attendre compte tenu du prix. Je ne peux que le recommander […]</p>
                                        </div>
                                        <div class="client-img">
                                            <img src="img/testimonial/elizabett.jpg" alt="">
                                            <a href="#">
                                            <div class="ro-title">Elizabeth Smith</div>
                                            </a>
                                            <span class="ro-company">Agency - Olker</span>
                                        </div>
                                    </div>
                                    <div class="client-slider">
                                        <div class="sppb-testimonial-message">
                                            <p>““Ce thème est entièrement personnalisable, épuré et offre toutes les options souhaitées. Vous ne souhaitez pas une mise en page plein écran ? Un simple mot ajouté au code suffit pour transformer le site en une version boîte… Le support client est absolument incomparable. Chaque question reçoit une aide précieuse, bien plus que ce que l'on pourrait attendre compte tenu du prix. Je ne peux que le recommander […]</p>
                                        </div>
                                        <div class="client-img">
                                            <img src="img/testimonial/user1.png" alt="">
                                            <a href="#">
                                            <div class="ro-title">John Doe</div>
                                            </a>
                                            <span class="ro-company">Technical Support - Olker</span>
                                        </div>
                                    </div>
                                    <div class="client-slider">
                                        <div class="sppb-testimonial-message">
                                            <p>““Ce thème est entièrement personnalisable, épuré et offre toutes les options souhaitées. Vous ne souhaitez pas une mise en page plein écran ? Un simple mot ajouté au code suffit pour transformer le site en une version boîte… Le support client est absolument incomparable. Chaque question reçoit une aide précieuse, bien plus que ce que l'on pourrait attendre compte tenu du prix. Je ne peux que le recommander […]</p>
                                        </div>
                                        <div class="client-img">
                                            <img src="img/testimonial/user2.jpg" alt="">
                                            <a href="#">
                                            <div class="ro-title">Diana John</div>
                                            </a>
                                            <span class="ro-company">Director Business - Olker</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="design-area again-design">
            <div class="container">
                {{-- <div class="bottom-design">
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-12">
                            <div class="tb-info-box">
                                <div class="tb-image">
                                    <img alt="" src="img/banner/img-1.jpg">
                                </div>
                                <div class="tb-content">
                                    <h5>NEW DESIGN</h5>
                                    <h3>SEND HER YOUR LOVE</h3>
                                    <h6><a href="#">GET IT NOW</a></h6>
                                </div>
                            </div>
                            <div class="tb-info-box bt-no">
                                <div class="tb-content">
                                    <h5>NEW DESIGN</h5>
                                    <h3>SEND HER YOUR LOVE</h3>
                                    <h6><a href="#">GET IT NOW</a></h6>
                                </div>
                                <div class="tb-image tb-right">
                                    <img alt="" src="img/banner/img-2.jpg">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="ro-info-box-wrap tpl3 fs">
                                <div class="tb-image">
                                    <img alt="" src="img/banner/img-3.jpg">
                                </div>
                                <div class="tb-content">
                                    <div class="tb-content-inner">
                                        <h5>MEN’S FASHION</h5>
                                        <h3>MID SEASON SALE</h3>
                                        <h6>
                                        <a href="#">VIEW COLLECTION</a>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="lastest-from">
                        <h3 class="display-5 fw-bold text-uppercase mb-4 border-bottom pb-2 shadow-sm" style="color: #840444; border-color: #840444;">Foulard en vedette</h3>
                        </div>
                    </div>
                </div>
                <div class="features-curosel2 indicator-style2 home-2 owl-carousel">
                    <div class="tb-product-item-inner tb2 pct-last">
                        <img alt="" src="img/product/1 - Copie.jpg">
                        {{-- <a class="la-icon" href="#productModal" title="Quick View" data-bs-toggle="modal"><i class="fa fa-eye"></i></a> --}}
                        <div class="tb-content">
                            <div class="tb-it">
                                <div class="tb-beg">
                                    <a href="#">Leather Bag</a>
                                </div>
                                {{-- <div class="tb-product-wrap-price-rating">
                                    <div class="tb-product-price font-noraure-3">
                                        <span class="amount">$180.00</span>
                                        <span class="amount2 ana">$170.00</span>
                                    </div>
                                </div>
                                <div class="last-cart l-mrgn">
                                    <a class="las3" href="#"><i class="fa fa-heart"></i></a>
                                    <a class="las4" href="#">Add To Cart</a>
                                    <a class="las3 las7" href="#"><i class="fa fa-retweet"></i></a>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    <div class="tb-product-item-inner tb2 pct-last">
                        {{-- <span class="onsale two">Sale!</span> --}}
                        <img alt="" src="img/product/9 - Copie.jpg">
                        {{-- <a class="la-icon" href="#productModal" title="Quick View" data-bs-toggle="modal"><i class="fa fa-eye"></i></a> --}}
                        <div class="tb-content">
                            <div class="tb-it">
                                <div class="tb-beg">
                                    <a href="#">Glasses</a>
                                </div>
                                {{-- <div class="tb-product-wrap-price-rating">
                                    <div class="tb-product-price font-noraure-3">
                                        <span class="amount2 ana">$79.00 - </span>
                                        <span class="amount2 ana">$100.00</span>
                                    </div>
                                </div>
                                <div class="last-cart l-mrgn">
                                    <a class="las3" href="#"><i class="fa fa-heart"></i></a>
                                    <a class="las4" href="#">Add To Cart</a>
                                    <a class="las3 las7" href="#"><i class="fa fa-retweet"></i></a>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    <div class="tb-product-item-inner tb2 pct-last">
                        {{-- <span class="onsale">Sale!</span> --}}
                        <img alt="" src="img/product/4.jpg">
                        {{-- <a class="la-icon" href="#productModal" title="Quick View" data-bs-toggle="modal"><i class="fa fa-eye"></i></a> --}}
                        <div class="tb-content">
                            <div class="tb-it">
                                <div class="tb-beg">
                                    <a href="#">Skin Shoulder Bag</a>
                                </div>
                                {{-- <div class="tb-product-wrap-price-rating">
                                    <div class="tb-product-price font-noraure-3">
                                        <span class="amount2 ana">$170.00</span>
                                    </div>
                                </div>
                                <div class="last-cart l-mrgn">
                                    <a class="las3" href="#"><i class="fa fa-heart"></i></a>
                                    <a class="las4" href="#">Add To Cart</a>
                                    <a class="las3 las7" href="#"><i class="fa fa-retweet"></i></a>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    <div class="tb-product-item-inner tb2 pct-last">
                        {{-- <span class="onsale">Sale!</span> --}}
                        <img alt="" src="img/product/9.jpg">
                        {{-- <a class="la-icon" href="#productModal" title="Quick View" data-bs-toggle="modal"><i class="fa fa-eye"></i></a> --}}
                        <div class="tb-content">
                            <div class="tb-it">
                                <div class="tb-beg">
                                    <a href="#">Vintage Glasses</a>
                                </div>
                                {{-- <div class="tb-product-wrap-price-rating">
                                    <div class="tb-product-price font-noraure-3">
                                        <span class="amount2 ana">$199.00</span>
                                    </div>
                                </div>
                                <div class="last-cart l-mrgn">
                                    <a class="las3" href="#"><i class="fa fa-heart"></i></a>
                                    <a class="las4" href="#">Add To Cart</a>
                                    <a class="las3 las7" href="#"><i class="fa fa-retweet"></i></a>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    <div class="tb-product-item-inner tb2 pct-last">
                        <img alt="" src="img/product/5.jpg">
                        {{-- <a class="la-icon" href="#productModal" title="Quick View" data-bs-toggle="modal"><i class="fa fa-eye"></i></a> --}}
                        <div class="tb-content">
                            <div class="tb-it">
                                <div class="tb-beg">
                                    <a href="#">Luxury Leather Bag</a>
                                </div>
                                {{-- <div class="tb-product-wrap-price-rating">
                                    <div class="tb-product-price font-noraure-3">
                                        <span class="amount2 ana">$150.00</span>
                                    </div>
                                </div>
                                <div class="last-cart l-mrgn">
                                    <a class="las3" href="#"><i class="fa fa-heart"></i></a>
                                    <a class="las4" href="#">Add To Cart</a>
                                    <a class="las3 las7" href="#"><i class="fa fa-retweet"></i></a>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    <div class="tb-product-item-inner tb2 pct-last">
                        {{-- <span class="onsale two">Sale!</span> --}}
                        <img alt="" src="img/product/8.jpg">
                        {{-- <a class="la-icon" href="#productModal" title="Quick View" data-bs-toggle="modal"><i class="fa fa-eye"></i></a> --}}
                        <div class="tb-content">
                            <div class="tb-it">
                                <div class="tb-beg">
                                    <a href="#">Vintage Lambskin Shoe</a>
                                </div>
                                {{-- <div class="tb-product-wrap-price-rating">
                                    <div class="tb-product-price font-noraure-3">
                                        <span class="amount">$180.00</span>
                                        <span class="amount2 ana">$170.00</span>
                                    </div>
                                </div>
                                <div class="last-cart l-mrgn">
                                    <a class="las3" href="#"><i class="fa fa-heart"></i></a>
                                    <a class="las4" href="#">Add To Cart</a>
                                    <a class="las3 las7" href="#"><i class="fa fa-retweet"></i></a>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    <div class="tb-product-item-inner tb2 pct-last">
                        {{-- <span class="onsale">Sale!</span> --}}
                        <img alt="" src="img/product/4.jpg">
                        {{-- <a class="la-icon" href="#productModal" title="Quick View" data-bs-toggle="modal"><i class="fa fa-eye"></i></a> --}}
                        <div class="tb-content">
                            <div class="tb-it">
                                <div class="tb-beg">
                                    <a href="#">Skin Shoulder Bag</a>
                                </div>
                                {{-- <div class="tb-product-wrap-price-rating">
                                    <div class="tb-product-price font-noraure-3">
                                        <span class="amount2 ana">$170.00</span>
                                    </div>
                                </div>
                                <div class="last-cart l-mrgn">
                                    <a class="las3" href="#"><i class="fa fa-heart"></i></a>
                                    <a class="las4" href="#">Add To Cart</a>
                                    <a class="las3 las7" href="#"><i class="fa fa-retweet"></i></a>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-12 text-center">
                        <div class="lastest-from">
                        <h3 class="display-5 fw-bold text-uppercase mb-4 border-bottom pb-2 shadow-sm" style="color: #840444; border-color: #840444;">Shales en vedette</h3>
                        </div>
                    </div>
                </div>
                <div class="features-curosel2 indicator-style2 home-2 owl-carousel">
                    <div class="tb-product-item-inner tb2 pct-last">
                        <img alt="" src="img/product/4 - Copie.jpg">
                        {{-- <a class="la-icon" href="#productModal" title="Quick View" data-bs-toggle="modal"><i class="fa fa-eye"></i></a> --}}
                        <div class="tb-content">
                            <div class="tb-it">
                                <div class="tb-beg">
                                    <a href="#">Leather Bag</a>
                                </div>
                                {{-- <div class="tb-product-wrap-price-rating">
                                    <div class="tb-product-price font-noraure-3">
                                        <span class="amount">$180.00</span>
                                        <span class="amount2 ana">$170.00</span>
                                    </div>
                                </div>
                                <div class="last-cart l-mrgn">
                                    <a class="las3" href="#"><i class="fa fa-heart"></i></a>
                                    <a class="las4" href="#">Add To Cart</a>
                                    <a class="las3 las7" href="#"><i class="fa fa-retweet"></i></a>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    <div class="tb-product-item-inner tb2 pct-last">
                        {{-- <span class="onsale two">Sale!</span> --}}
                        <img alt="" src="img/product/10.jpg">
                        {{-- <a class="la-icon" href="#productModal" title="Quick View" data-bs-toggle="modal"><i class="fa fa-eye"></i></a> --}}
                        <div class="tb-content">
                            <div class="tb-it">
                                <div class="tb-beg">
                                    <a href="#">Glasses</a>
                                </div>
                                {{-- <div class="tb-product-wrap-price-rating">
                                    <div class="tb-product-price font-noraure-3">
                                        <span class="amount2 ana">$79.00 - </span>
                                        <span class="amount2 ana">$100.00</span>
                                    </div>
                                </div>
                                <div class="last-cart l-mrgn">
                                    <a class="las3" href="#"><i class="fa fa-heart"></i></a>
                                    <a class="las4" href="#">Add To Cart</a>
                                    <a class="las3 las7" href="#"><i class="fa fa-retweet"></i></a>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    <div class="tb-product-item-inner tb2 pct-last">
                        {{-- <span class="onsale">Sale!</span> --}}
                        <img alt="" src="img/product/7.jpg">
                        {{-- <a class="la-icon" href="#productModal" title="Quick View" data-bs-toggle="modal"><i class="fa fa-eye"></i></a> --}}
                        <div class="tb-content">
                            <div class="tb-it">
                                <div class="tb-beg">
                                    <a href="#">Skin Shoulder Bag</a>
                                </div>
                                {{-- <div class="tb-product-wrap-price-rating">
                                    <div class="tb-product-price font-noraure-3">
                                        <span class="amount2 ana">$170.00</span>
                                    </div>
                                </div>
                                <div class="last-cart l-mrgn">
                                    <a class="las3" href="#"><i class="fa fa-heart"></i></a>
                                    <a class="las4" href="#">Add To Cart</a>
                                    <a class="las3 las7" href="#"><i class="fa fa-retweet"></i></a>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    <div class="tb-product-item-inner tb2 pct-last">
                        {{-- <span class="onsale">Sale!</span> --}}
                        <img alt="" src="img/product/3.jpg">
                        {{-- <a class="la-icon" href="#productModal" title="Quick View" data-bs-toggle="modal"><i class="fa fa-eye"></i></a> --}}
                        <div class="tb-content">
                            <div class="tb-it">
                                <div class="tb-beg">
                                    <a href="#">Vintage Glasses</a>
                                </div>
                                {{-- <div class="tb-product-wrap-price-rating">
                                    <div class="tb-product-price font-noraure-3">
                                        <span class="amount2 ana">$199.00</span>
                                    </div>
                                </div>
                                <div class="last-cart l-mrgn">
                                    <a class="las3" href="#"><i class="fa fa-heart"></i></a>
                                    <a class="las4" href="#">Add To Cart</a>
                                    <a class="las3 las7" href="#"><i class="fa fa-retweet"></i></a>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    <div class="tb-product-item-inner tb2 pct-last">
                        <img alt="" src="img/product/5 - Copie (2).jpg">
                        {{-- <a class="la-icon" href="#productModal" title="Quick View" data-bs-toggle="modal"><i class="fa fa-eye"></i></a> --}}
                        <div class="tb-content">
                            <div class="tb-it">
                                <div class="tb-beg">
                                    <a href="#">Luxury Leather Bag</a>
                                </div>
                                {{-- <div class="tb-product-wrap-price-rating">
                                    <div class="tb-product-price font-noraure-3">
                                        <span class="amount2 ana">$150.00</span>
                                    </div>
                                </div>
                                <div class="last-cart l-mrgn">
                                    <a class="las3" href="#"><i class="fa fa-heart"></i></a>
                                    <a class="las4" href="#">Add To Cart</a>
                                    <a class="las3 las7" href="#"><i class="fa fa-retweet"></i></a>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    <div class="tb-product-item-inner tb2 pct-last">
                        {{-- <span class="onsale two">Sale!</span> --}}
                        <img alt="" src="img/product/3 - Copie (2).jpg">
                        {{-- <a class="la-icon" href="#productModal" title="Quick View" data-bs-toggle="modal"><i class="fa fa-eye"></i></a> --}}
                        <div class="tb-content">
                            <div class="tb-it">
                                <div class="tb-beg">
                                    <a href="#">Vintage Lambskin Shoe</a>
                                </div>
                                {{-- <div class="tb-product-wrap-price-rating">
                                    <div class="tb-product-price font-noraure-3">
                                        <span class="amount">$180.00</span>
                                        <span class="amount2 ana">$170.00</span>
                                    </div>
                                </div>
                                <div class="last-cart l-mrgn">
                                    <a class="las3" href="#"><i class="fa fa-heart"></i></a>
                                    <a class="las4" href="#">Add To Cart</a>
                                    <a class="las3 las7" href="#"><i class="fa fa-retweet"></i></a>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    <div class="tb-product-item-inner tb2 pct-last">
                        {{-- <span class="onsale">Sale!</span> --}}
                        <img alt="" src="img/product/4 - Copie (2).jpg">
                        {{-- <a class="la-icon" href="#productModal" title="Quick View" data-bs-toggle="modal"><i class="fa fa-eye"></i></a> --}}
                        <div class="tb-content">
                            <div class="tb-it">
                                <div class="tb-beg">
                                    <a href="#">Skin Shoulder Bag</a>
                                </div>
                                {{-- <div class="tb-product-wrap-price-rating">
                                    <div class="tb-product-price font-noraure-3">
                                        <span class="amount2 ana">$170.00</span>
                                    </div>
                                </div>
                                <div class="last-cart l-mrgn">
                                    <a class="las3" href="#"><i class="fa fa-heart"></i></a>
                                    <a class="las4" href="#">Add To Cart</a>
                                    <a class="las3 las7" href="#"><i class="fa fa-retweet"></i></a>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="lastest-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="lastest-from res">
                            <h3>Lastest From Blogs</h3>
                        </div>
                    </div>
                </div>
                <div class="slider-active-two indicator-style2 owl-carousel">
                    <div class="tb-post-item">
                        <a href="#">
                            <div class="tb-thumb">
                                <img src="img/banner/l1.jpg" alt="">
                                <span class="tb-publish font-noraure-3">Dec / 11</span>
                            </div>
                        </a>
                        <div class="tb-content7">
                            <a href="#"><h4 class="tb-titlel">That most modern</h4></a>
                            <div class="tb-excerpt"> The summer holidays are wonderful. Dressing for them can be significantly less so: Packing{...} </div>
                        </div>
                    </div>
                    <div class="tb-post-item">
                        <a href="#">
                            <div class="tb-thumb">
                                <img src="img/banner/l2.jpg" alt="">
                                <span class="tb-publish font-noraure-3">Nov / 28</span>
                            </div>
                        </a>
                        <div class="tb-content7">
                            <a href="#"><h4 class="tb-titlel">Glance Into the Future of Androids</h4></a>
                            <div class="tb-excerpt"> The summer holidays are wonderful. Dressing for them can be significantly less so: Packing{...} </div>
                        </div>
                    </div>
                    <div class="tb-post-item">
                        <a href="#">
                            <div class="tb-thumb">
                                <img src="img/banner/l3.jpg" alt="">
                                <span class="tb-publish font-noraure-3">Dec / 11</span>
                            </div>
                        </a>
                        <div class="tb-content7">
                            <a href="#"><h4 class="tb-titlel">Nullam at tellus vehicula</h4></a>
                            <div class="tb-excerpt"> The summer holidays are wonderful. Dressing for them can be significantly less so: Packing{...} </div>
                        </div>
                    </div>
                    <div class="tb-post-item">
                        <a href="#">
                            <div class="tb-thumb">
                                <img src="img/banner/l4.jpg" alt="">
                                <span class="tb-publish font-noraure-3">Nov / 26</span>
                            </div>
                        </a>
                        <div class="tb-content7">
                            <a href="#"><h4 class="tb-titlel">Summer Classics in Positano</h4></a>
                            <div class="tb-excerpt"> The summer holidays are wonderful. Dressing for them can be significantly less so: Packing{...} </div>
                        </div>
                    </div>
                    <div class="tb-post-item">
                        <a href="#">
                            <div class="tb-thumb">
                                <img src="img/banner/l5.jpg" alt="">
                                <span class="tb-publish font-noraure-3">Nov / 16</span>
                            </div>
                        </a>
                        <div class="tb-content7">
                            <a href="#"><h4 class="tb-titlel">Photography Tips From Wai Su</h4></a>
                            <div class="tb-excerpt"> The summer holidays are wonderful. Dressing for them can be significantly less so: Packing{...} </div>
                        </div>
                    </div>
                    <div class="tb-post-item">
                        <a href="#">
                            <div class="tb-thumb">
                                <img src="img/banner/l1.jpg" alt="">
                                <span class="tb-publish font-noraure-3">Dec / 11</span>
                            </div>
                        </a>
                        <div class="tb-content7">
                            <a href="#"><h4 class="tb-titlel">Nullam at tellus vehicula</h4></a>
                            <div class="tb-excerpt"> The summer holidays are wonderful. Dressing for them can be significantly less so: Packing{...} </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="money-area home-2 stripe-parallax-bg" data-parallax-speed="0.5">
            <div class="money-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 text-center">
                            <div class="free-shopping-area">
                                <a href="#">
                                    <div class="tb-service">
                                        <div class="tb-icon">
                                            <i class="fa fa-truck"></i>
                                        </div>
                                        <h5 class="tb-title">LIVRAISON GRATUITE</h5>
                                        <div class="tb-content">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, news do eiusmod tempor incididunt ut labore et dolore.</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 text-center">
                            <div class="free-shopping-area">
                                <a href="#">
                                    <div class="tb-service">
                                        <div class="tb-icon">
                                            <i class="fa fa-mail-forward"></i>
                                        </div>
                                        <h5 class="tb-title">REMBOURSEMENT À 100 %</h5>
                                        <div class="tb-content">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, news do eiusmod tempor incididunt ut labore et dolore.</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 text-center">
                            <div class="free-shopping-area rp">
                                <a href="#">
                                    <div class="tb-service">
                                        <div class="tb-icon">
                                            <i class="fa fa-comments"></i>
                                        </div>
                                        <h5 class="tb-title">ASSISTANCE EN LIGNE</h5>
                                        <div class="tb-content">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, news do eiusmod tempor incididunt ut labore et dolore.</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="icon-slider-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="mates">
                            <img src="img/icon-slider/logo-05.png" alt="">
                        </div>
                        <div class="mates">
                            <img src="img/icon-slider/logo-03.png" alt="">
                        </div>
                        <div class="mates nm">
                            <img src="img/icon-slider/logo-02.png" alt="">
                        </div>
                        <div class="mates">
                            <img src="img/icon-slider/logo-01.png" alt="">
                        </div>
                        <div class="mates">
                            <img src="img/icon-slider/logo-04.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>



@stop