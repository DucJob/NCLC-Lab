<?php
class Triangle extends Polygon {
    public $triHeight;

    public function __construct($Sides) {
        parent::__construct($Sides);
    }

    public function Perimeter() {
        $Sides1= $this -> Sides1;
        $Sides2= $this -> Sides2;
        $Sides3= $this -> Sides3;
        return $Sides1 + $Sides2 + $Sides3;
    }

    public function Area() {
        $a = $this -> Sides3;
        $triHeight = $this -> triHeight;
        return (1/2) * $a * $triHeight;
    }

}
?>