<?php
// include database and object files
include_once "../config/database.php";
include_once "../objects/tap.php";
 
// get database connection
$database = new Database();
$db = $database->getConnection();
 
// prepare tap object
$tap = new Tap($db);

// set ID property of tap to be edited
$tap->id = isset($_GET['id']) ? $_GET['id'] : die();

// read the details of tap to be edited
$stmt = $tap->read_single();

if($stmt->rowCount() > 0){
    // get retrieved row
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    // create array
    $tap_arr=array(
        "id" => $row['id'],
        "tapphim" => $row['tapphim'],
        "idphim" => $row['idphim'],
        "phim" => $row['phim'],
    );
}
// make it json format
print_r(json_encode($tap_arr));
?>