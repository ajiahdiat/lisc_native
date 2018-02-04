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
	                    	<h2>Pengantar</h2>
	                    	<p class="medium-paragraph">
	                    		Sekilas Tentang LISc & Daycare.
	                    	</p>
							<p>
								Kepemimpinan sesungguhnya adalah suatu hal yang sangat mendasar dan universal. Seseorang tidak akan dapat memimpin orang lain jika ia tidak dapat memimpin dirinya sendiri.
								Kepemimpinan bukan hanya berkaitan dengan karakter, namun dapat menjadi suatu kebiasaan yang ditanamkan sejak usia dini.
								<b>Leadership Islamic School (LISc) & Daycare</b> merupakan sekolah untuk anak usia dini & <b>Penitipan Anak</b> dari usia 2-6 tahun yang menitikberatkan pada pengembangan karakter-karakter kepemimpinan di diri setiap anak (peserta didik), karena pada dasarnya...
							</p>
							<blockquote class="blockquote">
								<p class="mb-0">Setiap Anak Adalah Pemimpin.</p>
							</blockquote>
							<?php }else{ ?>
	                    	<h2>Introduction</h2>
	                    	<p class="medium-paragraph">
	                    		A Glance About LISc & Daycare.
	                    	</p>
							<p>
								Leadership is a real basic thing and universal. Anyone will never be able to lead someone else if they can not lead themselves.
								Leadership is not only about characteristic, but also as a habit that cultivate from the early time.
								<b>Leadership Islamic School (LISc) & Daycare</b> is a school & <b>Daycare</b> for children of 2-6 years old that focus on develop every student's leadership characteristic, because basically...
							</p>
							<blockquote class="blockquote">
								<p class="mb-0">Every Kids Is A Leader.</p>
							</blockquote>
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