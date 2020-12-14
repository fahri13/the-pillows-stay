<?= $this->extend('layout/profile'); ?>

<?= $this->section('content'); ?>
<nav class="navbar navbar-expand-sm fixed-top navbar-primary bg-light">
<div class="container">  
    <a class="navbar-brand" href="<?= base_url('profile/akun') ?>">Akun</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?= base_url('/home/index') ?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('profile/pesanan') ?>">Pesanan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
    </div>
  </div>
</div>
</nav>

<?= $this->endSection(''); ?>