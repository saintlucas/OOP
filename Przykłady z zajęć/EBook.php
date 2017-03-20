<?php

require_once 'Book.php';

class EBook extends Book{
    
    private $seizeInMB = 0;
    
    public function __construct() {
        parent::__construct();
        echo 'Tworze obiekt klasy Ebook';
        }
    public function __destruct() {
        echo 'Niszcze obiekt klasy Ebook<br>';
        parent::__destruct();
    
    }
    
    
}