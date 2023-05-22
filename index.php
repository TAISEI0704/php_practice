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

// $array = [1,2,3,4,5,6,7,8,9,10];

// var_dump($array);
// echo "<br>";

// $array = ["A","B","C","D","E"];

// var_dump($array);
// echo "<br>";

// $animals = ["dog","fox","monkey"];

// var_dump($animals);
// echo "<br>";

// $animals[] = "elephant";
// var_dump($animals);
// echo "<br>";

// $animals[0] = "cat";
// echo "<br>";

// unset($animals["1"]);
// var_dump($animals);
// echo "<br>";

// foreach($animals as $animal){
//     echo $animal;
//     echo " ";
// }

// echo "<br>";

// $alphabet = ["a"=>"A",
//              "b"=>"B",
//              "c"=>"C",
//              "d"=>"D"];

// $alphabet["e"] = "E";

// var_dump($alphabet);
// echo "<br>";

// $alphabet["a"] = "AAA";

// unset($alphabet["b"]);
// var_dump($alphabet);
// echo "<br>";

// foreach($alphabet as $key=>$value){
//     echo $key;
//     echo " ";
// }

// echo "<br>";

// foreach($alphabet as $key => $value){
//     echo $value;
//     echo " ";
// }

// echo "<br>";

// foreach($alphabet as $key => $value){
//     echo $key.":".$value;
//     echo " ";
// }

// echo "<br>";

// foreach($alphabet as $key => $value){
//     if($key !== "c"){
//         echo $key.":".$value;
//         echo " "; 
//     }
// }

// echo "<br>";

// foreach($alphabet as $key => $value){
//     if($key !== "b" || $value !== "C"){
//         echo $key.":".$value;
//         echo " ";
//     }
// }

// function printHoge(){
//     echo "Hoge";
// }

// printHoge();
// echo "<br>";

// function printNum($num){
//     echo $num;
// }
// printNum(5);
// echo "<br>";

// function printKuku($kuku){
//     for($i=1; $i<10; $i++){
//         echo $kuku*$i;
//         echo " ";
//     }
// }
// printKuku(7);
// echo "<br>";

// function printEven($num){
//     if($num%2===0){
//         echo "偶数<br>";
//     }else{
//         echo "奇数<br>";
//     }
// }

// printEven(8);

// function printMessage($string,$num){
//     for($i=1; $i<=$num; $i++){
//         echo $string." ";
//     }
// }

// printMessage("taisei",5);
// echo "<br>";

// function printMaxNum($num1,$num2){
//     if($num1===$num2){
//         echo "同じ";
//     }elseif($num1>$num2){
//         echo $num1;
//     }else{
//         echo $num2;
//     }
// }

// printMaxNum(7,11);
// echo "<br>";

// function getSquared($num){
//     return $num*$num;
// }

// echo getSquared(8);
// echo "<br>";

// function profile($name){
//     $msg="私の名前は".$name."です";
//     return $msg;
// }

// echo profile("taisei");
// echo "<br>";

// function isEvenNumber($num){
//     if($num%2===0){
//         return true;
//     }else{
//         return false;
//     }
// }

// var_dump(isEvenNumber(7));
// echo "<br>";


// function isTaro($name){
//     if($name==="Taro"){
//         return true;
//     }else{
//         return false;
//     }
// }

// var_dump(isTaro("Taro"));

$school = "SeedTech";
echo substr($school, 4,4);

echo "<br>";

$school = "SoodTech";
echo str_replace("Sood", "Seed", $school);

echo "<br>";

date_default_timezone_set("Asia/Tokyo");
sleep(2);
echo date("y-m-d h:i:s");

echo "<br>";

$list = [10,-500,30,"1000","1B",0.8,[9],"5,000",2021];
foreach($list as $item){
    if(is_numeric($item)){
        echo $item."\n";
    }
}

echo "<br>";

$list = [100,1000,550];
echo max($list);

echo "<br>";

$list = ["a","b","c","d"];
$list = array_reverse($list);
foreach($list as $item){
    echo $item."\n";
}

echo "<br>";

$word = "ABCDEFGHIJKLMNOPQRST";
$words = str_split($word, 5);
foreach($words as $word){
    echo $word."\n";
}

echo "<br>";

$years=[1800,2000,2020];

function year($year){
    return checkdate(2,29,$year);
}

foreach($years as $year){
    if(year($year)){
        echo $year."\n";
    }
}

echo "<br>";

class PHP{
    public $name;

    public $sentence;

    public function __construct($name,$sentence){
        $this->name = $name;
        $this->sentence = $sentence;
    }

    public function call(){
       echo $this->name.$this->sentence;
    }

}


$php = new PHP('PHP','をマスターしよう');
$php->call();

echo "<br>";

// $url = "https://seedtech.co.jp/";
// header("Location:$url");
// exit;

echo "<br>";

//値渡し
$a = 5;
$b = $a;
$a = 10;
echo $b;

echo "<br>";

//参照渡し
$a = 5;
$b = & $a;
$a = 10;
echo $b;

?>