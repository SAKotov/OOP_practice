<?php
//Задача 20.1
//
//Скопируйте мой код класса User.
// Самостоятельно не подсматривая в мой код реализуйте описанный класс Student
// с методами getCourse, setCourse и addOneYear.

class User
{
    private $name;
    protected $age;

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

    public function getAge()
    {
        return $this->age;
    }
}

class Student extends User
{
    private $course;

    public function setCourse($course)
    {
        $this->course = $course;
    }

    public function getCourse()
    {
        return $this->course;
    }

    public function addOneYear()
    {
        $this->age++;
    }
}

$student = new Student();

$student-> setAge(25);

echo $student->getAge();

$student->addOneYear();

echo '<br>' . $student->getAge();