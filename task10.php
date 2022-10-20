<?php
//Write a PHP Calculator class which will accept two values as arguments, then add them, subtract them, multiply them together, or divide them on request.

class Arr
{
    public int $a;
    public int $b;
    public float $result;

    public function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    public function add(): Arr
    {
        $this->result = $this->a + $this->b;
        return $this;
    }

    public function multiply(): Arr
    {
        $this->result = $this->a * $this->b;
        return $this;
    }

    public function divide(): Arr
    {
        $this->result = $this->a / $this->b;
        return $this;
    }

    public function subtract(): Arr
    {
        $this->result = $this->a - $this->b;
        return $this;
    }


    public function addBy($number): Arr
    {
        $this->result += $number;
        return $this;
    }

    public function divideBy($number): Arr
    {
        $this->result /= $number;
        return $this;
    }

    public function multiplyBy($number): Arr
    {
        $this->result *= $number;
        return $this;
    }

    public function subtractBy($number): Arr
    {
        $this->result -= $number;
        return $this;
    }

    public function __toString()
    {
        return (string) $this->result;
    }

}

$arr = new Arr(12, 6);
echo $arr->add()->divideBy(9);

