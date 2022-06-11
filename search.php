
<?php
    
    $servername ="localhost"; 
    $username = "root";
    $password = "";
    $database = "quan_ly_sinh_vien";


    $connect = mysqli_connect($servername,$username,$password,$database);
    if(!$connect)    {
        die("Connect failed :" . mysqli_connect_error($connect));
    }
    //echo "Kết nối thành công";


    $student1 = $_POST["student"];

    //echo $student1;

    $sql = "select  * from sinhvien where TenSV = '$student1'  ";

    $result = mysqli_query($connect, $sql);

    
    if(!$result) {
        die("Câu truy vấn bị sai !");
     } 

    
    while ($row = mysqli_fetch_assoc($result)){
        
        $MaSV =  $row["MaSV"];
        $TenSV =  $row["TenSV"];
        $GioiTinh =  $row["GioiTinh"];
        $NgaySinh =  $row["NgaySinh"];
        $QueQuan =  $row["QueQuan"];
        $MaLop =  $row["MaLop"];
        $GhiChu =  $row["GhiChu"];

    }
   
        
    mysqli_close($connect);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="update.php" method="post">
        <label for="MaSV">Mã sinh viên </label>
        <input type="text" name="MaSV" value="<?=$MaSV?>"><br>
        <label for="HoTen">Tên sinh viên </label>
        <input type="text" name="HoTen" value="<?=$TenSV?>"><br>
        <label for="GioiTinh">Giới tính </label>
        <input type="text" name="GioiTinh" value="<?=$GioiTinh?>"><br>
        <label for="NgaySinh">Ngày sinh</label>
        <input type="text" name="NgaySinh" value="<?=$NgaySinh?>"><br>
        <label for="QueQuan">Quê quán</label>
        <input type="text" name="QueQuan" value="<?=$QueQuan?>"><br>
        <label for="MaLop">Mã lớp</label>
        <input type="text" name="MaLop" value="<?=$MaLop?>"><br>
        <label for="GhiChu">Ghi chú </label>
        <input type="text" name="GhiChu" value="<?=$GhiChu?>"><br>
        <input type="submit" value="submit">
    </form>
    <form action="delete.php" method="post">
        <label for="MaSV">Nhập mã sinh viên bạn muốn xóa: </label>
        <input type="text" name="MSV" value="<?=$MaSV?>"><br>
        <input type="submit" value="delete">
    </form>

    <form action="create.php" method="post">
        <h2>Create new student</h2>
        <input type="submit" value="Tạo">
    </form>
</body>
</html>
