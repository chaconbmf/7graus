<?php


class Rectangle extends Shape {
    const SHAPE_TYPE = 2;
    public static function getShapetype(){
        return self::SHAPE_TYPE;    
    }

    public function calculateArea(){
        $length=$this->getLength();
        return ($length*$this->width);
    }
}