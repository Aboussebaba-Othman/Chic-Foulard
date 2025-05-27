@extends('layout.default')

@section('content')
<section class="py-5" style="margin-top: 100px;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card" style="border-color: #840444; border-radius: 8px; box-shadow: 0 4px 12px rgba(0,0,0,0.1);">
                    <div class="card-header text-center py-3" style="background-color: #840444; color: white; border-radius: 8px 8px 0 0;">
                        <h3 class="mb-0">Connexion</h3>
                    </div>
                    <div class="card-body p-4">
                        @if (session('status'))
                            <div class="alert alert-success mb-3">
                                {{ session('status') }}
                            </div>
                        @endif
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username">
                                @error('email')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Mot de passe</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" required autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="remember_me" name="remember">
                                <label class="form-check-label" for="remember_me">Se souvenir de moi</label>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}" class="text-decoration-none" style="color: #840444;">
                                        Mot de passe oublié ?
                                    </a>
                                @endif
                                <button type="submit" class="btn text-white" style="background-color: #840444;">
                                    Se connecter
                                </button>
                            </div>
                            <div class="text-center mt-4">
                                <p>Pas encore de compte ? <a href="{{ route('register') }}" style="color: #840444;">S'inscrire</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
