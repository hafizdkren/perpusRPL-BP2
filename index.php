<html>
<head>
<title>.:: Sistem Informasi Perpustakaan SMK BINA PENDIDIKAN 2 ::.</title>
<style type="text/css">
body {
background-color: #030303;
color:  black;
margin-top: 0px;
margin-left: 50px;
margin-right: 50px;
font-family: "Arial", Arial, Arial;
font-size: 14px;
}
</style>
</head>

<body>
<center>
<table border=0 width="900px" bgcolor=#ff4500 colspan="0">
	<tr>
	<form action="login.php" name="login" method="post">
		<td style="background: #539ac4; padding: 8px 0 8px 0" colspan="2" align="right">
		Username : <input type="text" name="user" placeholder="" required> Password : <input type="password" name="pass" placeholder="" required> <input type="submit" value="Log in">
		</td>
	</form>
	</tr>
	<tr>
		<td colspan="2" width="900px" height="200px"><img src="image/image4.jpg" width="100%" height="190px"></td>
	
	</tr>
	<tr>
		<td colspan="2">
		<marquee behavior="alternate" direction="left" onMouseOver="this.stop();" onMouseOut="this.start();">
		<b>Selamat Datang di Perpustakaan SMK BINA PENDIDIKAN 2</b></marquee>
	</td>
	
	</tr>
    
	<tr>
    <td width="40%" valign="top" align="center" ><a href="?">Home</a>
            
    <?
    if($_GET[page]==pencarian){ include "pencarian.php";}
?>
	    <div style="clear: both;">&nbsp;</div>
		</div>
		<!-- end #content -->
		<h2>Kata Bijak</h2>
		  <p>
			<? 
                      srand((double)microtime()*1000000); 
                      $arry_txt = preg_split("/----/", join('', file("pesan.txt"))); 
                      echo $arry_txt[rand(0, sizeof($arry_txt) -1)]; 
					?>
          </p>
		    <li>
		  <h2>Pencarian Umum</h2>
                <form action="?page=pencarian" method="post">
                      <table width="100%" border="0" cellspacing="1" cellpadding="5">
                        <tr>
                          <td colspan="2"><select name="per" id="per">
						    <option value="id">ID </option>
                            <option value="nama">Nama</option>
                            <option value="alamat">Alamat</option>
                          </select></td>
                        </tr>
                        <tr>
                         <td><input type="text" name="text" id="text" /></td>
                         <td><input type="submit" name="cari" id="cari" value="  Cari  " /></td>
                        </tr>
                <form action="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=M2PAQFSADHMTA" method="post">
<td><button>Donasi untuk IT Bina Pendidikan lebih baik </button></td>
				</table>
          </form>
		</li>
    
	<?php
	include "include/deteksi.php";
	?>
	</td>
	<td width="60%" style="background: #9a1817">
	<?php
	include "pengunjung/pengunjung.php";
	include "include/fungsi2.php";
	?>
	</td>
	<tr>
	<td colspan="2" style="background: green; border-top: solid 2px white; font-size: 12px" align="center">&copy; 2018  Ananda Rauf Maududi </td>
	</tr>
<form action ="https://www.instagram.com/anandarauf08" method="post">
<td><button>Follow Developer</button></td>
	</table>

</center>
