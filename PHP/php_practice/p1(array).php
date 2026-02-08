<?php
function  countAboveAverage($arr)
{

    //first we will do summetion
    $sum = 0;
    for ($i = 0; $i < count($arr); $i++) {
        $sum +=  $arr[$i];
    }

    //now we'll average them
    $avg = $sum / count($arr);

    //numbers abover average

    $count = 0;
    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i] > $avg) {
            $count++;
        }
    }
    return $count;
}

$arr = [20, 40, 10, 30, 70];

echo countAboveAverage($arr);
