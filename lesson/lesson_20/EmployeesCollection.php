<?php


class EmployeesCollection
{
    private $employees = [];

    public function addEmployee($employee)
    {
        if (!$this->exists($employee))
        {
            $this->employees[] = $employee;
        }
        else
        {
            return;
        }
    }

    private function exists($employee)
    {
        foreach ($this->employees as $elem)
        {
            if ($elem == $employee)
                return true;
        }
        return false;
    }

    public function getEmployees()
    {
        return $this->employees;
    }
}