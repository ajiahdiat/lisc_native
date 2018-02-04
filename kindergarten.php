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
	            	<div class="col-sm-7 great-support-box wow fadeInLeft">
	                    <div class="great-support-box-text great-support-box-text-left">
	                    	<h2>Kindergarten</h2>
							<?php
								if($lang == "id"){
							?>
	                    	<p>
	                    		Program lanjutan (KG) ini lebih menekankan pada pemberian rangsangan pendidikan untuk membantu pertumbuhan dan perkembangan jasmani dan rohani agar anak memiliki kesiapan dalam memasuki pendidikan lebih lanjut.
								Terbagi menjadi dua, yaitu KG-A (usia 4,1-5 tahun) dan KG-B (usia 5,1-6 tahun).
								Aktivitas KG dilakukan 5 kali seminggu. Durasi aktivitas efektif adalah 4 jam.
	                    	</p>
							<?php }else{ ?>
	                    	<p>
	                    		This advanced program (KG) is more emphasis on providing educational stimuli to help the growth and development of physical and spiritual so that children have readiness in entering further education.
								Divided into two, KG-A (age 4.1-5 years) and KG-B (age 5.1-6 years).
								KG activity is five times a week. The effective activity duration is 4 hours.
	                    	</p>
							<?php } ?>
	                    </div>
	                </div>
	                <div class="col-sm-5 great-support-box wow fadeInLeft">
	                    <img src="assets/img/upload/devices/sketch.png" alt="lisc-kindergarten">
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