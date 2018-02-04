<!DOCTYPE html>
<html lang="en">

    <head>
    	<?php
			include("link.php");
			$lang = $_COOKIE['lang'];
		include_once("control/DAL/context.php");
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
	                	<div class="row">
	                		<!-- <div class="col-sm-3">
	                			<div class="blog-box-image">
	                				<img src="assets/img/blog/3.jpg" alt="" data-at2x="assets/img/blog/3.jpg">
	                			</div>
	                		</div> -->
		  <?php
			$id = $_GET['id'];
			 
			// Fetech news data based on id
			$result = $mysqli->query("SELECT * FROM news WHERE id=$id");
			if ($result->num_rows > 0)
			{
			while($news_data = mysqli_fetch_array($result))
			{
				$email = $news_data['title'];
				$pw = $news_data['content'];
				$cr = $news_data['created_at'];
				$dt = strtotime($cr);
				setlocale(LC_ALL, 'IND');
			}
		  ?>
	                		<div class="col-sm-12">
	                			<h3><?php echo $email ?></h3>
	                			<div class="blog-box-date"><i class="fa fa-calendar-o"></i> Diposting pada <?php echo strftime("%d %b %Y", $dt) ?></div>
		                    	<p><?php echo $pw ?></p>
		                    	<p><a href='news'>Go Back</a></p>
	                		</div>
	                	</div>
			<?php
			}else{
				echo "<p>Maaf, Data Tidak Ditemukan. <a href='news'>Kembali</a></p>";
			}
			?>
						<?php }else{ ?>
	                	<div class="row">
		  <?php
			$id = $_GET['id'];
			 
			// Fetech news data based on id
			$result = $mysqli->query("SELECT * FROM news WHERE id=$id");
			if ($result->num_rows > 0)
			{
			while($news_data = mysqli_fetch_array($result))
			{
				$email = $news_data['title'];
				$pw = $news_data['content'];
				$cr = $news_data['created_at'];
				$dt = strtotime($cr);
				setlocale(LC_ALL, 'EN');
			}
		  ?>
	                		<div class="col-sm-12">
	                			<h3><?php echo $email ?></h3>
	                			<div class="blog-box-date"><i class="fa fa-calendar-o"></i> Posted on <?php echo strftime("%d %b %Y", $dt) ?></div>
		                    	<p><?php echo $pw ?></p>
		                    	<p><a href='news'>Go Back</a></p>
	                		</div>
	                	</div>
			<?php
			}else{
				echo "<p>Sorry, Not found. <a href='news'>Go Back</a></p>";
			}
			?>
						<?php } ?>
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