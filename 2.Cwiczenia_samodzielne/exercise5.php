<?php

require_once 'Product.php';
require_once 'Scanner.php';

$s = new Scanner();
$woda = new Product(2, 'woda', 1232, 1.99);
$sol = new Product(10, 'sól', 65433, 0.85);
$chleb = new Product(3, 'chleb', 44532, 3.20);
$s->addProduct($woda);
$s->addProduct($sol);
$s->addProduct($chleb);
$s->addProduct($chleb);
//var_dump($chleb); 
$s->addProduct($chleb);
$s->removeProduct(65433); //remove product with id = 65433 which is 'woda'
$s->removeProduct(43); //remove product with id = 43 which does not exists in product list
$s->changeQuantity(1232, 3); //change quantity of product 1232 to 3
$s->printReceipt();
