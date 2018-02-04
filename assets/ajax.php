<?php
include_once("../control/DAL/context.php");

$sb = $_POST['subject'];
$date = date("Y-m-d h:i:s");
if ($sb == 1) {
	$em = $_POST['email'];
	$ms = $_POST['message'];
	// Insert news data into table
	$result = mysqli_query($mysqli,
		"INSERT INTO messages(email, message, created_at, updated_at) VALUES('$em','$ms','$date','$date')"
	);
}else if ($sb == 2) {
	$em = $_POST['email'];
	$pn = $_POST['pname'];
	$ct = $_POST['contact'];
	// Insert news data into table
	$result = mysqli_query($mysqli,
		"INSERT INTO registration(email, parentname, contact, created_at, updated_at) VALUES('$em','$pn','$ct','$date','$date')"
	);
}
?>