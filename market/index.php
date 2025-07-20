<?php
session_start();
if(!isset($_SESSION["giris"]))
{
header("Location:giris.php");
}
?>

<html>
<body bgcolor="gray">

<table align="center" bgcolor="white">
<tr><td rowspan="2"><img src="resim/user.png" width="50" height="50"></td><td align="center"><font face="verdana" size="5" color="blue"><?php echo $_SESSION["ad"]." ".$_SESSION["soyad"];  ?></font><br>
<font face="verdana" size="2" color="red">---<a style="text-decoration:none" href="cikis.php">&Ccedil;IKI&#350; YAP</a>---</font></td>
</tr>
</table><br />
<table align="center" bgcolor="white" border="1">
<tr><td align="center">SATIS</td><td align="center">MUSTERI</td><td align="center"><a href="kasiyer/kasiyer.php" target="govde" style="text-decoration:none">KASIYER</a></td><td align="center">URUN</td></tr>
<tr><td colspan="4"><iframe name="govde" align="middle" width="700" height="450" scrolling="auto" style="border:1; border-color:#000000"></iframe></td>
</tr>
</table>
<HR />
<center>
  <font color="white" face="Times New Roman, Times, serif" size="2">T&uuml;m Haklar&#305; Sakl&#305;d&#305;r &copy;</font>
</center>

</body>
</html>
