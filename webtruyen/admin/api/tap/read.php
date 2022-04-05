<?php
// include database and object files
include_once "../config/database.php";
include_once "../objects/tap.php";
 
// get database connection
$database = new Database();
$db = $database->getConnection();
 
// prepare tap object
$tap = new Tap($db);
 
// query tap
$stmt = $tap->read();
$num = $stmt->rowCount();
// check if more than 0 record found
if($num>0){
 
    // taps array
    $taps_arr=array();
    $taps_arr["taps"]=array();
 
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        extract($row);
        $tap_item=array(
            "id" => $id,
            "tapphim" => $tapphim,
            "idphim" => $idphim,
            "phim" => $phim
        );
        array_push($taps_arr["taps"], $tap_item);
    }
 
    echo json_encode($taps_arr["taps"]);
}
else{
    echo json_encode(array());
}
?>