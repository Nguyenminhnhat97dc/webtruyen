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
$decu->idphim = $_POST['idphim'];

// create the decu
if($decu->create()){
    $decu_arr=array(
        "status" => true,
        "message" => "Successfully Signup!",
        "idphim" => $decu->idphim,
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