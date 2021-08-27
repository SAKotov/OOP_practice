<?php
require_once 'SumHelper.php';
require_once 'AvgHelper.php';

class Arr
{
    private $nums = [];

    public function add($num)
    {
        $this->nums[] = $num;
    }

    public function __construct()
    {
        $this->sumHelper = new SumHelper();
        $this->avgHelper = new AvgHelper();
    }

    public function getSum23()
    {
        $nums = $this->nums;

        return $this->sumHelper->getSum2($nums) + $this->sumHelper->getSum3($nums);
    }

    public function getAvgMeanSum()
    {
        $nums = $this->nums;
        return $this->avgHelper->getAvg($nums) + $this->avgHelper->getMeanSquare($nums);
    }
}