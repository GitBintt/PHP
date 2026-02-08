<?php
function sumEvenOdd($arr1, $arr2)
{

    $sum = 0;

    //even numbers
    for ($i = 0; $i < count($arr1); $i++) {
        if ($arr1[$i] % 2 == 0) {
            $sum += $arr1[$i];
        }
    }

    //odd numbers
    for ($i = 0; $i < count($arr2); $i++) {
        if ($arr2[$i] % 2 != 0) {
            $sum += $arr2[$i];
        }
    }
    return $sum;
}

$arr1 = [4, 6, 8, 9];
$arr2 = [7, 1, 5, 2];

echo sumEvenOdd($arr1, $arr2);
