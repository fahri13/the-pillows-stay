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
        <li class="active"><a href="<?= base_url('/home/index') ?>">Home</a></li>
        <li><a href="<?= base_url('/about/index') ?>">about</a></li>
        <li><a href="<?= base_url('/service/index') ?>">services</a></li>

        <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Account</a>


      <?php if(logged_in()) : ?>
      <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="<?= base_url('') ?>">Profil</a><br>
          <a class="dropdown-item" href="<?= base_url('/logout') ?>">Log Out</a>
        </div>
      <?php else : ?>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="<?= base_url('/login') ?>">SignIn</a>
          </div>
        <?php endif; ?>


        <li><a href="<?= base_url('/contact/index') ?> ">contact</a></li>
      </ul> <!-- /.nav -->
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container -->
</nav>


<?= $this->endSection(); ?>
