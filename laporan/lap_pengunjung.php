<?php
include "../laporan/lap.php";
include "../include/koneksi_db.php"; //memanggil file koneksi_db.php
include "../include/config.php"; //memanggil file fungsi.php

$bulan1= date("Y-m");
$query=mysqli_query($konek, "SELECT * FROM pengunjung WHERE tgl_kunjung LIKE '%$bulan1%' ORDER BY id");
?>
<table class="table-data" border=1 width="100%" align="left">
<tr><td class="head-data" colspan="6">Data Pengunjung bulan <?php echo date('F')." ".date('Y'); ?></td></tr>
<tr><td class="head-data">No</td><td class="head-data">Nama</td><td class="head-data">JK</td><td class="head-data">Kelas</td><td class="head-data">Perlu</td><td class="head-data">Saran</td></tr>
<?php
$no=0;
while ($hasil=mysqli_fetch_array($query)) {
$no++;
echo "<tr><td class='td-data'>$no</td>
	<td class='td-data'>$hasil[1]</td>
	<td class='td-data'>$hasil[2]</td>
	<td class='td-data'>$hasil[3]</td>
	<td class='td-data'>$hasil[4]-$hasil[5]-$hasil[6]-$hasil[7]</td>
	<td class='td-data'>$hasil[9]</td>
	</tr>";
}
echo "</table";
//akhir
$hi = date("Y-m-d");
$baris=mysqli_query($konek,"SELECT * FROM pengunjung") or die (mysqli_error());
$jumlah=mysqli_num_rows($baris);

$hari_ini=mysqli_query($konek, "SELECT * FROM pengunjung WHERE tgl_kunjung LIKE '%$hi%'") or die (mysqli_error());
$jh=mysqli_num_rows($hari_ini);

$bulan= date("Y-m");
$bulan_ini=mysqli_query($konek, "SELECT * FROM pengunjung WHERE tgl_kunjung LIKE '%$bulan%'") or die (mysqli_error());
$jb=mysqli_num_rows($bulan_ini);

echo "<br><table class='table-data' border='1' width='50%'>
<tr><td class=head-data colspan='2'>Data Pengunjung Per hari</td></tr>
<tr><td class='pinggir-data'>Pengunjung hari ini</td><td align='center' class='pinggir-data'><b>$jh</b></td></tr><tr><td class='pinggir-data'>Pengunjung bulan ini</td><td align='center' class='pinggir-data'><b>$jb</b></td></tr></table>";
//akhir
$m=mysqli_num_rows(mysqli_query($konek,"SELECT * FROM pengunjung WHERE kelas='Mahasiswa' AND tgl_kunjung LIKE '%$bulan%'"));
$s=mysqli_num_rows(mysqli_query($konek,"SELECT * FROM pengunjung WHERE kelas='Siswa' AND tgl_kunjung LIKE '%$bulan%'"));
$g=mysqli_num_rows(mysqli_query($konek,"SELECT * FROM pengunjung WHERE kelas='Guru' AND tgl_kunjung LIKE '%$bulan%'"));
$k=mysqli_num_rows(mysqli_query($konek,"SELECT * FROM pengunjung WHERE kelas='Karyawan' AND tgl_kunjung LIKE '%$bulan%'"));
$l=mysqli_num_rows(mysqli_query($konek,"SELECT * FROM pengunjung WHERE kelas='Lain' AND tgl_kunjung LIKE '%$bulan%'"));
?>
<table class='table-data' border=1 width=10%>
<tr><td class="head-data" colspan="2">Data Pengunjung , bulan <?php echo date('F')." ".date('Y'); ?><td></tr>
<tr><td class='pinggir-data'>Mahasiswa</td><td align="center" class='td-data'><b><?php echo $m; ?></b></td></tr>
<tr><td class='pinggir-data'>Siswa</td><td align="center" class='td-data'><b><?php echo $s; ?></b></td></tr>
<tr><td class='pinggir-data'>Guru</td><td align="center" class='td-data'><b><?php echo $g; ?></b></td></tr>
<tr><td class='pinggir-data'>Karyawan</td><td align="center" class='td-data'><b><?php echo $k; ?></b></td></tr>
<tr><td class='pinggir-data'>Lainnya</td><td align="center" class='td-data'><b><?php echo $l; ?></b></td></tr>
</table>