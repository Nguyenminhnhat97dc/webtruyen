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
$tap->tapphim = $_POST['tapphim'];
$tap->idphim = $_POST['idphim'];
$tap->phim = $_POST['phim'];

// create the tap
if($tap->create()){
    $tap_arr=array(
        "status" => true,
        "message" => "Successfully Signup!",
        "tapphim" => $tap->tapphim,
        "idphim" => $tap->idphim,
        "phim" => $tap->phim,
        
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