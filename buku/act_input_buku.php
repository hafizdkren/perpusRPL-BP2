<?php
include "../include/koneksi_db.php";
include "../include/fungsi2.php";

$judul	   = isset($_POST['judul']) ? addslashes($_POST['judul']) : "";
$pengarang = isset($_POST['pengarang']) ? addslashes($_POST['pengarang']) : "";
$terbit	   = isset($_POST['terbit']) ? addslashes($_POST['terbit']) : "";
$penerbit  = isset($_POST['penerbit']) ? addslashes($_POST['penerbit']) : "";
$isbn	   = isset($_POST['isbn']) ? addslashes($_POST['isbn']) : "";
$kategori  = isset($_POST['kategori']) ? addslashes($_POST['kategori']) : "";
$klas	   = isset($_POST['klas']) ? addslashes($_POST['klas']) : "";
$jum_buku  = isset($_POST['jum_buku']) ? addslashes($_POST['jum_buku']) : "";
$lok	   = isset($_POST['lok']) ? addslashes($_POST['lok']) : "";
$asal	   = isset($_POST['asal']) ? addslashes($_POST['asal']) : "";
$tgl	   = isset($_POST['tgl']) ? addslashes($_POST['tgl']) : "";

$tgl	   = $hari_ini;

if($judul==""||$pengarang==""||$terbit==""||$penerbit==""||$isbn==""||$kategori==""||$klas==""||$jum_buku==""||$lok==""||$asal=="") {
	echo "<script>alert('Pengisian form belum benar. Ulangi Sekali Lagi');</script>";
	echo "<meta http-equiv='refresh' content='0; url=?page=input_buku'>";
} else {
	$cek=mysqli_query($konek,"SELECT * FROM data_buku WHERE judul='$judul'");
	$hasil_cek=mysqli_num_rows($cek);
	
	if($hasil_cek>0) {
		echo "<script>alert('Data buku dengan judul $judul pernah direkam !!')</script>";
		echo "<meta http-equiv='refresh' content='0; url=?page=detil_buku&judul=$judul'>";
	} else {
		$query = mysqli_query($konek,"INSERT INTO data_buku VALUES (NULL,'$judul', '$pengarang', '$terbit', '$penerbit', '$isbn', '$kategori', '$klas', '$jum_buku', '$lok', '$asal', '$jum_buku', NOW())");
	if ($query) {
		echo "<script>alert('Data berhasil ditambahkan @ $hari_ini. Terima kasih');</script>";
		echo "<meta http-equiv='refresh' content='0; url=?page=buku'>";
	} else {
		echo "<script>alert('Data anda gagal dimasukan karena ulangi sekali lagi');</script>";
		echo mysqli_error();
		}
	}
}
?>	