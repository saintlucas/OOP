<?php

require_once 'exercise1wektor.php';

$wektor1 = new Wektor(1, 2);
$wektor2 = new Wektor(3, 4);



var_dump($wektor1);
var_dump($wektor1->lenght());
$wektor1->addingSecondWetor($wektor2);
var_dump($wektor1->addingSecondWetor($wektor2));
$wektor1->scalarMultiply($wektor2);

echo ('<br>');

var_dump($wektor1->scalarMultiply($wektor2));


/*
require_once 'wektor.php';

$wektor1 = new Wektor(10, 10);

$wektor2 = new Wektor(10,10);

//$wektor1->setx(20);

var_dump($wektor1);


// $wektor1->lenght(4,5);
var_dump($wektor1->lenght());

$wektor1->addingSecondWetor($wektor2);

var_dump($wektor1->addingSecondWetor($wektor2));

$wektor1->scalarMultiply($wektor2);

echo ('<br>');

var_dump($wektor1->scalarMultiply($wektor2));
*/


