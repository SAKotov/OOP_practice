<?php
require_once 'Employee.php';
require_once 'Student.php';

//Задача 19.1
//
//Не подсматривая в мой код реализуйте такие же классы User, Employee.

//Задача 19.2
//
//Не подсматривая в мой код реализуйте такой же класс Student, наследующий от класса User.

$user = new Employee();

$user->setAge(15);
$user->setName('Nik');
$user->setSalary(1500);

echo $user->getAge() . ' ';
echo $user->getName() . ' ';
echo $user->getSalary();

echo '<br>';
echo '<br>';

$student = new Student();

$student->setCourse(5);
$student->setName('Batist');

echo $student->getCourse();
echo $student->getName();