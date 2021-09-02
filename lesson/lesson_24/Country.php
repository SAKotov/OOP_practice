<?php

class Country
{

    use Helper, Trait1, Trait2, Trait3
    {
        Trait1::method4 insteadof Trait2;
        Trait1::method4 insteadof Trait3;
        Trait2::method4 as method5;
        Trait3::method4 as method6;
    }

    public $population;

    public function __construct($name, $age, $population)
    {
        $this->name = $name;
        $this->age = $age;
        $this->population = $population;
    }

    public function getPopulation()
    {
        return $this->population;
    }

    public function getSum()
    {
        return $this->method1() + $this->method2() + $this->method3();
    }

    public function getSum1()
    {
        return $this->method4() + $this->method5() + $this->method6();
    }

}
