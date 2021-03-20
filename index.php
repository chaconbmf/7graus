<?php
    require("Shape.php");
    require("Rectangle.php");
    require("Circle.php");
    
    $obj1= new Rectangle(2,2);
    $obj1->setName("Rectangle");
    echo "area rectangle:".$obj1->calculateArea()."<pre>";
    $obj2 = new Circle(3);
    $obj2->setName("Circle");
    echo "area circle:".$obj2->calculateArea()."<pre>";
    $obj1->getOtherShape($obj2);
?>