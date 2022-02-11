<?php 

session_start();

?>  


<!doctype html>
<html>
    <head>
<title>R & B Restaurant</title>


<?php include 'css/style.php' ?>
<?php include 'links/links.php' ?>


</head>
<body>

<?php


include 'dbcon.php';

if(isset($_POST['submit'])){
    $username = mysqli_real_escape_string($con, $_POST['username']) ;
    $email =  mysqli_real_escape_string($con, $_POST['email']) ;
    $mobile =  mysqli_real_escape_string($con, $_POST['mobile']) ;
    $password =  mysqli_real_escape_string($con, $_POST['password']) ;
    $cpassword =  mysqli_real_escape_string($con, $_POST['cpassword']) ;


    $pass = password_hash($password, PASSWORD_BCRYPT);
    $cpass = password_hash($cpassword, PASSWORD_BCRYPT);

    $token = bin2hex(random_bytes(15));

    $emailquery = "select * from registration where email='$email' ";
    $query = mysqli_query($con,$emailquery);

    $emailcount = mysqli_num_rows($query);

    if($emailcount>0){
        echo "email already exists";
    }else{
        if($password === $cpassword){

            $insertquery = "insert into registration(username,email,mobile,password,cpassword,token,status) values('$username','$email','$mobile',
            '$pass','$cpass','$token','inactive')";

            $iquery = mysqli_query($con, $insertquery);

            if($iquery){
               
                $subject = "Email Activation";
                $body = "Hi..$username, Click here to active your account
                //http://localhost/FoodRestaurant/activate.php?token=$token ";
                $sender_email ="From: rbrestaurant8@gmail.com ";

               if(mail($email, $subject, $body, $sender_email)){
                    
                    $_SESSION['msg'] = "check you mail to active your account $email";
                    header('location:login.php');

                }else{
                 echo "Email sending failed....";
                }

         
            }else{
                ?>
                <script>
                alert("no inserted");
                </script>
                <?php
            }



        }else{
            ?>
                <script>
                alert("password are not matching");
                </script>
                <?php
            
        }
    }
    
}

?>



<div class="card bg-light">
    <article class="card-body mx-auto" style="max-width:400px;">
    <h4 class="card-title mt-3 text-center">Create Account</h4>
    <p class="text-center">Get started with your free account</p>
    <p>
        <a href="" class="btn btn-block btn-gmail"><i class="fab fa-google"> </i> Login via Gmail</a>
        <a href="" class="btn btn-block btn-facebook"><i class="fab fa-facebook-f"> </i> Login via facebook</a>
        </p>
    <p class="divider-text">
        <span class="bg-light">OR</span>
    </p>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <div class="form-group input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"><i class="fa fa-user"></i></span>
</div>
<input name="username" class="form-control" placeholder="Full name" type="text" required>
</div>

<div class="form-group input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"><i class="fa fa-envelope"></i></span>
</div>
<input name="email" class="form-control" placeholder="Email address" type="email" required>
</div>

<div class="form-group input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"><i class="fa fa-phone"></i></span>
</div>
<input name="mobile" class="form-control" placeholder="phone number" type="number" required>
</div>

<div class="form-group input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"><i class="fa fa-lock"></i></span>
</div>
<input name="password" class="form-control" placeholder="Create password" type="password" value="" required>
</div>

<div class="form-group input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"><i class="fa fa-lock"></i></span>
</div>
<input name="cpassword" class="form-control" placeholder="Repeat password" type="password" value="" required>
</div>

<div class="form-group">
    <button type="submit" name="submit" class="btn btn-primary btn-block"> Create Account</button>
</div>
<p class="text-center"> Have an account? <a href="login.php">log in</a></p>

<a href="food.php"><input type="button" class="btt" value="Back!"></a>
</form>
</article>
</div>
</div>
</div>
</div>
</body>
    </html>