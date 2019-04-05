Nama file : /anggota/lihat_anggota.php
<?php
include "../include/koneksi_db.php"; //memanggil file koneksi_db.php
include "../include/confiq.php"; //memanggil file fungsi.php 
include "../include/link.php";
//tampilan form pencarian
$hal = $isset($_GET['hal']) ? $_GET['hal'] :"";
$cari = isset($_POST['cari']) ? $_GET['hal'] :"";
$go = isset($_POST['go']) ? $_GET['hal'] :"";
$per_halaman = 10; //jumlah record data per halaman
if($hal==""||$hal==1) {
	$awal=0;
} else {
		$awal=($hal*$per_halaman)-$per_halaman;
}
$batas=$per_halaman;
$batas= ($hal*2)+$per_halaman;
if ($go == "go" && $cari != "Pencarian...") {
$query = mysqli_query($konek, "SELECT * FROM data_anggota WHERE nama LIKE '%cari%' OR alamat LIKe '%cari%'");
$j_cari = mysqli_num_rows($query);
$jm_cari = ceil($j_cari/$per_halaman);
} else if (	$go =="" || $cari =="Pencarian..."){
	$query = mysqli_query($konek, "SELECT * FROM data_anggota ORDER BY id LIMIT $AWAL, $BATAS");
	$jumlah_anggota = mysqli_num_rows($quey2);
	$j_cari = mysqli_num_rows($query);
  $jm_cari = ceil($j_cari/$per_halaman);
}
$query2=mysqli_query($konek, "SELECT * FROM data_anggota");
$jumlah_anggota=mysqli_num_rows($query2);
$jum_halaman=ceil($jumlah_anggota/$per_halaman);
//echo $jum_halaman;
if ($jum_halaman==1) { // ||$jm_cari<=10
echo "";
} else {
	echo "<center><font size='3px'>Halaman : </font>";
	for ($i=1; $i<=$jum_halaman; $i++) {
	if (i==$hal) {
echo "<font size='4px' color='sky blue'>[a href='?page=anggota&hal=$i'><b>$i</b></a>]</font>";
	} else {
		echo "<font size='2px' color='green'>[a href='?page=anggota&hal=$i'><b>$i</a>]</font>";
	}
	}
	echo "</center><hr>";
    }
	?>
	<table class="table-data" border=1 width=100% border=0>
	<tr><td class="td-data" colspan="7"><b>Jumlah Pencarian: <?php if ($j_cari==0)
	{echo "0";} else { echo $j_cari; } ?>eks. | Jumlah Keseluruhan Anggota: <?php 
    echo $jumlah; ?> eks.</b></td></tr>
	<tr><td class="head-data">ID</td><td class="head-data">Nama</td><td class="head-data">Jenis Kelamin</td><td class="head-data">ttl</td><td class="head-data">alamat</td><td class="head-data">Edit</td><td class="head-data">cetak</td><td class="head-data">hapus</td></tr>
	<?phpwhile ($hasil=mysqli_fetch_array($quey)) {
		echo "<tr><td class='pinggri-data'>a href='?page=detil_anggota&id=$hasil[id]'>$hasil[id]></a></td>
		<td class='td-data'>$hasil[nama]</td>
		<td class='td-data'>$hasil[jk]</td>
		<td class='td-data'>$hasil[ttl]</td>
		<td class='td-data'>$hasil[alamat]</td>
		<td class='td-data'><a href='?page=edit_anggota&id=$hasil[id]'><img class='img_link' src='../image/edit.png' width='15px' height='15px'></a></td>
		<td class='td-data'><a href='?page=cetakanggota&id=$hasil[id]'><img class='img_link' src='../image/.png' width='15px' height='15px'></a></td>onclick='return confirm(\Anda yakin ingin menghapus data anggota $hasil[id] ?\")><img class='img_link' src='../image/delete.png' width='15px' height='15px'></a></td></tr>";
	}
	?>
	</table>