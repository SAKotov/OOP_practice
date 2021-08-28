<?php

require_once 'Employee.php';
require_once 'EmployeesCollection.php';
//Задача 26.1
//
//Сделайте функцию compare, которая параметром будет принимать два объекта и возвращать true,
// если они имеют одинаковые свойства и значения являются экземплярами одного и того же класса,
// и false, если это не так.
//
//Задача 26.2
//
//Сделайте функцию compare, которая параметром будет принимать два объекта и возвращать true, если переданные переменные ссылаются на один и тот же объект, и false, если на разные.
//
//Задача 26.3
//
//Сделайте функцию compare, которая параметром будет принимать два объекта и сравнивать их.
//
//Функция должна возвращать 1, если переданные переменные ссылаются на один и тот же объект.
//
//Функция должна возвращать 0, если объекты разные, но одного и того же класса и с теми же свойствами и их значениями.
//
//Функция должна возвращать -1 в противном случае.

//function compare($obj1, $obj2)
//{
//    if ($obj1 == $obj2)
//        return true;
//}
//
//function compare($obj1, $obj2)
//{
//    if ($obj1 === $obj2)
//        return true;
//}

//Задача 26.4
//
//Скопируйте мой код класса Employee, затем самостоятельно реализуйте описанный класс
//EmployeesCollection,
//проверьте его работу.

$employeesCollection = new EmployeesCollection();

$employeesCollection->addEmployee(new Employee('Коля',100));
$employeesCollection->addEmployee(new Employee('Вася',200));
$employeesCollection->addEmployee(new Employee('Вася',200));
$employeesCollection->addEmployee(new Employee('Вася',200));

var_dump($employeesCollection->getEmployees());