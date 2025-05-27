@extends('layout.default')

@section('content')
<section class="py-5" style="margin-top: 100px;">
    <div class="container">
        <div class="row mb-4">
            <div class="col-md-8">
                <h2 class="mb-0" style="color: #840444; font-weight: 600;">Gestion des Articles</h2>
                <p class="text-muted">Gérez vos articles de blog ici</p>
            </div>
            <div class="col-md-4 text-end">
                <a href="{{ route('articles.create') }}" class="btn btn-primary" style="background-color: #840444; border: none; padding: 8px 20px; border-radius: 30px;">
                    <i class="fa fa-plus-circle me-2"></i>Nouvel Article
                </a>
            </div>
        </div>

        @if ($message = Session::get('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Succès!</strong> {{ $message }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        @if ($message = Session::get('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Erreur!</strong> {{ $message }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        <div class="row">
            <div class="col-md-12">
                <div class="card shadow-sm border-0" style="border-radius: 10px; overflow: hidden;">
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead style="background-color: #f8f9fa;">
                                    <tr>
                                        <th width="60">#</th>
                                        <th width="100">Image</th>
                                        <th>Titre</th>
                                        <th width="180">Date de création</th>
                                        <th width="200" class="text-center">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($articles as $article)
                                    <tr>
                                        <td>{{ $article->id }}</td>
                                        <td>
                                            @if($article->image)
                                            <img src="{{ asset($article->image) }}" alt="{{ $article->title }}" class="img-thumbnail" style="width: 80px; height: 60px; object-fit: cover;">
                                            @else
                                            <div class="bg-light d-flex align-items-center justify-content-center" style="width: 80px; height: 60px;">
                                                <i class="fa fa-image text-muted"></i>
                                            </div>
                                            @endif
                                        </td>
                                        <td>
                                            <h6 class="mb-1">{{ $article->title }}</h6>
                                            <small class="text-muted">Par {{ $article->user->name }}</small>
                                        </td>
                                        <td>{{ $article->created_at->format('d M, Y') }}</td>
                                        <td class="text-center">
                                            <a href="{{ route('articles.show', $article->id) }}" class="btn btn-sm btn-outline-secondary" title="Voir">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                            <a href="{{ route('articles.edit', $article->id) }}" class="btn btn-sm btn-outline-primary" title="Éditer">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <form action="{{ route('articles.destroy', $article->id) }}" method="POST" style="display: inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet article?')" title="Supprimer">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="5" class="text-center py-5">
                                            <div class="py-4">
                                                <i class="fa fa-newspaper-o mb-3" style="font-size: 3em; color: #ccc;"></i>
                                                <h5 class="text-muted">Aucun article trouvé</h5>
                                                <p class="mb-0">Commencez par créer votre premier article</p>
                                                <a href="{{ route('articles.create') }}" class="btn btn-primary mt-3" style="background-color: #840444; border: none;">
                                                    Créer un article
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="d-flex justify-content-center mt-4">
                    {{ $articles->links() }}
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
