<?php
// include database and object files
include_once "../config/database.php";
include_once "../objects/theloai.php";
 
// get database connection
$database = new Database();
$db = $database->getConnection();
 
// prepare theloai object
$theloai = new Theloai($db);

// set ID property of theloai to be edited
$theloai->id = isset($_GET['id']) ? $_GET['id'] : die();

// read the details of theloai to be edited
$stmt = $theloai->read_single();

if($stmt->rowCount() > 0){
    // get retrieved row
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    // create array
    $theloai_arr=array(
        "id" => $row['IdLoaiTruyen'],
        "name" => $row['TenLoai'],
    );
}
// make it json format
print_r(json_encode($theloai_arr));
?>