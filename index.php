<?php
echo "Hello World<br>";

$name = "Taro";
echo "変数nameの中身:".$name."<br>";

$lastName = "Kusunoki";
$firstName = "Taisei";
echo $lastName.$firstName."<br>";

$x = 10;
$y = 2;
echo $x+$y."<br>";

echo $x-$y."<br>";

echo $x*$y."<br>";

echo $x/$y."<br>";

$y = 3;

echo $x%$y."<br>";

$x = 11;
$y = 13;
$z = $x*$y;
echo $z."<br>";

$x = 4;
echo pow($x,1)."<br>";
echo pow($x,2)."<br>";
echo pow($x,3)."<br>";

$x = 14;
$y = 11;
if($x > $y){
    echo "xはyより大きい<br>";
}




?>