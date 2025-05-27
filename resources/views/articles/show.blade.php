@extends('layout.default')

@section('content')
<section class="py-5" style="margin-top: 100px;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="d-flex align-items-center mb-4">
                    <a href="{{ route('articles.index') }}" class="btn btn-outline-secondary me-3" style="border-radius: 50%; width: 40px; height: 40px; display: flex; align-items: center; justify-content: center;">
                        <i class="fa fa-arrow-left"></i>
                    </a>
                    <h2 class="mb-0" style="color: #840444; font-weight: 600;">Détails de l'Article</h2>
                </div>

                <div class="card shadow-sm border-0 mb-4" style="border-radius: 10px; overflow: hidden;">
                    <div class="card-header d-flex justify-content-between align-items-center" style="background: linear-gradient(90deg, #840444 0%, #a32e6c 100%); color: white; border: none;">
                        <h5 class="mb-0">{{ $article->title }}</h5>
                        <div>
                            <span class="badge bg-light text-dark">
                                <i class="fa fa-calendar me-1"></i> {{ $article->created_at->format('d M Y') }}
                            </span>
                            <span class="badge bg-light text-dark ms-1">
                                <i class="fa fa-user me-1"></i> {{ $article->user->name }}
                            </span>
                        </div>
                    </div>
                    
                    @if($article->image)
                    <div class="text-center p-3 bg-light">
                        <img src="{{ asset($article->image) }}" alt="{{ $article->title }}" class="img-fluid" style="max-height: 400px; object-fit: contain;">
                    </div>
                    @endif
                    
                    <div class="card-body p-4">
                        <div class="article-content">
                            {!! nl2br(e($article->content)) !!}
                        </div>
                    </div>
                    
                    <div class="card-footer bg-white d-flex justify-content-end gap-2 py-3">
                        <a href="{{ route('articles.edit', $article->id) }}" class="btn btn-primary" style="background-color: #840444; border: none;">
                            <i class="fa fa-edit me-1"></i> Modifier
                        </a>
                        <form action="{{ route('articles.destroy', $article->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet article?')">
                                <i class="fa fa-trash me-1"></i> Supprimer
                            </button>
                        </form>
                    </div>
                </div>
                
                <div class="text-center">
                    <a href="{{ route('articles.index') }}" class="btn btn-outline-secondary">
                        <i class="fa fa-list me-1"></i> Retour à la liste
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
