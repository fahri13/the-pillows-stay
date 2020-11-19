<?= $this->extend('dashboard/index'); ?>

<?= $this->section('content'); ?>
<!-- Home -->

<!-- Section Background -->
	<section class="section-background">
		<div class="container">
			<h2 class="page-header">
				our service
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
	      Our Blazzing offers
	    </h2>
	    <p class="section-subtitle">
	      Lorem Ipsum is simply dummy text of the industry.
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
	            Class aptent taciti sociosutn tora torquent conub nost reptos himenaeos.
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
	            Class aptent taciti sociosutn tora torquent conub nost reptos himenaeos.
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
	            Class aptent taciti sociosutn tora torquent conub nost reptos himenaeos.
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
							Class aptent taciti sociosutn tora torquent conub nost reptos himenaeos.
						</p>
					</div>
				</div> <!-- /.col-md-3 -->
	    </div> <!-- /.row -->
	  </div> <!-- /.container -->
	</section> <!-- /.offer -->


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
					<!-- <div class="top">
						<a href="#header">
							<i class="ion-arrow-up-b"></i>
						</a>
					</div> -->
				</div>
			</div>
		</div>
	</footer>

<?= $this->endSection(); ?>
