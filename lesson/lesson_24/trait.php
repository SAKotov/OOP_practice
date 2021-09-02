<?php

trait Helper
{
    private $name;
    private $age;

    public function getName()
    {
        return $this->name;
    }

    public function getAge()
    {
        return $this->age;
    }
}

trait Trait1
{
    private function method1()
    {
        return 1;
    }

    private function method4()
    {
        return 3;
    }
}

trait Trait2
{
    private function method2()
    {
        return 2;
    }

    private function method4()
    {
        return 5;
    }
}
trait Trait3
{
    private function method3()
    {
        return 3;
    }

    private function method4()
    {
        return 7;
    }
}