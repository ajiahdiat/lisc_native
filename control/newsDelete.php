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
			}
		  ?>
		  <form class="form-horizontal" action="newsDelete?id=<?php echo $_GET['id']; ?>" method="post">
		  <div class="form-group">
			<label for="email" class="label-control col-lg-4">Title</label>
			<div class="col-sm-8">
				<label for="email" class="label-control col-lg-4"><?php echo $email ?></label>
			</div>
			</div>
		  <div class="form-group">
			<label for="password" class="label-control col-lg-4">Content</label>
			<div class="col-sm-8">
				<textarea id="content" name="content" class="form-control" placeholder="Content" required="" rows=10 disabled><?php echo $pw ?></textarea>
			</div>
			</div>
			<div class="footer">
			<button class="btn btn-danger" name="Submit" type="submit">Delete</button>
			<a class="btn btn-info" href="news" onclick="e.preventDefault();">Back</a>
			</div>
		  </form>
		  <?php	 
			// Check If form submitted, delete from news table.
			if(isset($_POST['Submit'])) {				
				// Delete news data from table
				$result = mysqli_query($mysqli,
					"Delete From news Where id=$id"
				);
				// After delete redirect to Home, so that latest news list will be displayed.
				header("Location:news");
			}
		?>
        </div>
        </div>
      </div>
    </div>
  <?php include("includes/linkjs.php"); ?>  

</body>
</html>