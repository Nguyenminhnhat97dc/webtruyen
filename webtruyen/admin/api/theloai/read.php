<?php
// include database and object files
include_once "../config/database.php";
include_once "../objects/theloai.php";
 
// get database connection
$database = new Database();
$db = $database->getConnection();
 
// prepare theloai object
$theloai = new Theloai($db);
 
// query theloai
$stmt = $theloai->read();
$num = $stmt->rowCount();
// check if more than 0 record found
if($num>0){
 
    // theloais array
    $theloais_arr=array();
    $theloais_arr["theloais"]=array();
 
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        extract($row);
        $theloai_item=array(
            "id" => $IdLoaiTruyen,
            "name" => $TenLoai,
        );
        array_push($theloais_arr["theloais"], $theloai_item);
    }
 
    echo json_encode($theloais_arr["theloais"]);
}
else{
    echo json_encode(array());
}
?>