<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php
//
////$arr = ['Hello', 'world', '!'];
////
////foreach ($arr as $elem) {
////    echo $elem . " ";
////}
////
////    echo "<br>";
////
////
////    for ($i=100; $i<201; $i++){
////     echo $i. "<br>";
////    }
////
////    echo "<br>";
////
////    $arr = [20, 30, 50, 50, 100, 78];
////    $result = 0;
////    foreach ($arr as $elem) {
////        $result = $result + $elem;
////    }
////    echo $result/count($arr) . "<br>";
//////    echo $arr . "<br>";
////
////    echo "<br>";
////
////    $arr = array ("Вікторії" => 2000, "Марії" => 2005);
////    foreach ($arr as $key => $value) {
////        echo "В $key рік народження - $value.". '<br>';
////    }
////
////
////
////    $x = 14;
////    if ($x > 0) {
////        echo '$x більше 0';
////    }  elseif ($x == 0) {
////        echo '$x дорівнює 0'
////    }
////    else {
////       echo '$x менше 0';
////       }
///
///
///
///
///
///
//$arr = [-1, -2, 2, 4, 5, 6.5, 7.2, "10", "3.5"];
//$sum = 0;
//
//foreach($arr as $elem) {
//    if ($elem < 0 && is_integer($elem)){
//        continue;
//    }
//
//
//    $sum += $elem;
//}
//
//echo "<strong>";
//print_r($sum);
//echo "</strong>";


//
//function test ($time) {
//    if ($time > 5 && $time < 12) {
//        echo "Доброго ранку";
//    }
//    elseif($time >= 12 && $time <= 16) {
//        echo "Доброго дня";
//    }
//    else if ($time >= 16 && $time <= 22) {
//        echo "Доброго вечора";
//    }
//    elseif (($time >= 22 && $time <=24)  || ($time > 0 && $time <= 5)) {
//        echo "Доброї ночі";
//    }
//    else  {
//        echo "Вітаю";
//    }
//
//}
//
//test(4);
//
//
//$arr = [
//    5 => ['price' => 400,'status' => 'new'],
//    34 => ['price' => 260, 'status' => 'new'],
//    23 => ['price' => 90, 'status' => 'old'],
//    4 => ['price' => 260, 'status' => 'new'],
//    89 => ['price' => 60, 'status' => 'old'],
//    6 => ['price' => 2000, 'status' => 'new'],
//];
//
//$result = [];
//
//foreach($arr as $key => $value) {
//
//
////    $value['status'] === 'old'
//
//
//    if ($value['price'] == min($value['price']))
//
//    {
//        array_push($result, $key);
//    }
//
//}
//echo "<pre>";
//print_r($result);
//echo "</pre>";












$arr = [
    5 => ['price' => 400,'status' => 'new'],
    34 => ['price' => 260, 'status' => 'new'],
    23 => ['price' => 90, 'status' => 'old'],
    4 => ['price' => 260, 'status' => 'new'],
    89 => ['price' => 60, 'status' => 'old'],
    6 => ['price' => 2000, 'status' => 'new'],
];

$result = [];


$minPrice = 0;
$minId = 0;
//foreach($arr as $key => $value) {
//    if ($value['price'] < $minPrice || $minPrice == 0 ){
//        $minPrice = $value['price'];
//        $minId = $key;
//    }

foreach($arr as $key => $value){
    if ($)


}

echo "<pre>";
print_r($minPrice);
print_r($minId);

echo "</pre>";





////
//arr = [
//    5 => ['price' => 400,'status' => 'new'],
//    34 => ['price' => 260, 'status' => 'new'],
//    23 => ['price' => 90, 'status' => 'old'],
//    4 => ['price' => 260, 'status' => 'new'],
//    89 => ['price' => 60, 'status' => 'old'],
//    6 => ['price' => 2000, 'status' => 'new'],
//];
//
//$result = [];
//
//foreach($arr as $key => $value) {
//
//    if ($value['price'] == '60'){
//        array_push($result, $key);
//    }
//}
//
//echo "<pre>";
//print_r($result);
//echo "</pre>";
////

















//$array1 = array(11, 14, 16, 17);
//foreach($array1 as $elem) {
//    $elem = $elem * 2;
//}
//foreach ($array1 as $key1 => $elem) {
//    echo "{$key1} => {$elem} - ";
//    print_r($array1);
//}
//
//
//for($i = 100; $i >20; $i -= 5)
//    echo $i.'<br>';
//
//
//    $i = 10;
//    while ($i > 0) {
//    echo $i--;
//    echo '<br>';
//}
//
//$i = 2;
//    while ($i < 1000000){
//        echo  $i;
//        $i = $i * 2;
//        echo '<br>';
//}
//
//function sum($a, $b, $s = '+') {
//    if ($s == '*') {
//        echo $a * $b;
//    }
//    elseif ($s == '+') {
//        echo $a + $b;
//    }
//    elseif ($s == '-') {
//        echo $a/ $b;
//    }
//}
//
//sum(4,9, '+');
//
//
//
//
//
//















?>
</body>
</html>



