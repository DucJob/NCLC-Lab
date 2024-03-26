<?php 
require 'Models/Square.php';
abstract class Polygon {
    protected $Sides;
    // protected $numberSides;

    public function __construct($Sides){
        $this->Sides = $Sides;
        // $this->Sides = array();
        
    }

    // public function setSides($Height, $Weight){
    //     $this-> Height = $Height;
    //     $this-> Weight = $Weight;
    // }

    abstract public function Perimeter();
    abstract public function Area();
}
$Sides = [3,7,5];
$Triangle = new Triangle($Sides);
echo "Chu vi tam giác:" . $Triangle->Perimeter(). ",\n";
echo "Diện tích tam giác:" . $Triangle->Area(). "\n";
?>