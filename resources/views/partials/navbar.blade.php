<nav class="navbar navbar-expand-lg navbar-dark bg-info ">
    <div class="container">
      <a class="navbar-brand fw-bold" href="/">Kost Al-Hakim</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link {{ ($judul === "Home") ? 'active' : '' }}" href="/">Home</a>
          <a class="nav-link {{ ($judul === "About") ? 'active' : '' }}" href="/about">About</a>
          <a class="nav-link {{ ($judul === "Fasilitas") ? 'active' : '' }}" href="/fasilitas">Fasilitas</a>
        </div>
      </div>
    </div>
  </nav>