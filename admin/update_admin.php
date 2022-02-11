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
<h1>Update Admin</h1>
<br>
<br>
<?php
//get the id of select admin
$id = $_GET['id'];  

//create sql to get details
$sql="SELECT * FROM admin where id=$id";


$server = "localhost";
$user = "root";
$password = "";
$db = "foodrestaurant";

$cons = mysqli_connect($server,$user,$password,$db);
//execute the query
$res=mysqli_query($cons,$sql);

//check query
if($res==TRUE)
{
    $count = mysqli_num_rows($res);
    
    if($count==1)
    {
       // echo "Admin Avaliable";
       $row=mysqli_fetch_assoc($res);

       $full_name = $row['full_name'];
       $username = $row['username'];
    }else{
        header('location:admin.php');
    }

}


?>
<form action="" method="POST">
<table class="tbl">
<tr>
<td>Full name:</td>
<td>
<input type="text" name="full_name" value="<?php echo $full_name; ?>">
</td>
</tr>

<tr>
<td>Username:</td>
<td><input type="text" name="username" value="<?php echo $username; ?>">
</td>
</tr>



<tr>
<td colspan="2">
<input type="hidden" name="id" value="<?php echo $id;?>">

<input type="submit" name="submit" value="Update Admin" class="btn-secondary">
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
 $id = $_POST['id'];
$full_name = $_POST['full_name'];
$username = $_POST['username'];
  

//data into db thorugh sql

$sql ="UPDATE admin SET
full_name='$full_name',
username='$username'
where id='$id'
";
//y save data in db
$cons = mysqli_connect('localhost','root',''); // database connection
$db_select = mysqli_select_db($cons,'foodrestaurant'); //select db

//execute quer or data insert or not
$res = mysqli_query($cons,$sql) or die(mysqli_error());

if($res==TRUE)
{
   // echo "data inserted";
   $_SESSION['update'] = "Admin updated Successfully";
   header('location:admin.php');
}else{
    //echo "data not inserted";
    $_SESSION['update'] = "Admin not updated";
    header('location:"admin.php');
}

}

?>
