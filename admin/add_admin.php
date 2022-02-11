<?php
session_start();
?>

<html>
<head>
<title>R & B Restaurant</title>
<link rel="stylesheet" href="add_admin.css">
</head>

<body>
<div class="main-content">
<div class="wrapper">
<h1>Add Admin</h1>
<br>
<br>
<form action="" method="POST">
<table class="tbl">
<tr>
<td>Full name:</td>
<td><input type="text" name="full_name" placeholder="Enter your name"></td>
</tr>

<tr>
<td>Username:</td>
<td><input type="text" name="username" placeholder="Your username"></td>
</tr>

<tr>
<td>Password:</td>
<td><input type="password" name="password" placeholder="Your password"></td>
</tr>

<tr>
<td colspan="2">
    <input type="submit" name="submit" value="Add Admin" class="btn-secondary">
</td>

</tr>
</table>
</form>
</div>
</div>
<footer class="copyright">
  <div>
         Copyright &copy 2020 .All rights reserved by <a href="#">R&B Restaurant </a>
     </div>
        </footer>
</body>

</html>
<?php
if(isset($_POST['submit'])){   //submit or not
 //echo "button click";
 //get the data from form
$full_name = $_POST['full_name'];
$username = $_POST['username'];
$password = md5($_POST['password']);  //encrypt password with md5

//data into db thorugh sql

$sql ="INSERT INTO admin SET
full_name='$full_name',
username='$username',
password='$password'
";
//y save data in db
$cons = mysqli_connect('localhost','root','') or die(mysqli_error());  // database connection
$db_select = mysqli_select_db($cons,'foodrestaurant') or die(mysqli_error()); //select db

//execute quer or data insert or not
$res = mysqli_query($cons,$sql) or die(mysqli_error());

if($res==TRUE)
{
   // echo "data inserted";
   $_SESSION['add'] = "Admin Added Successfully";
   header('location:admin.php');
}else{
    //echo "data not inserted";
    $_SESSION['add'] = "Admin not Added";
    header('location:"add_admin.php');
}

}

?>