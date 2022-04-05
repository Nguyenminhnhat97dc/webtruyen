<?php
 
// include database and object files
include_once "../config/database.php";
include_once "../objects/theloai.php";

// get database connection
$database = new Database();
$db = $database->getConnection();
 
// prepare theloai object
$theloai = new Theloai($db);
 
// set theloai property values
$theloai->id = $_POST['id'];
 
// remove the theloai
if($theloai->delete()){
    $theloai_arr=array(
        "status" => true,
        "message" => "Successfully Removed!"
    );
}
else{
    $theloai_arr=array(
        "status" => false,
        "message" => "theloai Cannot be deleted. may be he's assigned to a patient!"
    );
}
print_r(json_encode($theloai_arr));
?>