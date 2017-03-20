<?php

require_once 'Bookmark.php';

class Book {
    
    protected $name;
    protected $price;
    protected $author;
    protected $catalogNumber;
    
    static public  $aNum = 0; // atrybut statyczny - na poziomie klasy
    
    const BAR = 1;
    
    public $myBookmark;

    public function __construct($newName = 'Unknown', $newPrice = 0, $newAuthor = 'Unknown', $newCatalogNumer = -1) {
        echo "Tworze obiekt klasy Book<br>";
        $this->setName($newName);
        $this->setPrice($newPrice);
        $this->setAuthor($newAuthor);
        $this->setCatalogNumber($newCatalogNumer);
        $this->myBookMark = null;
        
    }
    
    public function __destruct() {
        echo "Niszcze obiekt klasy Book<br>";
        
    }
    
    public function setPrice($newPrice){
        if(is_numeric($newPrice) && $newPrice > 0){
            $this->price = $newPrice;
        }
        return $this;
        
    }
    
    public function getPrice() {
		return $this->price;
    }
    
    public function setCatalogNumber($newCatalogNumber){
        if(is_numeric($newCatalogNumber) && $newCatalogNumber > 0){
            $this->catalogNumber = $newCatalogNumber;
        }
        return $this;
    }
    
    public function getCatalogNumber(){
        return $this->catalogNumber;
    }


    public function setName($newName){
        if(is_numeric($newName) && $newName > 0){
            $this->name = $newName;
        }
        return $this;
    }
    
    public function getName() {
		return $this->name;
    }
    
    public function setAuthor($newAuthor){
        if(is_numeric($newAuthor) && $newAuthor >0){
            $this->author = $newAuthor;
        }
         return $this;
    }
    public function getAuthor() {
		return $this->author;
    }

    public function printinformation() {
        echo "name = $this->name<br>";
        echo "price = $this->price<br>";
        echo "author = $this->author<br>";
        echo "catalogNumber = $this->catalogNumber<br>";
        if($this->myBookmark){
            echo "myBookmark = {$this->myBookmark->pageNo} <br>";
        }
    }
    
    static public function increaseaNum() {
        self::$aNUm++;
    }
    public function getBar() {
        return self::BAR;
        
    }
    public function __clone() {
        if($this->myBookmark){
            $this->myBookmark = clone $this->myBookmark;
        }
    }
}