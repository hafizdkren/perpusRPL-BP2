<?php
include "../include/koneksi_db.php";
include "../include/config.php"; 
include "../include/fungsi.php"; 

$id		= isset($_GET['id']) ? $_GET['id'] : "";

if ($id=="") {
	echo "<script>alert('Pilih dulu data yang akan di-hapus');</script>";
	echo "<meta http-equiv='refresh' content='0; url=?page=anggota'>";
} else {
	$query = mysqli_query($konek, "DELETE FROM data_anggota WHERE id='$id'");
	
	if ($query) {
		echo "<script>alert('Data berhasil dihapus')</script>";
		echo "<meta http-equiv='refresh' content='0; url=?page=anggota'>";
	} else {
		echo "Data anda gagal di-hapus. Ulangi sekali lagi";
		echo "<meta http-equiv='refresh' content='0; url=?page=anggota'>";
	}
}
?>