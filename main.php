<?php

require_once 'Fruit.php';


$apple = 10;
$pear = 15;
$randomApple=[40,50];
$randomPear=[0,20];

$Fruit = new Fruit($apple,$pear,$randomApple,$randomPear);
$Fruit->SumFruit();
$Fruit->printSumFruit();

// print_r($SumFruit);