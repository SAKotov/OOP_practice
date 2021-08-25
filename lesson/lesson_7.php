<?php
//Задача 8.1
//
//Сделайте класс Employee,
// в котором будут следующие private свойства:
// name (имя), age (возраст) и salary (зарплата).
//

//Задача 8.2
//
//Сделайте геттеры и сеттеры для всех свойств класса Employee.
//

//Задача 8.3
//
//Дополните класс Employee приватным методом isAgeCorrect,
// который будет проверять возраст на корректность (от 1 до 100 лет).
// Этот метод должен использоваться в сеттере setAge перед установкой
// нового возраста (если возраст не корректный - он не должен меняться).
//

//Задача 8.4
//
//Пусть зарплата наших работников хранится в долларах.
// Сделайте так, чтобы геттер getSalary добавлял
// в конец числа с зарплатой значок доллара.
// Говоря другими словами в свойстве salary зарплата будет хранится просто числом,
// но геттер будет возвращать ее с долларом на конце.


//class Employee
//{
//    private $name;
//    private $age;
//
//    private $salary;
//
//    public function getAge()
//    {
//        return $this->age;
//    }
//
//    public function getName()
//    {
//        return $this->name;
//    }
//
//    public function getSalary()
//    {
//        return $this->salary . '$';
//    }
//
//    public function setAge($age)
//    {
//        if ($this->isAgeCorrect($age))
//        $this->age = $age;
//    }
//
//    public function setName($name){
//        $this->name = $name;
//    }
//
//    public function setSalary($salary){
//        $this->salary = $salary;
//    }
//
//    private function isAgeCorrect($year){
//        return $year >= 1 && $year <= 100;
//    }
//}
//
//$user = new Employee();
//
//$user->setAge(33);
//echo $user->getAge();
//
//echo '<br>';
//
//$user->setSalary(1500);
//echo $user->getSalary();
