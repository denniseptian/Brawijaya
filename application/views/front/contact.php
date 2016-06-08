

<!-- Banner -->
	<!--<section class="tm-banner">
	<!-- Flexslider -->
		<!--<div class="flexslider flexslider-banner">
		  <ul class="slides">
		    <li>
			    <div class="tm-banner-inner">
					<h1 class="tm-banner-title">Your <span class="tm-yellow-text">Special</span> Tour</h1>
					<p class="tm-banner-subtitle">For Upcoming Holidays</p>
					<a href="#more" class="tm-banner-link">Contact Us</a>	
				</div>
				<img src="img/banner-3.jpg" alt="Banner 3" />	
		    </li>		    
		  </ul>
		</div>	
	</section>

	<!-- gray bg -->	
	<section class="container tm-home-section-1" id="more">
		<div class="row">
			<!-- slider -->
			<div class="flexslider effect2 effect2-contact tm-contact-box-1">
				<ul class="slides">
					<li>
						<img src="<?php echo base_url('assets/img/13173902_231746593856139_8610687313783120056_n.jpg');?>" alt="image" class="contact-image" />
						<div class="contact-text">
							<h2 class="slider-title">Untuk informasi lebih lanjut</h2>
							<h3 class="slider-subtitle">hubungi kami</h3>
							<p class="slider-description"> Brawijaya Tour & Travel merupakan penyelenggara kegiatan untuk perjalanan wisata 
								dengan menawarkan paket wisata perjalan (tour) di beberapa lokasi yang sangat
								Menarik dan di minati oleh wisatawan baik domestic maupun mancanegara, wisata yang kami perkenalkan disini adalah paket wisata dengan tujuan untuk pembelajaran, edukasi, study tour, kunjungan industri, pengetahuan ,dan mengisi liburan anda ke tempat wisata yang di tuju, seperti wisata alam, wisata buatan, kegiatan outdoor/indoor, outbound dan rafting
								baik group maupun paket keluarga
								kami juga menyediakan jasa persewaan armada (bus, rentcar, elf, hiace, dll), 
								kami akan mencovering seluruh kegiata wisata anda
								Bagi anda yang berminat dan tertarik menggunakan jasa pelayanan wisata untuk segera menghubungi Contak person berikut ini: <br><br>
								Didik Suasmito <br> 082216198999<br>
								Jalan Segundu Rt/Rw: 01/01 no 03 Sumbergondo Bumiaji<br>
								atau masukkan pesan anda pada form di bawah ini</p>
							<!--<div class="slider-social">
								<a href="#" class="tm-social-icon"><i class="fa fa-twitter"></i></a>
								<a href="#" class="tm-social-icon"><i class="fa fa-facebook"></i></a>
								<a href="#" class="tm-social-icon"><i class="fa fa-pinterest"></i></a>
								<a href="#" class="tm-social-icon"><i class="fa fa-google-plus"></i></a>
							--></div>
						</div>			      
					</li>
				</ul>
			</div>
		</div>
	</section>		
	
	<!-- white bg -->
	<section class="section-padding-bottom">
		<div class="container">
			<div class="row">
				<div class="tm-section-header section-margin-top">
					<div class="col-lg-4 col-md-3 col-sm-3"><hr></div>
					<div class="col-lg-4 col-md-6 col-sm-6"><h2 class="tm-section-title">Hubungi kami</h2></div>
					<div class="col-lg-4 col-md-3 col-sm-3"><hr></div>	
				</div>				
			</div>
			<div class="row">
				<!-- contact form -->
				<form action="<?php echo site_url('frontcontact/save') ?>" data-toggle="validator" method="post" class="tm-contact-form">
					<div class="col-lg-6 col-md-6">
						<div id="google-map"></div>
						<div class="contact-social">
							<a href="https://www.facebook.com/didik.brawijaya.3?fref=nf" target="_blank" class="tm-social-icon tm-social-facebook"><i class="fa fa-facebook"></i></a>
				      		<!--<a href="#" class="tm-social-icon tm-social-dribbble"><i class="fa fa-dribbble"></i></a>
				      		<a href="#" class="tm-social-icon tm-social-twitter"><i class="fa fa-twitter"></i></a>
				      		<a href="#" class="tm-social-icon tm-social-instagram"><i class="fa fa-instagram"></i></a>
				      	--><a href="#" class="tm-social-icon tm-social-google-plus"><i class="fa fa-google-plus"></i></a>
				      </div>
				  </div> 
				  <div class="col-lg-6 col-md-6 tm-contact-form-input">
				  	<div class="form-group">
				  		<input type="text" id="contact_name" name="contact_name" class="form-control" placeholder="NAME" required/>
				  	</div>
				  	<div class="form-group">
				  		<input type="email" id="contact_email" name="contact_email" class="form-control" placeholder="EMAIL" required/>
				  	</div>
				  	<div class="form-group">
				  		<input type="text" id="contact_subject" name="contact_subject" class="form-control" placeholder="SUBJECT" required/>
				  	</div>
				  	<div class="form-group">
				  		<textarea id="contact_message" name="contact_message" class="form-control" rows="6" placeholder="MESSAGE" required></textarea>
				  	</div>
				  	<div>
				  		<?php echo $widget;?>
				  		<?php echo $script;?>
				  		<br>
				  		<br>
				  	</div>
				  	<div class="form-group">
				  		<button class="tm-submit-btn" type="submit" name="mit">Submit now</button> 
				  	</div>               
				  </div>
				</form>
			</div>			
		</div>
	</section>