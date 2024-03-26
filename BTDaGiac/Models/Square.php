<?php 
include 'Models/Polygon.php';
class Square extends Polygon{
    public function __construct($Sides){
        parent::__construct($Sides);   
    }

    public function Perimeter(){
        $Sides= $this -> Sides;
        return 4 * $Sides;
    }

    public function Area() {
        $Sides= $this -> Sides;
        return pow($Sides,2);
    }
}

$Sides = [6,6,6,6];
$Square = new Square($Sides);
echo "Chu vi hình vuông:". $Square->Perimeter() . ",\n";
echo "Diện tích hình vuông:". $Square->Area(). ",\n";
?>