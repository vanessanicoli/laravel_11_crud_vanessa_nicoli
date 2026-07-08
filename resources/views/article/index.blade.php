<x-layout>

        
        @if ($articles->isEmpty())
        <x-display-message/>
        <div class="row mt-5 mb-3 container-fluid">
            <h1 class="display-2 text-center fw-bolder">Ops... Non sono ancora presenti articoli!</h1>
            <h2 class="display-4 text-center fw-bolder mt-3">Creane uno per visualizzarlo!</h2>

            <div class="col-12 d-flex justify-content-center align-items-center mt-5">
                <a type="button" class="btn btn-home btn-lg me-5" href="{{ route('articles.create') }}">Crea Post</a>
            </div>  
        </div>

        @else
        <div class="row mb-5 my-4">
                <div class="col-12 d-flex flex-column justify-content-center align-items-center">
                    <h3 class="display-3 text-uppercase fw-medium">Tutti i post</h3>
                </div>
        </div>
            <x-display-message/>
        <div class="row my-3 container-fluid">
            @foreach ($articles as $article)
            <x-card
            :article='$article'
            />
            <x-modal-delete :article='$article'/>
            @endforeach
        </div>
        @endif

</x-layout>