<?php
require_once('Enhanced_CS.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>STEMMING</title>
</head>
<center><body style= "background-color :#FFFBD6";>
<div style="margin-left:430">
<div style= "background-color :#A98F71" align="center"><font color="white"><h1>PENCARIAN KATA DASAR</h1></font></div>
<form method="post" action="" align="center">
<input type="text" name="kata" id="kata" size="30" value="<?php if(isset($_POST['kata'])){ echo $_POST['kata']; }else{echo '';}?>">
<input class="btnForm" type="submit" name="submit" value="Cari"/>
</form>
</br></br>
<table width="500" height="100">
<?php
if(isset($_POST['kata'])){
	$teksAsli = $_POST['kata'];
	echo "Teks asli : ".$teksAsli.'<br/>'.'<br/>';
	$stemming = Enhanced_CS($teksAsli);
	echo "Kata dasar : ".$stemming.'<br/>';
}
?>
</table>
<a href = "index.php">Kembali</a>
</center></body>
</html>