<?php
require_once 'Employee.php';

class Programmer extends Employee
{
    private $languages = [];

    public function setLang($lang = [])
    {
        $this->languages = $lang;
    }

    public function getLang()
    {
        return $this->languages;
    }
}