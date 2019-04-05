<?php
include "../include/koneksi_db.php"; //memanggil file koneksi_db.php
include "../include/fungsi2.php"; //memanggil file fungsi.php

$id					= isset($_POST['id']) ? addslashes($_POST['id']) : "";
$no_induk			= isset($_POST['no_induk']) ? addslashes($_POST['no_induk']) : "";
$nama   			= isset($_POST['nama']) ? addslashes($_POST['nama']) : "";
$jenis_kelamin     	= isset($_POST['jenis_kelamin']) ? addslashes($_POST['jenis_kelamin']) : "";
$kelas				= isset($_POST['kelas']) ? addslashes($_POST['kelas']) : "";
$tempat_lahir    	= isset($_POST['tempat_lahir']) ? addslashes($_POST['tempat_lahir']) : "";
$tanggal_lahir    	= isset($_POST['tanggal_lahir']) ? addslashes($_POST['tanggal_lahir']) : "";
$alamat 			= isset($_POST['alamat']) ? addslashes($_POST['alamat']) : "";
if ($no_induk==""||$nama==""||$jenis_kelamin==""||$kelas==""||$tempat_lahir==""||$tanggal_lahir==""||$alamat="") {
	echo "<script>alert('Pengisian form belum benar. Ulangi lagi');</script>";
	echo "<meta http-equiv='refresh' content='0; url=?page=input_anggota'>";
} else {
	$cek=mysqli_query($konek, "SELECT * FROM data_anggota WHERE id='$id'");
	$hasil_cek=mysqli_num_rows($cek);
	if ($hasil_cek>0) {
		echo "<script>alert('Data anggota dengan id $id pernah direkam!')</script>";
		echo "<meta http-equiv='refresh' content='0>;
		url=?page=detil_anggota&id=$id'>";
	} else {
		$query = mysqli_query($konek, "INSERT INTO data_anggota VALUES (NULL, '$no_induk', '$nama', '$jenis_kelamin', '$kelas', '$tempat_lahir', '$tanggal_lahir', '$alamat', NOW())");
		
		if ($query) {
			echo "<script>alert('Data berhasil ditambahkan @ $hari_ini. Terima Kasih')</script>";
			echo "<meta http-equiv='refresh' content='0; url=?page=anggota'>";
		} else {
			echo "<script>alert('Data anda gagal dimasukkan karena. Ulangi sekali lagi')</script>";
			echo mysqli_error();
			//echo "<meta http-equiv='refresh' content='0; url=?page=input_anggota'>";
}
}
}
?>
