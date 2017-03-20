<?php

require_once 'calculator.php';

class AdvancedCalculator extends Calculator {

    static public $PI = 3.14;

    const PI = 3.14;

    public function pow($num1, $num2) {
        $result = pow($num2, $num2);
        $this->history[] = "$num1 ^ $num2 equals $result";
        return $result;
    }

    public function root($num1, $num2) {
        if ($num2 != 0) {
            $result = pow($num1, 1 / $num2);
            $this->history[] = "root $num1 of $num2 equals $result";
            return $result;
        }
    }

    static public function computeCircleArea($r) {
        //$this->history[] = "fgfgd";
        return self::$PI * $r * $r;
        //return self:: PI * $r * $r;
    }

}
