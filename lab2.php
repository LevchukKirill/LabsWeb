<?php
//#1
$very_bad_unclear_name="15 chicken wings";
$order = &$very_bad_unclear_name;
$order .=" and orange juice";  
echo"\nYour order is: $very_bad_unclear_name."."<br><br>";

//#2
$num = 8;
echo $num."<br>";
$num1 = 111;
echo $num1."<br>";
$num2 = 15.5;
echo $num2."<br>";
echo (39 - 27)."<br>";
$last_Month = 1187.23;
$this_Month = 1089.98;
echo ($last_Month-$this_Month)."<br><br>";

//#11
$num_Languages = 4;
$months = 11;
$days = $months * 16;
$days_Per_Language = $days / $num_Languages;
echo "$days_Per_Language"."<br><br>";

//#12
echo (8 ** 2)."<br><br>";

//#13
$myNum = 51;
$answer = $myNum;
$answer += 2;
$answer *= 2;
$answer -= 2;
$answer /= 2;
$answer -= $myNum;
echo $answer."<br><br>";

//#14
$a = 10;
$b = 3;
echo ($a % $b)."<br>";
if (($a % $b) == 0)
    echo "Делиться ", $a / $b ;
else
    echo "Делиться с остатком ", $a % $b."<br><br>";

$st = pow(2, 10);
echo $st."<br>";
echo sqrt(245)."<br>";
$array = [4,2,5,19,13,0,10];
$sum = 0;
foreach ($array as $value)
    $sum = $sum + pow($value, 2);
echo sqrt($sum)."<br><br>";

echo round(sqrt(379), 0)."<br>";
echo round(sqrt(379), 1)."<br>";
echo round(sqrt(379), 2)."<br>";

$arr = ['ceil' => ceil(sqrt(587)), 'floor' => floor(sqrt(587))];
echo $arr['ceil']."<br>";
echo $arr['floor']."<br><br>";

echo min(4, -2, 5, 19, -130, 0, 10)."<br>";
echo max(4, -2, 5, 19, -130, 0, 10)."<br><br>";

echo rand(1, 100)."<br>";
$arr = [];
for ($i = 0; $i < 10; $i++)
{
    $arr[$i] = rand(1,100);
    echo $arr[$i]." ";
}
echo "<br>";

echo "<br>".abs(($b-$a))."<br>";

$arr = [1, 2, -1, -2, 3, -3];
foreach ($arr as $value) {
    $value = abs($value);
    echo $value." ";
}
echo "<br><br>";
$a = 42;
$delit = [];
for ($i = 1; $i <= $a; $i++)
    if ($a % $i == 0)
        $delit[] += $i;
print_r($delit);
echo "<br>";
$arr = [1,2,3,4,5,6,7,8,9,10];
$sum = 0;
foreach ($arr as $value) {
    $sum += $value;
    if ($sum > 10)
    {
        echo $value."<br><br>";
        break;
    }
}

//#15
function printStringReturnNumber(string $stroka):int
{
    echo $stroka;
    return 123;
}
$myNum = printStringReturnNumber('My number is: ');
echo $myNum."<br><br>";

//#16
function increaseEnthusiasm(string $s):string
{
    $s.='!';
    return $s;
}
echo increaseEnthusiasm("Okey, let's go")."<br>";

function repeatThreeTimes(string $s):string
{
    $s .= $s.$s;
    return $s;
}
echo repeatThreeTimes(increaseEnthusiasm(' Go'))."<br><br>";

function cut(string $s, int $x=10):string
{
    $ret = "";
    for($i = 0; $i < $x; $i++)
        $ret .= $s[$i];
    return $ret;
}
echo cut("Very bad word", 8)."<br><br>";

function arrayPrint($arr, $num = 0)
{
    if ($num < sizeof($arr))
    {
        echo $arr[$num]." ";
        arrayPrint($arr, $num+1);
    }
}
$array = array(4,6,2,1,3);
arrayPrint($array);

function arraySum($num)
{
    $num = str_split($num);
    $sum = 0;
    for ($i = 0; $i < count($num); $i++) {
        $sum += $num[$i];
}
    if ($sum > 9) return arraySum($sum);
    else return($sum);
}
echo "<br>".arraySum(941616)."<br><br>";

//#17
$arr=[];
for ($i = 1; $i <= 10; $i++)
{
    $arr[$i-1]='';
    for ($j = 0; $j < $i; $j++)
        $arr[$i-1].='x';
}
print_r($arr);



function arrayFill($vol, int $num)
{
    $newArr = [];
    for ($i = 1; $i <= $num; $i++) {
        $newArr[$i - 1] = '';
        for ($j = 0; $j < $i; $j++)
            $newArr[$i - 1] .= $vol;
    }
    return $newArr;
}
echo "<br><br>";

print_r(arrayFill('z',5));
echo "<br><br>";


$arr = [[1,2,3],[4,5],[6]];
$sum = 0;
foreach ($arr as $value)
{
    foreach ($value as $num)
    {
        $sum += $num;
    }
}
echo $sum."<br><br>";

$arr = [];
$counter = 1;
for($i = 0; $i < 3; $i++)
    for($j = 0; $j < 3; $j++)
        $arr[$i][$j] = $counter++;
print_r($arr);

$arr4 = [2,5,3,9];
$result = $arr4[0] * $arr4[1] + $arr4[2] * $arr4[3];
echo "<br><br>".$result."<br><br>";

$user = ['name' => 'Polina', 'surname' => 'Levchuk', 'patronymic' => 'Aleksandrovna', 'H' => 164];
echo $user['surname']." ".$user['name']." ".$user['patronymic']." and her height is ".$user['H']."<br><br>";

$date = ['year' => 2022, 'month' => '02', 'day' => '26'];
echo "Today is {$date['year']}-{$date['month']}-{$date['day']}<br><br>";

$arr = ['a', 'b', 'c', 'd', 'e'];
echo sizeof($arr)."<br>";
echo $arr[sizeof($arr)-1]."<br>";
echo $arr[sizeof($arr)-2]."<br><br>";

//#18
function moreThan10(int $a, int $b):bool
{
    if ($a+$b > 10) return true;
    else return false;
}

function equal(int $a, int $b):bool
{
    if ($a == $b ) return true;
    else return false;
}

$test = 0;
echo ($test == 0) ? 'Верно<br><br>' : 'Неверно<br><br>';

$age = rand(0, 150);
echo "Age = $age<br>";
if ($age < 10) echo "Is lower than 10<br><br>";
else if ($age > 99) echo "Is higher than 99<br><br>";
else
{
//    for ($i = 0; $i < mb_strlen($age); $i++)
//    {
//        $age = str_split($age);
//        $sum = 0;
//        for ($j = 0; $j < count($age); $j++)
//            $sum += $age[$i];
//    }
    $age = str_split($age);
    $sum = 0;
    for ($j = 0; $j < count($age); $j++)
        $sum += $age[$j];
    echo ($sum > 9) ? "Sum is two-digit<br><br>" : "Sum is one-digit<br><br>";
}

$arr = [7, 2, 7];
$sum = array_sum($arr);
echo (sizeof($arr) == 3) ? "Sum of array is {$sum}<br><br>" : "In array more than 3 elements!<br><br>" ;

//#19
for ($i = 1; $i <= 20; $i++)
{
    for ($j = 1; $j <= $i; $j++)
        echo "x";
    echo "<br>";
}

//#20
$array = [1,2,3,4,5,6,7,8,9];
echo "<br>".array_sum($array)/sizeof($array)."<br><br>";

echo array_sum(range(1, 100))."<br><br>";

$arr = [25,9,16,64];
print_r(array_map('sqrt', $arr));
echo "<br>";

$keys = range('a', 'z');
$vals = range(1,26);
$arr= array_combine($keys, $vals);
echo "<br>";
print_r($arr);
echo "<br><br>";

$numbers = '1234567890';
$arr = str_split($numbers, 2);
$res = array_sum($arr);
echo $res;