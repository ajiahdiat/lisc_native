<html>
<head>
    <meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>LISc - Leadership Islamic School and Daycare</title>

<!-- CSS -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,600">        
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

<!-- Favicon and touch icons -->
<link rel="shortcut icon" href="ico/favicon.png">
</head>

<?php
include_once("../control/DAL/context.php");
if(isset($_POST['Submit'])) {
    $sb = $_POST['subject'];
    $date = date("Y-m-d h:i:s");
    if ($sb == 1) {
        $em = $_POST['email'];
        $ms = $_POST['message'];
         $result = mysqli_query($mysqli,
             "INSERT INTO messages(email, message, created_at, updated_at) VALUES('$em','$ms','$date','$date')"
        );
        echo "<div class='text-center'>";
        echo "<div class='alert alert-success role='alert'>";
        echo "Form submitted<br />Thank you!, please wait 3 seconds to redirecting...";
        echo "</div>";
        echo "</div>";
        header("refresh:3;url=../index");
    }else if ($sb == 2) {
        $pn = $_POST['parentname'];
        $ct = $_POST['pcont'];
         $result = mysqli_query($mysqli,
             "INSERT INTO registration(email, parentname, contact, created_at, updated_at) VALUES('$em','$pn','$ct','$date','$date')"
         );
    }
}
?>