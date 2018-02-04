<!DOCTYPE html>
<html lang="en">

    <head>
    	<?php
			include("link.php");
			$lang = $_COOKIE['lang'];
		?>
    </head>

    <body>
		<!-- Top menu -->
		<?php include("nav.php") ?>

        <!-- Great support --> 
        <div class="great-support-container section-container section-container-gray-bg text">
	        <div class="container">
	            <div class="row">
	                <div class="col-sm-12 great-support section-description wow fadeIn">
	                </div>
	            </div>
	            <div class="row">
	            	<div class="col-sm-8 great-support-box wow fadeInLeft">
	                    <div class="great-support-box-text great-support-box-text-left">
						<?php
							if($lang == "id"){
						?>
	                    	<h2>Mari Bergabung!</h2>
							<div class="contact-form">
								<form role="form" action="assets/contact.php" method="post">
									<div class="col-sm-6">
										<h4>Data Anak</h4>
										<div class="form-group">
											<label class="control-label">Nama</label>
											<input name="childn" placeholder="Nama Anak" class="form-control">
										</div>
										<div class="form-group">
											<label class="control-label">Umur</label>
											<input type="number" name="age" min=1 placeholder="1" class="form-control">
										</div>
										<div class="form-group">
											<label class="control-label">Program Pilihan</label>
											<select class="form-control" name="program">
												<option value="1">Play Group</option>
												<option value="2">Kindergarten</option>
												<option value="3">Daycare</option>
											</select>
										</div>
									</div>
									<div class="col-sm-6">
										<h4>Data Orang Tua</h4>
										<div class="form-group">
											<label class="control-label">Nama</label>
											<input name="parentn" placeholder="Nama Orang Tua" class="form-control">
										</div>
										<div class="form-group">
											<label class="control-label">Alamat</label>
											<input name="address" placeholder="Alamat" class="form-control">
										</div>
										<div class="form-group">
											<label class="control-label">Kota</label>
											<input name="city" placeholder="Kota" class="form-control">
										</div>
										<div class="form-group">
											<label class="control-label">No. Handphone</label>
											<input name="mobile" placeholder="081234567890" class="form-control">
										</div>
										<div class="form-group">
											<label class="control-label">Email</label>
											<input type="email" name="email" placeholder="email.anda@example.com" class="form-control">
										</div>
									</div>
									<p>*Kami akan menghubungi anda untuk penjelasan selanjutnya.</p>
									<button type="submit" class="btn">Kirim</button>
								</form>
							</div>
						<?php }else{ ?>
	                    	<h2>Come Join Us!</h2>
							<div class="contact-form">
								<form role="form" action="assets/contact.php" method="post">
									<div class="col-sm-6">
										<h4>Kid's Data</h4>
										<div class="form-group">
											<label class="control-label">Name</label>
											<input name="childn" placeholder="Name" class="form-control">
										</div>
										<div class="form-group">
											<label class="control-label">Age</label>
											<input type="number" name="age" min=1 placeholder="1" class="form-control">
										</div>
										<div class="form-group">
											<label class="control-label">Desired Program</label>
											<select class="form-control" name="program">
												<option value="1">Play Group</option>
												<option value="2">Kindergarten</option>
												<option value="3">Daycare</option>
											</select>
										</div>
									</div>
									<div class="col-sm-6">
										<h4>Parent's Data</h4>
										<div class="form-group">
											<label class="control-label">Name</label>
											<input name="parentn" placeholder="Name" class="form-control">
										</div>
										<div class="form-group">
											<label class="control-label">Address</label>
											<input name="address" placeholder="Address" class="form-control">
										</div>
										<div class="form-group">
											<label class="control-label">City</label>
											<input name="city" placeholder="City" class="form-control">
										</div>
										<div class="form-group">
											<label class="control-label">No. Handphone</label>
											<input name="mobile" placeholder="081234567890" class="form-control">
										</div>
										<div class="form-group">
											<label class="control-label">Email</label>
											<input type="email" name="email" placeholder="your.email@example.com" class="form-control">
										</div>
									</div>
									<p>*We will follow up your submission.</p>
									<button type="submit" class="btn">Submit</button>
								</form>
							</div>
						<?php } ?>
	                    </div>
	                </div>
	                <div class="col-sm-4 great-support-box great-support-box-phone wow fadeInUp">
	                    <img src="assets/img/hand-sign.png">
	                </div>
	            </div>
	        </div>
        </div>

        <!-- Footer -->
        <footer class="footer-container">
        	<?php include("contact.php") ?>
        </footer>


        <!-- Javascript -->
        <?php include("linkjs.php") ?>

    </body>

</html>