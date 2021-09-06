<?php

$loan = (int)$_POST["loan"];
$age = (int)$_POST["age"];

if (!isset($loan)) {
  echo '接続に失敗しました' . PHP_EOL;
}

if (!isset($age)) {
  echo '接続に失敗しました' . PHP_EOL;
}

$now = 2021;

echo '～2021';
echo '<br>';
echo '(築' . $age . '年)';
echo '<br><br>';

$split = floor($loan / 6);
$remainder = $loan % 6;
$splitArray = [$split, $split, $split, $split, $split, $split, ];


for ($i = 0; $i < $remainder; $i++) {
    $splitArray[$i] += 1;
}

sort($splitArray);// 配列を昇順にした

$value1 = ($age + 1);
$value2 = $splitArray[0] + $value1;
$value3 = $splitArray[1] + $value2;
$value4 = $splitArray[2] + $value3;
$value5 = $splitArray[3] + $value4;
$value6 = $splitArray[4] + $value5;

$value1To = ($splitArray[0] - 1) + $value1;
$value2To = ($splitArray[1] - 1) + $value2;
$value3To = ($splitArray[2] - 1) + $value3;
$value4To = ($splitArray[3] - 1) + $value4;
$value5To = ($splitArray[4] - 1) + $value5;
$value6To = ($splitArray[5] - 1) + $value6;

$year1 = ($now + 1);
$year2 = $splitArray[0] + $year1;
$year3 = $splitArray[1] + $year2;
$year4 = $splitArray[2] + $year3;
$year5 = $splitArray[3] + $year4;
$year6 = $splitArray[4] + $year5;

$year1To = ($splitArray[0] - 1) + $year1;
$year2To = ($splitArray[1] - 1) + $year2;
$year3To = ($splitArray[2] - 1) + $year3;
$year4To = ($splitArray[3] - 1) + $year4;
$year5To = ($splitArray[4] - 1) + $year5;
$year6To = ($splitArray[5] - 1) + $year6;

echo $year1 . '～' . $year1To;
echo '<br>';
echo '(築' . $value1 . '年～築' . $value1To , '年)';
echo '<br><br>';

echo $year2 . '～' . $year2To;
echo'<br>';
echo '(築' . $value2 . '年～築' . $value2To , '年)';
echo '<br><br>';

echo $year3 . '～' . $year3To;
echo'<br>';
echo '(築' . $value3 . '年～築' . $value3To , '年)';
echo '<br><br>';

echo $year4 . '～' . $year4To;
echo'<br>';
echo '(築' . $value4 . '年～築' . $value4To , '年)';
echo '<br><br>';

echo $year5 . '～' . $year5To;
echo'<br>';
echo '(築' . $value5 . '年～築' . $value5To , '年)';
echo '<br><br>';

echo $year6 . '～' . $year6To;
echo'<br>';
echo '(築' . $value6 . '年～築' . $value6To , '年)';
echo '<br>';

?>
