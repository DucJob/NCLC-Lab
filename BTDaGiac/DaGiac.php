<?php
// Kết nối với 2 Class Vuông và Tam Giác 
include_once ('Square.php');
include_once ('Triangle.php');
// Khởi tạo Lớp Cha Đa Giác
 abstract class DaGiac{
    protected $canh;
    protected $chiTietCanh = array();

    public function __construct(array $canh){
        $this-> canh = $canh;
    }
 }
?>