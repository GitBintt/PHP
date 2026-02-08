<?php
function averageOfExtremes($arr1, $arr2)
{

    // Find smallest number in first array
    $smallest = $arr1[0];
    for ($i = 1; $i < count($arr1); $i++) {
        if ($arr1[$i] < $smallest) {
            $smallest = $arr1[$i];
        }
    }

    // Find largest number in second array
    $largest = $arr2[0];
    for ($i = 1; $i < count($arr2); $i++) {
        if ($arr2[$i] > $largest) {
            $largest = $arr2[$i];
        }
    }

    // Calculate average
    return ($smallest + $largest) / 2;
}

// Example arrays
$arr1 = [4, 1, 2, 1, 2];
$arr2 = [2, 2, 3, 5];

echo averageOfExtremes($arr1, $arr2); // Output: 3
