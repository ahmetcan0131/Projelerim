<?php
if(isset($_GET["kID"]))
{
	$kullaniciadi="root";
	$sifre= "";
	$host="localhost";
	$veritabani="market";
	
	$baglan = new mysqli($host, $kullaniciadi, $sifre, $veritabani);
	$kID=$_GET["kID"];
	$sql="SELECT * FROM kasiyer where kID=".$kID;
	
	$sorgu=mysqli_query($baglan,$sql);

?>
<center>
<form action="?" method="POST">
<input type="hidden" name="kID" value="<?php echo $kID; ?>" />
<table>
<?php
while( $sonuc=mysqli_fetch_assoc($sorgu))
{
?>
<tr><td>ad</td><td>:</td><td><input type="text" name="ad" id="ad" value="<?php echo $sonuc["ad"]; ?>"  /></td></tr>
<tr><td>soyad</td><td>:</td><td><input type="text" name="soyad" id="soyad" value="<?php echo $sonuc["soyad"]; ?>" /></td></tr>
<tr><td>sifre</td><td>:</td><td><input type="text" name="sifre" id="sifre" value="<?php echo $sonuc["sifre"]; ?>" /></td></tr>
<tr><td colspan="3" align="right"><input type="submit" name="kaydet" value="kaydet" /></td></tr>
<?php
}
?>
</table>
</form>
</center>
<?php
}

if(isset($_POST["kaydet"]))
{
	$kID=$_POST["kID"];
	$kullaniciadi="root";
	$sifre= "";
	$host="localhost";
	$veritabani="market";
	$baglan = new mysqli($host, $kullaniciadi, $sifre, $veritabani);

	$sorgu="update kasiyer set ad='".$_POST["ad"]."', soyad='".$_POST["soyad"]."', sifre='".$_POST["sifre"]."' where kID=".$kID;
	
	if($baglan->query($sorgu))
	{
		echo "<center><font size='15' color='red'>kayit guncellendi";
	}
	else
	{
		echo "hata: kayit guncelenemedi";
	}
}
?>
