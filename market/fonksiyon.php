<?php
function kKontrol($username)
{
    	
	$kullaniciadi="root";
	$sifre= "";
	$host="localhost";
	$veritabani="market";
	$baglan = new mysqli($host, $kullaniciadi, $sifre, $veritabani);
	$sql="select * from user where username='".$username."'";
	
	$sorgu=mysqli_query($baglan,$sql);
	$kontrol=0;
	while( $sonuc=mysqli_fetch_assoc($sorgu))
	{
		$kontrol++;				
	}
	if($kontrol==0)
	{
		return true;
	}
	else
	{
	return false;
	}
}


?>