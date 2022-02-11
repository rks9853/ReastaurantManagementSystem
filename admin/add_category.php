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
<h1>Add Category</h1>
<br>


<?php
if(isset($_SESSION['add']))
{
   echo $_SESSION['add'];
   unset($_SESSION['add']);
}
if(isset($_SESSION['upload']))
{
   echo $_SESSION['upload'];
   unset($_SESSION['upload']);
}
?>
<br>

<form action="" method="POST" enctype="multipart/form-data">
<table class="tbl">
<tr>
<td>Title:</td>
<td><input type="text" name="title" placeholder="Category title"></td>
</tr>

<tr>
<td>Select Image:</td>
<td><input type="file" name="image"></td>
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
    <input type="submit" name="submit" value="Add Categoty" class="btn-secondary">
</td>

</tr>
</table>
</form>


<?php
if(isset($_POST['submit'])){   //submit or not
 //echo "button click";
 //get the data from form
$title = $_POST['title'];

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

//image selected or not
//print_r($_FILES['image']);
//die(); // break the code here

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
        header('location:add_categoery');
        die();
    }
}
else{
    $image_name="";
}
//data into db thorugh sql

$sql ="INSERT INTO category SET
title='$title',
image_name='$image_name',
featured='$featured',
active='$active'
";
//y save data in db
$cons = mysqli_connect('localhost','root','') or die(mysqli_error());  // database connection
$db_select = mysqli_select_db($cons,'foodrestaurant') or die(mysqli_error()); //select db

//execute quer or data insert or not
$res = mysqli_query($cons,$sql) or die(mysqli_error());

if($res==TRUE)
{
   // echo "data inserted";
   $_SESSION['add'] = "Category Added Successfully";
   header('location:category.php');
}else{
    //echo "data not inserted";
    $_SESSION['add'] = "Category not Added";
    header('location:"add_category.php');
}

}

?>



</div>
</div>
<footer class="copyright">
  <div>
         Copyright &copy 2020 .All rights reserved by <a href="#">R&B Restaurant </a>
     </div>
        </footer>
</body>

</html>
