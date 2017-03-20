<?php

class Shape {

    private $middle;
    private $color;

    public function construct($x, $y, $color) {
        if (is_numeric($x) != true) {
            $this->x = 0;
        } else {
            $this->x = $x;
        }
        if (is_numeric($y) != true) {
            $this->y = 0;
        } else {
            $this->y = $y;
        }
        if (is_string($color)) {
            $this->color = 0;
        }
    }

}