<?php
include('../config/constant.php')
?>


<html>
<head>
<title>R & B Restaurant</title>
<link rel="stylesheet" href="admin.css">
</head>

<body>
 


<div class=main-content>
<div class="wrapper">
<h1>Manage Admin</h1>
<br> <br>
<?php
if(isset($_SESSION['add'])){
    echo $_SESSION['add'];
    unset($_SESSION['add']);
}
if(isset($_SESSION['delete'])){
    echo $_SESSION['delete'];
    unset($_SESSION['delete']);
}
if(isset($_SESSION['update'])){
    echo $_SESSION['update'];
    unset($_SESSION['update']);
}
if(isset($_SESSION['user-not-found'])){
    echo $_SESSION['user-not-found'];
    unset($_SESSION['user-not-found']);
}
if(isset($_SESSION['password-not-match'])){
    echo $_SESSION['password-not-match'];
    unset($_SESSION['password-not-match']);
}
if(isset($_SESSION['change-password'])){
    echo $_SESSION['change-password'];
    unset($_SESSION['change-password']);
}
?>
<br><br><br>

<a href="add_admin.php" class="btn-primary">Add Admin</a>
<br> <br> <br>

<table class="tbl-full">
    <tr>
    <th>SL. NO </th>
    <th>Full name </th>
    <th>Username </th>
    <th>Actions </th>
</tr>


<?php
$sql = "SELECT * FROM admin";
$res = mysqli_query($cons,$sql);

if($res==TRUE)
{
  $count = mysqli_num_rows($res);

  $sn=1; //create vaariable for assending order


  if($count>0)
  {
        while($rows=mysqli_fetch_assoc($res))
        {
            $id = $rows['id'];
            $full_name = $rows['full_name'];
            $username = $rows['username'];
            ?>

                <tr>
                <td> <?php echo $sn++; ?> </td>
                <td><?php echo $full_name;   ?> </td>
                <td> <?php echo $username;  ?> </td>
                <td> 
                <a href="change_password.php?id=<?php echo $id;?>" class="btn-primary">Change Password</a>
                <a href="update_admin.php?id=<?php echo $id;?>" class="btn-secondary"> Update admin</a>
                    <a href="delete_admin.php?id=<?php echo $id; ?>" class="btn-danger">delete admin</a>
                </td>
                </tr>

            <?php
        }
  }else{

  }
}
?>


</table>
</div>
</div>
<br>
<br>

<footer class="copyright">
  <div>
         Copyright &copy 2020 .All rights reserved by <a href="#">R&B Restaurant </a>
     </div>
        </footer>
</body>

</html>