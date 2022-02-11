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
<h1>Add Food</h1>
<br>
<br>

<?php 

if(isset($_SESSION['upload']))
{
   echo $_SESSION['upload'];
   unset($_SESSION['upload']);
}
  ?>
<form action="" method="POST" enctype="multipart/form-data">
<table class="tbl">
<tr>
<td>Title:</td>
<td><input type="text" name="title" placeholder="title of the food"></td>
</tr>

<tr>
<td>Description:</td>
<td><textarea name="description" cols="30" rows="5" placeholder="description of the food"></textarea></td>
</tr>

<tr>
<td>Price:</td>
<td><input type="number" name="price"></td>
</tr>

<tr>
<td>Select Image:</td>
<td><input type="file" name="image"></td>
</tr>

<tr>
<td>Category:</td>
<td>
<select name="category">
<option value="1">veg</option>
<option value="2">non-veg</option>
</select>
</td>
</tr>

<tr>
<td>Featured:</td>
<td><input type="radio" value="yes" name="featured">Yes
<input type="radio" value="no" name="featured">No

</td>
</tr>

<tr>
<td>Active:</td>

<td><input type="radio" value="yes" name="active">Yes
<input type="radio" value="no" name="active">No

</td>
</tr>



<tr>
<td colspan="2">
    <input type="submit" name="submit" value="Add Food" class="btn-secondary">
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
$title = $_POST['title'];
$description = $_POST['description'];
$price = $_POST['price'];  //encrypt password with md5
$category = $_POST['category'];
//data into db thorugh sql

   //for radio btn
   if(isset($_POST['featured']))
   {
       //get the value from form
       $featured = $_POST['featured'];
   }
   else
   {
       //set d default value
       $featured = "No";
   }
   
   if(isset($_POST['active']))
   {
       //get the value from form
       $active = $_POST['active'];
   }
   else
   {
       //set d default value
       $active = "No";
   }
   

   if(isset($_FILES['image']['name']))
   {
       $image_name = $_FILES['image']['name'];
   
       //auto rename image
       if($image_name!="")
       {
       $ext = end(explode('.',$image_name));
   
       $image_name = "Food_Category_".rand(000,999).'.'.$ext;
   
       $source_path = $_FILES['image']['tmp'];
   
       $destination_path = "../images".$image_name;
   
       //upload
       $upload = move_uploaded_file($source_path,$destination_path);
   
       //image upload or not
       if($upload==false)
   
       {
           $_SESSION['upload'] = "failed to upload image";
           header('location:add_food.php');
           die();
       }
   }
}
else
{
    $image_name = "";
}



$sql ="INSERT INTO food_item SET
title='$title',
description='$description',
price=$price,
image_name='$image_name',
category=$category,
featured='$featured',
active='$active'
";
//y save data in db
$cons = mysqli_connect('localhost','root','') or die(mysqli_error());  // database connection
$db_select = mysqli_select_db($cons,'foodrestaurant') or die(mysqli_error()); //select db

//execute quer or data insert or not
$res = mysqli_query($cons,$sql) or die(mysqli_error());

if($res == true)
{
   // echo "data inserted";
   $_SESSION['add'] = "Food Added Successfully";
   header('location:admin_food.php');
}else{
    //echo "data not inserted";
    $_SESSION['add'] = "food not Added";
    header('location:"add_food.php');
}

}

?>
