<?php
include "../include/koneksi_db.php"; //memanggil file koneksi_db.php
include "../include/config.php"; //memanggil file fungsi.php
include "../user/link.php";

$query=mysqli_query($konek,"SELECT * FROM admin ORDER BY id");
?>

<table class="table-data" width=100% border=1>
<tr><td class="head-data">No</td><td class="head-data">Username</td><td class="head-data">Password</td><td class="head-data">Hak Akses</td><td class="head-data">Edit</td><td class="head-data">Hapus</td></tr>

<?php
$no=0;
while($hasil = mysqli_fetch_array($query)) {
$no++;
echo "<tr><td class='td-data'>$no</td>
	  <td class='td-data'>$hasil[username]</td>
	  <td class='td-data'>$hasil[password]</td>
	  <td class='td-data'>$hasil[hak_akses]</td>
	  <td class='td-data'><a href='?page=edit_user&id=$hasil[id]'><img class='img_link' src='../image/edit.png' width='15px' height='15px'></a></td>
	  <td class='td-data'><a href='?page=act_hapus_user&id=$hasil[id]' onclick='return comfirm(\"Anda yakin ingin menghapus data ini ?\")'><img class='img_link' src='../image/delete.png' width='15px' height='15px'></a></td></tr>";
		 
}
?>
</table>
