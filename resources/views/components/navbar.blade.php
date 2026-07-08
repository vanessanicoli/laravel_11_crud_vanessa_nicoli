<nav class="navbar navbar-expand-lg bg-m">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ route('homepage') }}">
        <img src="/favicon.ico" class="img-fluis logo" alt="Logo del sito">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item">
          <a class="nav-link ms-5 " aria-current="page" href="{{ route('homepage') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link ms-5 " href="{{ route('articles.create') }}">Crea un post</a>
        </li>
        <li class="nav-item">
          <a class="nav-link ms-5 " href="{{ route('articles.index') }}">Tutti i post</a>
        </li>
      </ul>
    </div>
  </div>
</nav>