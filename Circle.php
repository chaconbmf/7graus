<?php

class Circle extends Shape {
    const SHAPE_TYPE = 3;
    protected $radius=0;
    public function __construct($radius) {
        $this->radius = (float)$radius;
        $this->id= uniqid();
    }
    public static function getShapetype(){
        return self::SHAPE_TYPE;    
    }

    public function calculateArea(){
        return (pi()*pow($this->radius, 2));
    }
}