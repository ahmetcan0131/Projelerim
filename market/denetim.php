<?php
session_start();
  
  	$k=$_POST["user"];
	$p=$_POST["pass"];
	$kullaniciadi="root";
	$sifre= "";
	$host="localhost";
	$veritabani="market";
	$baglan = new mysqli($host, $kullaniciadi, $sifre, $veritabani);
	$sql="select * from user where username='".$k."' and password='".$p."'";
	
	$sorgu=mysqli_query($baglan,$sql);
	$kontrol=0;
	while( $sonuc=mysqli_fetch_assoc($sorgu))
	{
		$kontrol++;
		$_SESSION["giris"]=TRUE;
		$_SESSION["user"]=$user;
		$_SESSION["pass"]=$pass;
		$_SESSION["ad"]=$sonuc["name"];
		$_SESSION["soyad"]=$sonuc["surname"];
		header("Location:index.php");
		
	}
	
if($kontrol==0)
{

	echo "kullanici adi veya sifreniz yanlistir";
	echo "<br>";
	echo "<a href='giris.php'>GERI DON</a>";
}


?>