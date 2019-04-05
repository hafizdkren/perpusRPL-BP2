<?php
mysqli_connect('localhost', 'root', '');
mysqli_select_db($konek,'db_perpus');
?>
<html> 
<head>
<script language="JavaScript" type="text/JavaScript">
 function showKab ()
 {
<?php
// membaca semua provinsi
$query = "SELECT kelas, COUNT(kelas) AS 'jumlah' FROM data_anggota GROUP BY kelas";
$hasil = mysqli_query($query);

// membuat if untuk masing-masing pilihan provinsi beserta isi option untuk combobox kedua
while ($data = mysqli_fetch_array($hasil))
{
	$idProp = $data[0];
	
	// membuat if untuk masing-masing provinsi
	echo "if (document.demo.propinsi.value == \"".$idProp."\")";
	echo "{";
	
	//membuat option kabupaten untuk masing-masing provinsi
	$query2 = "SELECT * FROM data_anggota WHERE kelas = '$idProp'";
	$hasil2 = mysqli_query($query2);
	$content = "document.getElementbyId9'kabupaten').innerHTML = \"";
	
	while ($data2 = mysqli_fetch_array($hasil2))
	{
		$content .= "<option value='".$data2['nama']."'>".$data2['nama']."</option>";
	}
	$content .= "\"";
		echo $content;
	echo "}\n";
	}
	
	?>
	)
</script>
</head>
<body>
<form name="demo" method="post" action="?page=lap_peminjaman">
<tr><td class="head-data">Pilih Kelas :
			<select name="propinsi" onchange="showKab()">
			<option value="">Kelas</option>
			<?php	
					// query untuk menampilkan provinsi
					$query =  mysqli_query ($konek, "SELECT COUNT kelas AS 'jumlah' FROM data_anggota GROUP BY id");
		
					$hasil = mysqli_query($query);
					while ($data = mysqli_fetch_array($hasil))
					{
						echo "<option value='".$data[0]."'>".$data[0]."</option>";
					}
			?>
			</select> Pilih Siswa :
		<select name="kab" id="kabupaten">
<option value=''></option>
<?php 

$qa= mysqli_query($konek, "Select * From data_anggota Order By id");
while ($anggota = mysqli_fetch_array($qa)){
	echo "<option value='$anggota[2]'>$anggota[2]</option>";
}
?>
		</select>&nbsp; <input type="submit" value="go..">
		</td>
	</tr>
	</form>
	</body>
	</html>