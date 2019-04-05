<?php
session_start();
include "../include/fungsi2.php";
$sesi = $_SESSION['sesi'];
if($_SESSION['sesi'] == "" || $_SESSION['sesi'] == NULL ||
empty($_SESSION['sesi'])){
	echo "<center><font color='blue'>Maaf anda tidak diperkenankan masuk halaman ini, jika anda belum <a href='../include/index.php'>login</a>!!!</font></center>";
	exit;
}
function logout() {
	session_start();
	session_destroy();
	echo "<meta http-equif='refresh' content='0; url=../index.php>";
}
$utama="<center><span class='s'>Selamat datang di Sistem Informasi Perpustakaan BALAI BAHASA PADANG. Untuk menggunakan, silahkan memilih menu di samping kiri!.<br><br>Status anda login sebagai <b>\"$sesi\"</b>Jangan lupa Log Out sebelum keluar</span></center>";
exit;
}
function logout() {
	session_start();
	session_destroy();
	echo "<meta http-equif='refresh' content='0; url=../index.php'>";
}
$utama="<center><span class='s'>Selamat Datang di Sistem Informasi Perpustakaan SMK BP2. Untuk menggunakan, silahkan memilih menu disamping kiri !.<br><br>Status anda login sebagai<b>\"$sesi\"</b>Jangan lupa Log Out sebelum keluar</span></center>";
?>
<html>
<head>
<title>.:: Sistem Informasi Perpustakaan SMK Bina Pendidikan 2 ::.</title>
<link rel="stylesheet" type="text/css" href="../include/style.css" />
</head>
<body>
<table border=0 width="100%" bgcolor="green" cellpadding=2 cellspacing=2>
<tr>
<td colspan="2"><img src="../image/image2.jpg" width="100%" height="214">
</td>
</tr>
<tr>
<td colspan=2><marquee onMouseOver="this.stop();" behavior="alternate"onMouseOut="this.start();">Halaman Administrasi Perpustakaan SMK Bina Pendidikan 2</marquee></td>
</tr>
<tr>
<td width="20%" align="top">
<h3>Pilih Menu</h3>
<div class="kotak">
<ul>
<li><a href="index.php">Home</a></li>
<li><a href="?page=transaksi">Transaksi<a></a></li>
<li><a href="?page=buku">Data Buku<a></a></li>
<li><a href="?page=anggota">Data Anggota<a></a></li>
