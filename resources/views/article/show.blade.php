<x-layout>
    
    <x-display-message/>

    <div class="row container justify-content-center align-items-center m-5">
        <div class="col-12 col-md-8 d-flex flex-column justify-content-center align-items-center py-3  bg-m rounded-2">
            <h1 class="display-4 text-center fw-bolder">{{ $article->title }}</h1>
            <h2 class="fs-2 text-center fw-semibold my-2 mx-2 mx-md-5">{{ $article->subtitle }}</h2>
            <h4 class="text-center fw-semibold mt-4 text-d">A cura di: {{ $article->author }}</h4>
            <p class="text-center text-d">{{ $article->created_at->format('d/m/Y') }}</p>
            
            <div class="my-4 img-show-container">
                <img src="{{ Storage::url($article->img) }}" class="card-img-top img-fluid img-show" alt="Immagine dell'articolo">
            </div>
            
            <p class="p-show mx-2 mx-md-5 my-3">{{ $article->body }}</p>

            <div class="d-flex justify-content-center align-items-center"       >
                <a href="{{ route('articles.edit', compact('article')) }}" class="btn btn-card mx-4">Modifica</a>
                <button type="button" class="btn btn-card" data-bs-toggle="modal" data-bs-target="#modalDelete-{{ $article->id }}">Elimina</button>
            </div>
        </div>
    </div>
    
    <x-modal-delete :article='$article'/>
</x-layout>