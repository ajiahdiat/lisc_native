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
	                    	<h2>Playgroups</h2>
							<?php
								if($lang == "id"){
							?>
	                    	<p>
	                    		Program playgroups atau selanjutnya disingkat dengan PG akan menekankan pada pengembangan potensi anak, baik secara spiritual, emosional, sosial, fisikal dan intelektual dengan cara yang menyenangkan.
								Peserta didik akan ditanamkan sejak usia dini berbagai karakter kepemimpinan sesuai dengan tuntunan Al Qur’an dan As-Sunnah.
								Program ini terbagi menjadi dua, yaitu PG-A (usia 2-3 tahun) dan PG-B (usia 3,1-4 tahun).
								Aktivitas PG-A dilakukan 2 kali seminggu, sedangkan PG-B 3 kali seminggu. Durasi aktivitas efektif adalah 2 jam.
	                    	</p>
							<?php }else{ ?>
	                    	<p>
	                    		The playgroups program (PG) will emphasize the development of the child's potential, both spiritually, emotionally, socially, physically and intellectually in a fun way.
								Students will be instilled from an early age of various leadership characters in accordance with the guidance of the Qur'an and As-Sunnah.
								The program is divided into two, PG-A (age 2-3 years) and PG-B (age 3.1-4 years).
								PG-A activity is twice a week, while PG-B is 3 times a week. The effective activity duration is 2 hours.
	                    	</p>
							<?php } ?>
	                    </div>
	                </div>
	                <div class="col-sm-5 great-support-box wow fadeInLeft">
	                    <img src="assets/img/upload/devices/sketch2.png" alt="lisc-playgroup">
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