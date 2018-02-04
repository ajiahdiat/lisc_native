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
		  <div class="col-md-9 col-sm-offset-1">
		  <form class="form-horizontal" action="galleryCreate" method="post" enctype="multipart/form-data">
		  <div class="form-group">
			<label for="email" class="label-control col-lg-4">Image</label>
			<div class="col-sm-8">
				<input type="file" id="image" name="image" accept="image/*" class="form-control" placeholder="Image" required="" autofocus="">
			</div>
			</div>
		  <div class="form-group">
			<label class="label-control col-lg-4">Description</label>
			<div class="col-sm-8">
				<textarea id="description" name="description" class="form-control" placeholder="description" required="" rows=10></textarea>
			</div>
			</div>
			<button class="btn btn-primary" name="Submit" type="submit">Create</button>
			<a class="btn btn-info" href="gallery" onclick="e.preventDefault();">Back</a>
		  </form>
		  <?php	 
			// Check If form submitted, insert form data into gallery table.
			if(isset($_POST['Submit'])) {
				$target_dir = "assets/upload/";
				$target_file = $target_dir . basename($_FILES["image"]["name"]);
				$uploadOk = 1;
				$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
				// Check if image file is a actual image or fake image
				    $check = getimagesize($_FILES["image"]["tmp_name"]);
				    if($check !== false) {
				        // echo "File is an image - " . $check["mime"] . ".";
				        $uploadOk = 1;
				    } else {
				        // echo "File is not an image.";
				        $uploadOk = 0;
				    }
				    // Check if $uploadOk is set to 0 by an error
				if ($uploadOk == 0) {
				    // echo "Sorry, your file was not uploaded.";
				// if everything is ok, try to upload file
				} else {
				    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
				        // echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
				    } else {
				        // echo "Sorry, there was an error uploading your file.";
				    }
				}

				$img = $target_file;
				$desc = $_POST['description'];
				$date = date("Y-m-d h:i:s");
				
				// Insert gallery data into table
				$result = mysqli_query($mysqli,
					"INSERT INTO gallery(image, description, created_at, updated_at) VALUES('$img','$desc','$date','$date')"
				);
				
				// Show message when gallery added
				echo "<div class='row'><label class='label label-success'>Gallery added successfully</label></div>";
			}
		?>
        </div>
        </div>
      </div>
    </div>
  <?php include("includes/linkjs.php"); ?>
  

</body>
</html>