<?php
require_once 'Employee.php';
require_once 'Student.php';
require_once 'Programmer.php';
require_once 'Driver.php';

//Задача 19.1
//
//Не подсматривая в мой код реализуйте такие же классы User, Employee.

//Задача 19.2
//
//Не подсматривая в мой код реализуйте такой же класс Student, наследующий от класса User.

//Задача 19.3
//
// Сделайте класс Programmer, который будет наследовать от класса Employee.
// Пусть новый класс имеет свойство langs, в котором будет хранится массив языков,
// которыми владеет программист. Сделайте также геттер и сеттер для этого свойства.
//

//Задача 19.4
//
// Сделайте класс Driver (водитель), который будет наследовать от класса Employee.
// Пусть новый класс добавляет следующие свойства: водительский стаж,
// категория вождения (A, B, C, D), а также геттеры и сеттеры к ним.

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

echo '<br>';
echo '<br>';

$programmer = new Programmer();

$programmer->setLang($lang = ['Ru', 'Eng', 'UK']);

var_dump($programmer->getLang());

echo '<br>';
echo '<br>';

$driver = new Driver();

$driver->setName('Volodya');
$driver->setAge(45);
$driver->setExp(20);
$driver->setCat('A, B, C, D');

echo $driver->getName();
echo '<br>';
echo $driver->getAge();
echo '<br>';
echo $driver->getExp();
echo '<br>';
echo $driver->getCat();