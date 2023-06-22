<?php include 'db_connect.php';?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Form..!!</title>
  
  </head>
  <body>
  

  <?php include 'side/nav_bar.html';
       
  
  

  if(isset($_POST['submit1'])){

      $name=$_POST['names'];
      $parent_name=$_POST['parent_name'];
      $dob=$_POST['dob'];
      $roll_no=$_POST['roll_no'];
     // $adm_no=$_POST['adm_no'];
      $pincode=$_POST['pincode'];
      $locality=$_POST['locality'];
      $age=$_POST['age'];
      $class=$_POST['class'];
      $phone_number=$_POST['phone_number'];

      $sql="INSERT INTO `students` (`name`, `parent_name`,  `dob`, `roll_no`,`pincode`,`locality`,`age`,`class`,`phone_number`) VALUES ('$name', '$parent_name', '$dob', '$roll_no', '$pincode', '$locality', '$age', '$class', '$phone_number')";
        $result=mysqli_query($conn,$sql);    
  }
  ?>
  
  

 
<div class="container mt-3">
<h1>Please enter the required details</h1>
    <form action="/CRUD/studentform.php" method="post">
       
<div class="mb-3">
    <label for="name">Name:</label>
    <input type="text"  name="names"  id="name" font="white">
  </div>
  <div class="mb-3">
    <label for="parent_name" class="form-label">PARENT NAME</label>
    <input type="text" class="form-control" id="parent_name"  name="parent_name">
  </div>
  <div class="mb-3">
    <label for="dob" >dob:</label>
    <input type="date"  id="dob" name="dob">
  </div>
  <div class="mb-3">
    <label for="roll_no" class="form-label" >roll number</label>
    <input type="number" class="form-control" id="roll_no" name="roll_no">
  </div>

  <div class="mb-3">
    <label for="pincode" class="form-label" >pincode</label>
    <input type="number" class="form-control" id="pincode" name="pincode">
  </div>
  <div class="mb-3">
    <label for="locality" class="form-label" >locality</label>
    <input type="text" class="form-control" id="locality" name="locality">
  </div>
  <div class="mb-3">
    <label for="age" class="form-label" >age</label>
    <input type="number" class="form-control" id="age" name="age">
  </div>
  <div class="mb-3">
    <label for="class" class="form-label">class</label>
    <input type="number" class="form-control" id="class"  name="class">
  </div>
  <div class="mb-3">
    <label for="phone_number" class="form-label" >phone_number</label>
    <input type="number" class="form-control" id="phone_number" name="phone_number">
  </div>
  
  <button type="submit" class="btn btn-primary" name="submit1">Submit</button>
 
</form>
</div>
<br>
      
      <?php
   
//       if (isset($_POST["submit"])){
//         echo"heyyyyyyy";

      
//       $name=$_POST['names'];
//       $parent_name=$_POST['parent_name'];
//       $dob=$_POST['dob'];
//       $roll_no=$_POST['roll_no'];
//       $adm_no=$_POST['adm_no'];
//       $pincode=$_POST['pincode'];
//       $locality=$_POST['locality'];
//       $age=$_POST['age'];
//       $class=$_POST['class'];
//       $phone_number=$_POST['phone_number'];
      
     

//       // Submit these to a database
    
  
    
//     // Submit these to a database
//     // Sql query to be executed 
   
//     //entering data from server into table-->
// $sql="INSERT INTO `students` (`name`, `parent_name`,  `dob`, `roll_no`,  `adm_no`,`pincode`,`locality`,`age`,`class`,`phone_number`) VALUES ('$name', '$parent_name', '$dob', '$roll_no', '$adm_no', '$pincode', '$locality', '$age', '$class', '$phone_number')";
// $result=mysqli_query($conn,$sql);
//       }


?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>

