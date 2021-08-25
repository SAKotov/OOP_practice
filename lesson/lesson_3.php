<?php
//Задача 4.3
//
//Сделайте в классе Employee метод getAge, который будет возвращать возраст работника.
//

//class Employee
//{
//    public $name;
//    public $age;
//    public $salary;
//
//    public function getAge()
//    {
//        return $this->age;
//    }
//}
//
//$user = new Employee();
//
//$user->age = 25;

//echo $user->getAge();

//Задача 4.4
//
//Сделайте в классе Employee метод getSalary, который будет возвращать зарплату работника.
//

//class Employee
//{
//    public $name;
//    public $age;
//    public $salary;
//
//    public function getAge()
//    {
//        return $this->age;
//    }
//
//    public function getSalary()
//    {
//        return $this->salary;
//    }
//}
//
//$user = new Employee();
//
//$user->salary = 1500;
//
//echo $user->getSalary();

//Задача 4.5
//
//Сделайте в классе Employee метод checkAge, который будет проверять то,
// что работнику больше 18 лет и возвращать true, если это так, и false, если это не так.
//

//class Employee
//{
//    public $name;
//    public $age;
//    public $salary;
//
//    public function getAge()
//    {
//        return $this->age;
//    }
//
//    public function getSalary()
//    {
//        return $this->salary;
//    }
//
//    public function checkAge()
//    {
//            if($this->age > 18)
//            {
//                return 'Вам есть 18 лет.';
//            }
//            else
//            {
//                return 'Вам нет 18 лет.';
//            }
//
//    }
//}
//
//$user = new Employee();
//
//$user->age = 17;
//
//echo $user->checkAge();

//Задача 4.6
//
//Создайте два объекта класса Employee, запишите в их свойства какие-либо значения.
// С помощью метода getSalary найдите сумму зарплат созданных работников.
//

//class Employee
//{
//    public $name;
//    public $age;
//    public $salary;
//
//    public function getAge()
//    {
//        return $this->age;
//    }
//
//    public function getSalary()
//    {
//        return $this->salary;
//    }
//
//    public function checkAge()
//    {
//            if($this->age > 18)
//            {
//                return 'Вам есть 18 лет.';
//            }
//            else
//            {
//                return 'Вам нет 18 лет.';
//            }
//
//    }
//}
//
//$user = new Employee();
//$user1 = new Employee();
//
//$user->salary = 1500;
//$user1->salary = 2500;
//
//
//echo $user->getSalary() + $user1->getSalary();

//Задача 4.7
//
//Сделайте класс User, в котором будут следующие свойства - name (имя), age (возраст).
//

//class User
//{
//    public $name;
//    public $age;
//}

//Задача 4.8
//
//Сделайте метод setAge, который параметром будет принимать новый возраст пользователя.
//

//class User
//{
//    public $name;
//    public $age;
//
//    public function setAge($age)
//    {
//        $this->age = $age;
//    }
//}


//Задача 4.9
//
//Создайте объект класса User с именем 'Коля' и возрастом 25.
// С помощью метода setAge поменяйте возраст на 30. Выведите новое значение возраста на экран.
//

//class User
//{
//    public $name;
//    public $age;
//
//    public function setAge($age)
//    {
//        $this->age = $age;
//    }
//}
//
//$user = new User();
//
//$user->name = 'Коля';
//
//$user->age = 25;
//
//echo $user->age;
//
//$user->setAge(30);
//
//echo '<br>' . $user->age;

//Задача 4.10
//
//Модифицируйте метод setAge так, чтобы он вначале проверял,
// что переданный возраст больше или равен 18. Если это так - пусть метод меняет возраст пользователя,
// а если не так - то ничего не делает.
//

//class User
//{
//    public $name;
//    public $age;
//
//    public function setAge($age)
//    {
//        if ($this->age > 18)
//        {
//            $this->age = $age;
//        }
//    }
//}
//
//$user = new User();
//
//$user->name = 'Коля';
//
//$user->age = 17;
//
//$user->setAge(30);
//
//echo '<br>' . $user->age;

//Задача 4.11
//
//Сделайте класс Employee (работник), в котором будут следующие свойства - name (имя),
// salary (зарплата). Сделайте метод doubleSalary, который текущую зарплату будет увеличивать в 2 раза.
//

//class Employee
//{
//    public $name;
//    public $salary;
//
//    public function doubleSalary($salary)
//    {
//        $this->salary = $salary * 2;
//    }
//}

//$user = new Employee();
//
//$user->salary = 700;
//
//echo $user->salary;
//
//$user->doubleSalary($user->salary);
//
//echo '<br>' . $user->salary;

//Задача 4.12
//
//Сделайте класс Rectangle (прямоугольник), в котором в свойствах будут записаны ширина и высота.
//

//class Rectangle
//{
//    public $width;
//    public $height;
//}

//Задача 4.13
//
//В классе Rectangle сделайте метод getSquare, который будет возвращать площадь этого прямоугольника.
//

//class Rectangle
//{
//    public $width;
//    public $height;
//
//    public function getSquare()
//    {
//        return $this->height * $this->width;
//    }
//}
//
//$Rectangle = new Rectangle();
//
//$Rectangle->width = 15;
//$Rectangle->height = 20;
//
//echo $Rectangle->getSquare();

//Задача 4.14
//
//В классе Rectangle сделайте метод getPerimeter,
// который будет возвращать периметр этого прямоугольника.

//class Rectangle
//{
//    public $width;
//    public $height;
//
//    public function getSquare()
//    {
//        return $this->height * $this->width;
//    }
//
//    public function getPerimeter()
//    {
//        return $this->width * 2 + $this->height * 2;
//    }
//}
//
//$Rectangle = new Rectangle();
//
//$Rectangle->width = 15;
//$Rectangle->height = 20;
//
//echo $Rectangle->getPerimeter();