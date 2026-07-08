<x-layout>
    
    <div class="row mt-5">
        <div class="col-12 d-flex flex-column justify-content-center align-items-center">
            <h3 class="display-3 text-uppercase fw-medium">Crea il tuo post!</h3>
        </div>
    </div>
    
    <x-display-message/>
    <x-display-error/>

    <div class="row container-fluid justify-content-center align-items-center">
        <form class="bg-m p-4 rounded-4 my-4 w-50" method="POST" action="{{ route('articles.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Titolo dell'articolo:</label>
                <input type="text" name="title" class="form-control" id="title" aria-describedby="titleHelp" value="{{ old('title') }}">
            </div>
            <div class="mb-3">
                <label for="subtitle" class="form-label">Sottotitolo dell'articolo:</label>
                <input type="text" name="subtitle" class="form-control" id="subtitle" aria-describedby="subtitleHelp" value="{{ old('subtitle') }}">
            </div>
            <div class="mb-3">
                <label for="author" class="form-label">Autore dell'articolo:</label>
                <input type="text" name="author" class="form-control" id="author" aria-describedby="authorHelp" value="{{ old('author') }}">
            </div>
            <div class="mb-3">
                <label for="body" class="form-label">Corpo dell'articolo:</label>
                <textarea name="body" id="body" class="form-control">{{ old('body') }}</textarea>
            </div>
            <div class="mb-3">
                <label for="img" class="form-label">Immagine dell'articolo:</label>
                <input type="file" name="img" class="form-control" id="img" aria-describedby="imgHelp">
            </div>
            <div class="d-flex justify-content-center align-items-center mt-4">
                <button type="submit" class="btn btn-form">Crea Post</button>
            </div>
        </form>
    </div>
    
    
</x-layout>