
 <?php 

 // Kết nối CSDL
$servername ="localhost"; 
$username = "root";
$password = "";
$database = "quan_ly_sinh_vien";

$connect = mysqli_connect($servername,$username,$password,$database);

// Lấy giá trị trong hàm input
$masv = $_POST["MaSV"] ;   
$tensv = $_POST["HoTen"];
$gioitinh = $_POST["GioiTinh"];
$ngaysinh = $_POST["NgaySinh"];
$quequan = $_POST["QueQuan"];
$malop = $_POST["MaLop"];
$ghichu = $_POST["GhiChu"];


//$sql = "UPDATE `sinhvien` SET `TenSV` = 'Thanh', `GioiTinh` = 'Nữ', `NgaySinh` = '4/7/2004', `QueQuan` = 'Yên Thành', `MaLop` = '2', `GhiChu` = 'Học giỏi' WHERE `sinhvien`.`MaSV` = 5";
$sql = "UPDATE `sinhvien` SET `TenSV` = '$tensv', `GioiTinh` = '$gioitinh', `NgaySinh` = '$ngaysinh', `QueQuan` = '$quequan', `MaLop` = '$malop', `GhiChu` = '$ghichu' WHERE `sinhvien`.`MaSV` = '$masv'";
$result = mysqli_query($connect,$sql);
echo ("Cập nhật thành công !");
mysqli_close($connect);
?> 