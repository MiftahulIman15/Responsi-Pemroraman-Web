<html>
<head>
<title>Program Pom Mini</title>
 <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
 <style>
 	body{
 		background-image: url("back.jpg");
 		background-size: cover;
 		background-attachment: fixed;
 	}
 </style>
 </head>

 <body>
 <div align="center"><strong><font size="6" face="Courier New, Courier, mono">FORM PENGISIAN DATA TRANSAKSI </font></strong></div>
 <form name="form1" method="post" action="transaksi.php" onsubmit="return validasi()">
<table width="58%" border="0" align="center">
<tr>
<td>Nama Lengkap</td>
<td><input name="nama" type="text" id="nama"></td>
</tr>

<tr>
<td>Alamat</td>
<td><input name="alamat" type="text" id="alamat"></td>
</tr>

<tr>
<td>Kendaraan</td>
<td><input name="kendaraan" type="text" id="kendaraan"></td> </tr>
</tr>

<tr>
<td>Jenis Bensin</td>
<td><select name="bensin" id="bensin">
<option>Pertamax</option>
<option>Pertalite</option>
<option>Bio Solar</option>
<option>Pertamina DEX</option>
<option>Dexlite</option>
</select></td>
</tr>

<tr>
<td>Harga</td>
<td><input name="harga" id="harga"></td> </textarea>
</tr>

<tr>
<td>&nbsp;</td>
<td><input type="submit" name="Submit" value="Kirim"><input type="reset" name="Submit2" value="Batal">
</td>
</tr>
</table>
</form>
<div align="center"><strong><a href="laporan.php">::Lihat Buku Tamu::
</a></strong></div>
</body>
<script type="text/javascript">
	function validasi() {
		var nama = document.getElementById("nama").value;
		var kendaraan = document.getElementById("kendaraan").value;
		var alamat = document.getElementById("alamat").value;
		var harga = document.getElementById("harga").value;
		if (nama != "" && kendaraan!="" && alamat !="" && harga !="") {
			return true;
		}else{
			alert('Anda harus mengisi data dengan lengkap !');
			return false;
		}
	}
</script>
</html>