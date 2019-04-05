Filename :../anggota/edit_anggota.php
<?php
include "../include/koneksi_db.php";//memanggil file koneksi_db
include "../anggota/link.php";
$id = isset($_GET['id']) ? $_GET['id'] : "";
if ($id == "") {
	echo "<script>alert<'Pilihlah terlebih dahulu data yang akan di-update'>;</script>";
	echo "<meta http-equiv='refresh' content='0; url=lihat_anggota.php'>";
	