 <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        
        <header class="header-area home-2 sd-bar">
			<div class="logo-2">
                <div class="logo-2-wrap">
                    <a href="index.html"><img src="img/logo/Logo1.png" alt=""></a>
                </div>
			</div>
            {{-- <div class="header-top">
                <div class="row m-0">
                    <div class="col-lg-6 col-md-5">
                        <div class="top-text">
                            <div class="textwidget">Welcome To Our Store!</div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-7 sd-bar1">
                        <div class="widget">
                            <ul>
                                <li>
                                    <a href="#">My Account</a>
                                </li>
                                <li>
                                    <a href="#">Wishlist</a>
                                </li>
                                <li>
                                    <a href="#">Check Out</a>
                                </li>
                                <li>
                                    <a class="tb-login" href="#">Login</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div> --}}
            <div class="header-menu header-menu-2">
                <div class="header-wrapper">
                    <div class="logo-stiky">
                        <a href="index.html">
                            <img src="img/logo/logo.png" alt="">
                        </a>
                    </div>
                    <div class="menu-cart">
                        <div class="muti_menu">
                            <nav>
                                <ul>
                                    <li><a href="{{route('home')}}">Accueil</a></li>
                                   
                                    <li><a href="shop.html">A propos</a>
                                    </li>
                            
                                    <li><a class="fast" href="index.html">Produits  <i class="fa fa-angle-down"></i></a>
                                        <div class="rayed ru">
                                            <div class="tas menu-last2">
                                                <a href="blog.html">Shales</a>
                                                <a href="blog-details.html">Foulards</a>
                                
                                            </div>
                                        </div>
                                    </li>
                                    <li><a href="blog.html">Actualités </a></li>
                                   <li><a href="contact.html">Contact</a></li> 
                                </ul>
                            </nav>
                        </div>
                        <div class="menu-sidebar-container">
                            {{-- <div class="tb-menu-sidebar floatleft">
                                <div class="search-item">
                                    <a class="icon_search" href="#">
                                        <i class="fa fa-search search-icon"></i>
                                    </a>
                                    <div class="widget_searchform_content">
                                        <form action="#">
                                            <input type="text" placeholder="Search" name="s" value="">
                                            <input type="submit" value="Search">
                                        </form>
                                    </div>
                                </div>
                            </div> --}}
                            {{-- <div class="top-cart-wrapper wrap floatleft">
                                <div class="top-shop-contain">
                                    <div class="block-shop">
                                        <div class="top-shop-title">
                                            <a href="#">
                                                <i class="fa fa-shopping-cart"></i>
                                                <span class="count co1">2</span>
                                            </a>
                                        </div>
                                        <div class="wish-cart margin">
                                            <div class="wish-item">
                                                <div class="cat">
                                                    <a class="image" href="#"><img src="img/product/c1.jpg" alt=""></a>
                                                    <div class="cat_two">
                                                        <p>
                                                            <a href="#">vintage-lambskin-shoe</a>
                                                        </p>
                                                        <p><span class="agn">1 </span>x <span>$199.00</span></p>
                                                    </div>
                                                    <div class="cat_icon">
                                                        <a class="remove" href="#">×</a>
                                                    </div>
                                                </div>
                                                <div class="cat">
                                                    <a class="image" href="#"><img src="img/product/c2.jpg" alt=""></a>
                                                    <div class="cat_two">
                                                        <p>
                                                            <a href="#">luxury-leather-bag</a>
                                                        </p>
                                                        <p><span class="agn">1</span> x <span>$99.00</span></p>
                                                    </div>
                                                    <div class="cat_icon">
                                                        <a class="remove" href="#">×</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="wish-item">
                                                <div class="cat_bottom">
                                                    <p class="total">
                                                        <strong>Subtotal:</strong>
                                                        <span class="amount">$298.00</span>
                                                    </p>
                                                    <p class="buttons">
                                                        <a class="button wc-forward" href="#">View Cart</a>
                                                        <a class="button checkout wc-forward" href="#">Checkout</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                            <div class="mobile-menu">
                        <nav id="dropdown">
                            <ul class="main-menu">
                                <li>
                                    <a href="index.html">Accueil</a>
                                    
                                </li>
                                {{-- <li>
                                    <a href="shop.html">Women</a>
                                    <ul class="main-menu2">
                                        <li>
                                            <a href="#">Clothings</a>
                                            <ul class="main-menu3">
                                                <li><a>Dresses</a></li>
                                                <li><a>Tops</a></li>
                                                <li><a>Outerwear</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">Jewelry</a>
                                            <ul class="main-menu3">
                                                <li><a>Necklaces</a></li>
                                                <li><a>Earrings</a></li>
                                                <li><a>Rings</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">Shoes</a>
                                            <ul class="main-menu3">
                                                <li><a>Sneakers</a></li>
                                                <li><a>Flats</a></li>
                                                <li><a>Boots</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img alt="" src="img/banner/bg_menu1.jpg">
                                            </a>
                                        </li>
                                    </ul>
                                </li> --}}
                                {{-- <li>
                                    <a href="shop.html">Men</a>
                                    <ul class="main-menu2">
                                        <li>
                                            <a href="#">Clothing</a>
                                            <ul class="main-menu3">
                                                <li><a>Shirts</a></li>
                                                <li><a>Tops</a></li>
                                                <li><a>Outerwear</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">Shoes</a>
                                            <ul class="main-menu3">
                                                <li><a>Sneakers</a></li>
                                                <li><a>Casual</a></li>
                                                <li><a>Boots</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">Bags</a>
                                            <ul class="main-menu3">
                                                <li><a>Work</a></li>
                                                <li><a>Weekend</a></li>
                                                <li><a>Backpacks</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">Accessories</a>
                                            <ul class="main-menu3">
                                                <li><a>Sunglasses</a></li>
                                                <li><a>Watches</a></li>
                                                <li><a>Jewelry</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">Sale</a>
                                            <ul class="main-menu3">
                                                <li><a>Tops</a></li>
                                                <li><a>Bottoms</a></li>
                                                <li><a>Denim</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">Features</a>
                                            <ul class="main-menu3">
                                                <li><a>Holiday Party</a></li>
                                                <li><a>The Carry On</a></li>
                                                <li><a>Holiday Travel</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img alt="" src="img/banner/bg_menu2.jpg">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img alt="" src="img/banner/bg_menu3.jpg">
                                            </a>
                                        </li>
                                    </ul>
                                </li> --}}
                                <li><a href="shop.html">A propos</a></li>
                                <li>
                                    <a href="#">Produits</a>
                                    <ul>
                                        <li>
                                            <a href="blog.html">Shales</a>
                                            <a href="blog-details.html">Foulards</a>
                                           
                                        </li>
                                    </ul>
                                </li>
                                
                                <li><a href="blog.html">Actualités</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                        </div>
                    </div>
                </div>
			</div>
        </header>
        <!-- mobile-menu-area end --> 