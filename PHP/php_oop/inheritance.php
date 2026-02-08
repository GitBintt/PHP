<?php

class Animal
{

    public function sound()
    {
        echo "Animal makes sound";
    }
}

class Dog extends Animal
{

    public function sound()
    {
        echo "Dog barks";
    }
}

$a = new Animal();
$b = new Dog();
$a->sound();
$b->sound();
