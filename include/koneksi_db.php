<?php
$db_host   ="localhost";
$db_user   ="root";
$db_pass   ="";
$db_name   ="db_perpus";
$konek  =mysqli_connect($db_host,$db_user,$db_pass,$db_name) or die ("gagal koneksi ke server");
if (mysqli_connect_error())
        {
		echo "Failed to connect to MYSQL: " . mysqli_connect_error();
		}
		mysqli_select_db($konek,$db_name) or die ('Database belum dibuat');
$dendal=200;
?>
