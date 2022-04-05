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
$decu->IdTruyend = $_POST['id'];
$decu->DiemBTVDeCu = $_POST['DiemBTVDeCu'];
// create the decu
if($decu->update()){
    $decu_arr=array(
        "status" => true,
        "message" => "Successfully Updated!"
    );
}
else{
    $decu_arr=array(
        "status" => false,
        "message" => "Email already exists!"
    );
}
print_r(json_encode($decu_arr));
?>