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
          <h1 class="page-header">News Management</h1>
		  <div class="col-md-6 col-sm-offset-3">
		  <?php
			$id = $_GET['id'];
			 
			// Fetech news data based on id
			$result = mysqli_query($mysqli, "SELECT * FROM news WHERE id=$id");
			 
			while($news_data = mysqli_fetch_array($result))
			{
				$email = $news_data['title'];
				$pw = $news_data['content'];
				$email2 = $news_data['title_en'];
				$pw2 = $news_data['content_en'];
			}
		  ?>
		  <form class="form-horizontal" action="newsUpdate?id=<?php echo $_GET['id']; ?>" method="post">
		  <div class="form-group">
			<label for="email" class="label-control col-lg-4">Title</label>
			<div class="col-sm-8">
				<input type="text" id="title" name="title" value="<?php echo $email ?>" class="form-control" placeholder="Title" required="" autofocus="">
			</div>
			</div>
		  <div class="form-group">
			<label for="email" class="label-control col-lg-4">Title in English</label>
			<div class="col-sm-8">
				<input type="text" id="title_en" name="title_en" value="<?php echo $email2 ?>" class="form-control" placeholder="Title in English" required="" autofocus="">
			</div>
			</div>
		  <div class="form-group">
			<label for="password" class="label-control col-lg-4">Content</label>
			<div class="col-sm-8">
				<textarea id="content" name="content" class="form-control" placeholder="Content" required="" rows=10><?php echo $pw ?></textarea>
			</div>
			</div>
		  <div class="form-group">
			<label for="password" class="label-control col-lg-4">Content in English</label>
			<div class="col-sm-8">
				<textarea id="content_en" name="content_en" class="form-control" placeholder="Content in English" required="" rows=10><?php echo $pw2 ?></textarea>
			</div>
			</div>
			<div class="footer">
			<button class="btn btn-success" name="Submit" type="submit">Update</button>
			<a class="btn btn-info" href="news" onclick="e.preventDefault();">Back</a>
			</div>
		  </form>
		  <?php	 
			// Check If form submitted, insert form data into news table.
			if(isset($_POST['Submit'])) {
				$email = $_POST['title'];
				$pw = $_POST['content'];
				$email2 = $_POST['title_en'];
				$pw2 = $_POST['content_en'];
				$date = date("Y-m-d h:i:s");
				
				// Insert news data into table
				$result = mysqli_query($mysqli,
					"Update news Set title='$email', content='$pw', title_en='$email2', content_en='$pw2', updated_at='$date' Where id=$id"
				);
				
				// Show message when news updated
				echo "<div class='row'><label class='label label-success'>News updated successfully</label></div>";
			}
		?>
        </div>
        </div>
      </div>
    </div>
  <?php include("includes/linkjs.php"); ?>
  

</body>
</html>