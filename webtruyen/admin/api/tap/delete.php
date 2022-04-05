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
 
// remove the tap
if($tap->delete()){
    $tap_arr=array(
        "status" => true,
        "message" => "Successfully Removed!"
    );
}
else{
    $tap_arr=array(
        "status" => false,
        "message" => "tap Cannot be deleted. may be he's assigned to a patient!"
    );
}
print_r(json_encode($tap_arr));
?>