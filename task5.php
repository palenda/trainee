<?php
//Given two integers A and B. Write a function that outputs all numbers from A to B inclusive, in ascending order if A < B, or in descending order otherwise. Use recursion.

function recursion(int $i, int $n){
    if ($i < $n) {
        echo $i." ";
        recursion($i + 1, $n);
    }
     else if ($n < $i)
    {
        echo $i." ";
        recursion($i - 1, $n);
    }
     else if ($n == $i)
     {
         echo $i;
         return 0;
     }
}

recursion(11, -4);
