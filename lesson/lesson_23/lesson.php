<?php
//Задача 30.1
//
//Сделайте класс Num, у которого будут два публичных статических свойства:
//num1 и num2. Запишите в первое свойство число 2,
//а во второе - число 3. Выведите сумму значений свойств на экран.

//Задача 30.2
//
//Сделайте класс Num, у которого будут два приватны статических свойства: num1 и num2.
// Пусть по умолчанию в свойстве num1 хранится число 2, а в свойстве num2 - число 3.
//
//Задача 30.3
//
//Сделайте в классе Num метод getSum, который будет выводить на экран сумму значений свойств num1 и num2.

require_once 'Num.php';

echo Num::$num1 + Num::$num2;

echo Num::getSum();