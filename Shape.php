<?php

interface InterfaceShape{
    public function calculateArea();
    public function getOtherShape($obj);
}
abstract class Shape implements InterfaceShape {
    const SHAPE_TYPE = 1;
    private $length=0;
    protected $width=0;
    public  $name="";
    private $id="";
    public function __construct($length,$width) {
        $this->length = (float)$length;
        $this->width = (float)$width;
        $this->id= uniqid();
    }
    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        return $this->name=$name;
    }

    public static function getShapetype(){
        return self::SHAPE_TYPE;    
    }

    protected function getLength(){
        return $this->length;    
    }

    public function getOtherShape($obj){
        
        return json_encode(array($obj,"length"=>$this->getLength()));
    }
}