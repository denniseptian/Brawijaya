
<!-- gray bg -->	
<section class="container tm-home-section-1" id="more">
	<div class="row">
		<div class="col-lg-4 col-md-4 col-sm-6">
			<!-- Nav tabs -->
			<div class="tm-home-box-1">
				<ul class="nav nav-tabs tm-white-bg" role="tablist" id="hotelCarTabs">
					<li role="presentation" class="active">
						<a href="#hotel" aria-controls="hotel" role="tab" data-toggle="tab">Hotel</a>
					</li>
					<li role="presentation">
						<a href="#car" aria-controls="car" role="tab" data-toggle="tab">Car Rental</a>
					</li>
				</ul>

				<!-- Tab panes -->
				<div class="tab-content">
					<div role="tabpanel" class="tab-pane fade in active tm-white-bg" id="hotel">
						<div class="tm-search-box effect2">
							<form action="#" method="post" class="hotel-search-form">
								<div class="tm-form-inner">
									<div class="form-group">
										<select class="form-control">
											<option value="">-- Select Hotel -- </option>
											<option value="shangrila">Shangri-La</option>
											<option value="chatrium">Chatrium</option>
											<option value="fourseasons">Four Seasons</option>
											<option value="hilton">Hilton</option>
										</select> 
									</div>
									<div class="form-group">
										<div class='input-group date' id='datetimepicker1'>
											<input type='text' class="form-control" placeholder="Check-in Date" />
											<span class="input-group-addon">
												<span class="fa fa-calendar"></span>
											</span>
										</div>
									</div>
									<div class="form-group">
										<div class='input-group date' id='datetimepicker2'>
											<input type='text' class="form-control" placeholder="Check-out Date" />
											<span class="input-group-addon">
												<span class="fa fa-calendar"></span>
											</span>
										</div>
									</div>
									<div class="form-group margin-bottom-0">
										<select class="form-control">
											<option value="">-- Guests -- </option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5p">5+</option>
										</select> 
									</div>
								</div>							
								<div class="form-group tm-yellow-gradient-bg text-center">
									<button type="submit" name="submit" class="tm-yellow-btn">Check Now</button>
								</div>  
							</form>
						</div>
					</div>
					<div role="tabpanel" class="tab-pane fade tm-white-bg" id="car">
						<div class="tm-search-box effect2">
							<form action="#" method="post" class="hotel-search-form">
								<div class="tm-form-inner">
									<div class="form-group">
										<select class="form-control">
											<option value="">-- Select Model -- </option>
											<option value="shangrila">BMW</option>
											<option value="chatrium">Mercedes-Benz</option>
											<option value="fourseasons">Toyota</option>
											<option value="hilton">Honda</option>
										</select> 
									</div>
									<div class="form-group">
										<div class='input-group date-time' id='datetimepicker3'>
											<input type='text' class="form-control" placeholder="Pickup Date" />
											<span class="input-group-addon">
												<span class="fa fa-calendar"></span>
											</span>
										</div>
									</div>
									<div class="form-group">
										<div class='input-group date-time' id='datetimepicker4'>
											<input type='text' class="form-control" placeholder="Return Date" />
											<span class="input-group-addon">
												<span class="fa fa-calendar"></span>
											</span>
										</div>
									</div>
									<div class="form-group">
										<select class="form-control">
											<option value="">-- Options -- </option>
											<option value="">Child Seat</option>
											<option value="">GPS Navigator</option>
											<option value="">Insurance</option>
										</select> 
									</div>							           
								</div>							
								<div class="form-group tm-yellow-gradient-bg text-center">
									<button type="submit" name="submit" class="tm-yellow-btn">Check Now</button>
								</div>  
							</form>
						</div>
					</div>				    
				</div>
			</div>								
		</div>

		<div class="col-lg-4 col-md-4 col-sm-6">
			<div class="tm-home-box-1 tm-home-box-1-2 tm-home-box-1-center">
				<img src="<?php echo base_url('assets/img/index-01.jpg'); ?>" alt="image" class="img-responsive">
				<a href="#">
					<div class="tm-green-gradient-bg tm-city-price-container">
						<span>New York</span>
						<span>$6,600</span>
					</div>	
				</a>			
			</div>				
		</div>
		<div class="col-lg-4 col-md-4 col-sm-6">
			<div class="tm-home-box-1 tm-home-box-1-2 tm-home-box-1-right">
				<img src="<?php echo base_url('assets/img/index-02.jpg'); ?> " alt="image" class="img-responsive">
				<a href="#">
					<div class="tm-red-gradient-bg tm-city-price-container">
						<span>Paris</span>
						<span>$4,200</span>
					</div>	
				</a>					
			</div>				
		</div>
	</div>
	<div class="section-margin-top">
		<div class="row">				
			<div class="tm-section-header">
				<div class="col-lg-3 col-md-3 col-sm-3"><hr></div>
				<div class="col-lg-6 col-md-6 col-sm-6"><h2 class="tm-section-title">Paket wisata</h2></div>
				<div class="col-lg-3 col-md-3 col-sm-3"><hr></div>	
			</div>
		</div>




		<div class="row">

			<!--hay-->
			<?php
			if ($data_get == NULL) {
				?>
				<!-- data josong -->
				<?php
			} else {
				$nomor = 0;
				foreach ($data_get as $row) {
					$nomor++;
					?>

					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-xxs-12">
						<div class="tm-home-box-2">						
							<a href="#"><img src="<?php echo base_url('assets/uploads/imagepost_resize/' . $row->namafile); ?> " alt="image" class="img-responsive"></a>
							<a href="<?php echo site_url('frontpost/post/'. $row->id_post) ?>" ><h3><?php echo $row->title ?></h3></a>
							<p class="tm-date">Durasi <?php echo $row->duration ?> Hari</p>
							
						</div>
					</div>
					<?php
				}
			}
			?>

		</div>
		<div class="row">
			<div class="col-lg-12">
				<p class="home-description">Holiday is free Bootstrap v3.3.5 responsive template for tour and travel websites. You can download and use this layout for any purpose. You do not need to provide a credit link to us. If you have any question, feel free to <a href="http://www.facebook.com/templatemo" target="_parent">contact us</a>. Credit goes to <a rel="nofollow" href="http://unsplash.com" target="_parent">Unspash</a> for images used in this template.</p>					
			</div>
		</div>			
	</div>
</section>		

<!-- white bg -->
<section class="tm-white-bg section-padding-bottom">
	<div class="container">
		<div class="row">
			<div class="tm-section-header section-margin-top">
				<div class="col-lg-4 col-md-3 col-sm-3"><hr></div>
				<div class="col-lg-4 col-md-6 col-sm-6"><h2 class="tm-section-title">Wisata Populer</h2></div>
				<div class="col-lg-4 col-md-3 col-sm-3"><hr></div>	
			</div>
			<!--hay-->
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
					<div class="col-lg-6">
						<div class="tm-home-box-3">
							<div class="tm-home-box-3-img-container">
								<img src="<?php echo base_url('assets/img/index-07.jpg'); ?>" alt="image" class="img-responsive">	
							</div>						
							<div class="tm-home-box-3-info">
								<p class="tm-home-box-3-description"><b><a href="#"><?php echo substr($row->title, 0, 100) ?></a></b><br><br><?php echo substr($row->subject, 0, 100) ?>...</p>
							</div>						
						</div>					
					</div>
					<?php
					if ($limmit >=7) {
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
