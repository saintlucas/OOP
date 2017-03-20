<?php

class Calculator {

    protected $history;   //to ma być tablica

    public function __construct() {   //konstruktor a w nim zainicjowac tablice history
        $this->clearOperations();
    }

    public function add($num1, $num2) {
        $result = $num1 + $num2;
        $this->history[] = "added $num1 to $num2 got $result";
        return $result;
    }

    public function multiply($num1, $num2) {
        $result = $num1 * $num2;
        $this->history[] = "multiplied $num1 with $num2 got $result";
        return $result;
    }

    public function substract($num1, $num2) {
        $result = $num1 - $num2;
        $this->history[] = "substracted $num1 from $num2 got $result";
        return $result;
    }

    public function divide($num1, $num2) {
        if ($num2 != 0) {
            $result = $num1 / $num2;
            $this->history[] = "divided $num1 by $num2 got $result";
            return $result;
        }
    }

    public function printOperations() {
        foreach ($this->history as $operation) {
            echo $operation . '<br>';
        }
    }

    public function clearOperations() {
        $this->history = array();
    }

}
