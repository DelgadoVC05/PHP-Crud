<!-- Created By Vince Carlo Delgado BSIT 3A -->
<?php include('modal.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Student Table</title>
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bootstrap CDN Link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">
</head>
<body class="hm-gradient">

    <main>
        <div class="card mb-4">
            <div class="card-body">
                <!-- Grid row -->
                <div class="row">
                    <!-- Grid column -->
                    <div class="col-md-12">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#student">
                            <i class="fa-solid fa-circle-plus"></i>
                            Add Student
                        </button>	

                        <h2 class="pt-3 pb-4 text-center font-bold font-up deep-purple-text">GSU Student</h2>

                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
                <!--Table-->
                <table class="table table-striped">
                    <!--Table head-->
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Fullname</th>
                            <th>Age</th>
                            <th>Course&Year&Section</th>
                            <td>Gender</td>
                            <th>ID Number</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                     <?php
                     //Fetch Data in the database and display
                     $fetch_student = "SELECT * FROM Crud_Demo";
                     $res = $conn->query($fetch_student);
                     $num=1;
                     while($row = $res->fetch_assoc()){
                       $id = $row['id'];	
                       $fullname = $row['fullname'];
                       $age = $row['age'];
                       $course = $row['course'];  
                       $gender = $row['gender'];    
                       $id_number = $row['id_number'];                     	
                       ?> 
                       <tr>
                         <td><?=$num?></td>                     
                           <td><?=$fullname?></td> 
                           <td><?=$age?></td> 
                           <td><?=$course?></td> 
                           <td><?=$gender?></td>   
                           <td><?=$id_number?></td> 
                           <td><a href="update.php?id=<?php echo $row['id']?>" class="btn btn-dark"><i class="fa-solid fa-trash"></i></a>
                            <a href="delete.php?delete=<?php echo $row['id']?>" class="btn btn-danger"><i class="fa-solid fa-pen-to-square"></i></a>

                        </td>                
                        <?php $num++; }?>
                    </tr>  
                </tbody>                      
            </table>                
        </div>
    </div>  
</main>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js" integrity="sha512-GWzVrcGlo0TxTRvz9ttioyYJ+Wwk9Ck0G81D+eO63BaqHaJ3YZX9wuqjwgfcV/MrB2PhaVX9DkYVhbFpStnqpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>            



