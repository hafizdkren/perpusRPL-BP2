
<?php
	include "../laporan/lap.php";
?>
<table class="table-data">
	<tr><td class="head-data">Laporan Peminjaman</td></tr>
	<?php
	include "../include/koneksi_db.php";
	include "kelas_siswa.php";
	echo "<tr><td class='td-data'>";
	$siswa			= isset($_POST['kab']) ? $_POST['kab'] : "";
	$pinjam			=mysqli_query($konek,"SELECT * FROM data_anggota WHERE nama ='$siswa'");
	
	
	$pinjam_lkp		=mysqli_fetch_array($pinjam) ;
	
	if ($siswa=="") {
		echo "<table class='table-data' width='100%'>
		<tr><td class='head-data' colspan='4'>Data Anggota dan Pinjamannya</td></tr>
		<tr><td class='td-data' colspan='4'>-->>Silahkan Pilih Kelas dan Anggota Terlebih Dahulu<<--</td></tr></table>";
	} else {
		print "&nbsp;<table class='table-data' width='100%'>
			<tr><td colspan=4 class='head-data'>Data Anggota : $siswa</td></tr>
			<tr><td width='50%' class='pinggir-data' colspan='2'>nama : <b>$pinjam_lkp[2]</b></td>
			<td width='50%' class='pinggir-data' colspan='2'>alamat : <b>$pinjam_lkp[6]</b></td></tr>
			<tr><td width='50%' class='pinggir-data' colspan='2'>kelas : <b>$pinjam_lkp[4]</b></td>
			<td width='50%' class='pinggir-data' colspan='2'>nomor induk : <b>$pinjam_lkp[1]</b></td></tr>";
	?>
<tr><td class="head-data" colspan="4">Buku Yang Dipinjam Oleh : <b><?php echo $siswa; ?></b></td></tr>
<tr><td class="head-data">Buku yang dipinjam</td></td class="head-data">Tanggal Pinjam</td><td class="head-data">Tanggal Kembali</td><td class="head-data">Keterangan</td></tr>
	<?php
	$query=mysqli_query( $konek,"SELECT * FROM trans_pinjam WHERE nama_peminjam='$siswa' AND status='pinjam'") or die (mysql_error());
	$jum=mysqli_num_rows($query);
	if ($jum==0) {
		echo "<tr><td class='td-data' colspan='4'>-- $siswa Tidak Ada Data Pinjaman--</td></tr>";
	} else {
		while ($hasil=mysqli_fetch_array($query)) {
		echo "<tr><td class='td-data'>$hasil[1]</td><td class='td-data'>$hasil[4]</td><td class='td-data>$hasil[5]</td><td class='td-data'>$hasil[5]</td></tr>";
		}
	}
	}?>
	</table></td></tr></table>
	