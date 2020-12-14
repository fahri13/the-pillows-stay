<?= $this->extend('layout/dashboard'); ?>

<?= $this->section('content'); ?>


<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
  <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?= base_url('/dashboard/index') ?>" title="HOME"><i class="ion-paper-airplane"></i> Pillows <span>stay</span></a>
    </div> <!-- /.navbar-header -->

    <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="<?= base_url('/home/index') ?>">Home</a></li>
        <li><a href="<?= base_url('/about/index') ?>">about</a></li>
        <li><a href="<?= base_url('/service/index') ?>">services</a></li>

        <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Account</a>


      <?php if(logged_in()) : ?>

      <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
      <ul class="nav flex-column">
  <li class="nav-item">
  <a class="dropdown-item" href="<?= base_url('profile/index') ?>">Profil Saya</a>
  </li>
  <li class="nav-item">
  <a class="dropdown-item" href="<?= base_url('profile/pesanan') ?>">Pesanan Saya</a>
  </li>
  <li class="nav-item">
  <a class="dropdown-item" href="<?= base_url('/logout') ?>">Keluar</a>
  </li>
      </li>
          </ul>
        </div>
      </li>
      <?php else : ?>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
        <ul class="nav flex-column">
        <li class="nav-item">
            <a class="dropdown-item" href="<?= base_url('/login') ?>">SignIn</a>
          </li>
        </ul>
        </div>
      </li>
        <?php endif; ?>
        <li><a href="<?= base_url('/contact/index') ?> ">contact</a></li>
      </ul> <!-- /.nav -->
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container -->
</nav>


<div class="subscribe section-wrapper">
  <a class="brand-logo" href="index.html" title="HOME"><i class="ion-paper-airplane"></i> The Pillows <span>Stay</span></a>
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
        <div class="text-center">
          &copy; Copyright The Pillows Stay
        </div>
      </div>
    </div>
  </div>
</footer>
<?= $this->endSection(); ?>

