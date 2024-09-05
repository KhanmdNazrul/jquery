<?php $db = new mysqli("localhost:3306", "root","","evidence") ?>
<?php 
$id = $_GET['id'];



// $dis = [
//     2=>"Cumilla is popular for RoshMalai",
//     1=>"Dhaka Is Inherits for archaeological lyrics ",
//     3=>"Rajshahi is the city of Peace",
//     4=>"Bogra is famous for Dhoi"
// ];

// echo $dis[$id];

$data = $db->query("SELECT * FROM districts where id ='$id'");
$row = $data->fetch_assoc();

//echo $row['id']."\n";
//echo $row['city']."\n";
echo $row['popularity'];

?>