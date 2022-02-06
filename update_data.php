<?php
include_once 'Connection.php';
$db = new database();
$name = $_POST['name'];
$address = $_POST['address'];
$class = $_POST['class'];
$phone = $_POST['phone'];
$Id = $_POST['Id'];

try{
    $connection = $db->getconnection();
    $query = $connection->query("UPDATE stdinfo SET name = '{$name}', Address = '{$address}',Class = '{$class}', Phone = '{$phone}' WHERE Id = {$Id}");    $connection->close();
    header("Location: http://localhost/WT_Project1/index.php");
    // echo '{"res":1}';
}
catch(Exception $e){
    echo '{"res":0}';
}
?>