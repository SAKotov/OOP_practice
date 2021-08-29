<?php


class Employee
{
    private $name;
    private $surname;
    private $post;

    public function __construct($name, $surname, $post)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->post = $post;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getSurname()
    {
        return $this->surname;
    }

    public function getPost()
    {
        return $this->post;
    }

    public function changePost($post)
    {
        $this->post = $post;
    }
}