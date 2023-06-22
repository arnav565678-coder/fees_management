<?php

$update=false;
$delete=false;
 include 'db_connect.php';

if(ISSET($_GET['delete'])){
  $sno=$_GET['delete'];

  $sql="DELETE FROM `fees` WHERE `fees`.`fees_id` = $sno";
  $result=mysqli_query($conn,$sql);
  
  if($result){
 
    $delete=true;}
  else{
      echo "the record was not successfully added";
    }
}


  if(isset($_POST['snoEdit'])){
    //ypdate record
  $sno=$_POST["snoEdit"];
 // $date_of_deposit=$_POST['date_of_depositEdit'];
  $tution_fees=$_POST['tution_feesEdit'];
      $transport_fees=$_POST['transport_feesEdit'];
      $total=$_POST['tution_feesEdit']+$_POST['transport_feesEdit'];
      $due_fee=$_POST['tution_feesEdit']+$_POST['transport_feesEdit']-$_POST['paid_feeEdit'];
 

      $paid_fee=$_POST['paid_feeEdit'];
      
    
    
  //entering data from server into table-->
  $sql = "UPDATE `fees` SET `tution_fees` = '$tution_fees',  `transport_fees` = '$transport_fees', `total` = '$total',`paid_fee` = '$paid_fee', `due_fee` = '$due_fee' WHERE `fees`.`fees_id` = $sno";
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

    <title>php fms</title>
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
      <form action="/fms/updatefees.php" method="post">
      <input type="hidden" name="snoEdit" id="snoEdit">
       
       <div class="mb-3">
           <label for="tution_feesEdit">Tution Fee:</label>
           <input type="number"  name="tution_feesEdit"  id="tution_feesEdit">
         </div>
         <div class="mb-3">
           <label for="transport_feesEdit" class="form-label">Transport Fees:</label>
           <input type="number" class="form-control" id="transport_feesEdit"  name="transport_feesEdit">
         </div>
         
         <div class="mb-3">
           <label for="paid_feeEdit" class="form-label" >Paid Fee:</label>
           <input type="number" class="form-control" id="paid_feeEdit" name="paid_feeEdit">
         </div>
         
         
         
         <button type="submit" class="btn btn-primary" name="submit1">Submit</button>
         <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
       </form>
       </div>
       
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
      <th scope="col">FEES ID</th>
      <th scope="col">TUTION'S FEE:</th>
      <th scope="col">TRANSPORTATION FEE:</th>
      <th scope="col">Scholarship</th>
      <th scope="col">TOTAL AMOUNT</th>
      <th scope="col">ADMISSION NUMBER</th>
      <th scope="col">NAME</th>
      <th scope="col">class</th>
      <th scope="col">PAID FEE</th>
      <th scope="col">DUE FEE</th>
      <th scope="col">DATE OF DEPOSIT</th>
      <th>ACTIONS</th>
      
 
    </tr>
  </thead><tbody>
<?php


$sql1="SELECT
*
scholarship.scholarship_amt
FROM fees
JOIN scholarship
ON fees.adm_no= scholarship.adm_no
JOIN students1
ON students1.adm_no = fees.adm_no";

$sql1="SELECT *,scholarship_amt,name,class FROM fees,scholarship,students1 where fees.adm_no=scholarship.adm_no and fees.adm_no=students1.adm_no";
$result1=mysqli_query($conn,$sql1);
$rows1= mysqli_num_rows($result1);


  $Sno=0;
  while ($row1 = mysqli_fetch_assoc($result1))
{
  $Sno++;
    if($rows1>0){
      
     echo "<tr>
     
        <th >".$Sno."</th>
        
        <td>".$row1['tution_fees']."</td>
        <td>".$row1['transport_fees']."</td>
        <td>".$row1['scholarship_amt']."</td>
        <td>".$row1['total']-$row1['scholarship_amt']."</td>
        <td>".$row1['adm_no']."</td>
        <td>".$row1['name']."</td>
        <td>".$row1['class']."</td>
        <td>".$row1['paid_fee']."</td>
        
        <td>".$row1['total']-$row1['scholarship_amt']-$row1['paid_fee']."</td>
        
        
        <td>".$row1['date_of_deposit']."</td>
        </td>
       
        <td>  <button class='edit btn btn-sm btn-primary' id=".$row1['fees_id'].">
        Edit
      </button><button class='delete btn btn-sm btn-primary' id=d".$row1['fees_id'].">
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
        tr=e.target.parentNode.parentNode
        tution_fees=tr.getElementsByTagName("td")[0].innerText;
        transport_fees=tr.getElementsByTagName("td")[1].innerText;
    
       
        paid_fee=tr.getElementsByTagName("td")[2].innerText;
        date_of_deposit=tr.getElementsByTagName("td")[3].innerText;
       
      
        console.log(tution_fees,transport_fees,paid_fee,date_of_deposit);
        tution_feesEdit.value=tution_fees;
        transport_feesEdit.value=transport_fees;
    

        paid_feeEdit.value=paid_fee;
      
        
        snoEdit.value=e.target.id;
        console.log(e.target.id)
        $('#editModal').modal('toggle');
        

      })
    })
  

    deletes=document.getElementsByClassName('delete');
    Array.from(deletes).forEach((element)=>{
      element.addEventListener("click",(e)=>{
        console.log("edit");
        sno=e.target.id.substr(1,);
        
        if(confirm("Press a button!"))
        
{  console.log("yes");
    window.location = `/fms/updatefees.php?delete=${sno}`;

      }
      else{
        console.log("no");
      }
        

      })
    })
    </script>






  </body>
</html>