<?php 

session_start();
ob_start();

?>
<!doctype html>
<html>
    <head>
<title>R & B Restaurant</title>
<?php include 'css/styles.php' ?>
<?php include 'links/links.php' ?>
</head>
<body>

<?php


include 'dbcon.php';

if(isset($_POST['submit'])){
    $email =  $_POST['email'];
    $password =  $_POST['password'];

    $email_search = "select * from registration where email='$email' and status='active' ";

    $query = mysqli_query($con,$email_search);

    $email_count = mysqli_num_rows($query);

    if($email_count){
     
        $email_pass = mysqli_fetch_assoc($query);

        $db_pass = $email_pass['password'];

        $_SESSION['username'] = $email_pass['username'];

        $pass_decode = password_verify($password, $db_pass);

        if($pass_decode){

           if(isset($_POST['rememberme'])){

            setcookie('emailcookie',$email,time()+86400);
            setcookie('passwordcookie',$password,time()+86400);


                header('location:home.php');
            }else{
                header('location:home.php');
            }

          

        }else{
            echo "password incorrect";
        }
        }else{
            echo "invalid Email";
        
       
       
        }
    }

?>



<div class="card bg-light">
    <article class="card-body mx-auto" style="max-width:400px;">
    <h4 class="card-title mt-3 text-center">Create Account</h4>
    <p class="text-center">Get started with your free account</p>
    <p>
        <a href="google.php" class="btn btn-block btn-gmail"><i class="fab fa-google"> </i> Login via Gmail</a>
        <a href="" class="btn btn-block btn-facebook"><i class="fab fa-facebook-f"> </i> Login via facebook</a>
        </p>
    <p class="divider-text">
        <span class="bg-light">OR</span>
    </p>

    <div>
    <p class="bg-success text-white px-4"> <?php 
    
    if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
    }else{
        echo $_SESSION['msg'] = "you are logged Out. Please login again.";
    }
    
    
     ?></p>
    </div>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <div class="form-group input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"><i class="fa fa-user"></i></span>
</div>
<input name="email" class="form-control" placeholder="email" type="email" value="<?php if(isset($_COOKIE['emailcookie'])){
echo $_COOKIE['emailcookie'];} ?>" >
</div>




<div class="form-group input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"><i class="fa fa-lock"></i></span>
</div>
<input name="password" class="form-control" placeholder="enter password" type="password" value="<?php if(isset($_COOKIE['passwordcookie'])){
   echo $_COOKIE['passwordcookie'];} ?>">
</div>

<div class="form-group">
<input  type="checkbox" name="rememberme" > Remember Me
</div>

<div class="form-group">
    <button type="submit" name="submit" class="btn btn-primary btn-block"> Login Now</button>
</div>


<p class="text-center">Forget your Password ? <a href="recover_email.php">Click Here</a></p> 

<p class="text-center">Not Have an account? <a href="registration.php">SignUp Here</a></p>

<a href="food.php"><input type="button" class="btt" value="Back!"></a>

</form>
</article>
</div>
</div>
</div>
</div>
</body>
    </html>