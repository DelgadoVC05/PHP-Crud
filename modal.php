<?php require('connection.php');
if(isset($_POST['save'])){
  $fullname = $_POST['fullname'];
  $age = $_POST['age'];
  $course = $_POST['course'];
  $gender = $_POST['gender'];
  $id_number = $_POST['idnumber'];

  $sql = "INSERT INTO Crud_Demo(fullname,age,course,gender,id_number)VALUES('$fullname',$age,'$course','$gender','$id_number')";

  $res = $conn->query($sql);
  if($res)
  {
    echo"Student added successfully";

  }
}
?>
<div class="modal fade" id="student" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New Student</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <form method="post">
        <div class="mb-3">
          <label for="fullname" class="form-label">Fullname:</label>
          <input type="text" class="form-control" id="fullname" name="fullname">    
        </div>
        <div class="mb-3">
          <label for="age" class="form-label">Age:</label>
          <input type="number" class="form-control" id="age" name="age">    
        </div>
        <div class="mb-3">
          <label for="course" class="form-label">Course/Year/Section:</label>
          <input type="text" class="form-control" id="course" name="course">    
        </div>
          <div class="mb-3">
          <label for="gender" class="form-label">Gender:</label>
          <select name="gender" class="form-control">
            <option value="Male">Male</option>
            <option value="Female">Female</option>
          </select>
        </div>
        <div class="mb-3">
          <label for="idnumber" class="form-label">ID-Number:</label>
          <input type="text" class="form-control" id="idnumber" name="idnumber">    
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="save">Save</button>
      </form>
    </div>
  </div>
</div>
</div>