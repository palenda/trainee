<?php

class Path {
function shortestPathBinaryMatrix($grid)
{
$rows = count($grid);
$cols = count($grid[0]);
if($grid[0][0] == 1 || $grid[$rows-1][$cols-1] == 1)
    return -1;

define('BLOCKED',-1);

$cost = [];
for($i=0; $i<$cols+1; $i++)
{
    $cost[$i] = array_fill(-1,$cols+2,BLOCKED);
    if($i>=0 && $i<$rows)
    {
        for($j=0; $j<$rows; $j++)
        {
            if($grid[$i][$j] == 0)
                $cost[$i][$j] = PHP_INT_MAX;
        }
    }
}

$cost[$rows-1][$cols-1] = 1;

$next = [[$rows-1,$cols-1]];
$neighbors = [[-1,-1],[-1,0],[-1,1],[0,-1],[0,1],[1,-1],[1,0],[1,1]];
   while(count($next) > 0)
   {
       $next2 = [];
       foreach($next as $curr)
       {
           $pathCost = 1+$cost[$curr[0]][$curr[1]];
           foreach($neighbors as $neighbor)
           {
               $r = $curr[0] + $neighbor[0];
               $c = $curr[1] + $neighbor[1];
               if($cost[$r][$c] > $pathCost)
               {
                   $cost[$r][$c] = $pathCost;
                   $next2[] = [$r,$c];
               }
           }
       }
       $next = $next2;
   }

return ($cost[0][0] < PHP_INT_MAX) ? $cost[0][0] : -1;
}
}

