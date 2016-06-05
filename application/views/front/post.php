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
						if ($limmit >=4) {
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

<!-- white bg -->
<section class="section-padding-bottom">
	<div class="container">
		<div class="row">
			<div class="tm-section-header section-margin-top">
				<div class="col-lg-4 col-md-3 col-sm-3"><hr></div>
				<div class="col-lg-4 col-md-6 col-sm-6"><h2 class="tm-section-title">Contact Us</h2></div>
				<div class="col-lg-4 col-md-3 col-sm-3"><hr></div>	
			</div>				
		</div>
		<div class="row">
			<!-- contact form -->
			<form action="#" method="post" class="tm-contact-form">
				<div class="col-lg-6 col-md-6">
					<div id="google-map"></div>
					<div class="contact-social">
						<a href="#" class="tm-social-icon tm-social-facebook"><i class="fa fa-facebook"></i></a>
						<a href="#" class="tm-social-icon tm-social-dribbble"><i class="fa fa-dribbble"></i></a>
						<a href="#" class="tm-social-icon tm-social-twitter"><i class="fa fa-twitter"></i></a>
						<a href="#" class="tm-social-icon tm-social-instagram"><i class="fa fa-instagram"></i></a>
						<a href="#" class="tm-social-icon tm-social-google-plus"><i class="fa fa-google-plus"></i></a>
					</div>
				</div> 
				<div class="col-lg-6 col-md-6 tm-contact-form-input">
					<div class="form-group">
						<input type="text" id="contact_name" class="form-control" placeholder="NAME" />
					</div>
					<div class="form-group">
						<input type="email" id="contact_email" class="form-control" placeholder="EMAIL" />
					</div>
					<div class="form-group">
						<input type="text" id="contact_subject" class="form-control" placeholder="SUBJECT" />
					</div>
					<div class="form-group">
						<textarea id="contact_message" class="form-control" rows="6" placeholder="MESSAGE"></textarea>
					</div>
					<div class="form-group">
						<button class="tm-submit-btn" type="submit" name="submit">Submit now</button> 
					</div>               
				</div>
			</form>
		</div>			
	</div>
</section>