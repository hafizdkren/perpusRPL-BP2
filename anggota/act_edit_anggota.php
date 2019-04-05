<?php
include "../include/koneksi_db.php"; //memanggil file koneksi_db.php
include "../include/config.php"; //memanggil file fungsi.php
include "../include/fungsi.php"; //memanggil file fungsi.php

//variabel_POST$id = isset($_POST['id']) ? addslashes($_POST['id']) : "";
$id 			= isset($_POST['id']) ? addslashes($_POST['id']) : "";
$no_induk		= isset($_POST['no_induk']) ? addslashes($_POST['no_induk']) : "";
$nama			= isset($_POST['nama']) ? addslashes($_POST['nama']) : "";
$jenis_kelamin	= isset($_POST['jenis_kelamin']) ? addslashes($_POST['jenis_kelamin']) : "";
$kelas 			= isset($_POST['kelas']) ? addslashes($_POST['kelas']) : "";
$alamat 		= isset($_POST['alamat']) ? addslashes($_POST['alamat']) : "";
$tempat_lahir 	= isset($_POST['tempat_lahir']) ? addslashes($_POST['tempat_lahir']) : "";
$tanggal_lahir	= isset($_POST['tanggal_lahir']) ? addslashes($_POST['tanggal_lahir']) : "";

if ($id == "") {
	echo "<script>alert('pilih dulu data yang akan di_update');</script>";
	echo "<meta http-equiv='refresh' content='0; url=?page=anggota'>";
} else {
	$query = mysqli_query($konek,"UPDATE data_anggota SET id='$id' nama='$nama', jenis_kelamin='$jenis_kelamin', kelas='$kelas', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', alamat='$alamat', WHERE id='$id'");
	if ($query) {
		echo "<script>alert('data berhasil diupdate @ $hari_ini.Terima kasih')</script>";
		echo "<meta http-equiv='refresh' content='0; url=?page=anggota'>";
} else {
	echo "data anda gagal diupdate. Ulangi sekali lagi".mysqli_error();
	echo "<meta http-equiv='refresh' content='0; url=?page=edit_anggota&id=$id'>";
}
}
?>