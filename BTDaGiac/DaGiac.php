<?php
abstract class DaGiac {
    protected $canh;

    public function __construct(array $canh) {
        $this->canh = $canh;
    }

    public function ChuVi() {
        return array_sum($this->canh);
    }

    abstract public function DienTich();
}

class DaGiacDeu extends DaGiac {
    public function DienTich() {
        $ChuVi = $this->ChuVi();
        $apothem = $this->apothem();
        return ($ChuVi * $apothem) / 2;
    }

    private function apothem() {
        // Giả sử đa giác đều, công thức tính đường cao (apothem)
        $sideLength = $this->canh[0];
        $numSides = count($this->canh);
        return $sideLength / (2 * tan(pi() / $numSides));
    }
}

// Ví dụ sử dụng
$canh = [5, 5, 5, 5]; // Các cạnh của một hình vuông
$square = new DaGiacDeu($canh); 
echo "Chu vi: " . $square->ChuVi() . "\n";
echo "Diện tích: " . $square->DienTich() . "\n";
?>