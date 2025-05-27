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
                    <h2 class="mb-0" style="color: #840444; font-weight: 600;">Créer un Nouvel Article</h2>
                </div>

                <div class="card shadow-sm border-0" style="border-radius: 10px; overflow: hidden;">
                    <div class="card-header" style="background: linear-gradient(90deg, #840444 0%, #a32e6c 100%); color: white; border: none;">
                        <h5 class="mb-0">Informations de l'article</h5>
                    </div>
                    <div class="card-body p-4">
                        <form action="{{ route('articles.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-4">
                                <label for="title" class="form-label fw-bold">Titre de l'article <span class="text-danger">*</span></label>
                                <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}" placeholder="Entrez le titre de votre article" required>
                                @error('title')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>                            <div class="mb-4">
                                <label for="content" class="form-label fw-bold">Contenu <span class="text-danger">*</span></label>
                                <textarea name="content" id="content" rows="12" class="form-control rich-text @error('content') is-invalid @enderror" placeholder="Rédigez le contenu de votre article ici..." required>{{ old('content') }}</textarea>
                                @error('content')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="image" class="form-label fw-bold">Image d'illustration</label>
                                <div class="input-group">
                                    <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image" accept="image/*">
                                    <label class="input-group-text" for="image"><i class="fa fa-upload"></i></label>
                                </div>
                                <small class="form-text text-muted">Formats acceptés: JPEG, PNG, JPG, GIF. Taille max: 2MB.</small>
                                @error('image')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="image-preview-container mb-4" style="display: none;">
                                <label class="form-label">Aperçu de l'image</label>
                                <div class="border rounded p-2 text-center">
                                    <img id="image-preview" src="#" alt="Aperçu de l'image" style="max-height: 200px; max-width: 100%;">
                                </div>
                            </div>

                            <div class="d-flex justify-content-end">
                                <a href="{{ route('articles.index') }}" class="btn btn-outline-secondary me-2">Annuler</a>
                                <button type="submit" class="btn btn-primary" style="background-color: #840444; border: none;">
                                    <i class="fa fa-save me-1"></i> Publier l'article
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const imageInput = document.getElementById('image');
        const imagePreviewContainer = document.querySelector('.image-preview-container');
        const imagePreview = document.getElementById('image-preview');

        imageInput.addEventListener('change', function() {
            if (this.files && this.files[0]) {
                const reader = new FileReader();
                
                reader.onload = function(e) {
                    imagePreview.src = e.target.result;
                    imagePreviewContainer.style.display = 'block';
                }
                
                reader.readAsDataURL(this.files[0]);
            }
        });
    });
</script>
@endsection
