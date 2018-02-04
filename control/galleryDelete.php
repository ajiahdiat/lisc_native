<!DOCTYPE html>
<html lang="en">
	<head>
	<?php
		include("includes/link.php");
		include_once("DAL/context.php");
	    session_start();
	    $s = $_SESSION["sess"];
	    if($s != "admlisc") header("location:index");
	?>
  </head>

  <body>
  <?php include("includes/nav.php"); ?>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
			<?php include("includes/navside.php"); ?>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Gallery Management</h1>
		  <div class="col-md-6 col-sm-offset-3">
		  <?php
			$id = $_GET['id'];
			 
			// Fetech gallery data based on id
			$result = mysqli_query($mysqli, "SELECT * FROM gallery WHERE id=$id");
			 
			while($news_data = mysqli_fetch_array($result))
			{
				$email = $news_data['image'];
				$pw = $news_data['description'];
			}
		  ?>
		  <form class="form-horizontal" action="galleryDelete?id=<?php echo $_GET['id']; ?>" method="post">
		  <div class="form-group">
			<label for="email" class="label-control col-lg-4">Image</label>
			<div class="col-sm-8">
				<img src="<?php echo $email ?>" style="width: 200px" />
			</div>
			</div>
		  <div class="form-group">
			<label for="password" class="label-control col-lg-4">Description</label>
			<div class="col-sm-8">
				<textarea id="description" name="description" class="form-control" placeholder="Content" required="" rows=10 disabled><?php echo $pw ?></textarea>
			</div>
			</div>
			<div class="footer">
			<button class="btn btn-danger" name="Submit" type="submit">Delete</button>
			<a class="btn btn-info" href="gallery" onclick="e.preventDefault();">Back</a>
			</div>
		  </form>
		  <?php	 
			// Check If form submitted, delete from gallery table.
			if(isset($_POST['Submit'])) {				
				$date = date("Y-m-d h:i:s");
				// Delete gallery data from table
				$result = mysqli_query($mysqli,
					"Update gallery Set deleted_at='$date' Where id=$id"
				);
				// After delete redirect to Home, so that latest gallery list will be displayed.
				header("Location:gallery");
			}
		?>
        </div>
        </div>
      </div>
    </div>
  <?php include("includes/linkjs.php"); ?>  

</body>
</html>