<?php
echo "<head><title>Program Pom Mini</title></head>";
$nama =$_POST['nama'];
$kendaraan =$_POST['kendaraan'];
$alamat =$_POST['alamat'];
$bensin =$_POST['bensin'];
$harga =$_POST['harga'];

$fp = fopen("Transaksi.txt", "a+");
fputs($fp,"$nama|$alamat|$kendaraan|$bensin|$harga\n");
fclose($fp);

echo "LAPORAN TERSIMPAN<br>";
echo "<a href=Responsi%20PWEB.php> isi buku tamu </a><br>";
echo "<a href=laporan.php> lihat buku tamu </a><br>";
?>