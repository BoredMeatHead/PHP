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
Cena towaru w zł:<input type="number" name="l1" /><br/>
RABAT<br>
5%<input type="radio" name="l2" value="5" /><br/>
10%<input type="radio" name="l2" value="10" /><br/>
15%<input type="radio" name="l2" value="15" /><br/>
<input type="submit" value="ktora mniejsza" />
</form></div>
<div id="prawy"><?php
if (empty($_POST['l1']) || !isset($_POST['l2']))
	echo "Wypelnij formularz";
else{
$l1=$_POST['l1'];
$l2=$_POST['l2'];
if ($l2 =="5"){
$piec=$l1*0.95;
$piecc=$l1*0.05;
}
else if ($l2=="10"){
$piec=$l1*0.90;
$piecc=$l1*0.10;
}
else {
$piec=$l1*0.85;
$piecc=$l1*0.15;
}
if ($l1>0){
	echo "Cena po rabacie $piec<br>"; 
	echo "rabat wynosi $piecc";
}
else {
	echo "wpisz dodatnia cene";
}
}
?></div>
<div id="dolny">D</div>

</body>
</html>