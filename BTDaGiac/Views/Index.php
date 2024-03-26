<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <title>Giao diện về tính đa giác</title>
</head>
<body>
  <form method="post">
    <select name="my_select">
      <option value="1" <?php echo $_POST["hinhVuong"] ;?>>Chọn hình vuông</option>
      <option value="2"  <?php echo $_POST["tamGiac"] ;?>>Chọn hình tam giác</option>
    </select>
    <input type="submit" value="...">
  </form>

  <!-- <?php

//   $selectedPolygon= $_POST['Selected'];


//   switch ($selectedPolygon) {
//     case 1:
//       echo "Chọn hình Hình Vuông";
//       break;
//     case 2:
//       echo "Chọn hình Tam Giác";
//       break;
//   }

  ?> -->
</body>
</html>