<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bài tập Đa giác from Duc</title>
</head>
<body>
<!-- Note: Về phần select bar -->
<b>Trang tính chu vi và diện tích Đa Giác</b>
<form action="" method="POST">
  <div class="form-home">
    <label for="">Chọn hình Đa Giác cần tính</label>
    <br>
    <select name="lstPolygon" id="lstPolygon" onchange="getvalue(event)">
      <option disabled selected>Chọn hình để tính</option>
      <option value="intri">Hình Tam Giác</option>
      <option value="insqua">Hình Vuông</option>
      <option value="inrec">Hình Chữ Nhật</option>
    </select>
  </div>
</form>
<!-- Note: Về phần Input chỉ số hình -->
<form action="" method="get">
<div class="form-triangle">
    <label for="">Nhập thông số hình tam giác</label>
    <br>
    <label for="Side-a">Cạnh A:</label>
    <input id="Side-a" name="Side-a" type="number" required> 
    <br>
    <label for="Side-b">Cạnh B:</label>
    <input id="Side-b" name="Side-b" type="number" required> 
    <br>
    <label for="Side-c">Cạnh C:</label>
    <input id="Side-c" name="Side-c" type="number" required> 
    <br>
    <label for="Tri-hright">Chiều cao:</label>
    <input id="Tri-hright" name="Tri-hright" type="number" required> 
    
  </div>
  <div class="form-square">
    <label for="">Nhập thông số hình vuông</label>
    <br>
    <label for="Side">Cạnh:</label>
    <input id="Side" name="Side" type="number" required> 
  </div>
  <div class="form-rectangle">
    <label for="">Nhập thông số hình chữ nhật</label>
    <br>
    <label for="height">Chiều dài:</label>
    <input id="height" name="height" type="number" required> 
    <br>
    <label for="width">Chiều rộng:</label>
    <input id="width" name="width" type="number" required> 
  </div>
  <button type="submit">Xác nhận lựa chọn</button>
</form>


<!-- Note: Phần Script nhận dữ liệu -->
<script>
  function getvalue(e) {
    document.getElementById("input").value = e.hidden.value
}

const soCanhInput = document.getElementById('so-canh');
    const nhapCanhDiv = document.getElementById('nhap-canh');

    soCanhInput.addEventListener('change', () => {
        const soCanh = soCanhInput.value;
        nhapCanhDiv.innerHTML = '';
        for (let i = 0; i < soCanh; i++) {
            nhapCanhDiv.innerHTML += `
                <label for="canh-${i}">Cạnh ${i + 1}:</label>
                <input type="number" name="canh-${i}" id="canh-${i}" required>
                <br><br>
            `;
        }
    });
</script>
<!-- Note: Sử dụng Explode Function để nhận giá trị mảng  -->
<?php 
// include("Controllers/Invalidate.php");
$input  = $_POST['intri'];
$input_arr = explode(" ", $input);
echo $side[0]; 
echo $side[1];
echo $side[2];
echo $triHeight;

$input  = $_POST['insqua'];
$input_arr = explode(" ", $input);
echo $side;

$input  = $_POST['inrec'];
$input_arr = explode(" ", $input);
echo $height; 
echo $width;

if (isset($perimeter) && isset($area)) {
  echo "<h2>Kết quả</h2>";
  echo "<p>Chu vi: $perimeter</p>";
  echo "<p>Diện tích: $area</p>";
}
?>


</body>
</html>

