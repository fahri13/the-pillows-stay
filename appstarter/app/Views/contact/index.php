<?= $this->extend('dashboard/index'); ?>

<?= $this->section('content'); ?>


<!-- Section Background -->
	<section class="section-background">
		<div class="container">
			<h2 class="page-header">
				Saran untuk yang lebih baik
			</h2>
			<ol class="breadcrumb">
				<li><a href="index.html">Home</a></li>
				<li class="active">&nbsp;contact</li>
			</ol>
		</div> <!-- /.container -->
	</section> <!-- /.section-background -->


	<section class="section-wrapper contact-and-map">
		<div class="container">
					<h2 class="section-title">
						Kirim Masukkan
					</h2>
					<div class="form">
						<div class="input-group">
						 	<input class="form-control border-radius border-right" type="text" placeholder="Name" required>
						 	<span class="input-group-addon  border-radius custom-addon">
								<i class="ion-person"></i>
							</span>
						</div>
						<div class="input-group">
						 	<input class="form-control border-radius border-right" name="email" type="email" placeholder="Email address" required>
						 	<span class="input-group-addon  border-radius custom-addon">
								<i class="ion-email"></i>
							</span>
						</div>
						<div class="input-group">
						 	<input class="form-control border-radius border-right" type="tel" placeholder="Phone number">
						 	<span class="input-group-addon  border-radius custom-addon">
								<i class="ion-ios-telephone"></i>
							</span>
						</div>
						<div class="input-group">
						<textarea class="form-control border-radius border-right" rows="8" placeholder="Write Message"></textarea>
							<!-- <input type="text" name="text" rows="8" class="form-control border-radius border-right message" placeholder="Write Message"> -->
							<span class="input-group-addon border-radius custom-addon">
								<i class="ion-chatbubbles"></i>
							</span>
						</div>
						<button type="submit" class="btn btn-default border-radius custom-button">SEND MESSAGE </button>
					</div>
			
		</div>
	</section>

	





<?= $this->endSection(); ?>
