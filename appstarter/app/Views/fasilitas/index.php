<?= $this->extend('dashboard/index'); ?>

<?= $this->section('content'); ?>

<div class="container">
<div class="row">
    <h1 class="text-dark">Layanan Fasilitas</h1>
    <div class="list-group">
      <a href="<?= base_url('service/sewajemput') ?>" class="list-group-item">Sewa Antar/Jemput Tamu</a>
      <a href="#" class="list-group-item">Sewa Kendaraan</a>
      <a href="#" class="list-group-item">Sewa Alat Panggangan</a>
      <a href="#" class="list-group-item">Sewa Tour Guide</a>
    </div>
</div>
</div>

    

    
<?= $this->endSection(''); ?>