<?php

class Person
{
    public $name;
    public $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function show()
    {
        echo "Name: $this->name \n ";
        echo "Age: $this->age ";
    }
}

$s1 = new Person("Binte", 23);
$s1->show();
