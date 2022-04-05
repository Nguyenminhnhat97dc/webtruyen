<?php
 
// include database and object files
include_once "../config/database.php";
include_once "../objects/truyen.php";

// get database connection
$database = new Database();
$db = $database->getConnection();
 
// prepare phim object
$Truyen = new Truyen($db);
 
// set phim property values
$Truyen->TenTruyen = $_POST['TenTruyen'];
$Truyen->IdLoaiTruyen = $_POST['TheLoai'];
$Truyen->TrangThai = $_POST['TrangThai'];
$Truyen->GioiThieu = $_POST['GioiThieu'];
$Truyen->TacGia = $_POST['TacGia'];
$Truyen->HinhAnh = $_POST['Anh'];


// create the phim
if($Truyen->create()){
    $Truyen_arr=array(
        "status" => true,
        "message" => "Successfully Signup!",
        "TenTruyen" => $Truyen->TenTruyen,
        "TheLoai" => $Truyen->IdLoaiTruyen,
        "TrangThai" => $Truyen->TrangThai,
        "GioiThieu" => $Truyen->GioiThieu,
        "TacGia" => $Truyen->TacGia,
        "Anh" => $Truyen->HinhAnh,
    );
}
else{
    $Truyen_arr=array(
        "status" => false,
        "message" => "Truyện Đã Tồn Tại!"
    );
}
print_r(json_encode($Truyen_arr));
?>