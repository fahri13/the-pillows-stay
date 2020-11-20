<?= $this->extend('dashboard/index'); ?>

<?= $this->section('content'); ?>

<!-- Home -->
  <div id="header">
      <div class="flexslider">
          <ul class="slides">
              <li class="slider-item" style="background-image: url('assets/images/item-1.png')">
                  <div class="intro container">
                      <div class="inner-intro">
                          <h1 class="header-title">
                              <span>Liburan</span> di tempat kami adalah "Pilihan Terbaik"
                          </h1>
                          <p class="header-sub-title">
                              Kami menyediakan berbagai macam fasilitas penginapan
                          </p>
                          <button class="btn custom-btn">
                              <a href="<?= base_url('service/sewakamar') ?>">Pesan Sekarang</a>
                          </button>
                      </div>
                  </div>
              </li> <!-- /.slider-item -->
              <li class="slider-item" style="background-image: url('assets/images/item-2.png')">
                  <div class="intro">
                      <div class="inner-intro">
                          <h1 class="header-title">
                              "to <span>travel</span> is to <span>live"</span>
                          </h1>
                          <p class="header-sub-title">
                              berhenti sejenak dari kesibukan keseharian, dan nikmati liburan dengan nyaman.
                          </p>
                          <button class="btn custom-btn">
                              Pesan Sekarang
                          </button>
                      </div>
                  </div>
              </li> <!-- /.slider-item -->
          </ul> <!-- /.slides -->
      </div> <!-- /.flexslider -->
  </div> <!-- /#header -->
<!-- Find a Tour -->
<section class="tour section-wrapper container">
  <h2 class="section-title">
    Yuk Cek Tanggal Liburan Kalian
  </h2>
  <p class="section-subtitle">
    Nikmati Liburan Kalian
  </p>
  <div class="row">


    <div class="col-md-3 col-sm-6">
      <div class="input-group">
        <input type="date" class="form-control border-radius border-right"/>
        <span class="input-group-addon border-radius custom-addon">
          <i class="ion-ios-calendar"></i>
        </span>
      </div>
    </div>

    <div class="col-md-3 col-sm-6">
      <div class="input-group">
        <input type="date" class="form-control border-radius border-right"/>
        <span class="input-group-addon border-radius custom-addon">
          <i class="ion-ios-calendar"></i>
        </span>
      </div>
    </div>

    <div class="col-md-3 col-sm-6">
      <form role="form" class="form-dropdown">
        <div class="form-group">
          <label class="text-dark" for="sel1">Tipe Kamar:</label>
          <select class="form-control border-radius" id="sel1">
            <option>Regular</option>
            <option>VIP</option>
          </select>
        </div>
      </form>
    </div>

    <div class="col-md-3 col-sm-6">
      <div class="btn btn-default border-radius custom-button">
        Cek Kamar
      </div>
    </div>
  </div>
</section> <!-- /.tour -->

<section class="additional-services section-wrapper">
  <div class="container">
    <h2 class="section-title">
      Fasilitas dan Pelayanan Kami
    </h2>
    <p class="section-subtitle">
      Kami menyediakan berbagai macam fasilitas dan layanan untuk membuat kalian nyaman.
    </p>
    <div class="row">
      <div class="col-md-4 col-sm-6">
        <div class="custom-table">
          <img src="assets/images/add-srvc-1.png" alt="" class="add-srvc-img">
          <div class="add-srvc-detail">
            <h4 class="add-srvc-heading">
              Penginapan
            </h4>
            <p class="add-srvc">
              Penginapan kami memiliki pelayanan yang terbaik dengan menawarkan fasilitas penginapan yang terbaik.
            </p>
          </div> <!-- /.add-srvc-detail -->
        </div> <!-- /.custom-table -->
      </div> <!-- /.col-md-4 col-sm-6 -->

      <div class="col-md-4 col-sm-6">
        <div class="custom-table">
          <img src="assets/images/add-srvc-2.png" alt="" class="add-srvc-img">
          <div class="add-srvc-detail">
            <h4 class="add-srvc-heading">
              Penjemputan
            </h4>
            <p class="add-srvc">
              Kami menyediakan layanan penjemputan tamu dari stasiun terdekat.
            </p>
          </div> <!-- /.add-srvc-detail -->
        </div> <!-- /.custom-table -->
      </div> <!-- /.col-md-4 col-sm-6 -->

      <div class="col-md-4 col-sm-6">
        <div class="custom-table">
          <img src="assets/images/add-srvc-3.png" alt="" class="add-srvc-img">
          <div class="add-srvc-detail">
            <h4 class="add-srvc-heading">
              Pembelian Tiket
            </h4>
            <p class="add-srvc">
              Kami juga melayani pembelian tiket kereta api secara online dari stasiun kereta api DKI Jakarta dan Bandung. 
            </p>
          </div> <!-- /.add-srvc-detail -->
        </div> <!-- /.custom-table -->
      </div> <!-- /.col-md-4 col-sm-6 -->

      <div class="col-md-4 col-sm-6">
        <div class="custom-table">
          <img src="assets/images/add-srvc-4.png" alt="" class="add-srvc-img">
          <div class="add-srvc-detail">
            <h4 class="add-srvc-heading">
              Tour Guide
            </h4>
            <p class="add-srvc">
              Untuk tamu yang baru pertama kali berkunjung ke penginapan kami, kami menawarkan tour guide sebagai pemandu liburan ketempat wisata disekitar penginapan.
            </p>
          </div> <!-- /.add-srvc-detail -->
        </div> <!-- /.custom-table -->
      </div> <!-- /.col-md-4 col-sm-6 -->

      <div class="col-md-4 col-sm-6">
        <div class="custom-table">
          <img src="assets/images/add-srvc-5.png" alt="" class="add-srvc-img">
          <div class="add-srvc-detail">
            <h4 class="add-srvc-heading">
              Kendaraan
            </h4>
            <p class="add-srvc">
              Untuk yang ingin jalan - jalan lebih jauh, kami menyediakan fasilitas penyewaan kendaraan beroda empat.
            </p>
          </div> <!-- /.add-srvc-detail -->
        </div> <!-- /.custom-table -->
      </div> <!-- /.col-md-4 col-sm-6 -->

      <div class="col-md-4 col-sm-6">
        <div class="custom-table">
          <img src="assets/images/add-srvc-6.png" alt="" class="add-srvc-img">
          <div class="add-srvc-detail">
            <h4 class="add-srvc-heading">
              Alat Pemanggang
            </h4>
            <p class="add-srvc">
              Berkempul dengan kerabat dan kawan adalah yang terbaik. Kami menawarkan penyewaan alat panggang untuk menikmati hidangan bersama.
            </p>
          </div> <!-- /.add-srvc-detail -->
        </div> <!-- /.custom-table -->
      </div> <!-- /.col-md-4 col-sm-6 -->
    </div> <!-- /.row -->
  </div> <!-- /.container -->
</section> <!-- /.Additional-services -->



<?= $this->endSection(); ?>
