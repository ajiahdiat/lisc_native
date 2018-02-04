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
							if ($_GET["p"] == 1) {
								if($lang == "id"){
							?>
	                    	<h2>Program Untuk Anak</h2>
	                    	<ul>
	                    		<li><b>Leader Inside Me</b> : Penerapan karakter kepemimpinan dalam setiap aktivitas, baik di dalam ruangan (in-door) maupun luar ruangan (out-door).</li>
	                    		<li><b>Akhlakku Agamaku</b> : Akhlak yang baik menjadi bagian yang menyatu dalam diri peserta didik sebagai bekalnya di kemudian hari.</li>
	                    		<li><b>Fun in English</b> : Pembelajaran bahasa Inggris (bilingual) dengan cara yang menyenangkan.</li>
	                    		<li><b>Memory Power<sup>&reg;</sup></b> : Meningkatkan konsentrasi peserta didik sekaligus menyeimbangkan kinerja otak kanan dan kiri.</li>
	                    		<li><b>Brain Exercise (Senam Otak)</b> : Aktifitas fisik yang bertujuan mengoptimalkan kinerja otak peserta didik dengan cara yang amat mudah dan menyenangkan.</li>
	                    		<li><b>Music in My Life</b> : Musik sebagai satu unsur yang tidak hanya senantiasa mendampingi rutinitas peserta didik namun juga mampu mengoptimalkan kinerja otak.</li>
	                    		<li><b>My Diary</b> : Jurnal harian peserta didik sebagai salah satu sarana berkomunikasi dengan tenaga pendidik dan keluarga.</li>
	                    		<li><b>My Goals</b> : Sebagai calon pemimpin di masa depan, salah satu hal yang perlu dimiliki oleh peserta didik adalah mampu menetapkan tujuan (goal). Peserta didik akan terbiasa untuk mempunyai target semenjak usia dini.</li>
	                    		<li><b>Multiple Intelligence</b> : Peserta didik akan mampu mengeksplorasi segala potensi dan bakat yang dimiliki sebagai salah satu bekal menjadi pemimpin dimasa depan.</li>
	                    		<li><b>Program-program lainnya</b> : Entrepreneur Day, Career Day, Islamic Days, Outing Activities, dll.</li>
	                    	</ul>
							<?php }else{ ?>
	                    	<h2>Programs For Kids</h2>
	                    	<ul>
	                    		<li><b>Leader Inside Me</b> : : Implementing leadership character in every activity, both in-door and out-door.</li>
	                    		<li><b>My Akhlak is My Religion</b> : Good morality becomes an integral part in the students as the provision in the future.</li>
	                    		<li><b>Fun in English</b> : Learning English (bilingual) in a fun way.</li>
	                    		<li><b>Memory Power<sup>&reg;</sup></b> : Improves students' concentration & memory while balancing right and left brain performance.</li>
	                    		<li><b>Brain Exercise (Senam Otak)</b> : Physical activity aimed at optimizing the students' brain performance in a very easy and fun way.</li>
	                    		<li><b>Music in My Life</b> : Music as an element that not only always accompany the routine students but also able to optimize the performance of the brain.</li>
	                    		<li><b>My Diary</b> : Daily journal of students as one way of communicating with educators and family.</li>
	                    		<li><b>My Goals</b> : As a future leader, one of the things that a student needs to have is to be able to set goals. Students will get used to having a target since early age.</li>
	                    		<li><b>Multiple Intelligence</b> : Students will be able to explore all the potential and talents possessed as one of the provisions to be a leader in the future.</li>
	                    		<li><b>Other Programs</b> : Entrepreneur Day, Career Day, Islamic Days, Outing Activities, etc.</li>
	                    	</ul>
							<?php
							}
							}else{
								?>
	                    	<?php
								if($lang == "id"){
									?>
	                    	<h2>Program Untuk Orang Tua</h2>
	                    	<ul>
	                    		<li><b>Seminar Parenting</b> : Program seminar rutin yang bermanfaat menambah wawasan orang tua terutama dalam hal mendidik buah hati.</li>
	                    		<li><b>Chat With Us</b> : Sharing sesama orang tua yang difasilitasi oleh sekolah berisi banyak hal (sesuai tema setiap pertemuan).</li>
	                    		<li><b>Focus Group Discussion</b> (FGD) : Majunya sebuah institusi pendidikan tidak lepas dari saran dan kritik membangun dari orang tua yang dituangkan dalam bentuk FGD.</li>
	                    	</ul>
							<?php }else{ ?>
	                    	<h2>Programs For Parents</h2>
	                    	<ul>
	                    		<li><b>Parenting Seminar</b> : A useful routine seminar program for parents with the aims to broadening knowledge , especially in terms of educating children.</li>
	                    		<li><b>Chat With Us</b> : Sharing fellow parents who are facilitated by the school contains many things (according to the theme of each meeting).</li>
	                    		<li><b>Focus Group Discussion (FGD)</b> : The advance of an educational institution can not be separated from suggestions and constructive criticism from parents who poured in the form of FGD.</li>
	                    	</ul>
	                    	<?php }} ?>
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