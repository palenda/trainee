<?php
//Write a PHP functions to test whether a number is greater than 30, 20 or 10 using a if conditions, switch and ternary operator.

function firstIf(int $inputNumber)
{
    if ($inputNumber > 30) {
        echo 'Number is greater than 30';
    }
    else if ($inputNumber > 20) {
        echo 'Number is greater than 20';
    }
    else if ($inputNumber > 10) {
        echo 'Number is greater than 10';
    }
    else echo 'Enter a number at least 10';
}

function secondSwitch(int $inputNumber) {
    switch ($inputNumber) {
        case $inputNumber > 30:
            echo 'Number is greater than 30';
            break;
        case $inputNumber > 20:
            echo 'Number is greater than 20';
            break;
        case $inputNumber > 10:
            echo 'Number is greater than 10';
            break;
        case $inputNumber <= 10:
            echo 'Enter a number at least 10';
    }
}

function thirdTernary(int $inputNumber) {
    $b = $inputNumber > 30
        ? 'Number is greater than 30'
        : ($inputNumber > 20
            ? 'Number is greater than 20'
            : ($inputNumber >10
                ? 'Number is greater than 10'
                : 'Enter a number at least 10'));
    echo $b;
}

