	<!-- gray bg -->	
	<section class="container tm-home-section-1" id="more">
		<div class="row">
			<!-- slider -->
			<div class="flexslider effect2 effect2-contact tm-contact-box-1">
				<ul class="slides">
					<li>
						<div class="col-md6"><img src="<?php echo base_url('assets/uploads/imagepost/' . $namafile) ?>" alt="image" class="contact-image" /></div>
						<div class="text">
							<h2 class="title"><?php echo $title ?></h2><br>
							<?php echo $subject ?><br>
							<?php echo $task ?>
							<div class="slider-social">
								<a href="#" class="tm-social-icon"><i class="fa fa-twitter"></i></a>
								<a href="#" class="tm-social-icon"><i class="fa fa-facebook"></i></a>
								<a href="#" class="tm-social-icon"><i class="fa fa-pinterest"></i></a>
								<a href="#" class="tm-social-icon"><i class="fa fa-google-plus"></i></a>
							</div>
						</div>			      
					</li>
				</ul>
			</div>
		</div>
		<div class="section-margin-top about-section">
			<div class="row">				
				<div class="tm-section-header">
					<div class="col-lg-3 col-md-3 col-sm-3"><hr></div>
					<div class="col-lg-6 col-md-6 col-sm-6"><h2 class="tm-section-title">Paket wisata lain yang mungkin anda minati</h2></div>
					<div class="col-lg-3 col-md-3 col-sm-3"><hr></div>	
				</div>
			</div>
			<div class="row">
				<?php
				if ($data_popularPost == NULL) {
					?>
					<!-- data josong -->
					<?php
				} else {
					$nomor = 0;
					$limmit = 0;
					foreach ($data_popularPost as $row) {
						$nomor++;
						?>
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
							<div class="tm-about-box-1">
							<a href="#"><img src="<?php echo base_url('assets/uploads/imagepost_resize/' . $row->namafile) ?>" alt="img" class="tm-about-box-1-img"></a>
								<h3 class="tm-about-box-1-title"><?php echo $row->title ?></h3>
								<p class="margin-bottom-15 gray-text"><?php echo $row->destination ?></p>
								<div class="gray-text">
									<a href="#" class="tm-social-icon"><i class="fa fa-twitter"></i></a>
									<a href="#" class="tm-social-icon"><i class="fa fa-facebook"></i></a>
									<a href="#" class="tm-social-icon"><i class="fa fa-pinterest"></i></a>
									<a href="#" class="tm-social-icon"><i class="fa fa-google-plus"></i></a>
								</div>
							</div>
						</div>
						<?php
						if ($limmit >=3) {
						# code...
							break;
						}
						$limmit++;
					}
				}
				?>				
			</div>		
		</div>
	</section>
</section>