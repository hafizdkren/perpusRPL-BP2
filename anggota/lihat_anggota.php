<?php
include "../include/koneksi_db.php"; //memanggil file koneksi_db.php
include "../include/config.php"; //memanggil file fungsi.php
include "../anggota/link.php"; 
//tampilkan form pencarian
//echo "<center><form action='' method='post'><input type='text' name='cari' value='Pencarian...' onfocus=\"this.value='';\" onblur=\"if(this.value=='') this.value='Pencarian...';\">&nbsp;&nbsp;<input type='submit' value='go' name='go'>&nbsp;&nbsp;&nbsp;*) masukkan nama anggota ATAU id</form></scenter>";
//variabel _GET /
$hal	= 1;//isset($_GET['hal']) ? $_GET['hal'] : "";

//variabel _POST 
$cari	= isset($_POST['cari']) ? $_POST['cari'] : "";
$go		= isset($_POST['go']) ? $_POST['go'] : "";

$per_halaman	= 20;   // jumlah record data per halaman

if ($hal==""||$hal==1) {
	$awal=0;
} else {
	$awal=($hal*$per_halaman)-$per_halaman;
}
$batas=$per_halaman;
$batas=($hal*2)+$per_halaman;

if ($go == "go" && $cari != "Pencarian...") {
	$query		= mysqli_query($konek,"SELECT * FROM
	data_anggota WHERE nama LIKE '%$cari%' OR alamat LIKE '%$cari%'");
	$j_cari		= mysqli_num_rows($query);
	$jm_cari	= ceil($j_cari/$per_halaman);
} else if ($go == "" || $cari == "Pencarian...") {
	$query		=mysqli_query($konek,"SELECT * FROM data_anggota ORDER BY id LIMIT $awal,$batas");
	$j_cari		= mysqli_num_rows($query);
	$jm_cari	= ceil($j_cari/$per_halaman);
}

$query2=mysqli_query($konek,"SELECT * FROM data_anggota");
$jumlah_anggota=mysqli_num_rows($query2);
$jum_halaman=ceil($jumlah_anggota/$per_halaman);
//echo $jum_halaman;
if ($jum_halaman==1) { // ||$jm_cari<=10
echo "";
} else {
echo "<center><font size='8px'>Halaman : </font>";
for ($i=1; $i<=$jum_halaman; $i++) {
	if ($i==$hal) {
	echo "<font size='6px' color='green'>[<a href='?page=anggota&hal=$i'><b>$i</b></a>]</font>";
	} else {
	echo "<font size='5px' color='red'>[<a href='?page=anggota&hal=$i'><b>$i</b></a>]</font>";
	}
}
echo "</center><hr>";
}
?>
<table class="table-data" border=1 width=100% border=0 >
<tr><td class="td-data" colspan="7"><b>Jumlah Pencarian :
 <?php if ($j_cari==0) {echo "0";} else { echo $j_cari; } ?> eks. |
 Jumlah Keseluruhan Anggota : <?php echo $jumlah_anggota; ?> eks.</b></td></tr>
<tr><td class="head-data">ID</td><td class="head-data">No Induk</td><td class="head-data">Nama</td><td class="head-data">Jenis Kelamin
</td><td class="head-data">Kelas</td><td class="head-data">Tempat Lahir</td><td class="head-data">Tanggal Lahir</td><td class="head-data">Alamat</td><td class="head-data">Edit
</td><td class="head-data">Cetak</td><td class="head-data">Hapus</td></tr>
<?php
while ($hasil=mysqli_fetch_array($query)) {
echo "<tr><td class='pinggir-data'><a href='?page=detil_anggota&id=$hasil[id]'>$hasil[id]</a></td>
	<td class='td-data'>$hasil[no_induk]</td>
    <td class='td-data'>$hasil[nama]</td>
	<td class='td-data'>$hasil[jenis_kelamin]</td>
	<td class='td-data'>$hasil[kelas]</td>
	<td class='td-data'>$hasil[tempat_lahir]</td>
	<td class='td-data'>$hasil[tanggal_lahir]</td>
	<td class='td-data'>$hasil[alamat]</td>
	<td class='td-data'><a href='?page=edit_anggota&id=$hasil[id]'><img class='img_link'
	src='../image/edit.png' width='15px' height='15px'></a></td>
	<td class='td-data'><a href='?page=cetakanggota&id=$hasil[id]'><img class='img_link'
	src='../image/cetak.png' width='15px' height='15px'></a></td>
	<td class='td-data'><a href='?page=act_hapus_anggota&id=$hasil[id]'
	onclick='return confirm(\"Anda yakin ingin menghapus data anggota $hasil[id] ?\")'>
	<img class='img_link' src='../image/delete.png' width='15px' height='15px'></a></td></tr>";
}
?>
</table>
