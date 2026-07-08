<div class="col-12 col-md-6 d-flex justify-content-center align-items-center">

    <div class="card bg-m mb-5">
    <div class="ratio ratio-1x1">
        <img src="{{ Storage::url($article->img) }}" class="card-img-top img-fluid object-fit-cover" alt="Immagine dell'articolo">
    </div>
    <div class="card-body">
        <h4 class="card-title">{{ $article->title }}</h4>
        <h5 class="card-subtitle">{{ $article->subtitle }}</h5>
        <p class="card-text">{{ $article->author }}</p>
        <div class="d-flex justify-content-center align-items-center">
            <a href="{{ route('articles.show', compact('article')) }}" class="btn btn-card ">Leggi</a>
            <a href="{{ route('articles.edit', compact('article')) }}" class="btn btn-card mx-4">Modifica</a>

            <button type="button" class="btn btn-card" data-bs-toggle="modal" data-bs-target="#modalDelete-{{ $article->id }}">Elimina</button>
        </div>
    </div>
    </div>

</div>