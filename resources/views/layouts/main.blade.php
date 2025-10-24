<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <title>Website Sekolah</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap -->
  <link href="{{ asset('accses/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('accses/css/style.css') }}" rel="stylesheet">
</head>

<body class="d-flex flex-column min-vh-100">

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
    <div class="container">
      <a class="navbar-brand fw-bold" href="#">SMA  Nusantara</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="/home">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="/about">Profil</a></li>
          <li class="nav-item"><a class="nav-link" href="/service">Kegiatan</a></li>
          <li class="nav-item"><a class="nav-link" href="/contact">Kontak</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Konten utama -->
  <main class="flex-fill">
    @yield('content')
  </main>

  <!-- Footer -->
  <footer class="bg-primary text-white text-center py-3 mt-auto">
    <p class="mb-0">&copy; 2025 SMA  Nusantara. Semua Hak Dilindungi.</p>
  </footer>

  <script src="{{ asset('accses/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('accses/js/script.js') }}"></script>
</body>
</html>
