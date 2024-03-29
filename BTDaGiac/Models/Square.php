<?php 
include 'Models/Polygon.php';
class square extends polygon{
    public function __construct(){
        parent::__construct(1);  
    }
    
    public function perimeter(){
        $side= $this -> side;
        return 4 * $side;
    }

    public function area() {
        $side= $this -> side;
        return pow($side,2);
    }
}

?>