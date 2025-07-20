<center>
<form action="?" method="post">
<table>
<tr><td>ad</td><td>:</td><td><input type="text" name="ad" id="ad"  /></td></tr>
<tr><td>soyad</td><td>:</td><td><input type="text" name="soyad" id="soyad" /></td></tr>
<tr><td>sifre</td><td>:</td><td><input type="text" name="sifre" id="sifre" /></td></tr>
<tr><td colspan="3" align="right"><input type="submit" name="ekle" value="ekle" /></td></tr>
</table>
</form>
</center>

<?php
if(isset($_POST["ekle"]))
{
	$kullaniciadi="root";
	$sifre= "";
	$host="localhost";
	$veritabani="market";
	$baglan = mysqli_connect($host, $kullaniciadi, $sifre, $veritabani);
	
	$sorgu="INSERT INTO kasiyer(ad,soyad,sifre) values('".$_POST["ad"]."','".$_POST["soyad"]."','".$_POST["sifre"]."')";

	$ekle=mysqli_query($baglan,$sorgu);
	if($_POST["ad"]=="" or $_POST["soyad"]=="" or $_POST["sifre"]=="" )
	{echo "<center><font size='15' color='red'>Lutfen bos alan birakmayiniz";
	
	echo "<script>
	document.getElementById('ad').value = '".$_POST["ad"]."';
	document.getElementById('soyad').value = '".$_POST["soyad"]."';
	document.getElementById('sifre').value = '".$_POST["sifre"]."';
	</script>"; 	
	}
	else
	{
	if($ekle)
			{
				echo "<center><font size='15' color='red'>kayit eklendi";
			}
		else
			{
				echo "hata: kayit eklenemedi";
			}
	}
	
}
?>