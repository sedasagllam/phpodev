<!doctype html>
<html>
<head>
<meta charset="utf-8"> 
</head>
<body bgcolor="pink" >
	<h2><form action="0210.php" method="post">
		Sayı 1 <br></h2>
		<h2><input type="text" name="sayi1"><br>
		Sayı 2 <br></h2>
		<input type="text" name="sayi2"><br>
		<br>
		<input type="submit" name="btn" value="TOPLA"><br>
		<b
		<input type="text" name="toplam"><br>
		 <br>
	
	</form>
	
	<?php
	if(isset($_POST["btn"])){
		$sayi1=$_POST["sayi1"];
		$sayi2=$_POST["sayi2"];
		$toplam=$sayi1+$sayi2;
		echo "Toplam = $toplam";
	}
	?>
</body>
</html>
