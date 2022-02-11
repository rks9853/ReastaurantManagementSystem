

<!doctype html>
<html>
<head>
<title>R & B Restaurant</title>

<link rel="stylesheet" href="dashboard.css">
</head>

<body>


<div class="menu text-center">
    <div class="wrapper">
    <ul>
        <li><a href="#">Home </li>
        <li><a href="admin.php">Admin </li>
        <li><a href="admin_food.php">Food </li>
        <li><a href="#">Order </li>
        <li><a href="admin_logout.php">Logout </li>
        
    </ul>
</div>
</div>


<div class="main-content">
    <div class="wrapper">

     <h1 class="board"> DASHBOARD </h1>
     <br>
     <?php

            if(isset($_SESSION['login']))
            {
              echo $_SESSION['login'];
              unset($_SESSION['login']);
            }
            if(isset($_SESSION['no-login-message']))
            {
                echo $_SESSION['no-login-message'];
                unset($_SESSION['no-login-message']);
            }
             ?>
             <br>

            <div class="col-4 text-center">
            <h1>5</h1>
            <br>
            foods
            </div>

            <div class="col-4 text-center">
            <h1>5</h1>
            <br>
            foods
            </div>

            
            
            <div class="col-4 text-center">
            <h1>5</h1>
            <br>
            foods
            </div>
            <div class="clearfix"></div>
    </div>
</div>

<div class="footer">
<div class="wrapper">
        <p> Copyright &copy 2020 .All rights reserved by <a href="#" class="rb">R & B Restaurant </a></p>
</div>
</div>

</body>
</html>