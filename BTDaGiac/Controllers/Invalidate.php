<?php
include('Views/Index.php');
// xử lý dữ liệu vào
    $geometry = $_POST['geometry'];

    if ($geometry === 'triangle') {
        $side[0] = $_POST['$side[0]'];
        $side[1] = $_POST['$side[1]'];
        $side[2] = $_POST['$side[2]'];
        $triHeight = $_POST['$triHeight'];
        $triangle = new $triangle($side[0],$side[1],$side[2],$triHeight);
        $perimeter= $triangle -> $perimeter();
        $area = $triangle -> $area();  
    }else if ($geometry === 'square') {
        $side = $_POST['side'];
        $square = new $square($side);
        $perimeter = $square -> $perimeter();
        $area = $square -> $area();
    }
    else if ($geometry === 'rectangler') {
        $height = $_POST['height'];
        $width = $_POST['width'];
        $rectangler = new $rectangler($height, $width);
        $perimeter = $rectangler -> $perimeter();
        $area = $rectangler -> $area();
    }
// Đây là dữ liệu vào View
    $data = array(
        'geometry' => $geometry,
        'perimeter'=> $perimeter,
        'area' => $area,
    );
?>