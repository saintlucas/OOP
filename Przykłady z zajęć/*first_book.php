<?php

require_once 'Book.php';

$book1 = new Book();            //stworzenie nowego obiektu klasy Book - wywołanie konstruktora

$book1->setAuthor("Author 1"); //na rzecz obiektu book1 o atrybucie klasy author dopisujemy wartosc Author1
$book1->setName("secondname");     //operator -> służy nam do odwołania się w obiekcie do artybutu klasy 
$book1->setPrice(100);

//$book1->setCatalogNumber(35); // próba dostepu do prywatnego atrybutu

echo $book1->getPrice();
$book1->printInformation();

$className = "Book";
$book2 = new $className(); // stworzenie nowego obiekktu klasy o nazwie podanej w zmiennej $className - wywołanie konstruktora
$book2->pages = 98;
$book2->setPrice(55)->setAuthor("Author 2");

//$book1 = null; //wywołanie desktruktora

$book2->printInformation();

//var_dump($book1);
//var_dump($book2);

$book3 = new Book('Book 3', 55.99, 'Author 3');
$book3->printInformation();
