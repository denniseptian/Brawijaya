

<!-- Banner -->
<section class="tm-banner">
	<!-- Flexslider -->
		<!--<div class="flexslider flexslider-banner">
		  <ul class="slides">
		    <li>
			    <div class="tm-banner-inner">
					<h1 class="tm-banner-title">Find <span class="tm-yellow-text">Tour</span> Programs</h1>
					<p class="tm-banner-subtitle">For Your Destinations</p>
					<a href="#more" class="tm-banner-link">Learn More</a>	
				</div>
		      <img src="<?php echo base_url('assets/img/banner-2.jpg');?>" />
		    </li>
		    <li>
			    <div class="tm-banner-inner">
					<h1 class="tm-banner-title">Lorem <span class="tm-yellow-text">Ipsum</span> Dolor</h1>
					<p class="tm-banner-subtitle">Wonderful Destinations</p>
					<a href="#more" class="tm-banner-link">Learn More</a>	
				</div>
		      <img src="<?php echo base_url('assets/img/banner-3.jpg');?>" />
		    </li>
		    <li>
			    <div class="tm-banner-inner">
					<h1 class="tm-banner-title">Proin <span class="tm-yellow-text">Gravida</span> Nibhvell</h1>
					<p class="tm-banner-subtitle">Velit Auctor</p>
					<a href="#more" class="tm-banner-link">Learn More</a>	
				</div>
		      <img src="<?php echo base_url('assets/img/banner-1.jpg');?>" />
		    </li>
		  </ul>
		</div>			
	</section>

	<!-- gray bg -->	
	<section class="container tm-home-section-1" id="more">
		<div class="section-margin-top">
			<div class="row">				
				<div class="tm-section-header">
					<div class="col-lg-3 col-md-3 col-sm-3"><hr></div>
					<div class="col-lg-6 col-md-6 col-sm-6"><h2 class="tm-section-title">Gallery</h2></div>
					<div class="col-lg-3 col-md-3 col-sm-3"><hr></div>	
				</div>
			</div>
			<div class="row">
				<?php
				if ($data_get == NULL) {
					?>
					<div class="alert alert-info" role="alert">Data masih kosong, tolong di isi!</div>
					<?php
				} else {
					$nomor = 0;
					foreach ($data_get as $row) {
						$nomor++;
						?>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<div class="tm-tours-box-1">
								<img src="<?=base_url()?>assets/uploads/gallery_post/<?=$row->namafile;?>" alt="image" class="img-responsive">
								<div class="tm-tours-box-1-link">
									<div class="tm-tours-box-1-link-left">
									<?php echo $row->name ?>
									</div>
									<a href="#" class="tm-tours-box-1-link-right">
										<?php echo $row->category ?>								
									</a>							
								</div>
							</div>					
						</div>
						<?php
					}
				}
				?>
			</div>		
		</div>
	</section>		
