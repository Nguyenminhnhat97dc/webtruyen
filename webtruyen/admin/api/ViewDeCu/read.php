<?php
// include database and object files
include_once "../config/database.php";
include_once "../objects/ViewDeCu.php";
 
// get database connection
$database = new Database();
$db = $database->getConnection();
 
// prepare xephang object
$xephang = new ViewDeCu($db);
 
// query xephang
$stmt = $xephang->read();
$num = $stmt->rowCount();
// check if more than 0 record found
if($num>0){
 
    // xephangs array
    $xephangs_arr=array();
    $xephangs_arr["xephangs"]=array();
 
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        extract($row);
        $xephang_item=array(
            "IdTruyen" => $IdTruyen,
            "TenTruyen" => $TenTruyen,
            "IdLoaiTruyen" => $IdLoaiTruyen,
            "TrangThai" => $TrangThai,
            "GioiThieu" => $GioiThieu,
            "LuotXem" => $LuotXem,
            "NgayDang" => $NgayDang,
            "TacGia" => $TacGia,
        );
        array_push($xephangs_arr["xephangs"], $xephang_item);
    }
 
    echo json_encode($xephangs_arr["xephangs"]);
}
else{
    echo json_encode(array());
}
?>