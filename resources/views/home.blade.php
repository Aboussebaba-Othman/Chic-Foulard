@extends('layout.default')
@section('content')


        <section class="slider-main-area bg-black-light">
            <div class="main-slider an-si">
                <div class="bend niceties preview-2 hm-ver-1">
                    <div id="ensign-nivoslider-2" class="slides">
                        <img src="img/slider/slider-2.jpg" alt="" title="#slider-direction-1">
                        {{-- <img src="img/slider/slider-1.jpg" alt="" title="#slider-direction-3">
                        <img src="img/slider/slider-3.jpg" alt="" title="#slider-direction-2"> --}}
                    </div>
                    <!-- direction 1 -->
                    <div id="slider-direction-3" class="t-cn slider-direction Builder">
                        <div class="slide-all">
                            <!-- layer 1 -->
                            {{-- <div class="layer-1">
                                <h2 class="title5">new collection</h2>
                            </div> --}}
                            <!-- layer 2 -->
                            <div class="layer-2">
                                <h2 class="title6">Couvrez-vous d’élégance</h2>
                            </div>
                            <!-- layer 2 -->
                            <div class="layer-2">
                                <p class="title0" style="font-weight: 600;">Châles & Foulards pensés pour vous</p>
                            </div>
                            <!-- layer 3 -->
                            {{-- <div class="layer-3">
                                <a class="min1" href="#">Shop Now</a>
                            </div> --}}
                        </div>
                    </div>
                    <div id="slider-direction-1" class="t-cn slider-direction Builder">
                        <div class="slide-all">
                            <!-- layer 1 -->
                            {{-- <div class="layer-1">
                                <h2 class="title5">new collection</h2>
                            </div> --}}
                            <!-- layer 2 -->
                            <div class="layer-2">
                                <h2 class="title6">Couvrez-vous d’élégance</h2>
                            </div>
                            <!-- layer 2 -->
                            <div class="layer-2">
                                <p class="title0" style="font-weight: 600;">Châles & Foulards pensés pour vous</p>
                            </div>
                            <!-- layer 3 -->
                            {{-- <div class="layer-3">
                                <a class="min1" href="#">Shop Now</a>
                            </div> --}}
                        </div>
                    </div>
                    <div id="slider-direction-2" class="t-cn slider-direction Builder">
                        <div class="slide-all2">
                            <!-- layer 1 -->
                            {{-- <div class="layer-1">
                                <h2 class="title5 s3">summer fashion for season</h2>
                            </div> --}}
                            <!-- layer 2 -->
                            <div class="layer-2">
                                <h2 class="title6 s3">Enveloppez-vous d’élégance</h2>
                            </div>
                            <!-- layer 2 -->
                            <div class="layer-2">
                                <p class="title0 s3" style="font-weight: 600;">Châles & Foulards pensés pour vous</p>
                            </div>
                            <!-- layer 3 -->
                            {{-- <div class="layer-3">
                                <a class="min1" href="#">Shop Now</a>
                            </div> --}}
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
                                            <img alt="" src="img/product/10 - Copie.jpg">
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
    



<section class="about-section">
    <div class="container">
        <div class="row align-items-center">
            <!-- Contenu de gauche -->
            <div class="col-lg-6 col-md-12">
                <div class="content-wrapper">
                    <a href="" class="engagement-badge">
                        Notre engagement
                        <i class="fas fa-arrow-right"></i>
                    </a>
                    
                    <h2 class="main-title">
                        Notre histoire, notre vision et nos valeurs
                    </h2>
                    
                    <div class="accordion-container">
                        <div class="accordion custom-accordion" id="aboutAccordion">
                            <!-- Référence incontournable -->
                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        Notre histoire : référence incontournable depuis 1968
                                    </button>
                                </h3>
                                <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#aboutAccordion">
                                    <div class="accordion-body">
                                        Depuis 1968, Chic Foulard s'est imposé comme une référence incontournable dans la confection de châles et foulards au Maroc. Forts de plusieurs décennies de savoir-faire, nous nous engageons à offrir une qualité irréprochable, mêlant tradition artisanale et innovation textile.
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Capacité de production -->
                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Notre vision : excellence et capacité de production
                                    </button>
                                </h3>
                                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#aboutAccordion">
                                    <div class="accordion-body">
                                        Notre usine moderne, équipée pour répondre aux exigences du marché, permet une production pouvant atteindre jusqu'à 50 000 pièces par jour. Nous fabriquons tous types de châles et foulards — unis, imprimés, brodés ou personnalisés — en mettant un point d'honneur à respecter les standards les plus élevés.
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Présence nationale -->
                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Nos valeurs : présence nationale et qualité au service de nos clients
                                    </button>
                                </h3>
                                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#aboutAccordion">
                                    <div class="accordion-body">
                                        Grâce à un réseau de distribution solide, nous sommes présents dans les principales villes du Royaume, avec des points de vente partout au Maroc. Nos modèles, issus directement de notre usine, sont conçus pour répondre aux tendances actuelles tout en s'adaptant aux besoins spécifiques de nos clients.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Image de droite -->
            <div class="col-lg-6 col-md-12">
                <div class="image-container">
                    <img src="img/product/7.jpg" alt="Artisan ChicFoulard au travail" class="main-image">
                    <div class="heritage-badge" id="about">
                        Notre Héritage
                    </div>
                    <div class="year-badge">
                        DEPUIS<br>1968
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
        
         <section class="client-area home-2 stripe-parallax-bg" data-parallax-speed="0.5">
            <div class="client-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-12 text-center">
                            <div class="client">                                    
                                <div class="pro-text">
                                    <h3>Témoignages</h3>
                                    <img src="img/icon-img/underline-style-1.png" alt="">
                                </div>                                
                                <div class="testimonials-carousel-custom owl-carousel" id="testimonials-carousel">
                                    <div class="tb-product-item-inner tb2 pct-last">
                                        <div class="tb-content">
                                            <div class="sppb-testimonial-message">
                                                <p>"Je suis absolument ravie de mon achat chez Chic-Foulard ! La qualité du tissu est exceptionnelle et les motifs sont magnifiques. Je reçois toujours des compliments quand je porte mes foulards."</p>
                                            </div>
                                            <div class="ro-title">Youssra S.</div>
                                        </div>
                                    </div>                                    
                                    <div class="tb-product-item-inner tb2 pct-last">
                                        <div class="tb-content">
                                            <div class="sppb-testimonial-message">
                                                <p>"Service client impeccable ! J'ai eu un petit souci avec ma commande et l'équipe a été très réactive pour résoudre le problème. Les foulards sont élégants et polyvalents, parfaits pour toutes les occasions."</p>
                                            </div>
                                            <div class="ro-title">Amina E.</div>
                                        </div>
                                    </div>
                                    <div class="tb-product-item-inner tb2 pct-last">
                                        <div class="tb-content">
                                            <div class="sppb-testimonial-message">
                                                <p>"J'ai commandé plusieurs foulards pour offrir à ma famille et ils ont tous adoré ! La livraison a été rapide et l'emballage très soigné. Je recommande vivement Chic-Foulard pour des cadeaux élégants et de qualité."</p>
                                            </div>
                                            <div class="ro-title">Sarah A.</div>
                                        </div>
                                    </div>                                    
                                    <div class="tb-product-item-inner tb2 pct-last">
                                        <div class="tb-content">
                                            <div class="sppb-testimonial-message">
                                                <p>"Les foulards de Chic-Foulard sont devenus indispensables dans ma garde-robe. Ils ajoutent une touche d'élégance à n'importe quelle tenue. Le rapport qualité-prix est excellent !"</p>
                                            </div>
                                            <div class="ro-title">Kawtar Y.</div>
                                        </div>
                                    </div>
                                    <div class="tb-product-item-inner tb2 pct-last">
                                        <div class="tb-content">
                                            <div class="sppb-testimonial-message">
                                                <p>"J'adore la diversité des motifs proposés par Chic-Foulard. Il y en a pour tous les goûts et toutes les occasions. La qualité est au rendez-vous et les prix sont très raisonnables."</p>
                                            </div>
                                            <div class="ro-title">Alia M.</div>
                                        </div>
                                    </div>
                                    <div class="tb-product-item-inner tb2 pct-last">
                                        <div class="tb-content">
                                            <div class="sppb-testimonial-message">
                                                <p>"Depuis que j'ai découvert Chic-Foulard, je ne jure que par leurs produits ! Les foulards sont à la fois tendance et intemporels. Je suis une cliente fidèle et satisfaite."</p>
                                            </div>
                                            <div class="ro-title">Zineb S.</div>
                                        </div>
                                    </div>
                                </div> <!-- owl-carousel -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>        

        <script>
            
        </script>       
              <!-- Section Personnalisation (Version Simple) -->
        <section class="personalization-simple" style="padding: 60px 0; background: linear-gradient(135deg, #a39ea0 0%, #f2e9ee 100%); border-top: 1px solid rgba(132, 4, 68, 0.1); border-bottom: 1px solid rgba(132, 4, 68, 0.1);">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10 col-md-11 text-center">
                        <h2 style="color: #840444; font-weight: 700; text-transform: uppercase; letter-spacing: 2px; margin-bottom: 25px; font-size: 28px;">
                            Vous souhaitez personnaliser votre châle ou votre foulard ?
                        </h2>
                        
                        <a href="/contact" class="custom-btn" style="display: inline-block; background: #840444; color: white; font-weight: 600; padding: 15px 35px; border-radius: 5px; text-transform: uppercase; letter-spacing: 1px; text-decoration: none; transition: all 0.3s ease; box-shadow: 0 5px 15px rgba(132, 4, 68, 0.3); margin-top: 5px;">
                            Contactez-nous <i class="fa fa-arrow-right" style="margin-left: 8px;"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Fin Section Personnalisation -->
        
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
                        <div class="features-tab indicator-style2">
                            <h3 class="text-uppercase mb-4"  style="color: #840444; font-weight: 600;">FOULARD EN VEDETTE</h3>
                        </div>
                    </div>
                </div>
                <div class="features-curosel2 indicator-style2 home-2 owl-carousel">
                    <div class="tb-product-item-inner tb2 pct-last">
                        <img alt="" src="img/product/1 - Copie - Copie.jpg">
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
                        <img alt="" src="img/product/5 - Copie (3).jpg">
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
                        <img alt="" src="img/product/4 - Copie (3).jpg">
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
                        <img alt="" src="img/product/8 - Copie.jpg">
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
                        <img alt="" src="img/product/9 - Copie.jpg">
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
                        <img alt="" src="img/product/9 - Copie (2).jpg">
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
                        <img alt="" src="img/product/4 - Copie (4).jpg">
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
                <div class="row" style="margin-top: 65px">
                    <div class="col-md-12 text-center">
                        <div class="features-tab indicator-style2">
                            <h3 class="text-uppercase mb-4" style="color: #840444; font-weight: 600;" >CHALES EN VEDETTE</h3>
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
                        <img alt="" src="img/product/10 - Copie.jpg">
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
        <section class="money-area home-2 stripe-parallax-bg" data-parallax-speed="0.5">
            <div class="money-bg">
                <div class="container">
                    <div class="row">                        
                        <div class="col-md-12 text-center">
                            <div class="pro-text">
                                <h3 style="font-weight: 600; color: #ffffff; margin-bottom: 18px; text-transform: uppercase;">Nos Valeurs</h3>
                                <img src="img/icon-img/underline-style-1.png" style="margin-bottom: 9px" alt="">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 text-center">
                            <div class="free-shopping-area">
                                
                                    <div class="tb-service">
                                        <div class="tb-icon">
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h5 class="tb-title">Excellence & Qualité</h5>
                                        <div class="tb-content">
                                            <p>Chaque pièce est conçue avec soin, à partir de tissus rigoureusement sélectionnés, et fabriquée localement avec une grande précision, dans le respect du savoir-faire artisanal marocain.</p>
                                        </div>
                                    </div>
                                
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 text-center">
                            <div class="free-shopping-area">
                                
                                    <div class="tb-service">                                        <div class="tb-icon">
                                            <i class="fa fa-history"></i>
                                        </div>
                                        <h5 class="tb-title">Innovation ancrée dans la tradition</h5>
                                        <div class="tb-content">
                                            <p>Nos créations s’inspirent de l’élégance marocaine tout en intégrant les tendances modernes et les technologies de confection les plus avancées, pour offrir style et performance.</p>
                                        </div>
                                    </div>
                                
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 text-center">
                            <div class="free-shopping-area rp">
                                
                                    <div class="tb-service">
                                        <div class="tb-icon">
                                            <i class="fa fa-comments"></i>
                                        </div>
                                        <h5 class="tb-title">Engagement & Proximité</h5>
                                        <div class="tb-content">
                                            <p>Avec 22 points de vente à travers le Maroc, nous restons proches de nos clients, à l’écoute de leurs besoins, et engagés pour une mode plus responsable et accessible.</p>
                                        </div>
                                    </div>
                                
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
                        <div id="actualites">
                            <h3 style="font-weight: 600; color: #840444; margin-bottom: 48px; text-transform: uppercase;">Actualités</h3>
                        </div>
                    </div>
                </div><div class="slider-active-two indicator-style2 owl-carousel">
                    @forelse($articles as $article)
                    <div class="tb-post-item">
                        <a href="{{ route('articles.show', $article) }}" style="display: block; color: inherit; text-decoration: none;">
                            <div class="tb-thumb">
                                <img src="{{ asset($article->image ?? 'img/banner/default.jpg') }}" alt="{{ $article->title }}">
                                <span class="tb-publish font-noraure-3">{{ $article->created_at->format('M / d') }}</span>
                            </div>
                        
                            <div class="tb-content7">
                                <h4 class="tb-titlel">{{ $article->title }}</h4>                                <div class="tb-excerpt">{{ Str::limit(strip_tags($article->content), 100) }}</div>
                                <div class="mt-2">
                                    <span class="read-more-button" style="color: #840444; font-size: 14px; font-weight: 500; display: inline-block; transition: all 0.3s ease;">Lire la suite <i class="fa fa-arrow-right" style="font-size: 12px; margin-left: 5px; transition: transform 0.3s ease;"></i></span>
                                </div>
                            </div>
                        </a>
                    </div>
                    @empty
                    <div class="tb-post-item">
                        <a href="#">
                            <div class="tb-thumb">
                                <img src="img/banner/l1.jpg" alt="">
                                <span class="tb-publish font-noraure-3">Aucun article</span>
                            </div>
                        </a>
                        <div class="tb-content7">
                            <a href="#"><h4 class="tb-titlel">Aucun article disponible</h4></a>
                            <div class="tb-excerpt">Aucun article n'a été publié pour le moment.</div>
                        </div>
                    </div>
                    @endforelse
                </div>
            </div>
            
        </section>
        {{-- <div class="icon-slider-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h3 style="font-weight: 600; color: #840444; margin-bottom: 48px;">NOS PARTENAIRES</h3>
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
        </div> --}}



@stop