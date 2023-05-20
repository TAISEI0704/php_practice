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

if($x >= $y){
    echo $x."は".$y."以上<br>";
}else{
    echo $x."は".$y."より小さい<br>";
}

if($x > $y){
    echo $x."は".$y."より大きい<br>";
}elseif($x < $y){
    echo $x."は".$y."より小さい<br>";
}else{
    echo $x."と".$y."は等しい<br>";
}

$x = 13;
if($x%2 === 1){
    echo $x."は奇数<br>";
}else{
    echo $x."は偶数<br>";
}

if($x%15 === 0){
    echo $x."は3と5の倍数<br>";
}elseif($x%3 === 0){
    echo $x."は3の倍数<br>";
}elseif($x%5 === 0){
    echo $x."は5の倍数<br>";
}else{
    echo $x."は3と5の倍数以外<br>";
}

if($x >= 10 && $x <= 20){
    echo $x."は10以上かつ20以下<br>";
}

$x = 103;
if($x >= 100 || $x <=10){
    echo $x."は10以下または100以上<br>";
}

$x = "dog";
switch($x){
    case "dog":
        echo "犬<br>";
        break;
    
    case "cat":
        echo "猫<br>";
        break;

    default:
        echo "犬と猫以外<br>";
        break;
}

?>