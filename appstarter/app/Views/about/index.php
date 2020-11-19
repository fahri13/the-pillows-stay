<?= $this->extend('dashboard/index'); ?>

<?= $this->section('content'); ?>

<!-- Section Background -->
	<section class="section-background">
		<div class="container">
			<h2 class="page-header">
				our story
			</h2>
			<ol class="breadcrumb">
				<li><a href="index.html">Home</a></li>
				<li class="active">&nbsp;about</li>
			</ol>
		</div> <!-- /.container -->
	</section> <!-- /.section-background -->


<!-- Who we are -->
	<section class="wwa section-wrapper">
		<div class="container">
			<h2 class="section-title">
				Who we are?
			</h2>
			<p class="section-subtitle">
				Lorem Ipsum is simply dummy text of the industry.
			</p>
			<div class="row">
				<div class="col-sm-3 col-xs-6">
					<div class="who">
						<img src="assets/images/ab-1.png" alt="" class="img-responsive who-img">
						<h3>
							We Advance
						</h3>
						<p class="who-detail">
							Praesent dapibus eleifend aug eget sollicitudin velit malesuada Aliquam blandit diam feugiat tellus malesuada ex.
						</p>
					</div>
				</div> <!-- /.col-sm-3 -->
				<div class="col-sm-3 col-xs-6">
					<div class="who">
						<img src="assets/images/ab-2.png" alt="" class="img-responsive who-img">
						<h3>
							Helpul Guide
						</h3>
						<p class="who-detail">
							Praesent dapibus eleifend aug eget sollicitudin velit malesuada Aliquam blandit diam feugiat tellus malesuada ex.
						</p>
					</div>
				</div> <!-- /.col-sm-3 -->
				<div class="col-sm-3 col-xs-6">
					<div class="who">
						<img src="assets/images/ab-3.png" alt="" class="img-responsive who-img">
						<h3>
							Travel anywhere
						</h3>
						<p class="who-detail">
							Praesent dapibus eleifend aug eget sollicitudin velit malesuada Aliquam blandit diam feugiat tellus malesuada ex.
						</p>
					</div>
				</div> <!-- /.col-sm-3 -->
				<div class="col-sm-3 col-xs-6">
					<div class="who">
						<img src="assets/images/ab-4.png" alt="" class="img-responsive who-img">
						<h3>
							our best transport
						</h3>
						<p class="who-detail">
							Praesent dapibus eleifend aug eget sollicitudin velit malesuada Aliquam blandit diam feugiat tellus malesuada ex.
						</p>
					</div>
				</div> <!-- /.col-sm-3 -->
			</div> <!-- /.row -->
		</div> <!-- /.container -->
	</section> <!-- /.wwa -->

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
