<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>



    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">The Pillows Stay</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="<?= base_url('/dashboard/index') ?>">Home
                    <span class="sr-only">(current)</span>
                  </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url('/about/index') ?>">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url('/service/index') ?>">Services</a>
            </li>

            <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Account</a>

          <?php if(logged_in()) : ?>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <div class="container-lg">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-file-person-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm-1 7a3 3 0 1 1-6 0 3 3 0 0 1 6 0zm-3 4c2.623 0 4.146.826 5 1.755V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1v-1.245C3.854 11.825 5.377 11 8 11z"/>
              </svg>
            </div>
              <a class="dropdown-item" href="<?= base_url('') ?>">Profil</a>
              <a class="dropdown-item" href="<?= base_url('/logout') ?>">Log Out</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          <?php else : ?>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="<?= base_url('/login') ?>">SignIn</a>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            <?php endif; ?>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
          </ul>
        </div>
      </div>

    </nav>




    <?= $this->endSection(); ?>
