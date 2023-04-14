<nav class="navbar navbar-expand-lg navbar-light bg-light">
   <div class="container">
  <a class="navbar-brand" href="<?= base_url() ?>">
      <img src="<?= base_url('assets/logotefa.png')?>" style="max-width: 200px;">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item <?php if($title == 'Beranda') echo "active";?>">
        <a class="nav-link" href="<?= base_url()?>">Beranda</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php if($title == 'Portfolio') echo "active"; ?>">Portfolio</a>
      </li>
      <li class="nav-item dropdown <?php if($title == 'Produk' || $title == 'Perancangan & Pembuatan Web' || $title == 'Jasa Instalasi CCTV & LAN' || $title == 'Photoboth' || $title == 'Instalasi Hardware (PC)') echo "active"; ?>">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
          Produk
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">Perancangan & Pembuatan Web</a>
          <a class="dropdown-item" href="#">Jasa Instalasi CCTV & LAN</a>
          <a class="dropdown-item" href="#">Photoboth</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Instalasi Hardware (PC)</a>
        </div>
      </li>
    </ul>
  </div>
  </div>
</nav>
