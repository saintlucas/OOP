<?php

class Shape {

    protected $x;
    protected $y;
    protected $color;

    public function __construct($newX, $newY, $newColor) {
        $this->x = is_numeric($newX) ? $newX : 0;
        $this->y = is_numeric($newY) ? $newY : 0;
        $this->color = is_string($newColor) ? $newColor : '';

        self::printInfo(); // use self instead of $this
    }

    public function __destruct() {
        echo "Zniszczono $this->color kształt o środku [$this->x, $this->y]<br>";
    }

    public function getX() {
        return $this->x;
    }

    public function getY() {
        return $this->y;
    }

    public function getColor() {
        return $this->color;
    }

    public function printInfo() {
        echo "$this->color kształt o środku [$this->x, $this->y]<br>";
    }

    public function getDistanceTo(Shape $s) {
        $powX = pow($this->x - $s->x, 2);
        $powY = pow($this->y - $s->y, 2);
        return sqrt($powX + $powY);
    }

}
