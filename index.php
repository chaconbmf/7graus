<?php
    require("Shape.php");
    require("Rectangle.php");
    require("Circle.php");
    
    $obj1= new Rectangle(2,2);
    $obj1->setName("Rectangle");
    echo $obj1->calculateArea()."<pre>";
    $obj2 = new Circle(3);
    $obj2->setName("Circle");
    echo $obj2->calculateArea()."<pre>";
    echo $obj1->getOtherShape($obj2);
?>