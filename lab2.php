<?php

//assignment_1

/* Imagine a lot of code here */
$very_bad_unclear_name = "15 chicken wings";

// Write your code here:
$order = &$very_bad_unclear_name;
$order .= " random string";

//// Don't change the line below
echo "Your order is: $very_bad_unclear_name.\n";

//assignment_2

$var_1 = 5;
echo $var_1 . "\n";
$var_2 = 10;
echo $var_2;
$var_3 = 15.5;
echo (11+1) . "\n";

$last_month = 1187.23;
$this_month = 1089.98;
echo ($last_month - $this_month);

//assignment_3

$num_languages = 4;
$months = 11;
$days = $months*16;
$days_per_language = $days / $num_languages;
echo "\n" . $days_per_language . "\n";

//assignment_4

echo 8**2 . "\n";

//assignment_5

$my_num = 99;
$answer = $my_num;
$answer += 2;
$answer *= 2;
$answer -= 2;
$answer /= 2;
$answer -= $my_num;
echo $answer;

//assignment_14

$a = 10;
$b = 3;
echo "\n" . ($a % $b);
if ($a % $b == 0)
    echo "\nДелится\n";
else echo "\nДелится с остатком\n" .
          "Полученный остаток: " .
          ($a % $b) .
          "\n";

echo $st = pow(2,10) . "\n";

echo sqrt(245) . "\n";

$my_arr_1 = array(4,2,5,19,13,0,10);
$sum_of_square_roots = 0;
foreach($my_arr_1 as $element)
    $sum_of_square_roots += $element ** 2;
echo sqrt($sum_of_square_roots) . "\n";

echo round(sqrt(379),0) . " ";
echo round(sqrt(379),1) . " ";
echo round(sqrt(379),2) . "\n";

$my_arr_2 = array(
    "floor" => floor(sqrt(587)),
    "ceil" => ceil(sqrt(587)));

$my_arr_3 = array(
    4,-2,5,10,-130,0,10
);

$min_number = min($my_arr_3);
$max_number = max($my_arr_3);

echo "min: $min_number, max: $max_number";

echo "\n" . rand(1,100) . "\n";

$my_arr_4 = array();
for($i = 0;$i < 10;$i++) {
    array_push($my_arr_4, rand(1, 50));
}

for($i = 0;$i < 10;$i++) {
    echo "$my_arr_4[$i] ";
}

for($i = 0; $i < 5;$i++) {
    $a = rand(-10,10);
    $b = rand(-100,100);
    echo "\n a - b = $a - $b = " . ($a-$b) . "; Absolute value:  " . abs($a-$b);
}
echo "\n";

$my_arr_5 = array();
for($i = 0;$i < 10;$i++) {
    array_push($my_arr_5, rand(-10, 10));
}
foreach ($my_arr_5 as &$element) {
    if($element < 0)
        $element = abs($element);
}


$number = rand(1,30);
echo "Number is: $number\n";
$denominators = array();
for($i = 1; $i <= $number; $i++) {
    if($number % $i == 0){
        array_push($denominators, $i);
        echo $i . " ";
    }
}


$my_arr_6 = array( 1,2,3,4,5,6,7,8,9,10 );
$number_of_elements = 0;
$sum_of_elements = 0;
while ($sum_of_elements < 10) {
    $sum_of_elements += $my_arr_6[$number_of_elements];
    $number_of_elements++;
}

//assignment_15

function printStringReturnNumber() {
    echo "\nsuper random string";
    return 10;
}
echo "\n" . $my_num = printStringReturnNumber();


//assignment_16

function increaseEnthusiasm(string $str) {
    return $str . "!";
}
echo "\n" . increaseEnthusiasm("Three Days Grace ");


function repeatThreeTimes(string $str) {
    return $str . $str . $str;
}
echo "\n" . repeatThreeTimes("Hollywood Undead ");

echo "\n" . increaseEnthusiasm(repeatThreeTimes("Imminence "));

function cut($str, $charsFromStart = 10) {
    return substr($str,0,$charsFromStart);
}
echo "\n" . cut(increaseEnthusiasm(repeatThreeTimes("Linkin Park ")), 5) . "\n";

$recursive_array = array(1,2,3,5,7,45,77);

function recursive_output($arr, $edge, $current_iter = 0) {
    echo $arr[$current_iter] . " ";
    if ($current_iter < $edge){
        recursive_output($arr, $edge, ++$current_iter);
    }else
        return;
}

function sum_of_digits($num, $sum = 0) {
    while ($num > 0)
    {
        $sum += $num % 10;
        $num /= 10;
    }
    if ($sum > 9) sum_of_digits($sum);
    else return;
}
echo sum_of_digits(55) . "\n";

//assingment_17

$x = "";
$array_of_x = array();
for($i = 1;$i < 7;$i++) {
    $x = $x . "x";
    array_push($array_of_x, $x);
}

function arrayFill($length, $char) {
   return array_fill(0, $length, $char);
}

$matrix_1 = array(
    array(1,2,3),
    array(4,5),
    array(6)
);

function matrix_sum(array $arr){
    $sum = array_sum($arr);
    foreach($arr as $child) {
        if (is_array($child))
            $sum += matrix_sum($child);
    }
    return $sum;
}

$matrix_2 = array();
for($i = 0; $i < 3; $i++){
    for($j = 0; $j < 3; $j++){
        $matrix_2[$i][$j] = $i + 3 * $j + 1;
    }
}

$array_for_arithmetic = array (2, 5, 3, 9);
$result = $array_for_arithmetic[0] * $array_for_arithmetic[1] + $array_for_arithmetic[2] * $array_for_arithmetic[3];
echo "\n" . $result . "\n";

$user = array (
    "surname" => "Cat",
    "name" => "Meow",
    "patronymic" => "Catovich"
);

foreach ($user as $str)
    echo $str . " ";

$date = array(
    "day" => 26,
    "month" => 2,
    "year" => 2022
);
echo $date["'year'"] . "-";
echo $date["'month'"] . "-";
echo $date["'day'"];

$arr_of_chars = array('a','b','c','d','e');
echo"\n" . count($arr_of_chars);
echo"\n" . $arr_of_chars[count($arr_of_chars)-1] . " " . $arr_of_chars[count($arr_of_chars)-2];

//assignment_18

function fu_1($var_1, $var_2){
    $sum = $var_1 + $var_2;
    if ($sum > 10) {
        return true;
    }
    return false;
}


function fu_2($var_1, $var_2) {
    if ($var_1 == $var_2) {
        return true;
    }
    return false;
}


function fu_3($age){
    if ($age < 10 || $age > 99)
        echo "Number is higher";
    else {
        $Sum = $age %10 + (($age - $age % 10) / 10);
        if($Sum < 10)
            echo "Sum < 10";
        else
            echo "Sum > 10";
    }
}


$my_arr_7 = array(2, 4, 6, 8);
if(count($my_arr_7) == 3)
    echo array_sum($my_arr_7) ."\n";
else
    echo "\n";

//assignment_19

$piramid = "";
echo "\n";
for($i = 0;$i < 20;$i++)
{
    $piramid .= "x";
    echo "$piramid\n";
}

//assignemtnt_20

$my_arr_8 = array(4, 16, 71, 2, 35);

$average = array_sum($my_arr_8) / count($my_arr_8);

$sum_from_one_to_hundred = array_sum(range(1, 100));

$arr_of_square_roots = array_map('sqrt', $my_arr_8);

$mapped_array = array_combine(range('a','z'),range(1,26));

$string_of_digits = '1234567890';
$sum_of_pairs = array_sum(str_split($string_of_digits, 2));



