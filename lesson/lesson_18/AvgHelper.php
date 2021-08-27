<?php


class AvgHelper
{
    public function getAvg($arr = [])
    {
        return array_sum($arr) / count($arr);
    }

    public function getMeanSquare($arr = [])
    {
        $sum = 0;

        foreach ($arr as $item) {
            $sum += pow($item, 2);
        }
        $sum = $sum / count($arr);

        return sqrt($sum);
    }


}

