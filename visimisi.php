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
	            	<div class="col-sm-12 great-support-box wow fadeInLeft">
	                    <div class="great-support-box-text great-support-box-text-left">
						<?php if ($lang == "id") {?>
	                    	<h2>Visi & Misi</h2>
	                    	<h3>Visi</h3>
	                    	<p>Membentuk Generasi Pemimpin yang Islami dan Berwawasan Internasional.</p>
	                    	<h3>Misi</h3>
	                    	<ul>
	                    		<li>Menerapkan karakter-karakter kepemimpinan dalam kehidupan sehari-hari peserta didik.</li>
	                    		<li>Membantu terwujudnya keseimbangan antara IPTEK (Ilmu Pengetahuan dan Teknologi) dan IMTAQ (Iman dan Taqwa) pada diri  peserta didik.</li>
	                    		<li>Mengutamakan kualitas SDM para tenaga pendidik dalam hal keilmuan dan akhlakul karimah.</li>
	                    		<li>Mewujudkan terciptanya lingkungan yang kondusif dan harmonis antara sekolah, peserta didik dan keluarga.</li>
	                    	</ul>
						<?php }else{ ?>
	                    	<h2>Vission & Mission</h2>
	                    	<h3>Vission</h3>
	                    	<p>Establishing an Islamic and International Leaders Generation.</p>
	                    	<h3>Mission</h3>
	                    	<ul>
	                    		<li>Apply leadership characters in the day-to-day life of the students.</li>
	                    		<li>Help to achieve a balance between IPTEK (Science and Technology) and IMTAQ (Faith and Taqwa) in students life.</li>
	                    		<li>Give priority to the quality of human resources of educators in terms of scholarly and akhlakul karimah.</li>
	                    		<li>Achieve creation of a conducive and harmonious environment between schools, students and families.</li>
	                    	</ul>
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