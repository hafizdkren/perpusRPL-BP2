<?php include "../anggota/link.php"; ?>
<form method="post" action="?page=act_input_anggota">
<table align="center" width=80% border=1 class="table-data">
<tr><td class="head-data" colspan="2">Tambah Anggota</td></tr>
<tr>
	<td class="pinggir-data">No Induk</td>
	<td class="pinggir-data"><input type="text" name="no_induk" size="15"></td>
</tr>
<tr>
	<td class="pinggir-data">Nama</td>
	<td class="pinggir-data"><input type="text" name="nama" size="55"></td>
</tr>
<tr>
	<td class="pinggir-data">Jenis Kelamin</td>
	<td class="pinggir-data"><input type="text" name="jk" size="15"></td>
</tr>
<tr>
	<td width="25%">Kelas (*)</td>
   
		   <td><select size="1" name="kelas" required>
		   <option selected value="">- Pilih Kelas -</option>
		   <option value="mahasiswa">Mahasiswa</option>
		   <option value="siswa">Siswa</option>
		   <option value="Guru">Guru</option>
		   <option value="Karyawan">Karyawan</option>
		   <option value="Lain">Lainnya</option>
	</select></td>
</tr>
<tr>
  <td class="pinggir-data">Tempat Lahir</td>
  <td class="pinggir-data"><input type="text" name="tempat_lahir" size="60"></td>
</tr>
<tr>
  <td class="pinggir-data">Tanggal Lahir</td>
  <td class="pinggir-data"><input type="text" name="tanggal_lahir" size="60"></td>
</tr>
<tr>
  <td class="pinggir-data">Alamat</td>
  <td class="pinggir-data"><input type="text" name="alamat" size="60"></td>
</tr>
<tr>
<td colspan="2" align="center" class="head-data">
<input type="submit" value="Input"><br/>
</td>
</tr>
</table>
</form>