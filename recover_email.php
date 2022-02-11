<?php 

session_start();

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


    $email =  mysqli_real_escape_string($con, $_POST['email']) ;
    

    $emailquery = "select * from registration where email='$email' ";
    $query = mysqli_query($con,$emailquery);

    $emailcount = mysqli_num_rows($query);

    if($emailcount){

       $userdata = mysqli_fetch_array($query);


               $username = $userdata['username'];
               $token = $userdata['token'];
                $subject = "Password Reset";
                $body = "Hi..$username, Click here to reset your password
                http://localhost/FoodRestaurant/reset_password.php?token=$token ";
                $sender_email ="From: rbrestaurant8@gmail.com ";

                if(mail($email, $subject, $body, $sender_email)){
                    
                    $_SESSION['msg'] = "check you mail to reset your password $email";
                    header('location:login.php');

                }else{
                    echo "Email sending failed....";
                }


  
    }else{
        echo "no email found";
    }
    
}

?>



<div class="card bg-light">
    <article class="card-body mx-auto" style="max-width:400px;">
    <h4 class="card-title mt-3 text-center">Recover your Account</h4>
    <p class="text-center">Please fill email id correctly</p>
  
   
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    

<div class="form-group input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"><i class="fa fa-envelope"></i></span>
</div>
<input name="email" class="form-control" placeholder="Email address" type="email" required>
</div>




<div class="form-group">
    <button type="submit" name="submit" class="btn btn-primary btn-block"> Send Mail</button>
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