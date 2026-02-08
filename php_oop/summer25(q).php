<?php

interface Input
{
    public function setNumbers($a, $b);
}

trait Logger
{

    public function log($message)
    {
        echo "[LOG] " . $message . "<br>";
    }
}

class Addition implements Input
{
    use Logger;

    private $num1;
    private $num2;

    public function setNumbers($a, $b)
    {
        $this->num1 = $a;
        $this->num2 = $b;
        $this->log("Numbers set to $a and $b");
    }

    public function calculateSum()
    {
        $sum = $this->num1 + $this->num2;
        $this->log("Addition Performed");
        return $sum;
    }
}

$add = new Addition();

$add->setNumbers(10, 10);

$result = $add->calculateSum();

echo  "Sum : " . $result;
