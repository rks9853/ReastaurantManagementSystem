<?php



session_start();
ob_start();

?>

<!doctype html>
<html>
    <head>
<title></title>
<?php include 'css/style.php' ?>
<?php include 'links/links.php' ?>
</head>
<body>

<?php


include 'dbcon.php';

if(isset($_POST['submit'])){

    if(isset($_GET['token'])){

    $token = $_GET['token'];
 
    $newpassword =  mysqli_real_escape_string($con, $_POST['password']) ;
    $cpassword =  mysqli_real_escape_string($con, $_POST['cpassword']) ;


    $pass = password_hash($newpassword, PASSWORD_BCRYPT);
    $cpass = password_hash($cpassword, PASSWORD_BCRYPT);


        if($newpassword === $cpassword){

            
    $updatequery = "update registration set password='$pass' where token='$token' ";

            $iquery = mysqli_query($con, $updatequery);

            if($iquery){
               
                $_SESSION['msg'] = "Your password has been updated";
                header('location:login.php');
            }else{
                $_SESSION['passmsg'] = "Your password is not updated";
                header('location:reset_password.php');
            }

    }else{
        $_SESSION['passmsg'] = "Password is not matching";
    }
    
}else{
    echo "No token found";
}
}

?>



<div class="card bg-light">
    <article class="card-body mx-auto" style="max-width:400px;">
    <h4 class="card-title mt-3 text-center">Create Account</h4>
    <p class="text-center">Get started with your free account</p>
    <p class="bg-info text-white px-5"> <?php
    
    if(isset($_SESSION['passmsg'])){

        echo $_SESSION['passmsg'];
    }else{
        echo $_SESSION['passmsg'] = "";
    }
    
     ?></p>
    <form action="" method="POST">
  



<div class="form-group input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"><i class="fa fa-lock"></i></span>
</div>
<input name="password" class="form-control" placeholder="New password" type="password" value="" required>
</div>

<div class="form-group input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"><i class="fa fa-lock"></i></span>
</div>
<input name="cpassword" class="form-control" placeholder="Confirm password" type="password" value="" required>
</div>

<div class="form-group">
    <button type="submit" name="submit" class="btn btn-primary btn-block"> Update Password</button>
</div>
<p class="text-center"> Have an account? <a href="login.php">log in</a></p>

</form>
</article>
</div>
</div>
</div>
</div>
</body>
    </html>

?>