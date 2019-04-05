<?php
Include "../include/koneksi_db.php"; //memanggil file koneksi_db.php
include "../include/config.php"; //memanggil file fungsi.php
include "../include/fungsi.php"; //memanggil file fungsi.php

$user = $_POST['user'];
$pass = $_POST['pass'];
$hak  = $_POST['hak'];

if ($user==""&&$pass==""&&$hak=="") {
echo "Pengisian form belum benar. Ulangi Lagi";
echo "<meta http-equiv='refresh' content='0; url=?page=user'>";
} else {
$query = mysqli_query($konek,"INSERT INTO admin VALUES (null, '$user', '$pass', '$hak')");

if ($query) {
echo "Data Anda Berhasil dimasukkan<br>";
echo "Username Anda = <b>$user</b> dan password = <b>$pass</b><br>";
echo "Terima kasih";
} else {
echo "Data Anda GAGAL dimasukan. Ulangi sekali lagi";
echo "<meta http-equiv='refresh' content='0; url=?page=user'>";
}
}
?>