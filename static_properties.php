<?php

    class pi {
        public static $value = 3.14; // Static property to hold the value of pi
    }

    class circle extends pi {
        public function  circleArea() {
            return parent:: $value;  // Accessing the static property from the parent class
        }
    }

    $circle = new circle();
    $circleArea = $circle->circleArea();
    echo "The value of pi is: " . $circleArea;

?>
