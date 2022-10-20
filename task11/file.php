<?php
include "task11.php";

$path = new Path();
//echo $a->shortestPathBinaryMatrix([[0,0,1,0,1],[0,1,1,0,1],[0,0,0,1,1],[1,1,1,0,0],[1,0,1,1,0]]);

$obj = serialize($path);
file_put_contents('point.txt', $obj);
setcookie('access', $obj, time() + 3600*24);

$a = unserialize($_COOKIE["access"]);
echo $a->shortestPathBinaryMatrix([[0,0,1,0,1],[0,1,1,0,1],[0,0,0,1,1],[1,1,1,0,0],[1,0,1,1,0]]);