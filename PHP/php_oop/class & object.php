<?php
class Student
{
    public $name;
    public $id;


    public function display()
    {
        echo "Name: $this->name \n";
        echo "Id: $this->id";
    }
}

$stu = new Student();
$stu->name = "Binte";
$stu->id = 007;
$stu->display();
