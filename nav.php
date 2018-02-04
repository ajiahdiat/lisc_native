<?php
	$lang = $_COOKIE['lang'];
?>
<nav class="navbar navbar-inverse navbar-fixed-top navbar-no-bg" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</div>
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="top-navbar-1">
			<?php if ($lang == "id") {?>
			<ul class="nav navbar-nav">
				<li><a href="index"><i class="fa fa-home"></i></a></li>
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">Tentang <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="intro">Pengantar</a></li>
						<li><a href="visimisi">Visi & Misi</a></li>
						<li><a href="facility">Fasilitas</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">Akademik <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="playgroups">Playgroups</a></li>
						<li><a href="kindergarten">Kindergarten</a></li>
						<li><a href="daycare">Daycare</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">Program <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="programs?p=1">Untuk Anak</a></li>
						<li><a href="programs?p=2">Untuk Orang Tua</a></li>
					</ul>
				</li>
				<li><a href="news">Berita</a></li>
				<li><a href="gallery">Galeri</a></li>
				<li><a class="scroll-link" href="#footer">Kontak</a></li>
				<!-- <li><a class="label-warning" href="joinus">Bergabung!</a></li> -->
				<!-- <li><a href="#"><img src="assets/ico/id.ico" style="width: 24px" onclick="chgLangId()" /></a></li>
				<li><a href="#"><img src="assets/ico/uk.ico" style="width: 24px" onclick="chgLangEn()" /></a></li> -->
			</ul>
			<?php }else{ ?>
			<ul class="nav navbar-nav">
				<li><a href="index"><i class="fa fa-home"></i></a></li>
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">About <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="intro">Introduction</a></li>
						<li><a href="visimisi">Vission & Mission</a></li>
						<li><a href="facility">Facility</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">Academic <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="playgroups">Playgroups</a></li>
						<li><a href="kindergarten">Kindergarten</a></li>
						<li><a href="daycare">Daycare</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">Programs <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="programs?p=1">For Kids</a></li>
						<li><a href="programs?p=2">For Parents</a></li>
					</ul>
				</li>
				<li><a href="news">News</a></li>
				<li><a href="gallery">Gallery</a></li>
				<li><a class="scroll-link" href="#footer">Contact</a></li>
				<!-- <li><a class="label-warning" href="joinus">Join Us!</a></li> -->
				<!-- <li><a href="#"><img src="assets/ico/id.ico" style="width: 24px" onclick="chgLangId()" /></a></li>
				<li><a href="#"><img src="assets/ico/uk.ico" style="width: 24px" onclick="chgLangEn()" /></a></li> -->
			</ul>
			<?php } ?>
		</div>
	</div>
</nav>