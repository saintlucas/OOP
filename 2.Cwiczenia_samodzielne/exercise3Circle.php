<?php

require_once 'ksztalt.php';

class Circle extends Shape {

    private $radius;

    public function __construct($x, $y, $color, $radius) {
        parent::__construct($x, $y, $color);
        $this->setRadius($radius);
        $this->printInfo();
    }

    public function __destruct() {
        echo "Destructed the {$this->getColor()} circle at [{$this->getX()}, {$this->getY()}]<br />";
        parent::__destruct();
    }

    public function getRadius() {
        return $this->radius;
    }

    public function setRadius($radius) {
        $this->radius = is_numeric($radius) && $radius > 0 ? $radius : 5;
    }

    public function printInfo() {
        //parent::printInfo();
        echo "$this->color circle at [$this->x, $this->y], radius = $this->radius<br>";
    }

    public function getArea() {
        return 3.14 * pow($this->radius, 2);
    }

    public function getCircumference() {
        return 2 * 3.14 * $this->radius;
    }

}

?>