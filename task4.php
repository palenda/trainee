<?php
//Given a list of values. Delete the element from the list in the 'n' position. After deleting the element, integer keys must be normalized. Use function array_values() is forbidden.

function deleting(array $arr, int $position)
{
    unset($arr[$position]);
    $array = [];
    for($i = 0; $i <= count($arr); $i++)
    {
        if($i != $position)
        $array[] = $arr[$i];
    }
    var_dump($array);
}

deleting([1, 2, 3, 4], 2);