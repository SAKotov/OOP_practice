<?php


class Arr_lesson_14
{
    public $number = [];

    public function add($num)
    {
        $this->number[] = $num;
        return $this;
    }

    public function getNumber()
    {
//      return array_sum($this->number);
        return array_sum($this->number);
    }

    public function append($arr = [])
    {
        $this->number = array_merge($this->number, $arr);
        return $this;
    }
}

