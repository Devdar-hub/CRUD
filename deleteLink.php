<?php

include_once 'Connection.php';
$db = new database();

if(isset($_GET['Id'])){
    $Id = $_GET['Id'];
    $connection = $db->getconnection();
    $query = $connection->query("DELETE FROM stdinfo WHERE Id={$Id}");
    $connection->close();
    header("Location: http://localhost/WT_Project1/index.php");

}
?>

