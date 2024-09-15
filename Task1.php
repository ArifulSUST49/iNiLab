
<?php
                      //This is task NO:1//


// Abstract base class representing a general Shape
abstract class Shape {
    // Abstract method for calculating the area of the shape
    abstract public function calculateArea();
}

// Circle class inheriting from Shape
class Circle extends Shape {
    private $radius;
    
    // Constructor to initialize the radius
    public function __construct($radius) {
        $this->radius = $radius;
    }
    
    // Overriding the calculateArea method to compute the area of the circle
    public function calculateArea() {
        return pi() * $this->radius * $this->radius;
    }
}

// Rectangle class inheriting from Shape
class Rectangle extends Shape {
    private $width;
    private $height;
    
    // Constructor to initialize width and height
    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }
    
    // Overriding the calculateArea method to compute the area of the rectangle
    public function calculateArea() {
        return $this->width * $this->height;
    }
}

// Testing the implementation
$circle = new Circle(7); // Circle with radius 7
$rectangle = new Rectangle(5, 10); // Rectangle with width 5 and height 10

// Output the areas
echo "Area of the circle: " . $circle->calculateArea() . "\n";    // Output: Area of the circle: 153.9380400259
echo "Area of the rectangle: " . $rectangle->calculateArea() . "\n";  // Output: Area of the rectangle: 50

?>