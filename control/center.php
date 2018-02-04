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
          <h1 class="page-header">Registration Management</h1>
          <div class="table-responsive">
        <?php 
                $batas = 10;
              $pg = isset( $_GET['pg'] ) ? $_GET['pg'] : "";               
              if ( empty( $pg ) ) {
                $posisi = 0;
                $pg = 1;
              } else {
                $posisi = ( $pg - 1 ) * $batas;
              }
        $i = 0;
        if ($result = $mysqli->query("SELECT * FROM registration LIMIT $posisi, $batas"))
        {
        // display records if there are records to display
        if ($result->num_rows > 0)
        {
        // display records in a table
        echo "<table class='table table-striped'>";

        // set table headers
        echo "<thead>";
        echo "<tr><th>#</th><th>Email</th><th>Parent Name</th><th>Contact</th></tr>";
        echo "</thead>";
        echo "<tbody>";

        while ($row = $result->fetch_object())
        {
          // set up a row for each record
          echo "<tr>";
          echo "<td>" . ++$i . "</td>";
          echo "<td>" . $row->email . "</td>";
          echo "<td>" .$row->parentname. "</td>";
          echo "<td>" .$row->contact. "</td>";
          echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";
        }}
        ?>
          </div>
              <?php
              //hitung jumlah data
              $sql2 = $mysqli->query("SELECT * FROM registration");
              $jml_data = $sql2->num_rows;
              //Jumlah halaman
              $JmlHalaman = ceil($jml_data/$batas); //ceil digunakan untuk pembulatan keatas
               
              //Navigasi ke sebelumnya
              if ( $pg > 1 ) {
              $link = $pg-1;
              $prev = "<a href='?pg=$link'>Prev </a>";
              } else {
              $prev = "Prev ";
              }
               
              //Navigasi nomor
              $nmr = '';
              for ( $i = 1; $i<= $JmlHalaman; $i++ ){
               
              if ( $i == $pg ) {
              $nmr .= $i . " ";
              } else {
              $nmr .= "<a href='?pg=$i'>$i</a> ";
              }
              }
               
              //Navigasi ke selanjutnya
              if ( $pg < $JmlHalaman ) {
              $link = $pg + 1;
              $next = " <a href='?pg=$link'>Next</a>";
              } else {
              $next = " Next";
              }
               
              //Tampilkan navigasi
              echo $prev . $nmr . $next;
              ?>
        </div>
      </div>
    </div>
  <?php include("includes/linkjs.php"); ?>

</body>
</html>