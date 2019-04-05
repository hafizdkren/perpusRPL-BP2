<?php
include "../include/koneksi_db.php";//memanggil file koneksi_db.php
include "../anggota/link.php";

$id		= isset($_GET['id']) ? $_GET['id'] : "";
if ($id == "") {
	echo "<script>alert('Pilih dulu data yang akan di-update');</script>";
	echo "<meta http-equiv='refresh' content='0; url=?page=lihat_anggota.php'>";
} else {
	$query			= mysqli_query($konek,"SELECT * FROM data_anggota WHERE id=$id");
	$hasil			= mysqli_fetch_array($query);
	$nama			= $hasil['nama'];
	$jenis_kelamin	= $hasil['jenis_kelamin'];
	$kelas      	= $hasil['kelas'];
	$alamat			= $hasil['alamat'];
	$tempat_lahir	= $hasil['tempat_lahir'];
	$tanggal_lahir	= $hasil['tanggal_lahir'];
?>

<form method="post" action="?page=act_edit_anggota">
<table align="center" width=90% border=1 class="table-data">
<input type="hidden" name="id" value="<?php echo $id; ?>">
<tr><td class="head-data" colspan="2">Edit Data Anggota : <?php echo $nama;?></td></tr>
<tr><td class="pinggir-data">Nama</td>
<td class="pinggir-data"><input type="text" size="15" name="nama" value="<?php echo $nama; ?>"></td></tr>
<tr><td class="pinggir-data">Jenis Kelamin</td>
<td class="pinggir-data"><input type="text" size="55" name="jenis_kelamin" value="<?php echo $jenis_kelamin; ?>"></td></tr>
<td width="25%">Kelas (*)</td>
   
		   <td><select size="1" name="kelas" required>
		   <option selected value="">- Pilih Kelas -</option>
		   <option value="mahasiswa">Mahasiswa</option>
		   <option value="siswa">Siswa</option>
		   <option value="Guru">Guru</option>
		   <option value="Karyawan">Karyawan</option>
		   <option value="Lain">Lainnya</option>
	</select>
<tr><td class="pinggir-data">Alamat</td>
<td class="pinggir-data"><input type="text" size="20" name="alamat" value="<?php echo $alamat; ?>"></td></tr>
<tr><td class="pinggir-data">Tempat Lahir</td>
<td class="pinggir-data"><input type="text" size="60" name="tempat_lahir" value="<?php echo $tempat_lahir; ?>"></td></tr>
<tr><td class="pinggir-data">Tanggal Lahir</td>
<td class="pinggir-data"><input type="text" size="60" name="tanggal_lahir" value="<?php echo $tanggal_lahir; ?>"></td></tr>

<tr><td class="head-data" colspan="2" align="center">
<input type="submit" value="Update">
</td></tr>
</table>
</form>
<?php
}
?>