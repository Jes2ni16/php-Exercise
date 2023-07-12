<?php
abstract class Shape {
    protected $name;
    abstract public function description();
}

interface IShape {
  public function getArea($length, $width);
  public function getPerimeter($length, $width);
}
interface  IShapeExtra extends IShape {
    public function getPerimeterExtra($length, $width,$side3);
}


//square class
class Square extends Shape implements IShape{
public function description(){
    return "Square have four equal sides";
}
public function getArea($length, $width){
    if($length===$width){
        return $length*$width;
    }
    else{
        return "invalid as length and width needs to be equal";
    }
}
public function getPerimeter($length, $width){
    if($length===$width){
        return $length*$width;
    }
    else{
        return "invalid as length and width needs to be equal";
}
}
}

//rectangle class

//square class
class Rectangle extends Shape implements IShape{
    public function description(){
        return "Rectangle have two equal side";
    }
    public function getArea($length, $width){
            return $length*$width;       
    }
    public function getPerimeter($length, $width){ 
            return 2* ($length*$width);
    }
    }

//triangle class
class Triangle extends Shape implements IShape,IShapeExtra{

    public function description(){
        return "Triangle have three sides.";
    }
    public function getArea($length, $width){
            return ($length*$width)/2;       
    }
     public function getPerimeter($length, $width){
        return '';
     }
    public function getPerimeterExtra($length, $width,$side3){ 
            return $width +$length +$side3;
    }
    }


    //circle class
    class Circle extends Shape implements IShape{
        
        public function description(){
            return "Circle have no sides only curve.";
        }
        public function getArea($length, $width = null) {
            return pi() * pow($length, 2)+$width;
        }
        public function getPerimeter($length, $width=null){ 
          
                return 2 * M_PI * $length;
        }
        }

        $shape1 = new Square();
        echo $shape1->description(); 
        echo "<br>";
        echo $shape1->getArea(4,4); 
        echo "<br>";
        echo $shape1->getArea(4,3); 
        echo "<br>";
        echo $shape1->getPerimeter(4,4);
        echo "<br>";
        echo $shape1->getPerimeter(4,3); 
        echo "<br>";
        echo "<br>";

        $shape2 = new Rectangle();
        echo $shape2->description(); 
        echo "<br>";
        echo $shape2->getArea(4,6); 
        echo "<br>";
        echo $shape2->getPerimeter(4,6); 
        echo "<br>";

        echo "<br>";
        echo "<br>";

        $shape3 = new Triangle();
echo $shape3->description();
echo "<br>";
echo $shape3->getArea(4,6); 
echo "<br>";
echo $shape3->getPerimeterExtra(4,6,7);
echo "<br>"; 

echo "<br>"; 
echo "<br>"; 

$shape4 = new Circle();
echo $shape4->description();
echo "<br>"; 
echo $shape4->getArea(5); 
echo "<br>"; 
echo $shape4->getPerimeter(5); 
        
        

