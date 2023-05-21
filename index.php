<?php
// echo "Hello World<br>";

// $name = "Taro";
// echo "変数nameの中身:".$name."<br>";

// $lastName = "Kusunoki";
// $firstName = "Taisei";
// echo $lastName.$firstName."<br>";

// $x = 10;
// $y = 2;
// echo $x+$y."<br>";

// echo $x-$y."<br>";

// echo $x*$y."<br>";

// echo $x/$y."<br>";

// $y = 3;

// echo $x%$y."<br>";

// $x = 11;
// $y = 13;
// $z = $x*$y;
// echo $z."<br>";

// $x = 4;
// echo pow($x,1)."<br>";
// echo pow($x,2)."<br>";
// echo pow($x,3)."<br>";

// $x = 14;
// $y = 11;
// if($x > $y){
//     echo "xはyより大きい<br>";
// }

// if($x >= $y){
//     echo $x."は".$y."以上<br>";
// }else{
//     echo $x."は".$y."より小さい<br>";
// }

// if($x > $y){
//     echo $x."は".$y."より大きい<br>";
// }elseif($x < $y){
//     echo $x."は".$y."より小さい<br>";
// }else{
//     echo $x."と".$y."は等しい<br>";
// }

// $x = 13;
// if($x%2 === 1){
//     echo $x."は奇数<br>";
// }else{
//     echo $x."は偶数<br>";
// }

// if($x%15 === 0){
//     echo $x."は3と5の倍数<br>";
// }elseif($x%3 === 0){
//     echo $x."は3の倍数<br>";
// }elseif($x%5 === 0){
//     echo $x."は5の倍数<br>";
// }else{
//     echo $x."は3と5の倍数以外<br>";
// }

// if($x >= 10 && $x <= 20){
//     echo $x."は10以上かつ20以下<br>";
// }

// $x = 103;
// if($x >= 100 || $x <=10){
//     echo $x."は10以下または100以上<br>";
// }

// $x = "dog";
// switch($x){
//     case "dog":
//         echo "犬<br>";
//         break;
    
//     case "cat":
//         echo "猫<br>";
//         break;

//     default:
//         echo "犬と猫以外<br>";
//         break;
// }

// $month = 7;
// switch($month){
//     case 1:
//         echo "January<br>";
//         break;

//     case 2:
//         echo "February<br>";
//         break;

//     case 3:
//         echo "March<br>";
//         break;

//     case 4:
//         echo "April<br>";
//         break;

//     case 5:
//         echo "May<br>";
//         break;

//     case 6:
//         echo "June<br>";
//         break;

//     case 7:
//         echo "July<br>";
//         break;

//     case 8:
//         echo "August<br>";
//         break;

//     case 9:
//         echo "September<br>";
//         break;

//     case 10:
//         echo "October<br>";
//         break;

//     case 11:
//         echo "November<br>";
//         break;

//     case 12:
//         echo "December<br>";
//         break;
    
//     default:
//         echo "月が存在しません";
//         break;

// }

// for($i=0; $i<10; $i++){
//     echo "hoge";
//     echo " ";
// }

// echo "<br>";

// for($i=1; $i<=10; $i++){
//     echo $i;
//     echo " ";
// }

// echo "<br>";

// for($i=1; $i<10; $i++){
//     $x = 2*$i;
//     echo $x." ";
// }

// echo "<br>";

// for($i=1; $i<=100; $i++){
//     if($i%2 === 1){
//         continue;
//     }

//     echo $i." ";
// }

// echo "<br>";

// for($i=1; $i<=100; $i++){
//     if($i%2 === 0){
//         echo $i." ";
//         continue;
//     }

//     echo "奇数です";
//     echo " ";
// }

// echo "<br>";

// $i = 1;
// while($i<=100){
//     if($i%3 === 0){
//         echo $i." ";
//     }

//     $i++;
// }

// echo "<br>";

// $i=1;
// while($i<=100){
//     if($i%5===0){
//         echo $i." ";
//     }

//     $i++;

// }

// echo "<br>";

// $i=1;
// while($i<=100){
//     if($i%15===0){
//         echo $i." ";
//     }

//     $i++;

// }

// echo "<br>";

// for($i=1; $i<=100; $i++){
//     if($i%3===0){
//         echo "Fizz";
//     }else{
//         echo $i;
//     }

//     echo " ";

// }

// echo "<br>";

// $i=1;
// while($i<=100){
//     if($i%15===0){
//         echo "FizzBuzz";
//     }elseif($i%3===0){
//         echo "Fizz";
//     }elseif($i%5===0){
//         echo "Buzz";
//     }else{
//         echo $i;
//     }

//     echo " ";

//     $i++;
// }

$array = [1,2,3,4,5,6,7,8,9,10];

var_dump($array);
echo "<br>";

$array = ["A","B","C","D","E"];

var_dump($array);
echo "<br>";

$animals = ["dog","fox","monkey"];

var_dump($animals);
echo "<br>";

$animals[] = "elephant";
var_dump($animals);
echo "<br>";

$animals[0] = "cat";
echo "<br>";

unset($animals["1"]);
var_dump($animals);
echo "<br>";

foreach($animals as $animal){
    echo $animal;
    echo " ";
}

?>