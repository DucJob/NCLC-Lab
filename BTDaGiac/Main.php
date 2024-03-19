<?php
// liên kết trang tính tam giác
require "TamGiac.php";

// Sử dụng lớp Rectangle
$ChuNhat = new ChuNhat(5, 3);
echo "Chu vi hình chữ nhật: " . $ChuNhat->getChuVi() . "<br>";
echo "Diện tích hình chữ nhật: " . $ChuNhat->getDienTich();
?>