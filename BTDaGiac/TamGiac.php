<?php
require "Main.php";
class ChuNhat {
    private $chieuRong;
    private $chieuDai;

    public function __construct($chieuRong, $chieuDai) {
        $this->chieuRong = $chieuRong;
        $this->chieuDai = $chieuDai;
    }

    public function getChuVi() {
        return 2 * ($this->chieuRong + $this->chieuDai);
    }

    public function getDienTich() {
        return $this->chieuRong * $this->chieuDai;
    }
// commit dữ liệu nhập vào ban đầu
    public function __set($chieuDai, $chieuRong) {
        $this->chieuRong = $chieuRong;
        $this->chieuDai = $chieuDai;
    }
}
?>