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
    
    .contact-hero {
        position: relative;
        background: linear-gradient(135deg, rgba(132, 4, 68, 0.8) 0%, rgba(0, 0, 0, 0.8) 100%), url('img/product/DSCF0985.jpg') no-repeat center center/cover;
        height: 500px;
        display: flex;
        align-items: center;        position: relative;
        overflow: hidden;
        box-shadow: 0 15px 40px rgba(0,0,0,0.3);
    }
    
    .contact-title {
        color: white;
        text-transform: uppercase;
        letter-spacing: 8px;
        text-shadow: 2px 2px 8px rgba(0,0,0,0.6);
        font-size: 4rem;
        animation: fadeIn 1.2s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        margin-bottom: 30px;
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
        font-size: 20px;
        margin-bottom: 0;
        letter-spacing: 4px;
        animation: fadeIn 1.5s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        font-weight: 300;
    }
      .form-section {
        background-color: #f9f7f8;
        background-image: linear-gradient(to right, rgba(132, 4, 68, 0.02) 0%, rgba(132, 4, 68, 0.05) 100%);
        padding: 120px 0;
        position: relative;
    }
    
    .contact-form-wrapper {
        background: white;
        border-radius: 0;
        overflow: hidden;
        box-shadow: 0 20px 50px rgba(0,0,0,0.08);
        position: relative;
        margin-top: -80px;
        z-index: 10;
    }
      .contact-info {
        background: linear-gradient(135deg, #840444 0%, #a50854 100%);
        color: white;
        padding: 60px 40px;
        height: 100%;
        position: relative;
        overflow: hidden;
    }
    
    .contact-info:before {
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
    
    .contact-item {
        display: flex;
        align-items: center;
        margin-bottom: 30px;
        transition: all 0.3s ease;
    }
    
    .contact-item:hover {
        transform: translateX(5px);
    }
    
    .contact-icon {
        width: 46px;
        height: 46px;
        background: rgba(255,255,255,0.1);
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        margin-right: 18px;
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }
    
    .contact-item:hover .contact-icon {
        background: rgba(255,255,255,0.2);
        transform: scale(1.1);
    }
    
    .contact-icon:after {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
        transition: 0.5s;
    }
    
    .contact-item:hover .contact-icon:after {
        left: 100%;
    }
      .contact-icon i {
        color: white;
        font-size: 20px;
    }
    
    .contact-detail {
        font-size: 16px;
        opacity: 0.9;
        transition: all 0.3s ease;
    }
    
    .contact-item:hover .contact-detail {
        opacity: 1;
    }
    
    .social-links {
        margin-top: 50px;
        position: relative;
        z-index: 1;
    }
    
    .social-links a {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 46px;
        height: 46px;
        background: rgba(255,255,255,0.1);
        border-radius: 50%;
        margin-right: 12px;
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        position: relative;
        overflow: hidden;
    }
    
    .social-links a:after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(255,255,255,0);
        border-radius: 50%;
        transform: scale(0);
        transition: transform 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        z-index: -1;
    }
    
    .social-links a:hover {
        background: rgba(255,255,255,0.2);
        transform: translateY(-8px);
    }
    
    .social-links a:hover:after {
        transform: scale(1.3);
        opacity: 0;
    }
    
    .social-links i {
        color: white;
        font-size: 20px;
    }
      .form-container {
        padding: 60px 50px;
        position: relative;
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
        border-radius: 0;
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
        border-radius: 0;
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
                    <div class="contact-info">
                        <h3 class="info-title">Parlons de vos besoins</h3>
                        <p class="info-text">N'hésitez pas à nous contacter pour toute question concernant nos produits, nos services ou pour planifier un rendez-vous dans notre atelier de création.</p>
                        
                        <div class="contact-details">
                            <div class="contact-item">
                                <div class="contact-icon">
                                    <i class="fa fa-map-marker"></i>
                                </div>
                                <div class="contact-detail">
                                    123 Avenue Mohammed V, Casablanca, Maroc
                                </div>
                            </div>
                            
                            <div class="contact-item">
                                <div class="contact-icon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="contact-detail">
                                    +212 522 123 456
                                </div>
                            </div>
                            
                            <div class="contact-item">
                                <div class="contact-icon">
                                    <i class="fa fa-envelope"></i>
                                </div>
                                <div class="contact-detail">
                                    contact@chic-foulard.ma
                                </div>
                            </div>
                            
                            <div class="contact-item">
                                <div class="contact-icon">
                                    <i class="fa fa-clock-o"></i>
                                </div>
                                <div class="contact-detail">
                                    Lun - Sam: 9h00 - 18h00
                                </div>
                            </div>
                        </div>
                        
                        <div class="social-links">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                
                <!-- Formulaire -->
                <div class="col-lg-7">
                    <div class="form-container">                        <h3 class="form-title">Envoyez-nous un message</h3>
                        
                        @if(session('success'))
                        <div class="alert alert-success mb-4" style="background-color: #e8f5e9; color: #2e7d32; padding: 15px; border-radius: 8px; border-left: 4px solid #2e7d32;">
                            {{ session('success') }}
                        </div>
                        @endif
                        
                        <form action="" method="POST">
                            @csrf
                            <div class="row">                                <div class="col-md-6">
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


@endsection
