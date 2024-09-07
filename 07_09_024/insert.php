<?php  
require_once "db_config.php";

$serializedData = $_POST['mydata'];
parse_str($serializedData,$data);

$name = $data['name'];
$gender = $data['gender'];
$dob = $data['dob'];
$email = $data['email'];
$phone = $data['phone'];
$address = $data['address'];


$result = $connect->query("INSERT INTO students VALUES(NULL,'$name','$gender','$dob','$email','$phone','$address')");

if($connect->affected_rows){
echo "Successfully Inserted";
}



?>