<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon">
      <img src="{{asset('img/logo.png')}}">
    </div>
    <div class="sidebar-brand-text mx-3">Universitas Bina Sarana Informatika</div>
  </a>
  <hr class="sidebar-divider my-0">
  <li class="nav-item active">
    <a class="nav-link" href="index.html">
      <i class="fas fa-home"></i> <!-- Ikon Home -->
      <span>Home</span>
    </a>
  </li>
  <hr class="sidebar-divider">
  <div class="sidebar-heading">
    Features
  </div>
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBuku"
      aria-expanded="true" aria-controls="collapseBuku">
      <i class="fas fa-book"></i> <!-- Ikon Buku -->
      <span>Buku</span>
    </a>
    <div id="collapseBuku" class="collapse" aria-labelledby="headingBuku" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Buku</h6>
        <a class="collapse-item" href="alerts.html">Lihat Semua Buku</a>
        <a class="collapse-item" href="buttons.html">Tambah Buku</a>
      </div>
    </div>
</li>

<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseKategori"
      aria-expanded="true" aria-controls="collapseKategori">
      <i class="fas fa-tags"></i> <!-- Ikon Kategori -->
      <span>Kategori</span>
    </a>
    <div id="collapseKategori" class="collapse" aria-labelledby="headingKategori" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Kategori</h6>
        <a class="collapse-item" href="form_basics.html">Lihat Kategori</a>
        <a class="collapse-item" href="form_advanceds.html">Tambah Kategori</a>
      </div>
    </div>
</li>

<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAnggota"
      aria-expanded="true" aria-controls="collapseAnggota">
      <i class="fas fa-users"></i> <!-- Ikon Anggota -->
      <span>Anggota</span>
    </a>
    <div id="collapseAnggota" class="collapse" aria-labelledby="headingAnggota" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Anggota</h6>
        <a class="collapse-item" href="simple-tables.html">Lihat Anggota</a>
        <a class="collapse-item" href="datatables.html">Tambah Anggota</a>
      </div>
    </div>
</li>

<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePeminjaman"
      aria-expanded="true" aria-controls="collapsePeminjaman">
      <i class="fas fa-book-reader"></i> <!-- Ikon Peminjaman -->
      <span>Peminjaman</span>
    </a>
    <div id="collapsePeminjaman" class="collapse" aria-labelledby="headingPeminjaman" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Peminjaman</h6>
        <a class="collapse-item" href="simple-tables.html">Riwayat Peminjaman</a>
        <a class="collapse-item" href="datatables.html">Tambahkan Peminjaman</a>
        <a class="collapse-item" href="datatables.html">Kembalikan Buku</a>
      </div>
    </div>
</li>

  <hr class="sidebar-divider">
  <div class="version" id="version-ruangadmin"></div>
</ul>
