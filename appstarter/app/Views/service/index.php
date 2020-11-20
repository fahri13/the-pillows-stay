<?= $this->extend('dashboard/index'); ?>

<?= $this->section('content'); ?>
<!-- Home -->

<!-- Section Background -->
	<section class="section-background">
		<div class="container">
			<h2 class="page-header">
				Layanan
			</h2>
			<ol class="breadcrumb">
				<li><a href="index.html">Home</a></li>
				<li class="active">&nbsp;services</li>
			</ol>
		</div> <!-- /.container -->
	</section> <!-- /.section-background -->

	<!-- Our Blazzing offers -->
	<section class="offer section-wrapper">
	  <div class="container">
	    <h2 class="section-title">
	      Fasilitas dan Pelayanan Kami
	    </h2>
	    <p class="section-subtitle">
	      Kami menyediakan Fasilitas dan Pelayanan yang terbaik.
	    </p>
	    <div class="row">
	      <div class="col-sm-3 col-xs-6">
	        <div class="offer-item">
	          <div class="icon" >
	            <i class="ion-ios-home"></i>
	          </div>
	          <h3>
	           <a href="<?= base_url('service/sewakamar') ?>" >Penginapan</a>
	          </h3>
	          <p>
	            Penginapan yang kami tawarkan sesuai dengan kebutuhan tamu kami.
	          </p>
	        </div>
	      </div> <!-- /.col-md-3 -->

	      <div class="col-sm-3 col-xs-6">
	        <div class="offer-item">
	          <div class="icon">
	            <i class="ion-android-bus"></i>
	          </div>
	          <h3>
			  <a href="<?= base_url('service/pesantiket') ?>" >Transportasi</a>
	          </h3>
	          <p>
	            Pembelian tiket dari Stasiun Kereta kota DKI Jakarta dan Bandung menuju Stasiun Kereta terdekat dari penginapan kami.
	          </p>
	        </div>
	      </div> <!-- /.col-md-3 -->

	      <div class="col-sm-3 col-xs-6">
	        <div class="offer-item">
	          <div class="icon">
	            <i class="ion-ios-locked"></i>
	          </div>
	          <h3>
			  <a href="<?= base_url('fasilitas/index') ?>" >Fasilitas Lainnya </a>
	          </h3>
	          <p>
	            Terdapat tambahan fasilitas yang akan kami siapkan untuk kebutuhan liburan tamu kami.
	          </p>
	        </div>
	      </div> <!-- /.col-md-3 -->
				<div class="col-sm-3 col-xs-6">
					<div class="offer-item">
						<div class="icon">
							<i class="ion-social-euro"></i>
						</div>
						<h3>
						<a href="<?= base_url('profile/pesanan') ?>" >Pesanan </a>
						</h3>
						<p>
							Keranjang pesanan.
						</p>
					</div>
				</div> <!-- /.col-md-3 -->
	    </div> <!-- /.row -->
	  </div> <!-- /.container -->
	</section> <!-- /.offer -->



<?= $this->endSection(); ?>
