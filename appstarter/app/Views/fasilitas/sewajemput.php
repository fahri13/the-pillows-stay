<?= $this->extend('dashboard/index'); ?>

<?= $this->section('content'); ?>
<section class="offer section-wrapper">
<h2 class="section-title">
      Layanan Penjemputan Tamu
    </h2>

<div class="container">
<section class="tour section-wrapper container">
        
<?= csrf_field(); ?>

  <form action="/service/pemesananPenjemputan" method="post">
  <div class="form-row">
    <div class="form-group col-md-4">
    <label for="nama_tamu">Nama Tamu :  </label>
      <input id="nama_tamu" name="nama_tamu" type="text" class="form-control" placeholder="...">
    </div>

    <div class="form-group col-md-2">
    <label for="jumlah_tamu">Jumlah Tamu :  </label>
      <select id="jumlah_tamu" name="jumlah_tamu" type="text" class="form-control">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
      </select>
    </div>

      <div class="form-group col-md-3">
    <label for="lokasi_penjemputan"> Lokasi Penjemputan :  </label>
      <select id="lokasi_penjemputan" name="lokasi_penjemputan" type="text" class="form-control">
        <option selected>St. Lempuyangan(LPN)</option>
      </select>
      </div>

  
  
  </div>
  <button type="submit" class="btn btn-primary btn-lg btn-block">Pesan Sekarang</button>
</form>


</section> 
</div>
</section>
<?= $this->endSection(''); ?>
