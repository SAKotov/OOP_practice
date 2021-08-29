<?php


class Num
{
    public static $num1 = 2;
    public static $num2 = 3;
    private static $num3 = 2;
    private static $num4 = 3;

    public static function getSum()
    {
        return self::$num3 + self::$num4;
    }
}
