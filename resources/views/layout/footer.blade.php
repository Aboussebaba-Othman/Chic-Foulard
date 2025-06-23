<footer class="footer-area">
    <div class="footer-top">
        <div class="container">
            <div class="row g-4">
                <!-- Logo et Description -->                
                <div class="col-lg-5 col-md-6">
                    <div class="footer-widget">
                        <div class="footer-logo mb-4">
                            <a href="{{route('home')}}">
                                <img src="{{ asset('img/logo/Logo1.png') }}" alt="Logo Chic-Foulard" style="max-width: 180px;">
                            </a>
                        </div>
                        <p class="company-description">
                            Depuis 1968, Chic Foulard s'est imposé comme une référence incontournable dans la confection de châles et foulards au Maroc. Forts de plusieurs décennies de savoir-faire, nous nous engageons à offrir une qualité irréprochable, mêlant tradition artisanale et innovation textile.
                        </p>
                        <div class="social-links">
                            <a href="#" aria-label="Facebook">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" aria-label="Instagram">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="#" aria-label="Twitter">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" aria-label="LinkedIn">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Liens Information -->
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="footer-widget">
                        <h3 class="footer-title">Information</h3>
                        <ul class="footer-links">
                            <li><a href="#">Nos Valeurs</a></li>
                            <li><a href="#">Notre Histoire</a></li>
                            <li><a href="#">Actualités</a></li>
                            <li><a href="#">Témoignages</a></li>
                            <li><a href="#">Politique de confidentialité</a></li>
                            <li><a href="#">Plan du site</a></li>
                        </ul>
                    </div>
                </div>
                
                <!-- Liens Produits -->
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="footer-widget">
                        <h3 class="footer-title">Produits</h3>
                        <ul class="footer-links">
                            <li><a href="#">Châles</a></li>
                            <li><a href="#">Foulards</a></li>
                            <li><a href="#">Nouveautés</a></li>
                            <li><a href="#">BesteSeller</a></li>
                        </ul>
                    </div>
                </div>
                
                <!-- Contact -->
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <h3 class="footer-title">Nous Contacter</h3>
                        <div class="contact-info">
                            <div class="contact-item">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>Casablanca, Maroc<br>Quartier des Habous</span>
                            </div>
                            <div class="contact-item">
                                <i class="fas fa-envelope"></i>
                                <span>
                                    contact@chicfoulard.ma<br>
                                    support@chicfoulard.ma
                                </span>
                            </div>
                            <div class="contact-item">
                                <i class="fas fa-phone"></i>
                                <span>
                                    +212 522 123 456<br>
                                    +212 661 234 567
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">                    
                   <div class="text-center">
                        <p>
                            Copyright © 
                            <a href="#">ChicFoulard</a>. 
                            Tous droits réservés
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<style>
        .footer-area {
            background-color: #f8f9fa;
            border-top: 4px solid #ffffff;
        }
        
        .footer-top {
            padding: 50px 0;
        }
        
        .footer-title {
            color: #333;
            font-weight: 700;
            font-size: 1.2rem;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 2px solid #e9ecef;
            position: relative;
        }
        
        .footer-title::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 50px;
            height: 2px;
            background-color: #d63384;
        }
        
        .company-description {
            color: #c1c9d0;
            font-size: 0.9rem;
            line-height: 1.6;
            margin-bottom: 25px;
        }
        
        .social-links {
            display: flex;
            gap: 15px;
        }
        
        .social-links a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background-color: #fff;
            color: #131516;
            border-radius: 50%;
            text-decoration: none;
            transition: all 0.3s ease;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        
        .social-links a:hover {
            background-color: #d63384;
            color: #fff;
            transform: translateY(-2px);
        }
        
        .footer-links {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        
        .footer-links li {
            margin-bottom: 10px;
        }
        
        .footer-links a {
            color: #c1c9d0;
            text-decoration: none;
            font-size: 0.9rem;
            transition: color 0.3s ease;
        }
        
        .footer-links a:hover {
            color: #d63384;
        }
        
        .contact-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 15px;
        }
        
        .contact-item i {
            color: #d63384;
            margin-right: 12px;
            margin-top: 3px;
            min-width: 16px;
        }
        
        .contact-item span {
            color: #c1c9d0;
            font-size: 0.9rem;
            line-height: 1.5;
        }
        
        .footer-bottom {
            background-color: #e9ecef;
            padding: 20px 0;
            border-top: 1px solid #dee2e6;
        }
        
        .footer-bottom p {
            margin: 0;
            color: #c1c9d0;
            font-size: 0.9rem;
        }
        
        .footer-bottom a {
            color: #d63384;
            text-decoration: none;
            font-weight: 600;
        }
        
        .footer-bottom a:hover {
            color: #b02a5b;
        }
        
        @media (max-width: 768px) {
            .footer-top {
                padding: 30px 0;
            }
            
            .social-links {
                justify-content: center;
                margin-top: 20px;
            }
            
            .text-md-start {
                text-align: center !important;
            }
        }
    </style>
        
        
        <!-- start scrollUp
        ============================================ -->
        {{-- <div id="toTop">
            <i class="fa fa-chevron-up"></i>
        </div> --}}
        <!-- QUICKVIEW PRODUCT -->
        {{-- <div id="quickview-wrapper">
            <!-- Modal -->
            <div class="modal fade" id="productModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body">
                            <div class="modal-product">
                                <div class="product-images">
                                    <div class="main-image images">
                                        <img src="img/product/3.jpg" alt="">
                                    </div>
                                </div><!-- .product-images -->

                                <div class="cras">
                                    <div class="product-name">
                                        <h1>UVintage Lambskin Shoe</h1>
                                    </div>
                                    <div class="tb-product-price font-noraure-3">
                                        <span class="amount">$180.00</span>
                                        <span class="amount2 ana">$170.00</span>
                                    </div>
                                    <div class="short-description">
                                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p>
                                    </div>
                                    <div class="add-to-box1">
                                        <div class="add-to-box add-to-box2">
                                            <div class="add-to-cart">
                                                <div class="input-content">
                                                    <label for="qty">Qty:<span> *</span></label>
                                                    <input id="qty" class="input-text qty" type="text" name="qty" maxlength="12" value="1" title="Qty">
                                                </div>
                                                <div class="last-cart">
                                                    <a class="last1" href="#">Add To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="stock2"><p class="availability in-stock2"> Availability:Accessories, Men </p></div>
                                </div><!-- .product-info -->
                            </div><!-- .modal-product -->
                        </div><!-- .modal-body -->
                    </div><!-- .modal-content -->
                </div><!-- .modal-dialog -->
            </div>
            <!-- END Modal -->
        </div> --}}
        <!-- END QUICKVIEW PRODUCT -->
        
        
        
        
        
        
        <!-- all js here -->
<!-- jquery latest version -->
<script src="{{ asset('js/vendor/jquery-1.12.0.min.js') }}"></script>

<!-- bootstrap js -->
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<!-- parallax js -->
<script src="{{ asset('js/parallax.min.js') }}"></script>
<!-- zoom js -->
<script src="{{ asset('js/jquery.snipe.min.js') }}"></script>
<!-- owl.carousel js -->
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<!-- meanmenu js -->
<script src="{{ asset('js/jquery.meanmenu.js') }}"></script>
<!-- jquery-ui js -->
<script src="{{ asset('js/jquery-ui.min.js') }}"></script>
<!-- wow js -->
<script src="{{ asset('js/wow.min.js') }}"></script>
<!-- Ajax mail js -->
<script src="{{ asset('js/ajax-mail.js') }}"></script>
<!-- Nivo slider js --> 		
<script src="{{ asset('lib/js/jquery.nivo.slider.js') }}"></script>
<script src="{{ asset('lib/home.js') }}"></script>
<!-- plugins js -->
<script src="{{ asset('js/plugins.js') }}"></script>
<!-- main js -->
<script src="{{ asset('js/main.js') }}"></script>