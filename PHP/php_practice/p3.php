<?php

function checkMarks($marks)
{

    for ($i = 0; $i < count($marks); $i++) {
        if ($marks[$i] < 40) {
            return "Fail";
        }
    }

    return "pass";
}

$marks = [56, 89, 95, 78];
echo checkMarks($marks);
