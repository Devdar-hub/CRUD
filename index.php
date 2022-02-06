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
<form method="post">
    <h1>Select Class</h1>
    <select name="class" id="class">
       <option value="1">1</option>
       <option value="2">2</option>
       <option value="3">3</option>
       <option value="4">4</option>
   </select>
  
  
  <input type="submit" class="btn btn-primary" value="Show" name="showbtn">
</form> 
<table class="table table-striped">
<thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">Class</th>
      <th scope="col">Phone</th>
      <th scope="col">Update</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
  <?php
  include_once 'connection.php';

  if(isset($_POST['showbtn'])){
$db = new database();
$connection = $db->getconnection();
$query = $connection->query("SELECT * FROM stdinfo WHERE Class='".$_POST['class']."'");
if(mysqli_num_rows($query) > 0){
    while($row = mysqli_fetch_assoc($query))
    {
        // print_r($row);
?>
  
    <tr>
      <th scope="row"><?php echo $row['Id'];?></th>
      <td><?php echo $row['name'];?></td>
      <td><?php echo $row['Address'];?></td>
      <td><?php echo $row['Class'];?></td>
      <td><?php echo $row['Phone'];?></td>
      <td><a href='updateLink.php?Id=<?php echo $row['Id']?>'>Update</a></td>
      <td><a href='deleteLink.php?Id=<?php echo $row['Id']?>'>Delete</a></td>
    </tr>
    
  
  <?php
    }
}
  }
  ?>
  </tbody>
</table>
</body>
</html>