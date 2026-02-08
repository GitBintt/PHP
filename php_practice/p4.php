<?php
function reverseNumber($num)
{

    $reverse = 0;

    while ($num > 0) {

        $digit = $num % 10;
        $reverse = ($reverse * 10) + $digit;
        $num = (int)($num / 10);
    }

    return $reverse;
}

echo reverseNumber(1234);
