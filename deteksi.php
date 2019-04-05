<SCRIPT type=text/javascript>
var months = new Array();
months[0] = "Januari";
months[1] = "februari";
months[2] = "Maret";
months[3] = "April";
months[4] = "Mei";
months[5] = "Juni";
months[6] = "Juli";
months[7] = "Agustus";
months[8] = "September";
months[9] = "Oktober";
months[10] = "November";
months[11] = "Desember";
var currentDate = new Date();
var currentMonth = currentDate.getMonth();
var hariini=currentDate.getDate();
currentDate.setDate(1);
document.write("<br>,br><table border=1 width='200px' bgcolor='#CCCCCC' cellpadding=2 cellspacing=0>");
document.write("<tr>");
document.write("<td clospan=7 bgcolor='#FFCC33' align='center'><strong>" + months[currentMonth] + "</td>");
document.write("<tr>");
document.write("<td bgcolor='#9999CC' align='center'>M</td>");
document.write("<td bgcolor='#9999CC' align='center'>S</td>");
document.write("<td bgcolor='#9999CC' align='center'>S</td>");
document.write("<td bgcolor='#9999CC' align='center'>R</td>");
document.write("<td bgcolor='#9999CC' align='center'>K</td>");
document.write("<td bgcolor='#9999CC' align='center'>J</td>");
document.write("<td bgcolor='#9999CC' align='center'>S</td>");
document.write("</tr>");
if (currentDate.getDate() !=0)
{
document.write("<tr>");
for (i = 0; i < currentDate.getDay(); i++)
{
document.write("<td>&nbsp;</td>");
}
}
while (currentDate.getMonth() == currentMonth)
{
if (currentDate.getDay == 0)
{
document.write("<tr>");
}

if (hariin==currentDate.getDate())
{
document.write("<td align='center' bgcolor='#FF9900'> <font color='#CC0000'><strong>" + currentDate.getDate() + "</strong></font></td>");
}
else
{
document.write("<td align='center'>" + currentDate.getDate() + "</td>");
}

if (currentDate.getDay() == 6)
{
document.write("</tr>");
}
currentDate.setDate(currentDate.getDate() + 1);
}
for (i = currentDate.getDay(); i <= 6; i++)
{
document.write("<td>&nbsp;</td>");
}
document.write("</font></table>");
</SCRIPT>
<?php
include "include/koneksi_db.php";
$db_hostname="localhost";
$db_username="root";
$db_password="";
$db_name="db_perpus";

$konek = mysqli_connect($db_hostname, $db_username, $db_password) or die ("gagal koneksi ke server");

mysqli_select_db($konek,$db_name)
	or die ("gagal mangaktifkan database".mysqli_error());
$hl		= date("Y-m-d");
$baris=mysqli_query($konek,"SELECT * FROM pengunjung") or die (mysqli_error());
$jumlah=mysqli_num_rows($baris);

$hari_ini=mysqli_query($konek,"SELECT *	FROM pengunjung WHERE tgl_kunjung LIKE '%$hi%'") or die (mysqli_error());
$jh=mysqli_num_rows($hari_ini);
$bulan= date("Y-m");
$bulan_ini=mysqli_query($konek,"SELECT * FROM pengunjung WHERE tgl_kunjung LIKE '%$bulan%'") or die (mysqli_error());
$jb=mysqli_num_rows($bulan_ini);

echo "<br><table border='1' width='200px'><tr bgcolor='#909090'><td colspan='2'>Anda pengunjung ke - :</td></tr><tr><td>Hari ini</td><td align='center'><b>$jh</b></td></tr><tr><td>bulan ini</td><td align='cemter'><b>$jb</b></td></tr></table>";
?>
