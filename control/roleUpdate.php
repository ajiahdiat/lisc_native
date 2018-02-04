<!DOCTYPE html>
<html lang="en">
	<head>
	<?php
		include("includes/link.php");
		include_once("DAL/context.php");
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
		  <form class="form-horizontal" action="userUpdate?id=<?php echo $_GET['id']; ?>" method="post">
		  <div class="form-group">
			<label for="email" class="label-control col-lg-4">Username</label>
			<div class="col-sm-8">
				<input type="email" id="email" name="email" value="<?php echo $email ?>" class="form-control" placeholder="Username" required="" autofocus="">
			</div>
			</div>
		  <div class="form-group">
			<label for="password" class="label-control col-lg-4">Password</label>
			<div class="col-sm-8">
				<input type="text" id="password" name="password" value="<?php echo $pw ?>" class="form-control" placeholder="Password" required="">
			</div>
			</div>
		  <div class="form-group">
			<label for="password" class="label-control col-lg-4">First Name</label>
			<div class="col-sm-8">
				<input type="text" id="first_name" name="first_name" value="<?php echo $first_name ?>" class="form-control" placeholder="First Name" required="">
			</div>
			</div>
		  <div class="form-group">
			<label for="password" class="label-control col-lg-4">Last Name</label>
			<div class="col-sm-8">
				<input type="text" id="last_name" name="last_name" value="<?php echo $last_name ?>" class="form-control" placeholder="Last Name" required="">
			</div>
			</div>
			<div class="footer">
			<button class="btn btn-success" name="Submit" type="submit">Update</button>
			<a class="btn btn-info" href="user" onclick="e.preventDefault();">Back</a>
			</div>
		  </form>
		  <?php	 
			// Check If form submitted, insert form data into users table.
			if(isset($_POST['Submit'])) {
				$email = $_POST['email'];
				$pw = $_POST['password'];
				$first_name = $_POST['first_name'];
				$last_name = $_POST['last_name'];
				$date = date("Y-m-d h:i:s");
				
				// Insert user data into table
				$result = mysqli_query($mysqli,
					"Update users Set email='$email', password='$pw', first_name='$first_name', last_name='$last_name', updated_at='$date' Where id=$id"
				);
				
				// Show message when user updated
				echo "<div class='row'><label class='label label-success'>User updated successfully</label></div>";
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