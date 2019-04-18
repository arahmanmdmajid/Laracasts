<?php
abstract class shape{
    protected $color;
    public function __construct($color = 'red'){
        $this->color = $color;
    }

    public function getColor(){
        return $this->color;
    }

    abstract protected function getArea();

}

class Square extends shape{
    protected $length = 4;
    public function getArea(){
        return pow($this->length, 2);
    }
}

class Triangle extends shape{
    protected $base = 4;

    protected $height = 7;
    public function getArea(){
        return 0.5 * $this->base * $this->height;
    }
}

class Circle extends shape{

    protected $radius = 5;
    public function getArea(){
        return M_PI * pow($this->radius,2);
    }

    

}

// echo (new Square('green'))->getColor();
// echo (new Circle)->getArea();
// echo (new Triangle)->getArea();

$circle = new Circle;
echo $circle->getArea();