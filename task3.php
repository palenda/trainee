<?php
//Write a PHP function to add the digits by absolute of an integer repeatedly until the result has a single digit.

function addDigits(int $digit)
{
    $sum = 0;

    while ($digit > 0 || $sum > 9) {
        if($digit == 0)
        {
            $digit = $sum;
            $sum = 0;
        }
        $sum += $digit % 10;
        $digit /= 10;
    }

    echo $sum;
}

