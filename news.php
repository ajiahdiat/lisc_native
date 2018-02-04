<!DOCTYPE html>
<html lang="en">

    <head>
    	<?php
			include("link.php");
            include("control/DAL/context.php");
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
	                <div class="col-sm-12 blog-box wow fadeInLeft">
						<?php
							if($lang == "id"){
						?>
						<h2>Berita</h2>
	                	<div class="row">
	                		<?php
						  	$batas = 10;
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
	                        if ($result = $mysqli->query("SELECT * FROM news ORDER BY created_at DESC LIMIT $posisi, $batas"))
	                        {
	                            if ($result->num_rows > 0)
	                            {
	                                    while ($row = $result->fetch_object())
	                                    {
	                                        // set up a row for each record
	                                        $dt = strtotime($row->created_at);
	                                        setlocale(LC_ALL, 'IND');
	                                        echo "<div class='col-sm-12'>";
	                                        echo "<h3><a href='newsdetail?id=".$row->id."'>".$row->title."</a> <i class='fa fa-angle-right'></i></h3>";
	                                        echo "<div class='blog-box-date'><i class='fa fa-calendar-o'></i> ".strftime("%d %b %Y", $dt)."</div>";
	                                        if (strlen($row->content) > 200 ) {
	                                            echo "<p>" . substr($row->content, 0, 200), "..." . "</p>";
	                                        }else{                      
	                                            echo "<p>" .$row->content. "</p>";
	                                        }
	                                        echo "<hr>";
	                                        echo "</div>";
	                                    }
	                            }else{                                
	                                echo "<p>Tidak ada berita terakhir...</p>";
	                                return;
	                            }
	                        }
	                      ?>
	                	</div>
						<?php }else{ ?>
						<h2>News</h2>
	                	<div class="row">
	                		<?php
						  	$batas = 10;
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
		                        if ($result = $mysqli->query("SELECT * FROM news ORDER BY created_at DESC LIMIT $posisi, $batas"))
		                        {
		                            if ($result->num_rows > 0)
		                            {
		                                    while ($row = $result->fetch_object())
		                                    {
		                                        // set up a row for each record
		                                        $dt = strtotime($row->created_at);
		                                        setlocale(LC_ALL, 'EN');
		                                        echo "<div class='col-sm-12'>";
		                                        echo "<h3><a href='newsdetail?id=".$row->id."'>".$row->title_en."</a> <i class='fa fa-angle-right'></i></h3>";
		                                        echo "<div class='blog-box-date'><i class='fa fa-calendar-o'></i> ".strftime("%d %b %Y", $dt)."</div>";
		                                        if (strlen($row->content_en) > 200 ) {
		                                            echo "<p>" . substr($row->content_en, 0, 200), "..." . "</p>";
		                                        }else{
		                                        	echo "<p>" .$row->content_en. "</p>";
		                                        }
		                                        echo "<hr>";
		                                        echo "</div>";
		                                    }
		                            }else{                                
		                                echo "<p>No latest News...</p>";
		                                return;
		                            }
		                        }
		                      ?>
	                	</div>
						<?php } ?>
	                	<div class="row">
						  <?php
							//hitung jumlah data
							$sql2 = $mysqli->query("SELECT * FROM news");
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