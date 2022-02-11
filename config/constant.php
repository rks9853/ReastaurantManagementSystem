<?php

session_start();

//to store nonrepeating data
define('SITEURL','http://localhost/FoodRestaurant/admin/admin.php');
define('LOCALHOST','localhost');
define('DB_USERNAME','root');
define('PASSWORD','');
define('DB_NAME','foodrestaurant');

$cons = mysqli_connect('localhost','root','') or die(mysqli_error());  // database connection
$db_select = mysqli_select_db($cons,'foodrestaurant') or die(mysqli_error()); //select db

?>