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
                              to <span>travel</span> is to <span>live</span>
                          </h1>
                          <p class="header-sub-title">
                              it leaves you speecless, then turns your into a storyteller.
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
      Additional services
    </h2>
    <p class="section-subtitle">
      Lorem Ipsum is simply dummy text of the industry.
    </p>
    <div class="row">
      <div class="col-md-4 col-sm-6">
        <div class="custom-table">
          <img src="assets/images/add-srvc-1.png" alt="" class="add-srvc-img">
          <div class="add-srvc-detail">
            <h4 class="add-srvc-heading">
              Photography
            </h4>
            <p class="add-srvc">
              Etiam pharetra ut ante eget ehy efficitur. Nullam quis felis at nunc vehicula sollicitudin euliquam quis felis atblan dit.
            </p>
          </div> <!-- /.add-srvc-detail -->
        </div> <!-- /.custom-table -->
      </div> <!-- /.col-md-4 col-sm-6 -->

      <div class="col-md-4 col-sm-6">
        <div class="custom-table">
          <img src="assets/images/add-srvc-2.png" alt="" class="add-srvc-img">
          <div class="add-srvc-detail">
            <h4 class="add-srvc-heading">
              Cycling
            </h4>
            <p class="add-srvc">
              Etiam pharetra ut ante eget ehy efficitur. Nullam quis felis at nunc vehicula sollicitudin euliquam quis felis atblan dit.
            </p>
          </div> <!-- /.add-srvc-detail -->
        </div> <!-- /.custom-table -->
      </div> <!-- /.col-md-4 col-sm-6 -->

      <div class="col-md-4 col-sm-6">
        <div class="custom-table">
          <img src="assets/images/add-srvc-3.png" alt="" class="add-srvc-img">
          <div class="add-srvc-detail">
            <h4 class="add-srvc-heading">
              Waking
            </h4>
            <p class="add-srvc">
              Etiam pharetra ut ante eget ehy efficitur. Nullam quis felis at nunc vehicula sollicitudin euliquam quis felis atblan dit.
            </p>
          </div> <!-- /.add-srvc-detail -->
        </div> <!-- /.custom-table -->
      </div> <!-- /.col-md-4 col-sm-6 -->

      <div class="col-md-4 col-sm-6">
        <div class="custom-table">
          <img src="assets/images/add-srvc-4.png" alt="" class="add-srvc-img">
          <div class="add-srvc-detail">
            <h4 class="add-srvc-heading">
              Skiing
            </h4>
            <p class="add-srvc">
              Etiam pharetra ut ante eget ehy efficitur. Nullam quis felis at nunc vehicula sollicitudin euliquam quis felis atblan dit.
            </p>
          </div> <!-- /.add-srvc-detail -->
        </div> <!-- /.custom-table -->
      </div> <!-- /.col-md-4 col-sm-6 -->

      <div class="col-md-4 col-sm-6">
        <div class="custom-table">
          <img src="assets/images/add-srvc-5.png" alt="" class="add-srvc-img">
          <div class="add-srvc-detail">
            <h4 class="add-srvc-heading">
              Sea beach
            </h4>
            <p class="add-srvc">
              Etiam pharetra ut ante eget ehy efficitur. Nullam quis felis at nunc vehicula sollicitudin euliquam quis felis atblan dit.
            </p>
          </div> <!-- /.add-srvc-detail -->
        </div> <!-- /.custom-table -->
      </div> <!-- /.col-md-4 col-sm-6 -->

      <div class="col-md-4 col-sm-6">
        <div class="custom-table">
          <img src="assets/images/add-srvc-6.png" alt="" class="add-srvc-img">
          <div class="add-srvc-detail">
            <h4 class="add-srvc-heading">
              Hill tracking
            </h4>
            <p class="add-srvc">
              Etiam pharetra ut ante eget ehy efficitur. Nullam quis felis at nunc vehicula sollicitudin euliquam quis felis atblan dit.
            </p>
          </div> <!-- /.add-srvc-detail -->
        </div> <!-- /.custom-table -->
      </div> <!-- /.col-md-4 col-sm-6 -->
    </div> <!-- /.row -->
  </div> <!-- /.container -->
</section> <!-- /.Additional-services -->


<div class="subscribe section-wrapper">
  <a class="brand-logo" href="index.html" title="HOME"><i class="ion-paper-airplane"></i> Euro <span>Travel</span></a>
  <p class="subscribe-now">
    Subscribe to our Newsletter
  </p>
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">
        <div class="input-group">
          <input type="email" class="form-control border-radius" placeholder="Email address">
          <span class="input-group-btn">
            <button class="btn btn-default border-radius custom-sub-btn" type="button">DONE</button>
          </span>
        </div><!-- /input-group -->
      </div>
    </div>
  </div>



  <ul class="social-icon">
    <li><a href="#"><i class="ion-social-twitter"></i></a></li>
    <li><a href="#"><i class="ion-social-facebook"></i></a></li>
    <li><a href="#"><i class="ion-social-linkedin-outline"></i></a></li>
    <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
  </ul>
</div> <!-- /.subscribe -->


<footer>
  <div class="container">
    <div class="row">
      <div class="col-xs-4">
        <div class="text-left">
          &copy; Copyright Euro Travels
        </div>
      </div>
      <div class="col-xs-4">
        Theme by <a href="http://www.themewagon.com">THEMEWAGON</a>
      </div>
      <div class="col-xs-4">
        <div class="top">
          <a href="#header">
            <i class="ion-arrow-up-b"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
</footer>

<?= $this->endSection(); ?>
