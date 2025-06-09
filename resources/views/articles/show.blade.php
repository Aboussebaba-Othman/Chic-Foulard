@extends('layout.default')

@section('content')
<section class="article-detail-section" style="margin-top: 70px; padding: 60px 0; background: linear-gradient(135deg, #f9f7f8 0%, #f2e9ee 100%);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-11 col-md-11">
                <!-- Header avec navigation retour - Style amélioré -->
                <div class="d-flex align-items-center mb-5" style="position: relative;">
                    <a href="{{ url('/') }}" class="btn me-3" style="border-radius: 50%; width: 48px; height: 48px; display: flex; align-items: center; justify-content: center; background-color: white; color: #840444; box-shadow: 0 4px 15px rgba(132, 4, 68, 0.15); border: none; transition: all 0.3s ease; z-index: 2;" onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'">
                        <i class="fa fa-arrow-left"></i>
                    </a>
                    <div style="position: relative; z-index: 1;">
                        <div style="font-size: 14px; color: #666; margin-bottom: 6px; letter-spacing: 0.5px;">
                            <span style="display: inline-flex; align-items: center; margin-right: 20px;">
                                <i class="fa fa-calendar me-2" style="color: #840444;"></i> {{ $article->created_at->format('d M Y') }}
                            </span>
                            {{-- <span style="display: inline-flex; align-items: center;">
                                <i class="fa fa-user me-2" style="color: #840444;"></i> {{ $article->user->name }}
                            </span> --}}
                        </div>
                        <h2 style="color: #840444; font-weight: 700; margin: 0; font-size: 28px; text-shadow: 0 1px 2px rgba(132, 4, 68, 0.1);">{{ $article->title }}</h2>
                    </div>
                </div>

                <!-- Article container -->
                <div style="background-color: white; border-radius: 15px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.08); margin-bottom: 30px; position: relative;">
                    
                    @if($article->image)
                    <div style="position: relative; overflow: hidden;">
                        <div style="height: 400px; background-image: url('{{ asset($article->image) }}'); background-size: cover; background-position: center; position: relative;">
                            <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(to bottom, rgba(0,0,0,0.1) 0%, rgba(0,0,0,0.4) 100%);"></div>
                        </div>
                        <div style="position: absolute; bottom: 0; left: 0; width: 100%; padding: 50px 30px 30px; background: linear-gradient(to top, rgba(255,255,255,1) 20%, rgba(255,255,255,0) 100%);">
                            <h1 style="color: #840444; font-weight: 700; font-size: 32px; margin-bottom: 5px; text-shadow: 0 1px 3px rgba(255,255,255,0.8);">{{ $article->title }}</h1>
                        </div>
                    </div>
                    @endif
                    
                    <div style="padding: 40px; position: relative;">
                        @if(!$article->image)
                        <h1 style="color: #840444; font-weight: 700; font-size: 32px; margin-bottom: 20px; position: relative; padding-bottom: 15px;">
                            {{ $article->title }}
                            <span style="position: absolute; bottom: 0; left: 0; width: 60px; height: 3px; background-color: #840444;"></span>
                        </h1>
                        @endif
                        
                        <div class="article-content" style="color: #333; line-height: 1.8; font-size: 16px;">
                            {!! nl2br(e($article->content)) !!}
                        </div>
                    </div>                    </div>
                    
                    <!-- Footer avec métadonnées et actions -->
                    <div style="padding: 20px 40px; border-top: 1px solid #f0f0f0; display: flex; justify-content: space-between; align-items: center; background-color: #fcfcfc;">
                        <div style="display: flex; align-items: center;">
                            <div style="width: 45px; height: 45px; border-radius: 50%; background-color: #840444; color: white; display: flex; align-items: center; justify-content: center; font-size: 20px; margin-right: 15px;">
                                <i class="fa fa-newspaper-o"></i>
                            </div>
                            <div>
                                <div style="font-size: 13px; color: #666;">Publié le</div>
                                <div style="font-weight: 600; color: #333;">{{ $article->created_at->format('d M Y') }}</div>
                            </div>
                        </div>
                        
                        <div class="d-flex gap-2">
                            @auth
                                @if(Auth::id() === $article->user_id)
                                    <a href="{{ route('articles.edit', $article->id) }}" class="btn" style="background-color: #840444; color: white; border: none; padding: 8px 15px; border-radius: 5px; display: flex; align-items: center;">
                                        <i class="fa fa-edit me-2"></i> Modifier
                                    </a>
                                    <form action="{{ route('articles.destroy', $article->id) }}" method="POST" style="display: inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn" style="background-color: white; color: #d9534f; border: 1px solid #d9534f; padding: 8px 15px; border-radius: 5px; display: flex; align-items: center;" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet article?')">
                                            <i class="fa fa-trash me-2"></i> Supprimer
                                        </button>
                                    </form>
                                @endif
                            @endauth
                            <a href="{{ url('/') }}#actualites" class="btn" style="background-color: #f2e9ee; color: #840444; border: none; padding: 8px 15px; border-radius: 5px; display: flex; align-items: center;">
                                <i class="fa fa-list me-2"></i> Tous les articles
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Bouton retour à l'accueil -->
                <div class="text-center mt-4">
                    <a href="{{ url('/') }}" class="btn" style="background-color: white; color: #840444; border: 1px solid #840444; padding: 12px 30px; border-radius: 5px; font-weight: 600; letter-spacing: 0.5px; box-shadow: 0 4px 12px rgba(132, 4, 68, 0.1); transition: all 0.3s ease;">
                        <i class="fa fa-home me-2"></i> Retour à l'accueil
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
