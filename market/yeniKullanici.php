<center>
<form action="?" method="post">
<table>
<tr>
  <td>kullan&#305;c&#305; ad&#305; </td>
  <td>:</td><td><input type="text" name="kAd" id="ad"  /></td></tr>
<tr>
  <td>&#351;ifre</td>
  <td>:</td><td><input type="text" name="pass" id="soyad" /></td></tr>
<tr>
  <td>ad</td>
  <td>:</td><td><input type="text" name="ad" id="sifre" /></td></tr>
  <tr>
  <td>soyad</td>
  <td>:</td><td><input type="text" name="soyad" id="sifre" /></td></tr>
<tr><td colspan="3" align="right"><input type="submit" name="ekle" value="ekle" /></td></tr>
</table>
</form>
</center>

<?php
include "fonksiyon.php";
if(isset($_POST["ekle"]))
{
	$kAd=$_POST["kAd"];
	$pass=$_POST["pass"];
	$ad=$_POST["ad"];
	$soyad=$_POST["soyad"];
	
	if(!kKontrol($kAd))
	{
		echo "Bu kullanici adi daha once alindi";
	
	}
	else
	{
	
	
	$kullaniciadi="root";
	$sifre= "";
	$host="localhost";
	$veritabani="market";
	$baglan = mysqli_connect($host, $kullaniciadi, $sifre, $veritabani);
	
	$sorgu="INSERT INTO user(username,password,name,surname) values('".$kAd."','".$pass."','".$ad."','".$soyad."')";

	$ekle=mysqli_query($baglan,$sorgu);
	
	if($ekle)
			{
				echo "<center><font size='5' color='red'>kullanici eklendi";
				echo "<br><a href='index.php'>anasayfa</a></font>";
			}
		else
			{
				echo "hata: kullanici eklenemedi";
			}
	
	
	
	
	
	
	
	
	}

}
?>