<?php
 
// include database and object files
include_once "../config/database.php";
include_once "../objects/truyen.php";

// get database connection
$database = new Database();
$db = $database->getConnection();
 
// prepare phim object
$phim = new Truyen($db);
 
// set phim property values
$phim->IdTruyen = $_POST['id'];
 
// remove the phim
if($phim->delete()){
    $phim_arr=array(
        "status" => true,
        "message" => "Successfully Removed!"
    );
}
else{
    $phim_arr=array(
        "status" => false,
        "message" => "phim Cannot be deleted. may be he's assigned to a patient!"
    );
}
print_r(json_encode($phim_arr));
?>