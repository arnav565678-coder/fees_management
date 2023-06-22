<?php

$update=false;
$delete=false;
include 'db_connect.php';
if(ISSET($_GET['delete'])){
  $adm_no=$_GET['delete'];

  $sql="DELETE FROM `students1` WHERE `students1`.`adm_no` = $adm_no";
  $result=mysqli_query($conn,$sql);
  
  if($result){
 
    $delete=true;}
  else{
      echo "the record was not successfully added";
    }
}


  if(isset($_POST['adm_noEdit'])){
    //ypdate record
  $adm_no=$_POST["adm_noEdit"];
  $name=$_POST['namesEdit'];
  $parent_name=$_POST['parent_nameEdit'];
     // $dob=$_POST['dobEdit'];
      $roll_no=$_POST['roll_noEdit'];
  
      $pincode=$_POST['pincodeEdit'];
      $locality=$_POST['localityEdit'];
      $age=$_POST['ageEdit'];
     
      $phone_number=$_POST['phone_numberEdit'];
      $bus_no=$_POST['bus_noEdit'];

    
  //entering data from server into table-->
  $sql = "UPDATE `students1` SET `name` = '$name', `parent_name` = '$parent_name',  `roll_no` = '$roll_no', `pincode` = '$pincode',`phone_number` = '$phone_number',`bus_no` = '$bus_no' WHERE `students1`.`adm_no` = $adm_no";
  $result = mysqli_query($conn, $sql);
if($result){
 
  $update=true;}
else{
    echo "the record was not successfully added";
  }
  }


?>

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

    <title>php crud</title>
  </head>
  <body>
    <!-- edit modal-->
    <!-- Button trigger modal -->
<!--<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editModal">
  Edit Modal
</button>-->

 
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editModalLabel">Edit note</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="/fms/updatestudent.php" method="post">
      <input type="hidden" name="adm_noEdit" id="adm_noEdit">
       
       <div class="mb-3">
           <label for="namesEdit">Name:</label>
           <input type="text"  name="namesEdit"  id="namesEdit">
         </div>
         <div class="mb-3">
           <label for="parent_nameEdit" class="form-label">PARENT NAME</label>
           <input type="text" class="form-control" id="parent_nameEdit"  name="parent_nameEdit">
         </div>
        
         <div class="mb-3">
           <label for="roll_noEdit" class="form-label" >roll number</label>
           <input type="number" class="form-control" id="roll_noEdit" name="roll_noEdit">
         </div>
         <div class="mb-3">
           <label for="localityEdit" class="form-label" >locality</label>
           <input type="text" class="form-control" id="localityEdit" name="localityEdit">
         </div>
             
         <div class="mb-3">
           <label for="ageEdit" class="form-label" >age</label>
           <input type="number" class="form-control" id="ageEdit" name="ageEdit">
         </div>
        
         <div class="mb-3">
           <label for="pincodeEdit" class="form-label" >pincode</label>
           <input type="number" class="form-control" id="pincodeEdit" name="pincodeEdit">
         </div>
    
         <div class="mb-3">
           <label for="phone_numberEdit" class="form-label" >phone_number</label>
           <input type="number" class="form-control" id="phone_numberEdit" name="phone_numberEdit">
         </div>
         <div class="mb-3">
           <label for="bus_noEdit" class="form-label" >bus_number</label>
           <input type="number" class="form-control" id="bus_noEdit" name="bus_noEdit">
         </div>
         
         <button type="submit" class="btn btn-primary" name="submit1">Submit</button>
       </form>
       </div>
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div> 
<?php include 'side/nav_bar.html';
//include 'side/side_bar.html';
//include 'side/carousel.html';

?>
  <?php
  
  if($update){
    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
    <strong>Success!</strong> Your note has been updated successfully.
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
  </div>";
  
  }
  if($delete){
    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
    <strong>Success!</strong> Your note has been deleted successfully.
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
  </div>";
  
  }
  ?>

      <div class="container my-4">
<table class="table my-4" id="myTable" >
  <thead>
    <tr>
    <th scope="col">Sno.</th>
      <th scope="col">STUDENT'S NAME</th>
      <th scope="col">PARENT'S NAME</th>
      <th scope="col">ROLL NUMBER</th>
     
     
      <th scope="col">LOCALITY</th>
      <th scope="col">AGE</th>
      <th scope="col">PINCODE</th>
      <th scope="col">PHONE NUMBER</th>
      <th scope="col">BUS NUMBER</th>
      
      <th>ACTIONS</th>
      
 
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
    
     
     <td>".$row1['locality']."</td>
     <td>".$row1['age']."</td>
     <td>".$row1['pincode']."</td>
     <td>".$row1['phone_number']."</td>
     <td>".$row1['bus_no']."</td>
        <td>  <button class='edit btn btn-sm btn-primary' id=".$row1['adm_no'].">
        Edit
      </button><button class='delete btn btn-sm btn-primary' id=d".$row1['adm_no'].">
        DELETE
      </button> 
</td>
        
       
      </tr>";
    }}?></tbody></table>
  
</div>

  
</div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  -->
  <script>
    edits=document.getElementsByClassName('edit');
    Array.from(edits).forEach((element)=>{
      element.addEventListener("click",(e)=>{
        console.log("edit");
        tr=e.target.parentNode.parentNode;
        names=tr.getElementsByTagName("td")[0].innerText;
        parent_name=tr.getElementsByTagName("td")[1].innerText;
        //dob=tr.getElementsByTagName("td")[2].innerText;
        roll_no=tr.getElementsByTagName("td")[2].innerText;
      
        pincode=tr.getElementsByTagName("td")[5].innerText;
        locality=tr.getElementsByTagName("td")[3].innerText;
        age=tr.getElementsByTagName("td")[4].innerText;
       // class=tr.getElementsByTagName("td")[3].innerText;
        phone_number=tr.getElementsByTagName("td")[6].innerText;
        bus_no=tr.getElementsByTagName("td")[7].innerText;
      
      
        console.log(names,parent_name,roll_no,pincode,locality,age,phone_number,bus_no);
        namesEdit.value=names;
        parent_nameEdit.value=parent_name;
       // dobEdit.value=dob;
        roll_noEdit.value=roll_no;
        
        pincodeEdit.value=pincode;
        localityEdit.value=locality;
        ageEdit.value=age;
      
        phone_numberEdit.value=phone_number;
        bus_noEdit.value=bus_no;


        adm_noEdit.value=e.target.id;
        console.log(e.target.id);
        $('#editModal').modal('toggle');
        

      })
    })
  

    deletes=document.getElementsByClassName('delete');
    Array.from(deletes).forEach((element)=>{
      element.addEventListener("click",(e)=>{
        console.log("edit");
        adm_no=e.target.id.substr(1,);
        
        if(confirm("Press a button!"))
        
{  console.log("yes");
    window.location = `/fms/updatefees.php?delete=${adm_no}`;

      }
      else{
        console.log("no");
      }
        

      })
    })
    </script>






  </body>
</html>