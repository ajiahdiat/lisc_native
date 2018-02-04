<!DOCTYPE html>
<html lang="en">
	<head>
		<?php
    include("includes/linkc.php");
    session_start();
    if (isset($_SESSION["sess"]))
      if ($_SESSION["sess"] == "admlisc") header("location:center");
    ?>
  </head>

  <body>

    <div class="container">

      <form class="form-signin" id="frmLogin" method="post" action="assets/ajax">
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputEmail" class="sr-only">Username</label>
        <input type="text" id="inputUsername" name="inputUsername" class="form-control" placeholder="Username" required="" autofocus="">
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="Password" required="">
        <div class="checkbox">
          <!-- <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label> -->
          <input class="hidden" name="login" value="asd" />
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>
    </div> <!-- /container -->
  

</body>
</html>