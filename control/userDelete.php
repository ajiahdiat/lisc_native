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
          <h1 class="page-header">User Management</h1>
		  <div class="col-md-6 col-sm-offset-3">
		  <?php
			$id = $_GET['id'];
			 
			// Fetech user data based on id
			$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id=$id");
			 
			while($user_data = mysqli_fetch_array($result))
			{
				$email = $user_data['email'];
				$pw = $user_data['password'];
				$first_name = $user_data['first_name'];
				$last_name = $user_data['last_name'];
			}
		  ?>
		  <form class="form-horizontal" action="userDelete?id=<?php echo $_GET['id']; ?>" method="post">
		  <div class="form-group">
			<label for="email" class="label-control col-lg-4">Username</label>
			<div class="col-sm-8">
				<label for="email" class="label-control col-lg-4"><?php echo $email ?></label>
			</div>
			</div>
		  <div class="form-group">
			<label for="password" class="label-control col-lg-4">Password</label>
			<div class="col-sm-8">
				<label class="label-control col-lg-4"><?php echo $pw ?></label>
			</div>
			</div>
		  <div class="form-group">
			<label for="password" class="label-control col-lg-4">First Name</label>
			<div class="col-sm-8">
				<label class="label-control col-lg-4"><?php echo $first_name ?></label>
			</div>
			</div>
		  <div class="form-group">
			<label for="password" class="label-control col-lg-4">Last Name</label>
			<div class="col-sm-8">
				<label class="label-control col-lg-4"><?php echo $last_name ?></label>
			</div>
			</div>
			<div class="footer">
			<button class="btn btn-danger" name="Submit" type="submit">Delete</button>
			<a class="btn btn-info" href="user" onclick="e.preventDefault();">Back</a>
			</div>
		  </form>
		  <?php	 
			// Check If form submitted, delete from users table.
			if(isset($_POST['Submit'])) {				
				// Delete user data from table
				$result = mysqli_query($mysqli,
					"Delete From users Where id=$id"
				);
				// After delete redirect to Home, so that latest user list will be displayed.
				header("Location:user");
			}
		?>
        </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  

</body>
</html>