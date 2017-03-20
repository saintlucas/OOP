<?php

require_once 'AdvancedCalculator.php';

$ac1 = new AdvancedCalculator();
$ac1->add(4,50);
$ac1->root(27,3);
$ac1->pow(2,6);
$ac1->printOperations();