<div class="modal fade" id="modalDelete-{{ $article->id }}" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content  bg-m">
      <div class="modal-header bg-d text-l">
        <h5 class="modal-title text-uppercase">Conferma Eliminazione</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p class="fs-5 text-center my-2">Sei sicuro di voler eliminare questo articolo?</p>
      </div>
      <div class="modal-footer border-t-d">
        <button type="button" class="btn btn-card me-3" data-bs-dismiss="modal">Annulla</button>
        <form method="POST" action="{{ route('articles.delete', compact('article')) }}">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-card">Elimina</button>
        </form>
      </div>
    </div>
  </div>
</div>