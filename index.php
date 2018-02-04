<!DOCTYPE html>
<html lang="en">

    <head>
    	<?php
    		if (!isset($_COOKIE['lang'])) {
    			setcookie('lang', 'id', time() + (86400 * 30), "/");
				$_COOKIE['lang'] = 'id';
    		}            
            $lang = $_COOKIE['lang'];
    		include("link.php");
            include("control/DAL/context.php");
    	?>
    </head>

    <body>
    
        <!-- Loader -->
    	<div class="loader">
    		<div class="loader-img"></div>
    	</div>

		<!-- Top menu -->
		<?php include("nav.php") ?>

        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                	
                    <div class="row">
                        <div class="col-sm-10 col-sm-offset-1 text">
                        	<div class="wow fadeInDown">
                        		<a href="index.html"><img src="assets/img/logo.png"></img></a>
                        	</div>
                            <h1 class="wow fadeInLeftBig"><b>LEADERSHIP ISLAMIC SCHOOL & DAYCARE</b></h1>
                            <div class="description wow fadeInLeftBig">
                            	<h3><b>Be A Future Leader!</b></h3>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            
        </div>
        
        <!-- News -->
        <div class="portfolio-container section-container">
	        <div class="container">
                        <?php
                            if($lang == "id"){
                        ?>
	            <div class="row">
	                <div class="col-sm-12 portfolio section-description wow fadeIn">
	                    <h2>Berita</h2>
	                    <div class="divider-1 wow fadeInUp"><span></span></div>
	                    <p>Cek berita dari kami!</p>
	                </div>
	            </div>
	            <div class="row">
                      <?php
                        $i = 0;
                        if ($result = $mysqli->query("SELECT * FROM news LIMIT 3"))
                        {
                            if ($result->num_rows > 0)
                            {
                                    while ($row = $result->fetch_object())
                                    {
                                        // set up a row for each record
                                        $dt = strtotime($row->created_at);
                                        setlocale(LC_ALL, 'IND');
                                        if ($result->num_rows == 1) {
                                            echo "<div class='col-sm-12 portfolio-box wow fadeInUp'>";
                                        }else if ($result->num_rows == 2) {
                                            echo "<div class='col-sm-6 portfolio-box wow fadeInUp'>";
                                        }else if ($result->num_rows == 3) {
                                            echo "<div class='col-sm-4 portfolio-box wow fadeInUp'>";
                                        }
                                        echo "<h3><a href='newsdetail?id=".$row->id."'>".$row->title."</a> <i class='fa fa-angle-right'></i></h3>";
                                        echo "<div class='portfolio-box-date'><i class='fa fa-calendar-o'></i> ".strftime("%d %b %Y", $dt)."</div>";
                                        if (strlen($row->content) > 200 ) {
                                            echo "<p>" . substr($row->content, 0, 200), "..." . "</p>";
                                        }else{                      
                                            echo "<p>" .$row->content. "</p>";
                                        }
                                        echo "</div>";
                                    }
                            }else{                                
                                echo "<p>Tidak ada berita terakhir...</p>";
                                return;
                            }
                        }
                      ?>
	            </div>
	            <div class="row">
	            	<div class="col-sm-12 section-bottom-button wow fadeInUp">
                        <a class="btn btn-link-1" href="news">Lainnya</a>
	            	</div>
	            </div>
                        <?php }else{ ?>
                <div class="row">
                    <div class="col-sm-12 portfolio section-description wow fadeIn">
                        <h2>News</h2>
                        <div class="divider-1 wow fadeInUp"><span></span></div>
                        <p>Check our latest news!</p>
                    </div>
                </div>
                <div class="row">
                      <?php
                        $i = 0;
                        if ($result = $mysqli->query("SELECT * FROM news LIMIT 3"))
                        {
                            if ($result->num_rows > 0)
                            {
                                    while ($row = $result->fetch_object())
                                    {
                                        // set up a row for each record
                                        $dt = strtotime($row->created_at);
                                        setlocale(LC_ALL, 'EN');
                                        if ($result->num_rows == 1) {
                                            echo "<div class='col-sm-12 portfolio-box wow fadeInUp'>";
                                        }else if ($result->num_rows == 2) {
                                            echo "<div class='col-sm-6 portfolio-box wow fadeInUp'>";
                                        }else if ($result->num_rows == 3) {
                                            echo "<div class='col-sm-4 portfolio-box wow fadeInUp'>";
                                        }
                                        echo "<h3><a href='newsdetail?id=".$row->id."'>".$row->title."</a> <i class='fa fa-angle-right'></i></h3>";
                                        echo "<div class='portfolio-box-date'><i class='fa fa-calendar-o'></i> ".strftime("%d %b %Y", $dt)."</div>";
                                        if (strlen($row->content) > 200 ) {
                                            echo "<p>" . substr($row->content, 0, 200), "..." . "</p>";
                                        }else{                      
                                            echo "<p>" .$row->content. "</p>";
                                        }
                                        echo "</div>";
                                    }
                            }else{                                
                                echo "<p>No latest News...</p>";
                                return;
                            }
                        }
                      ?>
                </div>
                <div class="row">
                    <div class="col-sm-12 section-bottom-button wow fadeInUp">
                        <a class="btn btn-link-1" href="news">More</a>
                    </div>
                </div>
                        <?php } ?>
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