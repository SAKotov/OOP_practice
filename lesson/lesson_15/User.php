<?php


class User
{
    private $age;
    private $name;

    public function getAge()
    {
        return $this->age;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
}