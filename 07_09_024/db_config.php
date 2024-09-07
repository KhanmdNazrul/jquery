<?php  

$host = "localhost:3306";
$user = "root";
$pass = "";
$db = "evidence";

$connect = new mysqli($host,$user,$pass,$db);

if($connect->connect_error){
    echo "Connecting Failed". $connect->connect_error;
    exit();
}

?>