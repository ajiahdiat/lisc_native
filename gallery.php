<!DOCTYPE html>
<html lang="en">

    <head>
    	<?php
			include("link.php");
			$lang = $_COOKIE['lang'];
            include("control/DAL/context.php");
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
	                <div class="col-sm-12 blog-box wow fadeInLeft">
						<?php
							if($lang == "id"){
						?>
						<h2>Galeri</h2>
						<div class="row justify-content-center">
							<div class="col-md-12">
	                		<?php
						  	$batas = 12;
							$pg = isset( $_GET['pg'] ) ? $_GET['pg'] : "";							 
							if ( empty( $pg ) ) {
								$posisi = 0;
								$pg = 1;
							} else {
								$posisi = ( $pg - 1 ) * $batas;
							}
	                		?>
	                      <?php
	                        $i = 0;
	                        if ($result = $mysqli->query("SELECT * FROM gallery where deleted_at Is Null ORDER BY created_at DESC LIMIT $posisi, $batas"))
	                        {
	                            if ($result->num_rows > 0)
	                            {
	                                    while ($row = $result->fetch_object())
	                                    {
	                                        // set up a row for each record
	                                        $dt = strtotime($row->created_at);
	                                        echo "<a href='control/".$row->image."' data-toggle='lightbox' data-gallery='example-gallery' data-footer='".$row->description."' class='col-sm-3 portfolio-box wow fadeInUp'>";
	                                        echo "<img src='control/".$row->image."' class='img-fluid'>";
	                                        echo "</a>";
	                                    }
	                            }
	                        }
	                      ?>
							</div>
						</div>
						<?php }else{ ?>
						<h2>Gallery</h2>
						<div class="row justify-content-center">
							<div class="col-md-12">
	                		<?php
						  	$batas = 12;
							$pg = isset( $_GET['pg'] ) ? $_GET['pg'] : "";							 
							if ( empty( $pg ) ) {
								$posisi = 0;
								$pg = 1;
							} else {
								$posisi = ( $pg - 1 ) * $batas;
							}
	                		?>
	                      <?php
	                        $i = 0;
	                        if ($result = $mysqli->query("SELECT * FROM gallery where deleted_at Is Null ORDER BY created_at DESC LIMIT $posisi, $batas"))
	                        {
	                            if ($result->num_rows > 0)
	                            {
	                                    while ($row = $result->fetch_object())
	                                    {
	                                        // set up a row for each record
	                                        $dt = strtotime($row->created_at);
	                                        echo "<a href='control/".$row->image."' data-toggle='lightbox' data-gallery='example-gallery' data-footer='".$row->description_en."' class='col-sm-3 portfolio-box wow fadeInUp'>";
	                                        echo "<img src='control/".$row->image."' class='img-fluid'>";
	                                        echo "</a>";
	                                    }
	                            }
	                        }
	                      ?>
							</div>
						</div>
						<?php } ?>
	                	<div class="row">
						  <?php
							//hitung jumlah data
							$sql2 = $mysqli->query("SELECT * FROM gallery");
							$jml_data = $sql2->num_rows;
							//Jumlah halaman
							$JmlHalaman = ceil($jml_data/$batas); //ceil digunakan untuk pembulatan keatas
							 
							//Navigasi ke sebelumnya
							if ( $pg > 1 ) {
							$link = $pg-1;
							$prev = "<a href='?pg=$link'>Prev </a>";
							} else {
							$prev = "Prev ";
							}
							 
							//Navigasi nomor
							$nmr = '';
							for ( $i = 1; $i<= $JmlHalaman; $i++ ){
							 
							if ( $i == $pg ) {
							$nmr .= $i . " ";
							} else {
							$nmr .= "<a href='?pg=$i'>$i</a> ";
							}
							}
							 
							//Navigasi ke selanjutnya
							if ( $pg < $JmlHalaman ) {
							$link = $pg + 1;
							$next = " <a href='?pg=$link'>Next</a>";
							} else {
							$next = " Next";
							}
							 
							//Tampilkan navigasi
							echo "<div class='text-center'>".$prev . $nmr . $next."</div>";
							?>
	                	</div>
	                </div>
	            </div>
	            <div class="row">
	                <div class="col-sm-12 great-support section-description wow fadeIn">
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