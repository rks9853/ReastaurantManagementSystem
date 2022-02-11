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
<h1>Change Password</h1>
<br>

<?php
//get the id of select admin

    if(isset($_GET['id'])){
        $id=$_GET['id'];
    }


?>
<form action="" method="POST">
<table class="tbl">
<tr>
<td>Current Password:</td>
<td>
<input type="password" name="current_password" placeholder="current password">
</td>
</tr>

<tr>
<td>New Password:</td>
<td><input type="password" name="new_password" placeholder="new password">
</td>
</tr>

<tr>
<td>Confirm Password:</td>
<td><input type="password" name="confirm_password" placeholder="confirm password">
</td>
</tr>

<tr>
<td colspan="2">
<input type="hidden" name="id" value="<?php echo $id;?>">

<input type="submit" name="submit" value="Change Password" class="btn-secondary">
</td>

</tr>
</table>
</form>
</div>
</div>

<?php
if(isset($_POST['submit'])){   //submit or not
 //echo "button click";
 //get the data from form
 $id = $_POST['id'];
$current_password = md5($_POST['current_password']);
$new_password = md5($_POST['new_password']);
$corfirm_password = md5($_POST['confirm_password']);
  

//data into db thorugh sql

$sql ="SELECT * FROM admin WHERE id=$id AND password='$current_password' ";

//y save data in db
$cons = mysqli_connect('localhost','root',''); // database connection
$db_select = mysqli_select_db($cons,'foodrestaurant'); //select db

//execute quer or data insert or not
$res = mysqli_query($cons,$sql);

if($res==TRUE)
{

    $count=mysqli_num_rows($res);

    if($count==1){

      //  echo "User Found";
        if($new_password==$confirm_password)
        {
            //update the password
            //echo "password match";
            $sql2 = "UPDATE admin SET
            password='$new_password'
            WHERE id='$id'
            ";
            $res2 = mysqli_query($cons,$sql2);
            
            if($res2==true)
            {
                $_SESSION['change-password'] = "Password Changed Successfully";
                header('location:admin.php');
            }else{
                $_SESSION['change-password'] = "Password Not Changed";
                header('location:admin.php');
           }
       }else{
            $_SESSION['password-not-match'] = "Password Not Match";
           header('location:admin.php');
        }
    }else{
        $_SESSION['user-not-found'] = "User Not Found";
        header('location:admin.php');
    }
 

}

}

?>


<footer class="copyright">
  <div>
         Copyright &copy 2020 .All rights reserved by <a href="#">R&B Restaurant </a>
     </div>
        </footer>
</body>

</html>

