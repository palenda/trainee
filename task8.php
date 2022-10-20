<?php
//Create a class "Matrix".
class Matrix
{
    public array $matrix = [
        [1, 6, 0],
        [8, 2, 4],
        [3, 1, 0]
        ];

    public int $a = 3;
    public int $b = 3;

    function addition()
    {
        $matrix1 = [
            [9, 4, 10],
            [2, 8, 6],
            [7, 9, 10]
        ];

        for($i=0; $i< $this->a; $i++) {
            for($j=0; $j<=$this->b; $j++) {
                $result[$i][$j] = $this->matrix[$i][$j] + $matrix1[$i][$j];
            }
        }

        for($i = 0; $i < $this->a; $i++)
        {
            for($j = 0; $j < $this->b; $j++)
            {
                echo $result[$i][$j]." ";
            }
            echo "<br>";
        }
    }


    function numberMultiplication($num)
    {
        for($i = 0; $i < $this->a; $i++)
        {
            for($j = 0; $j < $this->b; $j++)
            {
                $element = $this->matrix[$i][$j]*$num;
                echo $element." ";
            }
            echo "<br>";
        }
    }


    function printOutput()
    {
        for($i = 0; $i < $this->a; $i++)
        {
            for($j = 0; $j < $this->b; $j++)
            {
                echo $this->matrix[$i][$j]." ";
            }
            echo "<br>";
        }
    }

    function matrixMultiplication()
    {
        $matrix1 = [
            [9, 4, 10],
            [2, 8, 6],
            [7, 9, 10]
        ];

        for ($i = 0; $i < $this->a; $i++)
        {
            for ($j = 0; $j < $this->b; $j++)
            {
                $res[$i][$j] = 0;
                for ($k = 0; $k < 3; $k++)
                    $res[$i][$j] += $this->matrix[$i][$k] *
                        $matrix1[$k][$j];
            }
        }

        for($i = 0; $i < $this->a; $i++)
        {
            for($j = 0; $j < $this->b; $j++)
            {
                echo $res[$i][$j]." ";
            }
            echo "<br>";
        }
    }
}

$m = new Matrix();
$m->matrixMultiplication();
$m->addition();




