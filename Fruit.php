<?php

class Fruit{

    private $trees=[];
    private $sumApple;
    private $sumPear;



    public function __construct($apple, $pear,$randomApple,$randomPear)
    {
        for ($i = 0; $i < $apple; $i++)
        $trees['apple'][$i]=random_int($randomApple[0],$randomApple[1]);

        for ($i = 0; $i < $pear; $i++)
        $trees['pear'][$i]=random_int($randomPear[0],$randomPear[1]);
        $this->trees=$trees;
    }

    public function SumFruit()
    {
        $trees=$this->trees;
        $this->sumApple = array_sum($trees['apple']);
        $this->sumPear = array_sum($trees['pear']);

    }

    public function printSumFruit()
    {
        echo 'Количсество яблок'.$this->sumApple.PHP_EOL;
        echo 'Количество груш'.$this->sumPear.PHP_EOL;
    }

}