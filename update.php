<?php
require('connection.php');

if(count($_POST) > 0)
{
  $update = "UPDATE Crud_demo SET fullname='".$_POST['fullname']."', age='".$_POST['age']."',course='".$_POST['course']."',gender='".$_POST['gender']."',id_number='".$_POST['idnumber']."' WHERE id='".$_POST['id']."'";
  $res = $conn->query($update); 
  header('location:table.php'); 	
}
$sql = "SELECT * FROM Crud_demo WHERE id='".$_GET['id']."'";
$res =  $conn->query($sql); 
$row = $res->fetch_row();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Update</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body> 
  <div class="container">
   <form method="post">
    <input type="hidden" name="id"value="<?php echo $row[0]?>">	  	
    <div class="mb-3">
      <label for="fullname" class="form-label">Fullname:</label>
      <input type="text" class="form-control" id="fullname" name="fullname" value="<?php echo$row[1]?>">    
    </div>
    <div class="mb-3">
      <label for="age" class="form-label">Age:</label>
      <input type="number" class="form-control" id="age" name="age" value="<?php echo$row[2]?>">    
    </div>
    <div class="mb-3">
      <label for="course" class="form-label">Course/Year/Section:</label>
      <input type="text" class="form-control" id="course" name="course" value="<?php echo$row[3]?>">    
    </div>
    <div class="mb-3">
      <label for="gender" class="form-label">Gender:</label>
      <select name="gender" class="form-control">
        <option value="<?php echo $row[4]?>">Male</option>
        <option value="<?php echo $row[4]?>">Female</option>
      </select>
    </div>
    <div class="mb-3">
      <label for="idnumber" class="form-label">ID-Number:</label>
      <input type="text" class="form-control" id="idnumber" name="idnumber" value="<?php echo$row[5]?>">    
    </div>
    <div class="mb-3">
      <button type="submit" name="update" class="form-control btn btn-dark">Update</button>    
    </div>
  </form>
</div>
</body>
</html>
