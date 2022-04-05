<?php
// include database and object files
include_once "../config/database.php";
include_once "../objects/decu.php";
 
// get database connection
$database = new Database();
$db = $database->getConnection();
 
// prepare decu object
$decu = new Decu($db);

// set ID property of decu to be edited
$decu->IdTruyen = isset($_GET['id']) ? $_GET['id'] : die();

// read the details of decu to be edited
$stmt = $decu->read_single();

if($stmt->rowCount() > 0){
    // get retrieved row
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    // create array
    $decu_arr=array(
        "IdTruyen" => $row['IdTruyen'],
        "DiemBTVDeCu" => $row['DiemBTVDeCu'],
    );
}
// make it json format
print_r(json_encode($decu_arr));
?>