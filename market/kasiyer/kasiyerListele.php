<form action="?" method="post">
<center>
<input type="radio" name="kriter" value="ad" checked="checked" />AD
<input type="radio" name="kriter" value="soyad" />SOYAD
<input type="radio" name="kriter" value="sifre" />SIFRE
<BR /><br />
<input type="text" name="metin" style="width:400px; text-align:center" /><br /><br />
<input type="submit" name="BUL" value="BUL" style=" width:100;" />
</center>

</form>

<?php

if(isset($_POST["BUL"]))
{
	$kriter=$_POST["kriter"];
	$metin=$_POST["metin"];
	$kullaniciadi="root";
	$sifre= "";
	$host="localhost";
	$veritabani="market";
	$baglan = new mysqli($host, $kullaniciadi, $sifre, $veritabani);
	$sql="select * from kasiyer";
	if($metin=="")
	{
		$sql="select * from kasiyer";
	}
	else
	{
	if($kriter=="ad")
	{
		$sql=$sql ." where ad like '%".$metin."%'";
	}
	else if($kriter=="soyad")
	{
		$sql=$sql ." where soyad like '%".$metin."%'";
	}
	else if($kriter=="sifre")
	{
		$sql=$sql ." where sifre like '%".$metin."%'";
	}
	}
	$sorgu=mysqli_query($baglan,$sql);
	echo "<table align='center' border='1'>";
	while( $sonuc=mysqli_fetch_assoc($sorgu))
	{
		echo "<tr><td>".$sonuc["ad"]."</td><td>".$sonuc["soyad"]."</td><td>".$sonuc["sifre"]."</td><td><a href='kasiyerGuncelle.php?kID=".$sonuc["kID"]."'>GUNCELLE</a></td><td><a href='kasiyerSil.php?kID=".$sonuc["kID"]."'>SIL</ad></td></tr>";
	}
	echo "</table>";
	
}


?>