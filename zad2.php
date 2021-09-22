<!DOCTYPE html>
<html>
<head>
</head>
<body>
zawartosc strony<br>
<?php
$a=1234;
$b=-123;
$c=0123;
$d=0x12;
echo "watosc zmiennej $a wynosci ".$a.'<br>';
echo 'watosc zmiennej $b wynosci '.$b."<br>";
echo 'watosc zmiennej $c wynosci ".$c."<br>";
echo watosc zmiennej $d wynosci '.$d."<br>";
$s1=$a+$c;
$s2=$a+$d;
echo 'suma zmiennych '.$a.' i '.$c.' wynosci '.$s1.' <br>';
echo 'suma zmienntch '.$a.' i '.$d.' wynosi '.$s2.'<br>';

$a=5;
echo "wartosc zmiennej $a++ wynosci ".$a++.'<br>';
echo "wartosc zmiennej $a-- wynosci ".$a--.'<br>';
echo "wartosc zmiennej $++a wynosci ".++$a.'<br>';
echo "wartosc zmiennej $--a wynosci ".--$a.'<br>';

?>
</body>
</html>