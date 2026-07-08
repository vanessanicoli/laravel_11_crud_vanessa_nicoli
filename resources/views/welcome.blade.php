<x-layout>
    <x-header-logo/>
    
    <div class="row">
        <div class="col-12 d-flex flex-column justify-content-center align-items-center">
            <h3 class="display-3 text-uppercase fw-medium">Benvenuto!</h3>
            <h3 class="display-3 text-uppercase fw-medium">Cosa vuoi fare?</h3>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-12 d-flex justify-content-center align-items-center">
            <a type="button" class="btn btn-home btn-lg me-5" href="{{ route('articles.create') }}">Crea Post</a>
            <a type="button" class="btn btn-home btn-lg ms-5" href="{{ route('articles.index') }}">Vedi Post</a>
        </div>
    </div>

</x-layout>