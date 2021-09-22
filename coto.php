<!DOCTYPE html>
<html>
<body>
<form action="" method="post">
l1: <input type="number" name="l1" /><br/>
l2: <input type="number" name="l2" /><br/>
<input type="submit" value="oblicz sume" />
</form>
<?php
//if (!isset($_POST['l1']) || !isset($_POST['l2']))
	if (empty($_POST['l1']) || !empty($_POST['l2']))
		//empty traktuje 0 jako niewypelnione pole
	//!isset traktuje 0 jak nliczbe ale niewypelnione pola sa pobierane i traktowane jako non numeric
	echo "wpisz dane";
else{
$l1=$_POST['l1'];
$l2=$_POST['l2'];
$s=$l1+$l2;
echo "suma liczb $l1 i $l2 wynosi $s";}







?>
</body>
</html>