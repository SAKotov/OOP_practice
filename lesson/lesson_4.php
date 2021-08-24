<?php
//Задача 5.1
//
//Не подсматривая в мой код создайте такой же класс User с такими же методами.
//

//class User
//{
//    public $age;
//    public $name;
//
//    public function checkAge($age)
//    {
//        return $age >= 18 && $age <= 60;
//    }
//
//    public function setAge($age)
//    {
//        if ($this->checkAge($age))
//            $this->age = $age;
//    }
//
//    public function addAge($years)
//    {
//        $newAge = $this->age + $years;
//
//        if ($this->checkAge($newAge))
//        {
//            $this->age = $newAge;
//        }
//    }
//}

//Задача 5.2
//
//Создайте объект этого класса User, проверьте работу методов setAge и addAge.
//

//$user = new User();
//
//$user->setAge(30);
//
//echo $user->age;
//
//$user->addAge(28);
//
//echo $user->age;

//Задача 5.3
//
//Добавьте также метод subAge, который будет выполнять уменьшение текущего
// возраста на переданное количество лет.

class User
{
    public $age;
    public $name;

    public function checkAge($age)
    {
        return $age >= 18 && $age <= 60;
    }

    public function setAge($age)
    {
        if ($this->checkAge($age))
            $this->age = $age;
    }

    public function addAge($years)
    {
        $newAge = $this->age + $years;

        if ($this->checkAge($newAge))
        {
            $this->age = $newAge;
        }
    }

    public function subtractAge($years)
    {
        $newAge = $this->age - $years;

        if ($this->checkAge($newAge))
        {
            $this->age = $newAge;
        }
    }
}

$user = new User();

$user->setAge(30);

echo $user->age;

$user->addAge(28);

echo $user->age;

$user->subtractAge(15);

echo $user->age;