<?php
// include("Views/Index.php");
class triangle extends polygon {
    public $triHeight;

    public function __construct() {
        parent::__construct(3);
        // $this-> bottomEdge = $side[0];
        // $this-> sidea = $side[1];
        // $this-> sideb = $side[2];
    }

    public function getSides($Sides) {
        
    }   

    // public function getSides($Sides) {
    //     return
    // }  

    public function perimeter() {
       return $this->side[0] + $this->side[1] + $this->side[2];
    }

    public function area() {
        $a = $this-> side[2];
        $triHeight = $this -> triHeight;
        return (1/2) * $a * $triHeight;
    }

}

?>
