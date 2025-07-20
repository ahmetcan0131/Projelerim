<center>
<form action="?" method="post">
<input type="submit" name="ekle" value="kasiyer ekle" />
<input type="submit" name="guncelle" value="kasiyer guncelle" />

</form>
</center>

<?php
if(isset($_POST["ekle"]))
{
header("Location:kasiyerEkle.php");exit();
}
else if(isset($_POST["guncelle"]))
{
header("Location:kasiyerListele.php");exit();
}
?>