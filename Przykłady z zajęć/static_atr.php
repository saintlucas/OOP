<?php
 require_once 'Book.php';
 
 var_dump(Book::$aNum);
 
 Book::$aNum = 4;
 var_dump(Book::$aNum);
 
 $b1 = new Book();
 var_dump($b1::$aNum);
 
 Book::increaseANum();
 var_dump(Book::$aNum);
 
 var_dump(Book::BAR);
 var_dump($b1->getBar());
 
 
 
