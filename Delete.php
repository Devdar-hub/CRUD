<?php
include 'Header.php';
include_once 'Connection.php';
$db = new database();
if(isset($_POST['deletebtn'])){
    $Id = $_POST['id'];
    $connection = $db->getconnection();
    $query = $connection->query("DELETE FROM stdinfo WHERE Id={$Id}");
    $connection->close();
    header("Location: http://localhost/WT_Project1/index.php");

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WTP1</title>
</head>
<body>
<form method="post">
    <h1>Delete Record</h1>
  <div class="mb-3">
    <label for="name" class="form-label">Id :</label>
    <input type="text" class="form-control" id="id" name="id" aria-describedby="name" require>
  </div>
  
  
  <input type="submit" class="btn btn-primary" value="Delete" name="deletebtn">
</form> 
</body>
</html>