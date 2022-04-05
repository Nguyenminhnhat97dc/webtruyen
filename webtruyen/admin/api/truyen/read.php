<?php
// include database and object files
include_once "../config/database.php";
include_once "../objects/truyen.php";
 
// get database connection
$database = new Database();
$db = $database->getConnection();
 
// prepare phim object
$phim = new Truyen($db);
 
// query phim
$stmt = $phim->read();
$num = $stmt->rowCount();
// check if more than 0 record found
if($num>0){
 
    // phims array
    $phims_arr=array();
    $phims_arr["truyen"]=array();
 
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        extract($row);
        $phim_item=array(
            "IdTruyen" => $IdTruyen,
            "TenTruyen" => $TenTruyen,
            "IdLoaiTruyen" => $IdLoaiTruyen,
            "TrangThai" => $TrangThai,
            "GioiThieu" => $GioiThieu,
            "LuotXem" => $LuotXem,
            "NgayDang" => $NgayDang,
            "TacGia" => $TacGia,
        );
        array_push($phims_arr["truyen"], $phim_item);
    }
 
    echo json_encode($phims_arr["truyen"]);
}
else{
    echo json_encode(array());
}
?>