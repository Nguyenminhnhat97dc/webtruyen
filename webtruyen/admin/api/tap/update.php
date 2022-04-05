<?php
 
// include database and object files
include_once "../config/database.php";
include_once "../objects/tap.php";
 
// get database connection
$database = new Database();
$db = $database->getConnection();
 
// prepare tap object
$tap = new Tap($db);
 
// set tap property values
$tap->id = $_POST['id'];
$tap->tapphim = $_POST['tapphim'];
$tap->idphim = $_POST['idphim'];
$tap->phim = $_POST['phim'];
// create the tap
if($tap->update()){
    $tap_arr=array(
        "status" => true,
        "message" => "Successfully Updated!"
    );
}
else{
    $tap_arr=array(
        "status" => false,
        "message" => "Email already exists!"
    );
}
print_r(json_encode($tap_arr));
?>