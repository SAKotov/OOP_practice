<?php
//
//require_once 'classes/City_lesson_13.php';
////Задача 14.1
////
////Сделайте класс City (город), в котором будут следующие свойства - name (название), foundation (дата основания), population (население). Создайте объект этого класса.
////
////Задача 14.2
////
////Пусть дана переменная $props, в которой хранится массив названий свойств класса City.
//// Переберите этот массив циклом foreach и выведите на
//// экран значения соответствующих свойств.
//
//$city = new City_lesson_13();
//
//$props = ['name', 'foundation', 'population'];
//
//foreach ($props as $prop) {
//    echo $city->$prop . '<br>';
//}
//
//
////Задача 14.3
//
////Скопируйте мой код класса User и массив $props.
//// В моем примере на экран выводится фамилия юзера.
//// Выведите еще и имя, и отчество.
//
//require_once 'classes/User_lesson_13.php';
//
//$props = ['name', 'surname', 'age'];
//
//$user = new User_lesson_13('Коля', 'Петров', 37);
//
//echo $user->{$props[0]};
//echo '<br>';
//echo $user->{$props[1]};
//echo '<br>';
//echo $user->{$props[2]};