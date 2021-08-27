<?php
require_once 'Employee.php';

class Driver extends Employee
{
    private $experience;
    private $category;

    public function setExp($experience)
    {
        $this->experience = $experience;
    }

    public function setCat($category)
    {
        $this->category = $category;
    }

    public function getExp()
    {
        return $this->experience;
    }

    public function getCat()
    {
        return $this->category;
    }
}