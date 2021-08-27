<?php

require_once 'Student.php';
//Задача 21.1
//
//Модифицируйте код класса User так, чтобы в методе setName выполнялась проверка того,
// что длина имени более 3-х символов.
//
//Задача 21.2
//
//Добавьте в класс Student метод setName, в котором будет выполняться проверка того,
//что длина имени более 3-х символов и менее 10 символов.
//Пусть метод setName класса Student использует метод setName своего родителя,
// чтобы выполнить часть проверки.

$student = new Student();

$student->setAge(19);

echo $student->getAge();

$student->setName('Mike');

echo $student->getName();