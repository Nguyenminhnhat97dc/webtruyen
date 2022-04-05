<?php
// include database and object files
include_once "../config/database.php";
include_once "../objects/decu.php";
 
// get database connection
$database = new Database();
$db = $database->getConnection();
 
// prepare decu object
$decu = new Decu($db);
 
// query decu
$stmt = $decu->read();
$num = $stmt->rowCount();
// check if more than 0 record found
if($num>0){
 
    // decus array
    $decus_arr=array();
    $decus_arr["decus"]=array();
 
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        extract($row);
        $decu_item=array(
            "IdTruyen" => $IdTruyen,
            "DiemBTVDeCu" => $DiemBTVDeCu,
        );
        array_push($decus_arr["decus"], $decu_item);
    }
 
    echo  json_encode($decus_arr["decus"]);
}
else{
    echo json_encode(array());
}
?>