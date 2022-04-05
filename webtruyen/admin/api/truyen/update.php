<?php
 
// include database and object files
include_once "../config/database.php";
include_once "../objects/truyen.php";
 
// get database connection
$database = new Database();
$db = $database->getConnection();
 
// prepare truyen object
$Truyen = new Truyen($db);
 
// set truyen property values
$Truyen->IdTruyen = $_POST['IdTruyen'];
$Truyen->TenTruyen = $_POST['TenTruyen'];
$Truyen->IdLoaiTruyen = $_POST['TheLoai'];
$Truyen->TrangThai = $_POST['TrangThai'];
$Truyen->GioiThieu = $_POST['GioiThieu'];
$Truyen->TacGia = $_POST['TacGia'];
$Truyen->HinhAnh = $_POST['Anh'];
 
// create the truyen
if($Truyen->update()){
    $truyen_arr=array(
        "status" => true,
        "message" => "Successfully Updated!"
    );
}
else{
    $truyen_arr=array(
        "status" => false,
        "message" => "Email already exists!"
    );
}
print_r(json_encode($truyen_arr));
?>