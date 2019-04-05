<?php
include "../include/koneksi_db.php";
include "../user/link.php";
$id		= isset($_GET['id']) ? $_GET['id'] : "";
if ($id=="") {
echo "<script>alert('Pilih dulu data yang akan di-update');</script>";
echo "<meta http-equiv='refresh' content='0; url=lihat_user.php'>";
} else {
$query=mysqli_query($konek,"SELECT * FROM admin WHERE id=$id");
$hasil=mysqli_fetch_array($query);
$id	=$hasil['id'];
$username=$hasil['username'];
$password=$hasil['password'];
$hak_akses=$hasil['hak_akses'];
?>

<form method="post" action="?page=act_edit_user">
<input type="hidden" name="id" value="<?php echo $id; ?>">
<table class="table-data" width=100% border=1>
<tr><td class="head-data" colspan="2">Edit User : <?php echo $username; ?></td></tr>
<tr><td class="pinggir-data">Username</td><td class="pinggir-data"><input type="text" name="username" value="<?php echo $username; ?>"></td></tr>
<tr><td class="pinggir-data">Password</td><td class="pinggir-data"><input type="text" name="password" value="<?php echo $password; ?>"></td></tr>
<tr><td class="pinggir-data">Hak Akses</td><td class="pinggir-data">
<select name="hak_akses">
<?php
if ($hak_akses==1)
	{ 
		$su="selected";
		$ub="selected";
	} 
else 
	{ 
		$su="selected";
		$ub="selected";
	}
?>
<option value="">--Pilih Hak Akses--</option>
<option value="1" <?php echo $su;?>>Super User</option>
<option value="2" <?php echo $ub;?>>User Biasa</option>
</select>
</td></tr>
<tr><td colspan="2"	align="center" class="head-data">
<input type="submit" value="Update">
</td></tr>
</table>
</form>
<?php
}
?>

