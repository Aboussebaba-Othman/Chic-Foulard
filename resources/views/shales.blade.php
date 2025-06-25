@extends('layout.default')

@section('content')
<style>
    /* Styles avancés pour la section collection */
    .section-title .title-line {
        position: relative;
        width: 140px;
        height: 4px;
        background: linear-gradient(to right, #840444, #a50854);
        margin: 0 auto 35px;
        animation: scaleIn 1.2s ease;
        overflow: hidden;
        border-radius: 2px;
    }
    
    .section-title .title-line:after {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255,255,255,0.6), transparent);
        animation: shimmer 3s infinite;
    }
      @keyframes shimmer {
        0% { left: -100%; }
        100% { left: 100%; }
    }
    
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }
    
    @keyframes fadeInUp {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }
    
    @keyframes fadeInDown {
        from { opacity: 0; transform: translateY(-20px); }
        to { opacity: 1; transform: translateY(0); }
    }
    
    @keyframes scaleIn {
        from { transform: scale(0.8); opacity: 0; }
        to { transform: scale(1); opacity: 1; }
    }
    
    @keyframes rotate {
        from { transform: rotate(0deg); }
        to { transform: rotate(360deg); }
    }
    
    .collection-description {
        color: #555;
        font-size: 19px;
        line-height: 1.9;
        max-width: 800px;
        margin: 0 auto;
        animation: fadeIn 1.5s ease;
        position: relative;
        padding: 0 20px;
    }
    
    .collection-description:before, 
    .collection-description:after {
        content: '';
        position: absolute;
        height: 30px;
        width: 30px;
        opacity: 0.5;
    }
    
    .collection-description:before {
        top: -15px;
        left: 0;
        border-top: 2px solid #840444;
        border-left: 2px solid #840444;
    }
    
    .collection-description:after {
        bottom: -15px;
        right: 0;
        border-bottom: 2px solid #840444;
        border-right: 2px solid #840444;
    }

    /* Nouveaux styles pour les images et titres de produits */    .product-card {
        position: relative;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 10px 25px rgba(0,0,0,0.05);
        transition: all 0.5s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        background: white;
        height: 100%;
        transform: translateY(0);
        opacity: 1;
        animation: fadeIn 0.5s ease forwards;
    }
    
    .product-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 15px 35px rgba(132, 4, 68, 0.15);
    }
    
    .product-image {
        position: relative;
        overflow: hidden;
        border-radius: 12px 12px 0 0;
    }
    
    .product-image:before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(to bottom, rgba(0, 0, 0, 0), rgb(171 122 147 / 20%));        opacity: 1;
        z-index: 1;
    }
    
    .product-image img {
        transition: transform 0.8s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        height: 300px;
        width: 100%;
        object-fit: cover;
        object-position: center;
    }
    
    .product-card:hover .product-image img {
        transform: scale(1.05);
    }
    
    .product-title {
        padding: 18px 15px;
        text-align: center;
        position: relative;
        background: white;
        transition: all 0.3s ease;
    }
    
    .product-title:after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 50%;
        width: 60px;
        height: 2px;
        background: linear-gradient(to right, #840444, #a50854);
        transform: translateX(-50%);
    }
    
    .product-title h4 {
        margin: 0;
        font-size: 17px;
        color: #840444;
        font-weight: 600;
        letter-spacing: 0.5px;
    }
    
    /* Effet de cadre sur les images au survol */
    .product-image:after {
        content: '';
        position: absolute;
        top: 15px;
        left: 15px;
        right: 15px;
        bottom: 15px;
        border: 1px solid rgba(255,255,255,0.2);
        opacity: 1;
        transform: scale(1);
        z-index: 1;
        pointer-events: none;
    }
    @media (max-width: 450px) {
            .hero-content h1 {
        font-size: 2.5rem !important;
    }

    .hero-content p.lead {
        font-size: 18px !important;
    }
    .product-image img {
    height: auto !important;
    object-fit: contain !important;
  }

  .product-image {
    height: auto !important;
  }
   
    }
</style>

<section class="hero-banner" style="background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.7)), url('img/product/DSCF0988.jpg') no-repeat center center/cover; height: 650px; display: flex; align-items: center; position: relative; overflow: hidden; box-shadow: 0 8px 30px rgba(0,0,0,0.3);">
    <!-- Decorative floating elements -->
   
    <div class="container position-relative" style="z-index: 2;">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <div class="hero-content" style="transform-style: preserve-3d; perspective: 1000px;">                    
                    <span style="color: #fff; font-weight: 600; font-size: 18px; text-transform: uppercase; letter-spacing: 10px; display: block; margin-bottom: 25px; position: relative;">
                        SAVOIR-FAIRE MAROCAIN
                        <span style="position: absolute; bottom: -8px; left: 50%; transform: translateX(-50%); width: 60px; height: 2px; background: #fff;"></span>
                    </span>
                    <h1 class="display-2 text-white fw-bold mb-4" style="text-transform: uppercase; letter-spacing: 5px; text-shadow: 2px 2px 8px rgba(0,0,0,0.6), 0 0 30px rgba(132, 4, 68, 0.4); font-size: 4.5rem;">Châles d'Exception</h1>
                    <p class="lead text-white mb-5" style="font-size: 24px; max-width: 700px; margin: 0 auto; text-shadow: 1px 1px 3px rgba(0,0,0,0.6); line-height: 1.5;">Entre tradition séculaire et élégance moderne</p>
                    <a href="#collection" class="btn px-5 py-3" style="background-color: #840444; color: white; border-radius: 30px; font-weight: 600; letter-spacing: 2px; box-shadow: 0 5px 25px rgba(132, 4, 68, 0.5), 0 0 15px rgba(132, 4, 68, 0.3); transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275); position: relative; overflow: hidden;">
                        <span style="position: relative; z-index: 2;">DÉCOUVRIR</span>
                        <span style="position: absolute; top: 0; left: -100%; width: 100%; height: 100%; background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent); transition: 0.5s; z-index: 1;" class="btn-shine"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Wave overlay -->
    <div style="position: absolute; bottom: -5px; left: 0; width: 100%; height: 180px; background: url('img/banner/wave.svg') no-repeat center bottom/cover; opacity: 0.9;"></div>
</section>

<section id="collection" class="products-area py-5" style="background-color: #f9f7f8; padding: 120px 0; position: relative;">
    <!-- Decorative background elements avec animation améliorée -->
    <div style="position: absolute; top: 50px; right: 50px; width: 200px; height: 200px; background: url('img/banner/pattern.svg') no-repeat; opacity: 0.05; animation: rotate 30s infinite linear; filter: blur(1px);"></div>
    <div style="position: absolute; bottom: 80px; left: 80px; width: 150px; height: 150px; background: url('img/banner/pattern.svg') no-repeat; opacity: 0.05; animation: rotate 20s infinite linear reverse; filter: blur(1px);"></div>
    
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-9 mx-auto text-center">
                <div class="section-title" style="position: relative; margin-bottom: 70px;">
                    <span class="d-block" style="color: #840444; font-weight: 600; font-size: 17px; text-transform: uppercase; letter-spacing: 5px; margin-bottom: 20px; animation: fadeInDown 0.8s ease; position: relative; display: inline-block;">
                        Créations exclusives
                        <span style="position: absolute; bottom: -8px; left: 50%; transform: translateX(-50%); width: 40px; height: 1px; background: #840444;"></span>
                    </span>
                    <h2 style="color: #2b2b2b; font-weight: 700; font-size: 50px; margin-bottom: 25px; position: relative; display: inline-block; animation: fadeInUp 1s ease; text-shadow: 1px 1px 0px rgba(132, 4, 68, 0.05);">Collection de Shales</h2>
                    <div class="title-line"></div>
                    <div style="position: absolute; width: 80px; height: 80px; background: url('img/banner/pattern.svg') no-repeat; opacity: 0.15; top: -40px; right: -20px; animation: rotate 15s infinite linear;"></div>
                    <div style="position: absolute; width: 60px; height: 60px; background: url('img/banner/pattern.svg') no-repeat; opacity: 0.15; bottom: -30px; left: -10px; animation: rotate 10s infinite linear reverse;"></div>
                    <p class="collection-description">Découvrez notre élégante collection de shales, alliant tradition marocaine et design contemporain pour une touche de sophistication intemporelle. Chaque pièce raconte une histoire d'artisanat et d'élégance.</p>
                </div>
            </div>
        </div>        <!-- Shales Section -->
        <div class="mb-5">
            <div class="row">   
                <!-- Shale 1 -->                
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="product-card">
                        <div class="product-image">
                            <img alt="Shale Élégant" src="img/product/DSCF1070.jpg" class="img-fluid">                            
                        </div>
                        <div class="product-title">
                            <h4>Shale Élégant</h4>
                        </div>
                    </div>
                </div>
                
                <!-- Shale 2 -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="product-card">
                        <div class="product-image">
                            <img alt="Shale Imprimé" src="img/product/DSCF0910.jpg" class="img-fluid">                            
                        </div>
                        <div class="product-title">
                            <h4>Shale Imprimé</h4>
                        </div>
                    </div>
                </div>
                
                <!-- Shale 3 -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="product-card">
                        <div class="product-image">
                            <img alt="Shale Léger" src="img/product/DSCF0913.jpg" class="img-fluid">                            
                        </div>
                        <div class="product-title">
                            <h4>Shale Léger</h4>
                        </div>
                    </div>
                </div>
                
                <!-- Shale 4 -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="product-card">
                        <div class="product-image">
                            <img alt="Shale Coloré" src="img/product/DSCF0916.jpg" class="img-fluid">                            
                        </div>
                        <div class="product-title">
                            <h4>Shale Coloré</h4>
                        </div>
                    </div>
                </div>
                
                <!-- Shale 5 -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="product-card">
                        <div class="product-image">
                            <img alt="Shale Brodé" src="img/product/DSCF0919.jpg" class="img-fluid">                            
                        </div>
                        <div class="product-title">
                            <h4>Shale Brodé</h4>
                        </div>
                    </div>
                </div>
                
                <!-- Shale 6 -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="product-card">
                        <div class="product-image">
                            <img alt="Shale Premium" src="img/product/DSCF0938.jpg" class="img-fluid">                            
                        </div>
                        <div class="product-title">
                            <h4>Shale Premium</h4>
                        </div>
                    </div>
                </div>
                
                <!-- Shale 7 -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="product-card">
                        <div class="product-image">
                            <img alt="Shale Traditionnel" src="img/product/DSCF0939.jpg" class="img-fluid">                            
                        </div>
                        <div class="product-title">
                            <h4>Shale Traditionnel</h4>
                        </div>
                    </div>
                </div>
                
                <!-- Shale 8 -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="product-card">
                        <div class="product-image">
                            <img alt="Shale Artisanal" src="img/product/DSCF0951.jpg" class="img-fluid">                            
                        </div>
                        <div class="product-title">
                            <h4>Shale Artisanal</h4>
                        </div>
                    </div>
                </div>
                
                <!-- Shale 9 -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="product-card">
                        <div class="product-image">
                            <img alt="Shale Moderne" src="img/product/DSCF0959.jpg" class="img-fluid">                            
                        </div>
                        <div class="product-title">
                            <h4>Shale Moderne</h4>
                        </div>
                    </div>
                </div>
                
                <!-- Shale 10 -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="product-card">
                        <div class="product-image">
                            <img alt="Shale Élégant" src="img/product/DSCF0971.jpg" class="img-fluid">                            
                        </div>
                        <div class="product-title">
                            <h4>Shale Élégant</h4>
                        </div>
                    </div>
                </div>
                
                <!-- Shale 11 -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="product-card">
                        <div class="product-image">
                            <img alt="Shale Traditionnel" src="img/product/DSCF0985.jpg" class="img-fluid">                            
                        </div>
                        <div class="product-title">
                            <h4>Shale Traditionnel</h4>
                        </div>
                    </div>
                </div>
                
                <!-- Shale 12 -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="product-card">
                        <div class="product-image">
                            <img alt="Shale Artisanal" src="img/product/DSCF0988.jpg" class="img-fluid">                            
                        </div>
                        <div class="product-title">
                            <h4>Shale Artisanal</h4>
                        </div>
                    </div>
                </div>
                
                <!-- Shale 13 -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="product-card">
                        <div class="product-image">
                            <img alt="Shale Moderne" src="img/product/DSCF0992.jpg" class="img-fluid">                            
                        </div>
                        <div class="product-title">
                            <h4>Shale Moderne</h4>
                        </div>
                    </div>
                </div>
                
                <!-- Shale 14 -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="product-card">
                        <div class="product-image">
                            <img alt="Shale Élégant" src="img/product/DSCF100E0.jpg" class="img-fluid">                            
                        </div>
                        <div class="product-title">
                            <h4>Shale Élégant</h4>
                        </div>
                    </div>
                </div>
                
                <!-- Shale 15 -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="product-card">
                        <div class="product-image">
                            <img alt="Shale Luxe" src="img/product/DSCF1050.jpg" class="img-fluid">                            
                        </div>
                        <div class="product-title">
                            <h4>Shale Luxe</h4>
                        </div>
                    </div>
                </div>
                
                <!-- Shale 16 -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="product-card">
                        <div class="product-image">
                            <img alt="Shale Luxe" src="img/product/DSCF1055.jpg" class="img-fluid">                            
                        </div>
                        <div class="product-title">
                            <h4>Shale Luxe</h4>
                        </div>
                    </div>                
                </div>
            </div>
        </div>    
    </div>
</section>

<!-- JavaScript removed to reduce page weight -->

@endsection
