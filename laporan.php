<html>
<body>
<div align="center"><strong><font size="6" face="Courier New, Courier, mono">LAPORAN TRANSAKSI </font></strong></div>
</body>
<style>
 	body{
 		background-image: url("back.jpg");
 		background-size: cover;
 		background-attachment: fixed;
 	}
 </style>
</html>
<?php
echo "<head><title>Laporan Transaksi</title></head>";
$fp = fopen("transaksi.txt","r");

while ($isi = fgets($fp,80))
{
	$pisah = explode("|","$isi");
	echo "<table align=center width = 1000px border =1>";
	echo "<tr>";
	echo "<td>";
	echo  date("Y-m-d");
	echo "<td>Nama : $pisah[0]</td>";
	echo "<td>Alamat : $pisah[1]</td>";
	echo "<td>Kendaraan : $pisah[2]</td>";
	echo "<td>Bensin : $pisah[3]</td>";
	echo "<td>Harga : $pisah[4]</td>";
	echo "</tr>";
}

echo "</table>";
echo "<br>";
echo "<a href=Responsi%20PWEB.php> <center> Klik Disini </a>Isi form buku tamu";
?>