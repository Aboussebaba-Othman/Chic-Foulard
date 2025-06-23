@extends('layout.default')

@section('content')
<style>
    /* Styles pour la page contact */
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }
    
    @keyframes fadeInLeft {
        from { opacity: 0; transform: translateX(-30px); }
        to { opacity: 1; transform: translateX(0); }
    }
    
    @keyframes fadeInRight {
        from { opacity: 0; transform: translateX(30px); }
        to { opacity: 1; transform: translateX(0); }
    }
    
    @keyframes shimmer {
        0% { left: -100%; }
        100% { left: 100%; }
    }
    
    @keyframes float {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-15px); }
    }
    
    @keyframes rotate {
        from { transform: rotate(0deg); }
        to { transform: rotate(360deg); }
    }
    
    /* Animation pour les cartes de boutiques */
    @keyframes storeCardAppear {
        from { opacity: 0; transform: translateY(30px); }
        to { opacity: 1; transform: translateY(0); }
    }
    
    .store-card {
        animation: storeCardAppear 0.6s ease-out forwards;
        animation-delay: calc(0.1s * var(--animation-order, 0));
        opacity: 0;
    }
    
    .contact-hero {
        position: relative;
        background: linear-gradient(135deg, rgba(132, 4, 68, 0.85) 0%, rgba(0, 0, 0, 0.15) 100%), url('img/product/cc.jpg') no-repeat center center/cover;
        height: 450px;
        display: flex;
        align-items: center;
        position: relative;
        overflow: hidden;
        box-shadow: 0 15px 40px rgba(0,0,0,0.3);
    }
    
    .contact-title {
        color: white;
        text-transform: uppercase;
        letter-spacing: 6px;
        text-shadow: 2px 2px 8px rgba(0,0,0,0.6);
        font-size: 3.5rem;
        animation: fadeIn 1.2s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        margin-bottom: 20px;
        font-weight: 700;
        position: relative;
    }
    
    .contact-title:after {
        content: '';
        position: absolute;
        width: 100px;
        height: 3px;
        background: linear-gradient(to right, transparent, #f0c1d7, transparent);
        bottom: -15px;
        left: 50%;
        transform: translateX(-50%);
    }
    
    .contact-subtitle {
        color: white;
        font-size: 18px;
        margin-bottom: 0;
        letter-spacing: 3px;
        animation: fadeIn 1.5s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        font-weight: 300;
    }
    
    .form-section {
        background-color: #f9f7f8;
        background-image: linear-gradient(to right, rgba(132, 4, 68, 0.02) 0%, rgba(132, 4, 68, 0.05) 100%);
        padding: 100px 0 50px;
        position: relative;
    }
    
    .contact-form-wrapper {
        background: white;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 20px 50px rgba(0,0,0,0.08);
        position: relative;
        margin-top: -150px;
        z-index: 10;
    }
    
    .contact-info1 {
        background: linear-gradient(135deg, #840444 0%, #a50854 100%);
        color: white;
        padding: 60px 40px;
        height: 100%;
        position: relative;
        overflow: hidden;
        border-radius: 8px 0 0 8px;
    }
    
    .contact-info1:before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image: url('img/banner/pattern.svg');
        background-size: 300px;
        opacity: 0.05;
        z-index: 0;
    }
    
    .info-title {
        font-size: 32px;
        font-weight: 700;
        margin-bottom: 35px;
        position: relative;
        display: inline-block;
        z-index: 1;
    }
    
    .info-title:after {
        content: '';
        position: absolute;
        bottom: -12px;
        left: 0;
        width: 60px;
        height: 3px;
        background: rgba(255,255,255,0.5);
    }
    
    .info-text {
        font-size: 17px;
        line-height: 1.8;
        margin-bottom: 50px;
        opacity: 0.9;
        position: relative;
        z-index: 1;
    }
    
    .contact-details {
        position: relative;
        z-index: 1;
    }
    
    .contact-item1 {
        display: flex;
        align-items: center;
        margin-bottom: 30px;
        transition: all 0.3s ease;
    }
    
    .contact-item1:hover {
        transform: translateX(5px);
    }
      .contact-icon1 {
        width: 42px;
        height: 42px;
        background: rgba(255,255,255,0.12);
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        margin-right: 16px;
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border: 1px solid rgba(255, 255, 255, 0.15);
    }
    
    .contact-item1:hover .contact-icon1 {
        background: rgba(255,255,255,0.25);
        transform: scale(1.1);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
    }
    
    .contact-icon1:after {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
        transition: 0.5s;
    }
    
    .contact-item1:hover .contact-icon1:after {
        left: 100%;
    }
    
    .contact-icon1 i {
        color: white;
        font-size: 20px;
    }
      .contact-detail {
        font-size: 16px;
        font-weight: 500;
        opacity: 0.9;
        transition: all 0.3s ease;
        letter-spacing: 0.5px;
        color: rgba(255, 255, 255, 0.95);
    }
    
    .contact-item1:hover .contact-detail {
        opacity: 1;
        color: #fff;
        transform: translateX(3px);
    }
    
    .social-links1 {
        margin-top: 50px;
        position: relative;
        z-index: 1;
        display: flex;
        justify-content: flex-start;
        align-items: center;
    }
      .social-links1 a {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 42px;
        height: 42px;
        background: rgba(255,255,255,0.12);
        border-radius: 50%;
        margin-right: 15px;
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        position: relative;
        overflow: hidden;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border: 1px solid rgba(255, 255, 255, 0.15);
    }
    
    .social-links1 a:after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(255,255,255,0.1);
        border-radius: 50%;
        transform: scale(0);
        transition: transform 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        z-index: -1;
    }
    
    .social-links1 a:hover {
        animation: glow 1.5s infinite;
        background: rgba(255,255,255,0.25);
        transform: translateY(-8px);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }
    
    .social-links1 a:hover:after {
        transform: scale(1.3);
        opacity: 0;
    }
    
    .social-links1 i {
        color: white;
        font-size: 18px;
    }
    
    .form-container {
        padding: 60px 50px;
        position: relative;
        border-radius: 0 8px 8px 0;
    }
    
    .form-container:before {
        content: '';
        position: absolute;
        top: 40px;
        right: 40px;
        width: 120px;
        height: 120px;
        background: url('img/banner/pattern.svg') no-repeat;
        opacity: 0.03;
        z-index: 0;
    }
    
    .form-title {
        font-size: 32px;
        font-weight: 700;
        color: #333;
        margin-bottom: 35px;
        position: relative;
        display: inline-block;
    }
    
    .form-title:after {
        content: '';
        position: absolute;
        bottom: -12px;
        left: 0;
        width: 60px;
        height: 3px;
        background: linear-gradient(to right, #840444, #a50854);
    }
    
    .form-group {
        margin-bottom: 28px;
        position: relative;
    }
    
    .form-label {
        display: block;
        font-size: 14px;
        font-weight: 600;
        color: #444;
        margin-bottom: 12px;
        text-transform: uppercase;
        letter-spacing: 1.5px;
        transition: all 0.3s ease;
    }
    
    .form-control {
        width: 100%;
        padding: 16px 20px;
        border: 1px solid #e9e9e9;
        border-radius: 6px;
        font-size: 16px;
        transition: all 0.3s ease;
        background-color: #f9f9f9;
    }
    
    .form-control:focus {
        border-color: #840444;
        box-shadow: 0 0 0 3px rgba(132, 4, 68, 0.1);
        outline: none;
        background-color: #fff;
    }
    
    .form-group:focus-within .form-label {
        color: #840444;
    }
    
    textarea.form-control {
        min-height: 180px;
        resize: vertical;
    }
    
    .submit-btn {
        background: linear-gradient(135deg, #840444 0%, #a50854 100%);
        color: white;
        border: none;
        padding: 18px 45px;
        font-size: 16px;
        font-weight: 600;
        border-radius: 6px;
        cursor: pointer;
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        text-transform: uppercase;
        letter-spacing: 2px;
        position: relative;
        overflow: hidden;
        z-index: 1;
    }
    
    .submit-btn:hover {
        box-shadow: 0 15px 30px rgba(132, 4, 68, 0.2);
        transform: translateY(-5px);
    }
    
    .submit-btn:before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
        transition: 0.5s;
        z-index: -1;
    }
    
    .submit-btn:hover:before {
        left: 100%;
    }
    
    .required-field:after {
        content: '*';
        color: #840444;
        margin-left: 4px;
        font-size: 18px;
        position: relative;
        top: 2px;
    }
    
    /* Décorations de fond */
    .decorative-pattern {
        position: absolute;
        background: url('img/banner/pattern.svg') no-repeat;
        opacity: 0.05;
        filter: blur(1px);
        z-index: 0;
    }
    
    .pattern-1 {
        top: 80px;
        right: 8%;
        width: 250px;
        height: 250px;
        animation: rotate 40s infinite linear;
    }
    
    .pattern-2 {
        bottom: 100px;
        left: 5%;
        width: 180px;
        height: 180px;
        animation: rotate 30s infinite linear reverse;
    }
    
    /* Élément décoratif marocain */
    .moroccan-decoration {
        position: absolute;
        width: 200px;
        height: 200px;
        border: 2px solid rgba(132, 4, 68, 0.1);
        transform: rotate(45deg);
        z-index: 0;
    }
    
    .decoration-1 {
        top: 15%;
        right: 15%;
        animation: float 8s infinite ease-in-out;
    }
    
    .decoration-2 {
        bottom: 10%;
        left: 8%;
        width: 150px;
        height: 150px;
        animation: float 12s infinite ease-in-out reverse;
    }
    
    /* Styles pour la section des boutiques */
    .store-locations-section {
        padding: 100px 0;
        background-color: #fbf9fa;
        position: relative;
        overflow: hidden;
    }
    
    .store-locations-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image: url('img/banner/pattern.svg');
        background-size: 300px;
        opacity: 0.02;
        z-index: 0;
    }
    
    .section-header {
        margin-bottom: 60px;
    }
    
    .sub-title {
        color: #840444;
        font-size: 14px;
        font-weight: 600;
        letter-spacing: 4px;
        display: block;
        margin-bottom: 15px;
        position: relative;
    }
    
    .section-title {
        color: #333;
        font-size: 36px;
        font-weight: 700;
        margin-bottom: 20px;
    }
    
    .title-separator {
        width: 60px;
        height: 3px;
        background: linear-gradient(to right, #840444, #a50854);
        margin: 0 auto 20px;
    }
    
    .section-description {
        color: #666;
        font-size: 18px;
        max-width: 700px;
        margin: 0 auto;
    }
    
    .store-card {
        background: #fff;
        border-radius: 8px;
        padding: 25px;
        transition: all 0.3s ease;
        box-shadow: 0 5px 20px rgba(0,0,0,0.05);
        height: 100%;
        display: flex;
        align-items: flex-start;
        position: relative;
        overflow: hidden;
    }
    
    .store-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 5px;
        height: 0;
        background: linear-gradient(135deg, #840444 0%, #a50854 100%);
        transition: all 0.3s ease;
    }
    
    .store-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 30px rgba(0,0,0,0.1);
    }
    
    .store-card:hover::before {
        height: 100%;
    }
    
    .store-icon {
        width: 50px;
        height: 50px;
        background: rgba(132, 4, 68, 0.1);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 15px;
        transition: all 0.3s ease;
        flex-shrink: 0;
    }
    
    .store-card:hover .store-icon {
        background: #840444;
    }
    
    .store-icon i {
        font-size: 20px;
        color: #840444;
        transition: all 0.3s ease;
    }
    
    .store-card:hover .store-icon i {
        color: #fff;
    }
    
    .store-details {
        flex-grow: 1;
    }
    
    .store-city {
        color: #333;
        font-size: 20px;
        font-weight: 600;
        margin-bottom: 10px;
        transition: all 0.3s ease;
    }
    
    .store-card:hover .store-city {
        color: #840444;
    }
    
    .store-address {
        color: #666;
        font-size: 15px;
        line-height: 1.6;
        margin-bottom: 15px;
    }
    
    .store-contact {
        display: flex;
        align-items: center;
        color: #777;
        font-size: 14px;
    }
    
    .store-contact i {
        color: #840444;
        margin-right: 8px;
        font-size: 14px;
    }
    
    /* Responsive styles pour les boutiques */
    @media (max-width: 767px) {
        .store-locations-section {
            padding: 70px 0;
        }
        
        .section-title {
            font-size: 28px;
        }
        
        .section-description {
            font-size: 16px;
        }
    }
    
    @media (max-width: 576px) {
        .store-card {
            padding: 20px;
        }
        
        .store-city {
            font-size: 18px;
        }
        
        .store-address {
            font-size: 14px;
        }
    }
    
    /* Styles responsives supplémentaires */
    @media (max-width: 991px) {
        .contact-form-wrapper {
            margin-top: -100px;
        }
        
        .contact-info1 {
            border-radius: 8px 8px 0 0;
            padding: 40px 30px;
        }
        
        .form-container {
            border-radius: 0 0 8px 8px;
            padding: 40px 30px;
        }
        
        .info-title, .form-title {
            font-size: 28px;
        }
        
        .info-text {
            margin-bottom: 30px;
        }
        
        .social-links1 {
            margin-top: 30px;
        }
    }
    
    @media (max-width: 767px) {
        .contact-hero {
            height: 400px;
        }
        
        .contact-title {
            font-size: 2.5rem;
            letter-spacing: 4px;
        }
        
        .contact-subtitle {
            font-size: 16px;
            letter-spacing: 2px;
        }
        
        .form-section {
            padding: 80px 0 40px;
        }
        
        .contact-form-wrapper {
            margin-top: -70px;
        }
        
        .submit-btn {
            padding: 15px 30px;
            font-size: 14px;
        }
    }
    
    @media (max-width: 576px) {
        .contact-hero {
            height: 350px;
        }
        
        .contact-title {
            font-size: 2rem;
            letter-spacing: 3px;
        }
        
        .contact-subtitle {
            font-size: 14px;
            letter-spacing: 1px;
        }
        
        .form-container, .contact-info1 {
            padding: 30px 20px;
        }
        
        .contact-form-wrapper {
            margin-top: -50px;
        }
        
        .info-title, .form-title {
            font-size: 24px;
        }
        
        .info-text {
            font-size: 15px;
        }
        
        .submit-btn {
            width: 100%;
        }
    }
    
    /* Ajustements responsifs pour les icônes sociales et détails de contact */
    @media (max-width: 767px) {
        .social-links1 {
            margin-top: 30px;
            justify-content: center;
        }
        
        .contact-details {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        
        .contact-item1 {
            justify-content: center;
            text-align: center;
            margin-bottom: 20px;
        }
    }
    
    @media (max-width: 576px) {
        .social-links1 a {
            width: 38px;
            height: 38px;
            margin-right: 12px;
        }
        
        .social-links1 i {
            font-size: 16px;
        }
        
        .contact-icon1 {
            width: 38px;
            height: 38px;
            margin-right: 12px;
        }
        
        .contact-detail {
            font-size: 14px;
        }
    }
    
    /* Effet de lumière pour les icônes sociales */
    @keyframes glow {
        0% { box-shadow: 0 0 5px rgba(255, 255, 255, 0.3); }
        50% { box-shadow: 0 0 15px rgba(255, 255, 255, 0.5); }
        100% { box-shadow: 0 0 5px rgba(255, 255, 255, 0.3); }
    }
</style>

<!-- Hero Section -->
<section class="contact-hero">
    <!-- Éléments décoratifs -->
    <div style="position: absolute; top: 15%; right: 10%; width: 200px; height: 200px; border: 1px solid rgba(255, 255, 255, 0.1); border-radius: 50%; transform: rotate(-15deg); animation: float 8s infinite ease-in-out;"></div>
    <div style="position: absolute; bottom: 20%; left: 8%; width: 150px; height: 150px; border: 1px solid rgba(255, 255, 255, 0.08); border-radius: 50%; transform: rotate(20deg); animation: float 7s infinite ease-in-out reverse;"></div>
    
    <div class="container text-center position-relative" style="z-index: 2;">
        <div style="max-width: 800px; margin: 0 auto;">
            <span style="color: #fff; font-weight: 600; font-size: 16px; text-transform: uppercase; letter-spacing: 8px; display: block; margin-bottom: 30px; position: relative; animation: fadeIn 0.8s cubic-bezier(0.25, 0.46, 0.45, 0.94);">
                À VOTRE SERVICE
                <span style="position: absolute; bottom: -10px; left: 50%; transform: translateX(-50%); width: 40px; height: 1px; background: rgba(255,255,255,0.5);"></span>
            </span>
            
            <h1 class="contact-title fw-bold mb-4">Contactez-nous</h1>
            
            <p class="contact-subtitle mb-5">Nous sommes à votre écoute pour toutes vos questions</p>
            
            <div style="width: 100px; height: 1px; background: linear-gradient(to right, transparent, rgba(255,255,255,0.5), transparent); margin: 0 auto 30px;"></div>
        </div>
    </div>
    
    <!-- Wave overlay -->
    <div style="position: absolute; bottom: -5px; left: 0; width: 100%; height: 180px; background: url('img/banner/wave.svg') no-repeat center bottom/cover; opacity: 0.9;"></div>
</section>

<!-- Formulaire de Contact -->
<section class="form-section">
    <!-- Décorations de fond -->
    <div class="decorative-pattern pattern-1"></div>
    <div class="decorative-pattern pattern-2"></div>
    <div class="moroccan-decoration decoration-1"></div>
    <div class="moroccan-decoration decoration-2"></div>
    
    <div class="container">
        <div class="contact-form-wrapper">
            <div class="row g-0">
                <!-- Informations de contact -->
                <div class="col-lg-5">
                    <div class="contact-info1">
                        <h3 class="info-title">Parlons de vos besoins</h3>
                        <p class="info-text">N'hésitez pas à nous contacter pour toute question concernant nos produits, nos services ou pour planifier un rendez-vous dans l'une de nos boutiques.</p>                          <div class="contact-details">
                            <div class="contact-item1">
                                <div class="contact-icon1">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="contact-detail">
                                    contact@chic-foulard.ma
                                </div>
                            </div>
                            
                            <div class="contact-item1">
                                <div class="contact-icon1">
                                    <i class="fas fa-clock"></i>
                                </div>
                                <div class="contact-detail">
                                    Lun - Sam: 9h00 - 18h00
                                </div>
                            </div>
                          </div>
                            <div class="social-links"1>
                            <a href="#" title="Facebook" aria-label="Visitez notre page Facebook"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" title="Instagram" aria-label="Suivez-nous sur Instagram"><i class="fab fa-instagram"></i></a>
                            <a href="#" title="LinkedIn" aria-label="Connectez-vous avec nous sur LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#" title="WhatsApp" aria-label="Contactez-nous via WhatsApp"><i class="fab fa-whatsapp"></i></a>
                        </div>
                    </div>
                </div>
                
                <!-- Formulaire -->
                <div class="col-lg-7">
                    <div class="form-container">                        
                        <h3 class="form-title">Envoyez-nous un message</h3>
                        
                        @if(session('success'))
                        <div class="alert alert-success mb-4" style="background-color: #e8f5e9; color: #2e7d32; padding: 15px; border-radius: 8px; border-left: 4px solid #2e7d32;">
                            {{ session('success') }}
                        </div>
                        @endif
                        
                        <form action="" method="POST">
                            @csrf
                            <div class="row">                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="prenom" class="form-label required-field">Prénom</label>
                                        <input type="text" id="prenom" name="prenom" class="form-control @error('prenom') is-invalid @enderror" value="{{ old('prenom') }}" required>
                                        @error('prenom')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="nom" class="form-label required-field">Nom</label>
                                        <input type="text" id="nom" name="nom" class="form-control @error('nom') is-invalid @enderror" value="{{ old('nom') }}" required>
                                        @error('nom')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                              <div class="form-group">
                                <label for="email" class="form-label required-field">Email</label>
                                <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required>
                                @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="form-group">
                                <label for="sujet" class="form-label required-field">Sujet</label>
                                <input type="text" id="sujet" name="sujet" class="form-control @error('sujet') is-invalid @enderror" value="{{ old('sujet') }}" required>
                                @error('sujet')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="form-group">
                                <label for="message" class="form-label required-field">Message</label>
                                <textarea id="message" name="message" class="form-control @error('message') is-invalid @enderror" required>{{ old('message') }}</textarea>
                                @error('message')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="form-group mb-0">
                                <button type="submit" class="submit-btn">
                                    <span style="position: relative; z-index: 2;">Envoyer le message</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section Nos Boutiques -->
<section class="store-locations-section">
    <div class="container">
        <div class="section-header text-center mb-5">
            <span class="sub-title">NOTRE RÉSEAU</span>
            <h2 class="section-title">Nos boutiques à travers le Maroc</h2>
            <div class="title-separator"></div>
            <p class="section-description">Retrouvez nos produits dans l'une de nos boutiques partout au Maroc</p>
        </div>
        
        <div class="row store-locations">
            <!-- Boutique 1 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="store-card">
                    <div class="store-icon">
                        <i class="fas fa-store"></i>
                    </div>
                    <div class="store-details">
                        <h4 class="store-city">Tanger</h4>
                        <p class="store-address">Kissaria Al Azhar, Bd Moulay Slimane, Numéro 260 Bni Mkada</p>
                        <div class="store-contact">
                            <i class="fas fa-phone-alt"></i>
                            <span>+212 661 41 81 59</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Boutique 2 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="store-card">
                    <div class="store-icon">
                        <i class="fas fa-store"></i>
                    </div>
                    <div class="store-details">
                        <h4 class="store-city">Inezgane</h4>
                        <p class="store-address">Numéro 40, Ruelle Taroudant</p>
                        <div class="store-contact">
                            <i class="fas fa-phone-alt"></i>
                            <span>+212 661 32 19 27</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Boutique 3 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="store-card">
                    <div class="store-icon">
                        <i class="fas fa-store"></i>
                    </div>
                    <div class="store-details">
                        <h4 class="store-city">Ksar el-Kebir</h4>
                        <p class="store-address">Hay Salam, Souk Almrina, Ruelle 25, Numéro 30</p>
                        <div class="store-contact">
                            <i class="fas fa-phone-alt"></i>
                            <span>+212 661 11 92 04</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Boutique 4 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="store-card">
                    <div class="store-icon">
                        <i class="fas fa-store"></i>
                    </div>
                    <div class="store-details">
                        <h4 class="store-city">Meknès</h4>
                        <p class="store-address">Bd Al malah, Bab Brima, Numéro 77</p>
                        <div class="store-contact">
                            <i class="fas fa-phone-alt"></i>
                            <span>+212 661 11 92 06</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Boutique 5 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="store-card">
                    <div class="store-icon">
                        <i class="fas fa-store"></i>
                    </div>
                    <div class="store-details">
                        <h4 class="store-city">El Jadida</h4>
                        <p class="store-address">Saha Alhansali, Kissaria Ibn Zeroual, Numéro 19</p>
                        <div class="store-contact">
                            <i class="fas fa-phone-alt"></i>
                            <span>+212 661 62 49 44</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Boutique 6 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="store-card">
                    <div class="store-icon">
                        <i class="fas fa-store"></i>
                    </div>
                    <div class="store-details">
                        <h4 class="store-city">Marrakech</h4>
                        <p class="store-address">Defa et Rbaa, Alkousour, Numéro 13</p>
                        <div class="store-contact">
                            <i class="fas fa-phone-alt"></i>
                            <span>+212 661 59 10 26</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Boutique 7 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="store-card">
                    <div class="store-icon">
                        <i class="fas fa-store"></i>
                    </div>
                    <div class="store-details">
                        <h4 class="store-city">Safi</h4>
                        <p class="store-address">Kissaria Ahl Wazan, Hay Alkourss, Bd Phosphate, Numéro 58/59</p>
                        <div class="store-contact">
                            <i class="fas fa-phone-alt"></i>
                            <span>+212 662 06 54 99</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Boutique 8 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="store-card">
                    <div class="store-icon">
                        <i class="fas fa-store"></i>
                    </div>
                    <div class="store-details">
                        <h4 class="store-city">Salé</h4>
                        <p class="store-address">Ruelle Al Chratin, Numéro 6</p>
                        <div class="store-contact">
                            <i class="fas fa-phone-alt"></i>
                            <span>+212 661 14 48 95</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Boutique 9 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="store-card">
                    <div class="store-icon">
                        <i class="fas fa-store"></i>
                    </div>
                    <div class="store-details">
                        <h4 class="store-city">Oujda</h4>
                        <p class="store-address">Ruelle Hamam Al Sabouni, Kissaria Masjid Hadada, Numéro 1</p>
                        <div class="store-contact">
                            <i class="fas fa-phone-alt"></i>
                            <span>+212 661 41 96 78</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Boutique 10 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="store-card">
                    <div class="store-icon">
                        <i class="fas fa-store"></i>
                    </div>
                    <div class="store-details">
                        <h4 class="store-city">Beni Mellal</h4>
                        <p class="store-address">Bd Al Chouhadaa, Ruelle Al Amala, Numéro 139</p>
                        <div class="store-contact">
                            <i class="fas fa-phone-alt"></i>
                            <span>+212 618 53 37 41</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Boutique 11 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="store-card">
                    <div class="store-icon">
                        <i class="fas fa-store"></i>
                    </div>
                    <div class="store-details">
                        <h4 class="store-city">Tanger</h4>
                        <p class="store-address">Bd Mexique, Ruelle Mohammed Abdou, Numéro 27</p>
                        <div class="store-contact">
                            <i class="fas fa-phone-alt"></i>
                            <span>+212 661 11 92 05</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Boutique 12 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="store-card">
                    <div class="store-icon">
                        <i class="fas fa-store"></i>
                    </div>
                    <div class="store-details">
                        <h4 class="store-city">Marrakech</h4>
                        <p class="store-address">Defa et Rbee, Kissaria Al Amri, 1er étage, Numéro 18</p>
                        <div class="store-contact">
                            <i class="fas fa-phone-alt"></i>
                            <span>+212 661 46 64 69</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    // Script pour appliquer l'animation séquentielle aux cartes de boutiques
    document.addEventListener('DOMContentLoaded', function() {
        const storeCards = document.querySelectorAll('.store-card');
        storeCards.forEach((card, index) => {
            card.style.setProperty('--animation-order', index);
        });
    });
</script>
@endsection
