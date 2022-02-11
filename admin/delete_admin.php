<?php
session_start();
?>


<?php


 $id = $_GET['id'];  //get id to del

$sql = "DELETE  FROM admin where id=$id";  //create sql to delete
$server = "localhost";
$user = "root";
$password = "";
$db = "foodrestaurant";

$cons = mysqli_connect($server,$user,$password,$db);

$res = mysqli_query($cons,$sql); // execute the query

if($res==TRUE)
{
   // echo "admin deleted";
   $_SESSION['delete'] = "Admin Deleted Successfully.";
   header('location:admin.php');
}else{
  //  echo "admin not deleted";
  $_SESSION['delete'] = "Admin Not Deleted";
  header('location:admin.php');

}


?>