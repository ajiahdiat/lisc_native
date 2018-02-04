<!DOCTYPE html>
<html lang="en">
	<head>
	<?php
		include("includes/link.php");
		include("DAL/context.php");
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
		  <a class="btn btn-primary" href="userCreate"><i class="glyphicon glyphicon-plus"></i> New</a>
          <div class="table-responsive">
			  <?php
				$i = 0;
				if ($result = $mysqli->query("SELECT * FROM users"))
				{
				// display records if there are records to display
				if ($result->num_rows > 0)
				{
				// display records in a table
				echo "<table class='table table-striped'>";

				// set table headers
				echo "<thead>";
				echo "<tr><th>#</th><th>Username</th><th>Last Login</th><th></th></tr>";
				echo "</thead>";
				echo "<tbody>";

				while ($row = $result->fetch_object())
				{
					// set up a row for each record
					echo "<tr>";
					echo "<td>" . ++$i . "</td>";
					echo "<td>" . $row->email . "</td>";
					echo "<td>" . $row->last_login . "</td>";
					echo "<td><a class='btn btn-warning' href='userUpdate?id=" . $row->id . "'><i class='glyphicon glyphicon-pencil'></i> Edit</a> <a class='btn btn-danger' href='userDelete?id=" . $row->id . "'><i class='glyphicon glyphicon-trash'></i> Delete</a></td>";
					echo "</tr>";
				}
				echo "</tbody>";
				echo "</table>";
				}}
			  ?>
          </div>
		  <?php
				// get the records from the database
				$halaman = 10; //batasan halaman
				$page = isset($_GET['halaman'])? (int)$_GET["halaman"]:1;
				$mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
				$query = $mysqli->query("select * from users LIMIT ".$mulai.",".$halaman);
				$sql = $mysqli->query("select * from users");
				$total = mysqli_num_rows($sql);
				$pages = ceil($total/$halaman); 
				for ($j=1; $j<=$pages ; $j++){
				 echo "<a href='?halaman='".$j.">".$j."</a>";
				}
		  ?>
        </div>
      </div>
    </div>
  <?php include("includes/linkjs.php"); ?>

</body>
</html>