<?php
include_once("../DAL/context.php");

	$ss = $_POST['login'];
	if ($ss == "asd") {
		$un = $_POST['inputUsername'];
		$pw = $_POST['inputPassword'];
		$date = date("Y-m-d h:i:s");

		$result = $mysqli->query("SELECT * FROM users where email='$un'");
		if ($result->num_rows > 0)
		{
	        while ($row = $result->fetch_object())
	        {
				if (password_verify($pw, $row->password)) {
					$mysqli->query("UPDATE users set last_login='$date' where id=$row->id");
					header("Location:../center");
					session_start();
					$_SESSION["sess"] = "admlisc";
				} else {
					header("Location:../index");
				}
			}
		}
	}
?>