<?php

class Shape
{
    public function canculateArea()
    {
        return 0;
    }
}

class Circle extends Shape
{
    private $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function setRadius($radius)
    {
        $this->radius = $radius;
    }

    public function calculateArea()
    {
        return pi() * $this->radius * $this->radius;
    }
}

$circle = new Circle(5);

$circle->setRadius(10);

$result = $circle->calculateArea();

echo "Area of circle: " .  $result;
