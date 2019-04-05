
<?php 
include "../include/koneksi_db.php"; //memanggil file koneksi_db.php
include "../include/config.php"; //memanggil file fungsi.php
include "../include/fungsi.php"; //memanggil file fungsi.php
$id	  = $_POST['id'];
$username = $_POST['username'];
$password = $_POST['password'];
$hak_akses = $_POST['hak_akses'];
if ($id=="") {
echo "<script>alert('Pilih dulu data yang akan di-update');</script>";
echo "<meta http-equiv='refresh' content='0; url=?page=user'>";
} else {
	$query = mysqli_query($konek, "UPDATE admin SET id='$id', username='$username', password='$password', hak_akses='$hak_akses' WHERE id='$id'");
	if ($query) { 
		echo "<script>alert('Data Berhasil diupdate @ $hari_ini. terima Kasih');</script>";
		echo "<meta http-equiv='refresh' content='0; url=?page=user'>";
	} else {
		echo "Data Anda Gagal diupdate. Ulangi Sekali Lagi".mysqli_error();
		echo "<meta http-equiv='refresh' content='0; url=?page=edit_user&id=$id'>";
	}
}
?>	
		