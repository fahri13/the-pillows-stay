<?= $this->extend('layout/profile'); ?>

<?= $this->section('content'); ?>
<nav class="navbar navbar-expand-sm navbar-primary bg-light">
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
          <a class="nav-link active" aria-current="page" href="<?= base_url('profile/pesanan') ?>">Pesanan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container">

<div class="row">

  <div class="col-lg-3">

    <h1 class="my-4"><?= $title; ?></h1>
    <div class="list-group">
      <a href="<?= base_url('profile/akun') ?>" class="list-group-item">Informasi</a>
      <a href="" class="list-group-item">Edit Akun</a>
      <a href="#" class="list-group-item">Keluar</a>
    </div>

</div>
<div class="col-lg-3">
<?= $this->renderSection('profil'); ?>
</div>
</div>
</div>
<?= $this->endSection(''); ?>