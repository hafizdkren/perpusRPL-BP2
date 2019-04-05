<?php
include "../include/koneksi_db.php";//memanggil file koneksi_db.php
include "../include/config.php"; //memanggil file fingsi.php
include "../include/fungsi.php"; //memanggil file fingsi.php

$id		= isset($_GET['id']) ? $_GET['id'] : "";

if ($id=="") {
	echo "<script>alert('Pilih dulu data yang akan di-hapus');</script>";
	echo "<meta http-equiv='refresh' content='0; url=?page=data_buku'>";
} else {
	$query = mysqli_query($konek, "DELETE FROM data_buku WHERE id='$id'");
	
	if ($query) {
		echo "<script>alert('Data berhasil dihapus')</script>";
		echo "<meta http-equiv='refresh' content='0; url=?page=data_buku'>";
	} else {
		echo "Data anda gagal di-hapus. Ulangi sekali lagi";
		echo "<meta http-equiv='refresh' content='0; url=?page=data_buku'>";
	}
}
?>