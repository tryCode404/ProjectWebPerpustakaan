<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
  <!-- Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/home">
    <div class="sidebar-brand-icon">
      <img src="{{ asset('img/logo.png') }}" style="width: 50px; height: 50px;">
    </div>
    <div class="sidebar-brand-text mx-1">
      <div>UBSI Library</div>
    </div>
  </a>
  
  
  <hr class="sidebar-divider my-0">
  
  <!-- Home -->
  <li class="nav-item active"> <!-- Jarak antar item -->
    <a class="nav-link" href="/home">
      <i class="fas fa-home" style="margin-right: 15px;"></i> <!-- Jarak antara ikon dan teks -->
      <span>Home</span>
    </a>
  </li>
  
  <hr class="sidebar-divider">
  
  <div class="sidebar-heading">
    Features
  </div>
  
  <!-- Buku -->
  <li class="nav-item" style="margin-bottom: 20px;">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBuku"
      aria-expanded="true" aria-controls="collapseBuku">
      <i class="fas fa-book" style="margin-right: 15px;"></i> <!-- Jarak antara ikon dan teks -->
      <span>Buku</span>
    </a>
    <div id="collapseBuku" class="collapse" aria-labelledby="headingBuku" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Buku</h6>
        <a class="collapse-item" href="/buku">Lihat Semua Buku</a>
        @if (Auth::user()->isAdmin == 1)
        <a class="collapse-item" href="/buku/create">Tambah Buku</a>
        @endif
      </div>
    </div>
  </li>
  
  <!-- Kategori -->
  <li class="nav-item" style="margin-bottom: 20px;">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseKategori"
      aria-expanded="true" aria-controls="collapseKategori">
      <i class="fas fa-tags" style="margin-right: 15px;"></i>
      <span>Kategori</span>
    </a>
    <div id="collapseKategori" class="collapse" aria-labelledby="headingKategori" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Kategori</h6>
        <a class="collapse-item" href="/kategori">Lihat Kategori</a>
        @if (Auth::user()->isAdmin == 1)
        <a class="collapse-item" href="/kategori/create">Tambah Kategori</a>
        @endif
      </div>
    </div>
  </li>
  
  <!-- Anggota -->
  @if (Auth::user()->isAdmin == 1)
  <li class="nav-item" style="margin-bottom: 20px;">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAnggota"
      aria-expanded="true" aria-controls="collapseAnggota">
      <i class="fas fa-users" style="margin-right: 15px;"></i>
      <span>Anggota</span>
    </a>
    <div id="collapseAnggota" class="collapse" aria-labelledby="headingAnggota" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Anggota</h6>
        <a class="collapse-item" href="/anggota">Lihat Anggota</a>
        <a class="collapse-item" href="/anggota/create">Tambah Anggota</a>
      </div>
    </div>
  </li>
  @endif
  
  <!-- Peminjaman -->
  @if (Auth::user()->isAdmin == 1)
  <li class="nav-item" style="margin-bottom: 20px;">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePeminjaman"
      aria-expanded="true" aria-controls="collapsePeminjaman">
      <i class="fas fa-book-reader" style="margin-right: 15px;"></i>
      <span>Peminjaman</span>
    </a>
    <div id="collapsePeminjaman" class="collapse" aria-labelledby="headingPeminjaman" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Peminjaman</h6>
        <a class="collapse-item" href="/peminjaman">Riwayat Peminjaman</a>
        <a class="collapse-item" href="/peminjaman/create">Tambahkan Peminjaman</a>
        <a class="collapse-item" href="/pengembalian">Kembalikan Buku</a>
      </div>
    </div>
  </li>
  @endif
  
  <hr class="sidebar-divider">
  <div class="version" id="version-ruangadmin"></div>
</ul>
