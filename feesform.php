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
//include 'side/side_bar.html';
//include 'side/carousel.html';

?>
       
  <?php

  if(isset($_POST['submit1'])){

      $adm_no=$_POST['adm_no'];
      $transport_fees=$_POST['transport_fees'];
      $tution_fees=$_POST['tution_fees'];
      $total=$_POST['transport_fees']+$_POST['tution_fees'];
      
      $date_of_deposit=$_POST['date_of_deposit'];
      $paid_fee=$_POST['paid_fee'];
      $due_fee=$total-$_POST['paid_fee'];
      

      $sql="INSERT INTO `fees` (`adm_no`, `transport_fees`,  `tution_fees`, `total`,`date_of_deposit`,`paid_fee`,`due_fee`) VALUES ('$adm_no', '$transport_fees', '$tution_fees', '$total', '$date_of_deposit', '$paid_fee', '$due_fee')";
        $result=mysqli_query($conn,$sql);    
  }
  ?>
  
  

 
<div class="container mt-3">
<h1>Please enter the required details</h1>
    <form action="/fms/feesform.php" method="post">
       
<div class="mb-3">
    <label for="name">Admission Number</label>
    <input type="number"  name="adm_no"  id="adm_no" font="white">
  </div>
  <div class="mb-3">
    <label for="transport_fees" class="form-label">Transport Fees</label>
    <input type="number" class="form-control" id="transport_fees"  name="transport_fees">
  </div>
  <div class="mb-3">
    <label for="tution_fees" class="form-label">Tution Fees</label>
    <input type="number" class="form-control" id="tution_fees"  name="tution_fees">
  </div>
 
  <div class="mb-3">
    <label for="date_of_deposit" >date of deposit:</label>
    <input type="date"  id="date_of_deposit" name="date_of_deposit">
  </div>
  <div class="mb-3">
    <label for="paid_fee" class="form-label">Paid Fees</label>
    <input type="number" class="form-control" id="paid_fee"  name="paid_fee">
  </div>
  
  
  
  <button type="submit" class="btn btn-primary" name="submit1">Submit</button>
</form>
</div>

      
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

