<?= $this->extend('dashboard/index'); ?>

<?= $this->section('content'); ?>
<section class="offer section-wrapper">
<h2 class="section-title">
      Pemesanan Tiket Kereta Api
    </h2>

<div class="container">
<section class="tour section-wrapper container">
        
<?= csrf_field(); ?>

  <form action="/service/pemesananTiket" method="post">
  <div class="form-row">
    <div class="form-group col-md-4">
    <label for="nama_penumpang">Nama Anda :  </label>
      <input id="nama_penumpang" name="nama_penumpang" type="text" class="form-control" placeholder="...">
    </div>

    <div class="form-group col-md-3">
    <label for="stasiun_awal">Stasiun Awal :  </label>
      <select id="stasiun_awal" name="stasiun_awal" class="form-control">
        <option><b>DKI Jakarta</b></option>
        <option>Gambir(GMR)</option>
        <option>Jakarta Kota(JAKK)</option>
        <option>Jatinegara(JNG)</option>
        <option>Manggarai(MRI)</option>
        <option>Pasar Senen(PSE)</option>
        <option>Tanjung Priuk(TPK)</option>
        <option><b>Bandung</b></option>
        <option>Bandung(BD)</option>
        <option>Cicalengka(CCL)</option>
        <option>Cikadongdong(CD)</option>
        <option>Cimahi(CMI)</option>
        <option>Gedebage(GDB)</option>
        <option>Haurpugur(HPR)</option>
        <option>Kiaracondong(KAC)</option>
        <option>Padalarang(PDL)</option>
        <option>Rancaekek(RCK)</option>
        <option>Rendeh(RH)</option>
      </select>
      </div>

      <div class="form-group col-md-3">
    <label for="stasiun_tujuan">Stasiun Tujuan :  </label>
      <select id="stasiun_tujuan" name="stasiun_tujuan" class="form-control">
        <option selected>Lempuyangan(LPN)</option>
      </select>
      </div>

    <div class="form-group col-md-3">
    <label for="tanggal_berangkat">Tanggal Berangkat :  </label>
      <input id="tanggal_berangkat" name="tanggal_berangkat" type="date" class="form-control">
    </div>

  <div class="form-group col-md-3">
    <label for="jumlah_penumpang">Jumlah Penumpang  :  </label>
      <input id="jumlah_penumpang" name="jumlah_penumpang" type="text" class="form-control" placeholder="...">
    </div>


    <div class="form-group col-md-2">
    <label for="kelas_kereta">Kelas :  </label>
      <select id="kelas_kereta" name="kelas_kereta" class="form-control">
        <option>Ekonomi</option>
        <option>Bisnis</option>
        <option>Eksekutif</option>
      </select>
    </div>
  
  </div>
  <button type="submit" class="btn btn-primary btn-lg btn-block">Pesan Sekarang</button>
</form>


</section> 
</div>
</section>
<?= $this->endSection(''); ?>
