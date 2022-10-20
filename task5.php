<?php
//Given two integers A and B. Write a function that outputs all numbers from A to B inclusive, in ascending order if A < B, or in descending order otherwise. Use recursion.

function recursion(int $i, int $n){
    echo $i." ";
    $i++;
    if ($i <= $n){
        recursion($i, $n);
    }
}

