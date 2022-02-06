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


<?php
include_once 'Connection.php';
if(isset($_GET['Id']))
{
    $db = new database();
    $connection = $db->getconnection();
    $query = $connection->query("SELECT * FROM stdinfo WHERE Id='".$_GET['Id']."' ");
    $connection->close();
    
    if(mysqli_num_rows($query) > 0)
    {
        while($row = mysqli_fetch_assoc($query))
        {       
            // print_r($row);
    
?>

<form action="update_data.php" method="post">
    <h1>Update Record</h1>
  <div class="mb-3">
    <label for="name" class="form-label">Name :</label>
    <input type="hidden" name="Id" value="<?php echo $row['Id']; ?>">
    <input type="text" class="form-control" id="name" name="name" aria-describedby="name" value="<?php echo $row['name']; ?>" require>
    
  </div>
  <div class="mb-3">
    <label for="address" class="form-label">Address :</label>
    <input type="text" class="form-control" id="address" name="address" value="<?php echo $row['Address']; ?>" require>
  </div>
  <div class="mb-3 ">
    Class : <select name="class" id="class">
       <option value="<?php echo $row['Class'] ?>">1</option>
   </select>

  </div>
  <div class="mb-3">
    <label for="phone" class="form-label">Phone :</label>
    <input type="number" class="form-control" id="phone" value="<?php echo $row['Phone'] ?>" name="phone" require>
  </div>
  <input type="submit" class="btn btn-primary" value="Update" name="update">
</form>  


<?php
    };
}

}
?>
</body>
</html>