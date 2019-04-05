<?php
include "../include/koneksi_db.php"; //memanggil file koneksi_db.php
include "../include/config.php"; //memanggil file fungsi.php
include "../include/fungsi.php"; //memanggil file fungsi.php

$id		= isset($_GET['id']) ? $_GET['id'] : "";

if ($id=="") {
echo "<script>alert('Pilih dulu data yang akan di-hapus');</script>";
echo "<meta http-equiv='refresh' content='0; url=?page=user'>";
} else {
	$query = mysqli_query($konek,"DELETE FROM admin WHERE id='$id'");
	
	if ($query) {
		echo "<script>alert('Data berhasil dihapus');</script>";
		echo "<meta http-equiv='refresh' content='0; url=?page=user'>";
	} else {
		echo "Data anda gagal dihapus. Ulangi sekali lagi";
		echo "<meta http-equiv='refresh' content='0; url=?page=user'>";
	}
}
?>	