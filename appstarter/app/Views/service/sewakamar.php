<?= $this->extend('dashboard/index'); ?>

<?= $this->section('content'); ?>
<section class="offer section-wrapper">
<h2 class="section-title">
      Reservasi Kamar
    </h2>

<div class="container">
<section class="tour section-wrapper container">
        
<?= csrf_field(); ?>
  <form action="/service/pemesananKamar" method="post">
  <div class="form-row">
    <div class="form-group col-md-3">
    <label for="nama">Nama Anda :  </label>
      <input name="nama" type="text" class="form-control" placeholder="Nama">
    </div>
    <div class="form-group col-md-3">
    <label for="check_in">Tanggal Check In :  </label>
      <input id="check_in" name="check_in" type="date" class="form-control">
    </div>
  <div class="form-group col-md-3">
  <label for="check_out">Tanggal Check Out : </label>
    <input id="check_out" name="check_out" type="date" class="form-control">
  </div>
 
    <div class="form-group col-md-2">
    <label for="nama">Tipe Kamar : </label>
      <select name="tipe_kamar" class="form-control">
        <option>VIP</option>
        <option>Regular</option>
      </select>
    </div>
  <button type="submit" class="btn btn-primary">Book Now</button>
  </div>
</form>


</section> 
</div>
</section>
<?= $this->endSection(''); ?>
