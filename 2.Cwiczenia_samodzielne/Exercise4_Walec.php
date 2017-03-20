<?php

require_once 'exercise3Circle.php';

class Cylinder extends Circle {

    static public $test = 0;

    //public $height = 0;

    public function construct($x, $y, $color, $radius, $height) {
        parent::__construct($x, $y, $color, $radius);
        $this->setHeight($height);
        $this->printInfo();
    }

    public function __destruct() {
        echo "Destructed the {$this->getColor()} circle at [{$this->getX()}, {$this->getY()}]<br />";
        parent::__destruct();
    }

    public function setHight($height) {
        if (is_numeric($height) == true && $height > 0) {
            $this->height = $height;
        } else {
            $this->height = 0;
        }
        return $this;
    }

    public function volume() {

        $result = $this->surfaceArea() * $this->height;
        return $result;
    }

    public function getHeight() {
        return $this->height;
    }

    static public function example1() {
        self::$test = new Cylinder(1, 1, 'green', 1, 1);
    }

}
