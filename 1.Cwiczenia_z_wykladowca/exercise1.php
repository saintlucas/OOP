<?php

require_once 'calculator.php'; //dołączamy plik z klasą

$c1 = new calculator();

$c1->add(-5, 11);
$c1->substract(0, 1.3);
$c1->multiply(5, 9);
$c1->divide(66, 0);
$c1->divide(100, 2);

$c1->printOperations();
$c1->clearOperations();
$c1->printOperations();

$c2 = new Calculator();

$c2->substract(11, 11);
$c1->multiply(4, 5);
echo"<br>";
$c2->printOperations();




