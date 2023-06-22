<?php

$servername="localhost";
$username="root"; 
$password="";
$database="user_login";
$conn=mysqli_connect($servername,$username,$password,$database);
//INSERT INTO `notes` (`sno`, `note`, `description`, `timestamp`) VALUES (NULL, 'third', 'woww...third', current_timestamp());
if(!$conn){
    die("sorry,connection failed".mysqli_connect_error()); 
}

?>