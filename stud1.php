<?php include 'db_connect.php';?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="//cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script>$(document).ready( function () {
    $('#myTable').DataTable();
} );</script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>FEES MANAGEMENT SYSTEM</title>

    <style>
        body {
          font-family: "Lato", sans-serif;
        }
        
        .sidebar {
          height: 100%;
          width: 0;
          position: fixed;
          z-index: 1;
          top: 0;
          left: 0;
          background-color: #111;
          overflow-x: hidden;
          transition: 0.5s;
          padding-top: 60px;
        }
        
        .sidebar a {
          padding: 8px 8px 8px 32px;
          text-decoration: none;
          font-size: 25px;
          color: #818181;
          display: block;
          transition: 0.3s;
        }
        
        .sidebar a:hover {
          color: #f1f1f1;
        }
        
        .sidebar .closebtn {
          position: absolute;
          top: 0;
          right: 25px;
          font-size: 36px;
          margin-left: 50px;
        }
        
        .openbtn {
          font-size: 20px;
          cursor: pointer;
          background-color: #111;
          color: white;
          padding: 10px 15px;
          border: none;
        }
        
        .openbtn:hover {
          background-color: #444;
        }
        
        #main {
          transition: margin-left .5s;
          padding: 16px;
        }
        
        /* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
        @media screen and (max-height: 450px) {
          .sidebar {padding-top: 15px;}
          .sidebar a {font-size: 18px;}
        }
        </style>
        

        </head>
  <body>
  
  <?php include 'side/nav_bar.html';
include 'side/side_bar.html';
//include 'side/carousel.html';

?>
<h2><center><u>STUDENT'S DATA</u></h2>
  <div class="container my-4">
<table class="table my-4" id="myTable" >
  <thead>
    <tr>
      <th scope="col">Sno.</th>
      <th scope="col">STUDENT'S NAME</th>
      <th scope="col">PARENT'S NAME</th>
      <th scope="col">ROLL NUMBER</th>
      <th scope="col">ADMISSION NUMBER</th>
      <th scope="col">CLASS</th>
      <th scope="col">LOCALITY</th>
      <th scope="col">AGE</th>
      <th scope="col">PINCODE</th>
      <th scope="col">PHONE NUMBER</th>
      <th scope="col">BUS NUMBER</th>
      
 
    </tr>
  </thead><tbody>
<?php


$sql1="SELECT * FROM `students1`";
$result1=mysqli_query($conn,$sql1);
$rows1= mysqli_num_rows($result1);


  $Sno=0;
  while ($row1 = mysqli_fetch_assoc($result1))
{
  $Sno++;
    if($rows1>0){
      
     echo "<tr>
     
     
        <th >".$Sno."</th>
        <td>".$row1['name']."</td>
        <td>".$row1['parent_name']."</td>
        <td>".$row1['roll_no']."</td>
        <td>".$row1['adm_no']."</td>
        <td>".$row1['class']."</td>
        <td>".$row1['locality']."</td>
        <td>".$row1['age']."</td>
        <td>".$row1['pincode']."</td>
        <td>".$row1['phone_number']."</td>
        <td>".$row1['bus_no']."</td>
        </td>
       
      </tr>";
    }}?></tbody></table>
  
</div>











    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>