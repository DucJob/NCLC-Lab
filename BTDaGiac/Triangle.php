<?php 
// Kết nối với file Đa Giác 
require_once('DaGiac.php');
// Khai báo Class con Tam Giác
Class TamGiac extends DaGiac {
    public function ChuViTriangle(){
        $canh1= $this->canh[0];
        $canh2= $this->canh[1];
        $canh3= $this->canh[2];
        return $canh1 + $canh2 + $canh3;
    }

    public function DienTichTriangle(){
        $canh1= $this->canh[0];
        $canh2= $this->canh[1];
        $canh3= $this->canh[2];
        $NuaC = ($canh1 + $canh2 + $canh3) /2;
        return sqrt($NuaC * ($NuaC - $canh1) * ($NuaC - $canh2) * ($NuaC - $canh3));
    }
}
$canh = [3,7,5];
$TamGiac = new TamGiac($canh);
echo "Chu vi tam giác:" . $TamGiac->ChuViTriangle(). ",\n";
echo "Diện tích tam giác:" . $TamGiac->DienTichTriangle(). "\n";
?>