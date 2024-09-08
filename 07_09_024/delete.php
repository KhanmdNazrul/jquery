<?php require_once "db_config.php";




$id = $_POST['id'];

$delete = $connect->query("DELETE FROM students WHERE id ='$id'");

if ($delete) {
    echo "Successfully Deleted";
}
