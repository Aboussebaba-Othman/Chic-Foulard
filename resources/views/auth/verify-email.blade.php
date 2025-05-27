@extends('layout.default')

@section('content')
<section class="py-5" style="margin-top: 100px;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card" style="border-color: #840444; border-radius: 8px; box-shadow: 0 4px 12px rgba(0,0,0,0.1);">
                    <div class="card-header text-center py-3" style="background-color: #840444; color: white; border-radius: 8px 8px 0 0;">
                        <h3 class="mb-0">Vérification d'email</h3>
                    </div>
                    <div class="card-body p-4">
                        <p class="mb-4">
                            Merci pour votre inscription ! Avant de commencer, pourriez-vous vérifier votre adresse e-mail en cliquant sur le lien que nous venons de vous envoyer ? Si vous n'avez pas reçu l'e-mail, nous vous en enverrons volontiers un autre.
                        </p>

                        @if (session('status') == 'verification-link-sent')
                            <div class="alert alert-success mb-4">
                                Un nouveau lien de vérification a été envoyé à l'adresse e-mail que vous avez fournie lors de l'inscription.
                            </div>
                        @endif

                        <div class="mt-4 d-flex justify-content-between">
                            <form method="POST" action="{{ route('verification.send') }}">
                                @csrf

                                <button type="submit" class="btn btn-primary" style="background-color: #840444; border-color: #840444;">
                                    Renvoyer l'email de vérification
                                </button>
                            </form>

                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <button type="submit" class="btn btn-outline-secondary">
                                    Se déconnecter
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
