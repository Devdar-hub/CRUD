<?php
include_once 'Connection.php';
$db = new database();
$name = $_POST['name'];
$address = $_POST['address'];
$class = $_POST['class'];
$phone = $_POST['phone'];

try{
    $connection = $db->getconnection();
    $query = $connection->query("INSERT INTO stdinfo(Name,Address,Class,Phone) VALUES ('$name','$address','$class','$phone')");
    $connection->close();
    header("Location: http://localhost/WT_Project1/index.php");
    // echo '{"res":1}';
}
catch(Exception $e){
    echo '{"res":0}';
}
?>