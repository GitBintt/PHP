<?php

function countNumbers($a)
{

    $positive = 0;
    $negative = 0;
    $zero = 0;

    for ($i = 0; $i < count($a); $i++) {
        if ($a[$i] > 0) {
            $positive++;
        } else if ($a[$i] < 0) {
            $negative++;
        } else {
            $zero++;
        }
    }

    return "Positive: $positive, Negative: $negative, Zero: $zero";
}

$a = [1, -2, 0, 5, -3, 0];
echo countNumbers($a);
