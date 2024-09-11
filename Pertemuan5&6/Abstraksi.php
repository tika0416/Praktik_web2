<?php
abstract class Shape {
    abstract public function area();
}
class Retangle extends Shape {
    private $width;
    private $height;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }
    public function area() {
        $this->width * $this->height;
    }
}

class Circle extends Shape {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }
    public function area() {
        return pi() * pow($this->radius, 2);
    }
}

$rectangle = new Retangle(5,10);
echo "Area of rectangle: <br> " . $rectangle->area(); //output 

$circle = new Circle(7);
echo "Area of Circle: " . $circle->area(); //output
?>