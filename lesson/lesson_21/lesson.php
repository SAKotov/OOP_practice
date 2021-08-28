<?php
//Задача 27.1
//
//Сделайте класс Employee с публичными свойствами name (имя) и salary (зарплата).
//
//Задача 27.2
//
//Сделайте класс Student с публичными свойствами name (имя) и scholarship (стипендия).
//
//Задача 27.3
//
//Создайте по 3 объекта каждого класса и в произвольном порядке запишите их в массив $arr.
//
//Задача 27.4
//
//Переберите циклом массив $arr и выведите на экран столбец имен всех работников.
//
//Задача 27.5
//
//Аналогичным образом выведите на экран столбец имен всех студентов.
//
//Задача 27.6
//
//Переберите циклом массив $arr и с его помощью найдите сумму зарплат работников и
//сумму стипендий студентов. После цикла выведите эти два числа на экран.

//Задача 27.7
//
//Сделайте класс User с публичным свойствами name (имя) и surname (фамилия).
//
//Задача 27.8
//
//Сделайте класс Employee, который будет наследовать от класса User и добавлять salary (зарплата).
//
//Задача 27.9
//
//Сделайте класс City с публичными свойствами name (название города) и population
// (количество населения).
//
//Задача 27.10
//
//Создайте 3 объекта класса User, 3 объекта класса Employee, 3 объекта класса City,
//и в произвольном порядке запишите их в массив $arr.
//
//Задача 27.11
//
//Переберите циклом массив $arr и выведите на экран столбец свойств name тех объектов,
// которые принадлежат классу User или потомку этого класса.
//
//Задача 27.12
//
//Переберите циклом массив $arr и выведите на экран столбец свойств name тех объектов,
// которые НЕ принадлежат классу User или потомку этого класса.
//
//Задача 27.13
//
//Переберите циклом массив $arr и выведите на экран столбец свойств name тех объектов,
// которые принадлежат именно классу User, то есть не классу City и не классу Employee.

require_once 'Student.php';
require_once 'Employee.php';
require_once 'User.php';
require_once 'Employee1.php';
require_once 'City.php';

$student1 = new Student('Коля', 1000);
$student2 = new Student('Вася', 2000);
$student3 = new Student('Олег', 3400);

$employee1 = new Employee('Грег', 2000);
$employee2 = new Employee('Кирил', 4000);
$employee3 = new Employee('Иосиф', 5000);

$arr = [];

$arr[] = $student1;
$arr[] = $student2;
$arr[] = $student3;
$arr[] = $employee1;
$arr[] = $employee2;
$arr[] = $employee3;

foreach ($arr as $item)
{
    if ($item instanceof Employee)
    echo $item->name . '<br>';
}

echo '<br>';

foreach ($arr as $item)
{
    if ($item instanceof Student)
    echo $item->name . '<br>';
}
$sum = 0;
foreach ($arr as $item)
{
    $sum += $item->salary;
}

echo $sum;

echo '<br>';

$sum = 0;
foreach ($arr as $item)
{
    $sum += $item->scholarship;
}

echo $sum;

echo '<br>';
echo '<br>';
echo '<br>';

$user1 = new User('Ваня', 'Петров');
$user2 = new User('Григорий', 'Сидоров');
$user3 = new User('Иван', 'Иванов');

$employee4 = new Employee1('Диман','Пещерин', 1000);
$employee5 = new Employee1('Алексей','Яшин', 2000);
$employee6 = new Employee1('Сергей','Спирин', 3000);

$city1 = new City('Москва', 1200000);
$city2 = new City('Нью Йорк', 2200000);
$city3 = new City('Париж', 8000000);

$arr2 = [$user1, $user2, $user3, $employee4, $employee5, $employee6, $city1, $city2, $city3];

foreach ($arr2 as $item)
{
    if ($item instanceof Employee1)
    {
        echo $item->name . ' ';
    }
}

echo '<br>';
echo '<br>';

foreach ($arr2 as $item)
{
    if ($item instanceof User)
    {
        echo $item->name . ' ';
    }
}