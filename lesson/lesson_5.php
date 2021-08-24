<?php
//Задача 6.1
//
//Не подсматривая в мой код внесите такие же правки в класс User.
//

//class User
//{
//    public $age;
//    public $name;
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
//
//    public function subtractAge($years)
//    {
//        $newAge = $this->age - $years;
//
//        if ($this->checkAge($newAge))
//        {
//            $this->age = $newAge;
//        }
//    }
//
//    private function checkAge($age)
//    {
//        return $age >= 18 && $age <= 60;
//    }
//}

//Задача 6.2
//
//Попробуйте вызвать метод isAgeCorrect снаружи класса. Убедитесь, что это будет вызывать ошибку.
//

//$user = new User();
//
//$user-> checkAge(12);

//Задача 6.3
//
//Сделайте класс Student со свойствами $name и $course (курс студента, от 1-го до 5-го).
//

//class Student
//{
//    public $name;
//    public $course;
//
//}

//Задача 6.4
//
//В классе Student сделайте public метод transferToNextCourse,
// который будет переводить студента на следующий курс.
//

//class Student
//{
//    public $name;
//    public $course;
//
//    public function transferToNextCourse()
//    {
//        $nextCourse = $this->course + 1;
//        $this->course = $nextCourse;
//    }
//}
//
//$Student = new Student();
//
//echo $Student->course;
//
//$Student->transferToNextCourse();
//
//echo $Student->course;

//Задача 6.5
//
//Выполните в методе transferToNextCourse проверку на то, что следующий курс не больше 5.
//
//Задача 6.6
//
//Вынесите проверку курса в отдельный private метод isCourseCorrect.