<?php 

abstract class polygon {
    protected $side;
    // protected $numberSides;

    public function __construct($side){
        // $this->Sides = $Sides;
        $this->side = array();
        // $this->numberSides = $numberSides;
        
    }

    public function set($side) {
        $this->side[] = $side;
    }

    // public function setSides($Height, $Weight){
    //     $this-> Height = $Height;
    //     $this-> Weight = $Weight;
    // }

    abstract public function perimeter();
    abstract public function area();
}

?>