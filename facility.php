<!DOCTYPE html>
<html>

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
	            	<div class="col-sm-12">
	                    <div class="great-support-box-text">
	                    	<?php
								if($lang == "id"){
							?>
	                    	<h2>Fasilitas</h2>
							<p>
								<b>LISc & Daycare</b> memiliki fasilitas memadai dengan tenaga pendidik yang berpengalaman di bidangnya, sehingga orang tua peserta didik tidak perlu kuatir untuk menitipkan anaknya di LISc & Daycare.
								Adapun beberapa fasilitas yang kami miliki antara lain:
								<ul>
									<li>Ruang kelas dan tempat penitipan anak yang bersih dan nyaman.</li>
									<li>Tersedia CCTV sehingga anak peserta didik dapat terpantau.</li>
									<li>In-door Playground.</li>
								</ul>
							</p>
							<?php }else{ ?>
	                    	<h2>Facility</h2>
	                    	<p>
								<b>LISc & Daycare</b> has adequate facilities including experience lecturer in their respective field, so student's parents no need to worry to entrust their children in LISc & Daycare.
								Here is some facility that we provide:
								<ul>
									<li>Clean and comfortable classroom and daycare room.</li>
									<li>Availability of CCTV so all of students on our monitor.</li>
									<li>In-door Playground.</li>
								</ul>
							</p>
							<?php } ?>
	                    </div>
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