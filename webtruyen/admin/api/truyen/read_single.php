<?php
// include database and object files
include_once "../config/database.php";
include_once "../objects/truyen.php";
 
// get database connection
$database = new Database();
$db = $database->getConnection();
// prepare truyen object
$truyen = new Truyen($db);
// set ID property of truyen to be edited
$truyen->IdTruyen = isset($_GET['id']) ? $_GET['id'] : die();
// read the details of truyen to be edited

$stmt = $truyen->read_single();

if($stmt->rowCount() > 0){
    // get retrieved row
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    // create array
    $truyen_arr=array(
        "IdTruyen" => $row['IdTruyen'],
        "TenTruyen"=> $row['TenTruyen'],
        "TheLoai" => $row['IdLoaiTruyen'],
        "TrangThai" => $row['TrangThai'],
        "GioiThieu" => $row['GioiThieu'],
        "TacGia" => $row['TacGia'],
        "HinhAnh" => $row['HinhAnh'],
    );
}

// make it json format
print_r(json_encode($truyen_arr));

?>