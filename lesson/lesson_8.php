<?php
//Задача 9.1
//
//Сделайте класс Employee, в котором будут следующие свойства:
//name (имя), surname (фамилия) и salary (зарплата).
//
//Задача 9.2
//
//Сделайте так, чтобы свойства name и surname были доступны только для чтения,
// а свойство salary - и для чтения, и для записи.

//class Employee
//{
//    private $name;
//    private $surname;
//
//    private $salary;
//
//    public function getName()
//    {
//        return $this->name;
//    }
//
//    public function getSurname()
//    {
//        return $this->surname;
//    }
//
//    public function getSalary(){
//        return $this->salary;
//    }
//
//    public function setSalary($salary)
//    {
//        $this->salary = $salary;
//    }
//
//    public function __construct($name, $surname)
//    {
//        $this->name = $name;
//        $this->surname = $surname;
//    }
//}
//
//$user = new Employee('Вася ', 'Фомин');
//
//echo $user->getName();
//echo $user->getSurname();
//
//$user->setSalary(1200);
//echo $user->getSalary();