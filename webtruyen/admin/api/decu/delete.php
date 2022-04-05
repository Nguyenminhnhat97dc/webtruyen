<?php
 
// include database and object files
include_once "../config/database.php";
include_once "../objects/decu.php";

// get database connection
$database = new Database();
$db = $database->getConnection();
 
// prepare decu object
$decu = new Decu($db);
 
// set decu property values
$decu->IdTruyen = $_POST['id'];
 
// remove the decu
if($decu->delete()){
    $decu_arr=array(
        "status" => true,
        "message" => "Successfully Removed!"
    );
}
else{
    $decu_arr=array(
        "status" => false,
        "message" => "decu Cannot be deleted. may be he's assigned to a patient!"
    );
}
print_r(json_encode($decu_arr));
?>