<?php

class Wektor {

    private $x;
    private $y;

    public function __construct($x, $y) {
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
        echo "Stworzono wektor o wartościach: " . $this->x . $this->y;
    }

    public function __destruct() {
        echo "Niszczenie klasy Wektor";
    }

    public function setx($newX) {
        if (is_numeric($newX) != true) {
            $this->x = 0;
        } else {
            $this->x = $newX;
        }
    }

    public function sety($newY) {
        if (is_numeric($newY) != true) {
            $this->y = 0;
        } else {
            $this->y = $newY;
        }
    }

    public function lenght() {
        $result = sqrt(($this->x * $this->x) + ($this->y * $this->y));
        return $result;
    }

    public function addingSecondWetor($wektor1) {
        $resultX = $this->x + $wektor1->x;
        $resulty = $this->y + $wektor1->y;
        $wektor = new Wektor($resultX, $resulty);
        return $wektor;
    }

    public function scalarMultiply($wektor1) {
        $resultX = $this->x * $wektor1->x;
        $resulty = $this->y * $wektor1->y;
        $finalResult = $resultX * $resulty;
        return $finalResult;
    }

}

/* Stwórz klasę Wektor. Powinna ona spełniać następujące wymogi:

  -Posiadać dwa prywatne atrybuty: x, y.
  -Posiadać konstruktor przyjmujący dwie zmienne, określające wartości x i y tego wektora. Pamiętaj o sprawdzeniu czy podane zmienne są liczbami (jeżeli nie są to nastaw oba na 0). Konstruktor powinien wypisywać informacje o właśnie stworzonym wektorze.
  -Posiadać destruktor który wypisuje informacje o niszczonym wektorze.
  -Posiadać funkcje umożliwiające zmianę wartości x i y (takie samo założenia jak przy konstruktorze). (seter)
  -Posiadać funkcję zwracającą długość. (public function lenght)
  -Implementować następujące funkcje:
  -Dodawanie przyjmujące jako wartość drugi Wektor,
  -Mnożenie skalarne przyjmujące jako wartość liczbę

 */
?>