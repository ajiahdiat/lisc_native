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
							<?php
								if($lang == "id"){
							?>
	                    	<h2>Penitipan Anak</h2>
	                    	<p>
	                    		Program-program yang terdapat dalam Leadership Islamic Daycare secara umum sama dengan Leadership Islamic School.
								Leadership Islamic Daycare juga menekankan pada pentingnya menanamkan karakter-karakter pemimpin yang berakhlak mulia. Leadership Islamic Daycare adalah tempat bermain sambil belajar dan belajar sambil bermain yang tetap mengedepankan keseimbangan antara IPTEK (Ilmu Pengetahuan dan Teknologi)  dan IMTAQ (Iman dan Taqwa) para peserta didik.
								Orang tua yang ingin menitipkan anaknya tidak perlu lagi mencari lembaga pendidikan formal lainnya.
	                    	</p>
							<?php }else{ ?>
	                    	<h2>Daycare</h2>
	                    	<p>
	                    		The programs in Leadership Islamic Daycare are generally the same as in Leadership Islamic School.
								Leadership Islamic Daycare also emphasizes the importance of inculcating the characters of leaders who have noble character. Leadership Islamic Daycare is a place to play - learn while putting a balance between science and technology and IMTAQ (Faith and Taqwa) of students.
								Parents who want to entrust their children (in daycare) are no longer need to seek other formal educational institutions.
	                    	</p>
							<?php } ?>
	                    </div>
	                </div>
	                <div class="col-sm-5 great-support-box wow fadeInLeft">
	                    <img src="assets/img/upload/devices/sketch3.png" alt="lisc-daycare">
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