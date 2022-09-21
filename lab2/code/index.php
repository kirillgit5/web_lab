<?php

// 1
$very_bad_unclear_name = "15 chicken wings";
// Write your code here:
$order = & $very_bad_unclear_name;
$order = $order . ' (';
// Don't change the line below
echo "\nYour order is: $very_bad_unclear_name.";

echo nl2br("\n 2 -----------:");
$var1 = 2;
echo $var1;
$var2 = 2;
echo nl2br("\n". $var2);
$doubleVar = 1.2;
echo nl2br("\n" . $doubleVar);
$varSum = 10 + 2;
echo nl2br("\n" . $varSum);
$last_month = 1187.23;
$this_month = 1089.98;
echo nl2br("\n" . ($last_month-$this_month));

echo nl2br("\n 3 -----------:");
$languages = 4;
$months = 11;
$days = $months * 16;
$days_per_language = $days / $languages;
echo nl2br("\n" . $days_per_language);

echo nl2br("\n 4 -----------:");
echo nl2br("\n" . 8 ** 2);

echo nl2br("\n 5 -----------:");
$my_num = 322;
$answer = $my_num;
$answer += 2;
$answer *= 2;
$answer -= 2;
$answer /= 2;
$answer -= $my_num;
echo nl2br("\n" . $answer);

echo nl2br("\n 6 -----------:");
$a = 10;
$b = 3;
echo nl2br("\n" . ($a % $b));
$a = 36;
$b = 2;

if ($a % $b === 0) {
    echo nl2br("\n" .'Делится');
} else {
    echo nl2br("\n" .'Делится с остатком ' . $a % $b);
}
$st = pow(2, 10);
echo nl2br("\n" . $st);
echo nl2br("\n" . sqrt(245));
$arr = [4, 2, 5, 19, 13, 0, 10];
$sum = 0;
foreach ($arr as $item) {
    $sum = $sum + pow($item,2);
}
echo nl2br("\n" . sqrt($sum));

echo nl2br("\n" . round(sqrt(379)) ." " . round(sqrt(379),1) ." ". round(sqrt(379),2));
$tt = ['floor' => floor(sqrt(587)), 'ceil' => ceil(sqrt(587))];
echo '<pre>';
print_r($tt);
echo '</pre>';
$arr = [4, -2, 5, 19, -130, 0, 10];
echo nl2br("\n" . min($arr));
echo nl2br("\n" . max($arr));
echo nl2br("\n" .rand(1, 100));
$randArr = [];
for ($i = 0; $i < 10; $i++) {
    $randArr[$i] = rand();
}
echo '<pre>';
print_r($randArr);
echo '</pre>';
$a = 12313;
$b = -4832;
echo nl2br("\n" .abs($a - $b));
$absArrray = [1, 2, -1, -2, 3, -3];
for ($i = 0; $i < count($absArrray); $i++) {
    if ($absArrray[$i] < 0)
        $absArrray[$i] = -1 * $absArrray[$i];
}
echo '<pre>';
print_r($absArrray);
echo '</pre>';
$num = 62;
$divArr = [];
for ($i = 1; $i <= ($num); $i++) {
    if ($num % $i === 0)
        $divArr[] = $i;
}
echo '<pre>';
print_r($divArr);
echo '</pre>';
$sumArr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$sum = 0;
$i = 0;
while ($sum < 10) {
    $sum += $sumArr[$i];
    $i++;
}
echo nl2br("\n"  . $i);

echo nl2br("\n 6 -----------:");
function printStringReturnNumber(string $i): int {
    echo nl2br("\n"  .$i);
    return (int)$i;
}

$my_num = printStringReturnNumber('256');
echo nl2br("\n" . $my_num);

echo nl2br("\n 7 ----------- :");
function increaseEnthusiasm(string $str): string {
    return $str . '!';
}
echo nl2br("\n"  . increaseEnthusiasm('Hello'));

function repeatThreeTimes(string $str): string {
    return $str . $str . $str;
}
echo nl2br("\n"  . repeatThreeTimes('Hello'));

echo nl2br("\n"  . increaseEnthusiasm(repeatThreeTimes('Hello')));

function cut(string $str, int $num = 10): string {
    return substr($str, 0, $num);
}

function printArr(array $arr, int $i = 0): void {
    if ($i < count($arr)) {
        echo nl2br("\n"  . $arr[$i]);
        printArr($arr, $i + 1);
    }
}

function sumOfDigits(int $num): int
{
    $sum = 0;
    while ($num > 0) {
        $sum += $num % 10;
        $num = (int)($num / 10);
    }
    if ($sum > 9)
        return sumOfDigits($sum);
    return $sum;
}

echo nl2br("7 19----------- :\n");
$array = [];
for ($i = 0; $i < 10; $i++) {
    $array[$i] = '';
    for ($j = 0; $j <= $i; $j++) {
        $array[$i] .= 'x';
    }
}
printArr($array);

function arrayFill(string $str, int $num): array {
    $arr = [];
    for ($i = 0; $i < $num; $i++) {
        $arr[$i] = $str;
    }
    return $arr;
}
printArr(arrayFill('x', 5));

function sumOfArr(array $arr): int {
    $sum = 0;
    foreach ($arr as $item) {
        if (is_array($item))
            $sum += sumOfArr($item);
        else
            $sum += $item;
    }
    return $sum;
}

$arr = [[1, 2, 3], [4, 5], [6]];
echo nl2br("\n"  . sumOfArr($arr));

$arr = [2, 5, 3, 9];
$result = $arr[0] * $arr[1] + $arr[2] * $arr[3];
echo nl2br("\n"  . $result);

$user = ['name' => 'Kirill', 'surname' => 'Kramar', 'patronymic' => 'Valilev'];
echo nl2br("\n"  . $user['surname'] . ' ' . $user['name'] . ' ' . $user['patronymic']);

$date = ['year' => date('Y'), 'month' => date('m'), 'day' => date('d')];
echo nl2br("\n"  . $date['year'] . '-' . $date['month'] . '-' . $date['day']);

$arr = ['a', 'b', 'c', 'd', 'e'];
echo nl2br("\n"  . count($arr));
echo nl2br("\n"  . $arr[count($arr) - 1]);
echo nl2br("\n"  . $arr[count($arr) - 2]);

function greaterTen(int $a, int $b): bool
{
    return $a + $b > 10;
}

function isEqual(int $a, int $b): bool
{
    return $a === $b;
}

$test = 0;
echo $test == 0 ? 'верно' : 'неверно';

$age = 45;
if ($age < 10 || $age > 99)
    echo nl2br("\n"  . 'Less than 10 or greater than 99');
else {
    $sum = 0;
    while ($age > 0) {
        $sum += $age % 10;
        $age = (int)($age / 10);
    }
    if ($sum <= 9)
        echo nl2br("\n"  . 'Single digit');
    else
        echo nl2br("\n"  . 'Two digit');
}

$arr = [3, 5, 7];
if (count($arr) === 3)
    echo nl2br("\n"  . array_sum($arr));

echo nl2br("10 ----------- :\n");
function arithmeticMead(array $arr): float
{
    return array_sum($arr) / count($arr);
}

function sum(int $num): int
{
    return $num === 1 ? 1 : $num + sum($num - 1);
}

echo nl2br("\n"  . sum(100));

//Given an array of numbers. Get an array from it with square the roots of these numbers without using a loop.
$arr = [4,1, 4, 4, 6, 2 ,6  ,7 ,3, 6];
function squareY(array $arr): array {
    return array_map(function ($item) {
        return sqrt($item);
    }, $arr);
}
printArr(squareY($arr));

$arr = array_fill_keys(range('a', 'z'), 0);
foreach ($arr as $key => $value) {
    $arr[$key] = ord($key) - 96;
}

print_r($arr);


function sumOfPairs(string $str): int {
    return array_sum(str_split($str, 2));
}
echo nl2br("\n"  . sumOfPairs('1234567890'));