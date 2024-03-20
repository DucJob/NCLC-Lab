<?php
// Kết nối với class Đa Giác
require_once('DaGiac.php');
// Khởi tạo Class hình vuông
Class Vuong extends DaGiac {

    public function ChuViSquare(){
        return array_sum($this->canh);
    }

    public function DienTichSquare(){
        $canhTrai = $this->canh[0];
        // $canhPhai = $this->canh[1];
        // return $canhTrai * $canhPhai;

        return pow($canhTrai,2);
    }
}
// Phần input và dữ liệu
$canh = [6,6,6,6];
$Vuong = new Vuong($canh);
echo "Chu vi hình vuông:". $Vuong->ChuViSquare() . ",\n";
echo "Diện tích hình vuông:". $Vuong->DienTichSquare(). ",\n";
 ?>
