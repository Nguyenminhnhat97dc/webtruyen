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
$theloai->name = $_POST['name'];
// create the theloai
if($theloai->update()){
    $theloai_arr=array(
        "status" => true,
        "message" => "Successfully Updated!"
    );
}
else{
    $theloai_arr=array(
        "status" => false,
        "message" => "Email already exists!"
    );
}
print_r(json_encode($theloai_arr));
?>