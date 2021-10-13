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
l1<input type="number" name="l1" /><br/>
l2<input type="number" name="l2" /><br/>
l3<input type="number" name="l3" /><br/>
Rosnaco<input type="radio" name="p" value="ros" /><br/>
Malejaco<input type="radio" name="p" value="mal" /><br/>
<input type="submit" value="porzadek" />
</form></div>
<div id="prawy"><?php
if (empty($_POST['l1']) || !isset($_POST['l2']))
	echo "Wypelnij formularz";
else{
$l1=$_POST['l1'];
$l2=$_POST['l2'];
$l3=$_POST['l3'];
$p=$_POST['p'];
if ($p=="mal"){
if ($l1>$l2 && $l2>$l3){
echo "$l1 , $l2 , $l3";
}
else if ($l1>$l3 && $l3>$l2) {
	echo "$l1 , $l3 , $l2";
}
else if ($l2>$l1 && $l1>$l3) {
	echo "$l2 , $l1 , $l3";
}
else if ($l2>$l3 && $l3>$l1) {
	echo "$l2 , $l3 , $l1";
}
else if ($l3>$l1 && $l1>$l2) {
	echo "$l3 , $l1 , $l2";
}
else if ($l3>$l2 && $l2>$l1) {
	echo "$l3 , $l2 , $l1";
}
}
else {
	if ($l1<$l2 && $l2<$l3){
echo "$l1 , $l2 , $l3";
}
else if ($l1<$l3 && $l3<$l2) {
	echo "$l1 , $l3 , $l2";
}
else if ($l2<$l1 && $l1<$l3) {
	echo "$l2 , $l1 , $l3";
}
else if ($l2<$l3 && $l3<$l1) {
	echo "$l2 , $l3 , $l1";
}
else if ($l3<$l1 && $l1<$l2) {
	echo "$l3 , $l1 , $l2";
}
else if ($l3<$l2 && $l2< $l1) {
	echo "$l3 , $l2 , $l1";
}
}
}


?></div>
<div id="dolny">D</div>

</body>
</html>