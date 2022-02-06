<?php

include 'Header.php';
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
<form action="insert_data.php" method="post">
    <h1>Add New Record</h1>
  <div class="mb-3">
    <label for="name" class="form-label">Name :</label>
    <input type="text" class="form-control" id="name" name="name" aria-describedby="name" require>
    
  </div>
  <div class="mb-3">
    <label for="address" class="form-label">Address :</label>
    <input type="text" class="form-control" id="address" name="address" require>
  </div>
  <div class="mb-3 ">
    Class : <select name="class" id="class">
       <option value="1">1</option>
       <option value="2">2</option>
       <option value="3">3</option>
       <option value="4">4</option>
   </select>

  </div>
  <div class="mb-3">
    <label for="phone" class="form-label">Phone :</label>
    <input type="number" class="form-control" id="phone" name="phone" require>
  </div>
  <input type="submit" class="btn btn-primary" value="Add" name="Add">
</form>    
</body>
</html>