	        <div class="container">
	        	<div class="row">
						<?php
						include("control/DAL/context.php");
							if($lang == "id"){
						?>
                    <div class="col-sm-6 footer-left">
                    <h3>Kontak Kami</h3>
					  <form class="form-horizontal" action="assets/contact" method="post" id="frmContact" style="padding-top: 20px;">
						<div class="form-group">
							<label class="sr-only" for="contact-subject">Subjek</label>
							<div class="col-sm-12">
								<select class="form-control" id="subject" name="subject" onchange="contact(this.value)">
									<option value="1">Kontak Kami</option>
									<option value="2">Registrasi</option>
								</select>
							</div>
						</div>
					  <div class="form-group">
					  	<label class="sr-only" for="contact-subject">Email</label>
						<div class="col-sm-12">
							<input type="email" id="email" name="email" class="form-control" required="" placeholder="Email">
						</div>
						</div>
						<div id="msg">
							<div class="form-group">
								<label class="sr-only" for="contact-subject">Message</label>
								<div class="col-sm-12">
									<textarea id="message" name="message" class="form-control" placeholder="Konten" rows=5></textarea>
								</div>
							</div>
						</div>
						<div id="reg" style="display: none">
							<div class="form-group">
								<label class="sr-only" for="contact-message">Parent's Name</label>
								<div class="col-sm-12">
									<input type="text" name="pname" placeholder="Nama Orang Tua..." class="form-control" id="pname">
								</div>
							</div>
							<div class="form-group">
								<label class="sr-only" for="contact-message">Mobile Phone</label>
								<div class="col-sm-12">
									<input type="text" name="pcont" placeholder="Kontak HP Orang Tua..." class="form-control" id="pcont">
								</div>
							</div>
						</div>
						<button class="btn btn-primary" type="submit">Kirim</button>
					  </form>
                    </div>
						<?php }else{ ?>
                    <div class="col-sm-6 footer-left">
                    <h3>Contact Us</h3>
					  <form class="form-horizontal" action="assets/contact" method="post" id="frmContact" style="padding-top: 20px;">
						<div class="form-group">
							<label class="sr-only" for="contact-subject">Subject</label>
							<div class="col-sm-12">
								<select class="form-control" id="subject" name="subject" onchange="contact(this.value)">
									<option value="1">Messages</option>
									<option value="2">Registration</option>
								</select>
							</div>
						</div>
					  <div class="form-group">
					  	<label class="sr-only" for="contact-subject">Email</label>
						<div class="col-sm-12">
							<input type="email" id="email" name="email" class="form-control" required="" placeholder="Email">
						</div>
						</div>
						<div id="msg">
							<div class="form-group">
								<label class="sr-only" for="contact-subject">Message</label>
								<div class="col-sm-12">
									<textarea id="message" name="message" class="form-control" placeholder="Content" rows=5></textarea>
								</div>
							</div>
						</div>
						<div id="reg" style="display: none">
							<div class="form-group">
								<label class="sr-only" for="contact-message">Parent's Name</label>
								<div class="col-sm-12">
									<input type="text" name="pname" placeholder="Parent's Name..." class="form-control" id="pname">
								</div>
							</div>
							<div class="form-group">
								<label class="sr-only" for="contact-message">Mobile Phone</label>
								<div class="col-sm-12">
									<input type="text" name="pcont" placeholder="Mobile Phone..." class="form-control" id="pcont">
								</div>
							</div>
						</div>
						<button class="btn btn-primary" type="submit">Submit</button>
					  </form>
                    </div>
						<?php } ?>
						  <?php	 
							// Check If form submitted, insert form data into news table.
						  include_once("control/DAL/context.php");
							if(isset($_POST['Submit'])) {
								$sb = $_POST['subject'];
								$date = date("Y-m-d h:i:s");
								if ($sb == 1) {
									$em = $_POST['email'];
									$ms = $_POST['message'];
									// Insert news data into table
									$result = mysqli_query($mysqli,
										"INSERT INTO messages(email, message, created_at, updated_at) VALUES('$em','$ms','$date','$date')"
									);
								}else if ($sb == 2) {
									// Insert news data into table
									// $result = mysqli_query($mysqli,
									// 	"INSERT INTO messages(email, message, created_at, updated_at) VALUES('$em','$ms','$date','$date')"
									// );
								}
								
								// Show message when news added
								// echo "<div class='row'><label class='label label-success'>News added successfully</label></div>";
							}
						?>
                    <div class="col-sm-5 col-sm-offset-1 footer-right">
						<?php
							if($lang == "id"){
						?>
                    	<h3>Ikuti Kami</h3>
                    	<div class="footer-social">
							<strong>Leadership Islamic School & Daycare</strong>
							<p>RUKAN GRAND GALAXY CITY
							<br />Jl. Boulevard Raya, RSN 5 No.38 (dekat Fresh Market), Jaka Setia - Bekasi Selatan
							<br />Kota Bekasi, Jawa Barat, 17112</p>
							<p><i class="fa fa-phone"></i> (021) 8273-9213</p>
							<p>
								<a href="https://www.facebook.com/lisc.daycare.9" target="_blank"><i class="fa fa-facebook"></i></a>
								<a href="https://twitter.com/lisc_daycare" target="_blank"><i class="fa fa-twitter"></i></a>
								<a href="https://www.instagram.com/lisc.daycare/" target="_blank"><i class="fa fa-instagram"></i></a>
								<a href="https://www.youtube.com/channel/UC4nDBUqIlHdoTMFnHbY4aQQ" target="_blank"><i class="fa fa-youtube"></i></a>
								<a href="#"><img src="assets/ico/id.ico" style="width: 24px" onclick="chgLangId()" /></a>
								<a href="#"><img src="assets/ico/uk.ico" style="width: 24px" onclick="chgLangEn()" /></a>
							</p>
                    	</div>
						<?php }else{ ?>
                    	<h3>Follow us</h3>
                    	<div class="footer-social">
							<strong>Leadership Islamic School & Daycare</strong>
							<p>RUKAN GRAND GALAXY CITY
							<br />Boulevard Raya St., RSN 5 No.38 (near Fresh Market), Jaka Setia - South Bekasi
							<br />Bekasi, West Java, 17112</p>
							<p><i class="fa fa-phone"></i> (021) 8273-9213</p>
							<p>
								<a href="https://www.facebook.com/lisc.daycare.9" target="_blank"><i class="fa fa-facebook"></i></a>
								<a href="https://twitter.com/lisc_daycare" target="_blank"><i class="fa fa-twitter"></i></a>
								<a href="https://www.instagram.com/lisc.daycare/" target="_blank"><i class="fa fa-instagram"></i></a>
								<a href="https://www.youtube.com/channel/UC4nDBUqIlHdoTMFnHbY4aQQ" target="_blank"><i class="fa fa-youtube"></i></a>
								<a href="#"><img src="assets/ico/id.ico" style="width: 24px" onclick="chgLangId()" /></a>
								<a href="#"><img src="assets/ico/uk.ico" style="width: 24px" onclick="chgLangEn()" /></a>
							</p>
                    	</div>
						<?php }?>
						<div class="footer-copyright">
							Designed by <a href="http://azmind.com">AZMIND</a>
						</div>
                    </div>
                </div>
	        </div>
	        
	        <div class="container-fluid">
	        	<div class="row">
                	<div class="col-sm-12 footer-bottom">
                		<a class="scroll-link" href="#top-content"><i class="fa fa-chevron-up"></i></a>
                	</div>
                </div>
	        </div>