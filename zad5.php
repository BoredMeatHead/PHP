<html>
<body>
<style>
#baner{
	width: 100%;
	height: 100px;
	background: gray;
}
#lewy{
	width: 50%;
	height: 120px;
	background: blue;
	float: left;
}
#prawy{
	width: 50%;
	height: 120px;
	background: red;
	float: right;
}
#dolny{
	width: 100%;
	height: 70px;
	background: pink;
	clear: both;
}
</style>
<div id="baner">A</div>
<div id="lewy"><form action="" method="post">
l1: <input type="number" name="l1" /><br/>
l2: <input type="number" name="l2" /><br/>
<input type="submit" value="ktora mniejsza" />
</form></div>
<div id="prawy"><?php
if (empty($_POST['l1']) || !isset($_POST['l2']))
	echo "wpisz cos";
else{
$l1=$_POST['l1'];
$l2=$_POST['l2'];
if ($l1<$l2)
	echo "mniejsza to $l1<br>";
else if($l1>$l2){
	echo "mniejsza  to $l2";
}
else {
	echo "sa rowne";
}
}
?></div>
<div id="dolny">D</div>

</body>
</html>