
<!-- gray bg -->	
<section class="container tm-home-section-1" id="more">
	<div class="row">
		<div class="col-lg-4 col-md-4 col-sm-6">
			<!-- Nav tabs -->
			<div class="tm-home-box-1">
				<ul class="nav nav-tabs tm-white-bg" role="tablist" id="hotelCarTabs">
					<li role="presentation" class="active">
						<a href="#hotel" aria-controls="hotel" role="tab" data-toggle="tab">Travel</a>
					</li>
				</ul>

				<!-- Tab panes -->
				<div class="tab-content">
					<div role="tabpanel" class="tab-pane fade in active tm-white-bg" id="hotel">
						<div class="tm-search-box effect2">
							<form action="<?php echo site_url('search/cemonsearch') ?>" method="post" class="hotel-search-form">
								<div class="tm-form-inner">
									<div class="form-group">
										<select class="form-control" name="destination">
											<option value="null">-- Cari destinasi wisata --</option>
											<?php
											if ($data_search == NULL) {
												?>
												<!-- data josong -->
												<?php
											} else {
												foreach ($data_search as $row) {													
													?>
														<option value="<?php echo $row->destination ?>"><?php echo $row->destination ?></option>
													<?php
												}
											}
											?>
										</select> 
									</div>
									<div class="form-group">
										<select class="form-control">
											<option value="">-- Categori wisata --</option>
											<option value="shangrila">Shangri-La</option>
											<option value="chatrium">Chatrium</option>
											<option value="fourseasons">Four Seasons</option>
											<option value="hilton">Hilton</option>
										</select> 
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
											<option value="">-- Banyaknya penumpang -- </option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5p">5+</option>
										</select> 
									</div>
								</div>							
								<div class="form-group tm-yellow-gradient-bg text-center">
									<button type="submit" name="mit" class="tm-yellow-btn">Lihat</button>
								</div>  
							</form>
						</div>
					</div>	    
				</div>
			</div>								
		</div>
		<?php
		if ($data_get_promo == NULL) {
			?>
			<!-- data josong -->
			<?php
		} else {
			$temp = 0;
			$nomor = 0;
			foreach ($data_get_promo as $row) {
				$nomor++;
				?>
				<div class="col-lg-4 col-md-4 col-sm-6">
					<div class="tm-home-box-1 tm-home-box-1-2 tm-home-box-1-center">
						<img src="<?php echo base_url('assets/uploads/imagepromo_resize/' . $row->namafile); ?>" alt="image" class="img-responsive">
						<a href="#">
							<div class="tm-green-gradient-bg tm-city-price-container">
								<h5><strong><?php echo $row->title ?></strong><br><?php echo $row->promolimitdate ?></h5><br>
								<span></span>
							</div>	
						</a>			
					</div>				
				</div>
				<?php
				if ($temp >= 1) {
					# code...
					break;
				}
				$temp++;
			}
		}
		?>
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
