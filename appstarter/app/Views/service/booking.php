<?= $this->extend('dashboard/index'); ?>

<?= $this->section('content'); ?>
<div class="container">
<section class="tour section-wrapper container">
        
<?= csrf_field(); ?>
  <form action="/service/pemesanan" method="post">
  <div class="form-row">
    <div class="form-group col-md-3">
      <input name="nama" type="text" class="form-control" placeholder="Nama">
    </div>
    <div class="form-group col-md-2">
      <input name="check_in" type="date" class="form-control">
    </div>
  <div class="form-group col-md-2">
    <input name="check_out" type="date" class="form-control">
  </div>
 
    <div class="form-group col-md-2">
      <select name="tipe_kamar" class="form-control">
        <option selected>Tipe Kamar</option>
        <option>VIP</option>
        <option>Regular</option>
      </select>
    </div>
  <button type="submit" class="btn btn-primary">Book Now</button>
  </div>
</form>


</section> <!-- /.tour -->
</div>

<?= $this->endSection(''); ?>
