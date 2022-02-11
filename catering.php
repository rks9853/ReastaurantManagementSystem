<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>R & B Restaurant</title>
<link rel="stylesheet" href="css/style.css">
<!-- Font -->
<link href="https://fonts.googleapis.com/css?family=Raleway:400,600,700,900" rel="stylesheet">
    <style>
	   body {
           background-image:url(./images/cs.jpg);
           background-repeat:no-repeat;
           background-size:cover;
font-family: 'Raleway', sans-serif;
font-weight: 400;
color: #fff;
letter-spacing: 1px;
}
      .container {
background-color: #fafafa;
margin: 200px;
box-shadow: 10px 15px 20px rgba(0, 0, 0, .1);
display: grid;
grid-template-columns: 40% 60%;
}   
       .container-time {
background-color: rgba(0, 0, 0, .95);
padding: 50px;
outline: 3px dashed #998100;
outline-offset: -30px;
text-align: center;
}
            .heading {
font-size: 35px;
text-transform: uppercase;
}

.heading-days {
color:#998100;
font-size: 30px;

}

.heading-phone {
font-size: 22px;
}
       .container-form {
padding: 20px 0;
margin: 0 auto;
color: #000;
}
      form {
display: grid;
grid-row-gap: 20px;
}
form p {
font-weight: 600;
}
.form-field {
display: flex;
justify-content: space-between;


}

input,select {
padding: 10px 15px;
}
      
	    .btn {
background-color: rgba(0, 0, 0, .95);
color: #fff;
padding: 10px 20px;

border: none;
font-size: 22px;
font-weight:bold;
border-radius: 100px;
-webkit-border-radius: 100px;
-moz-border-radius: 100px;
-ms-border-radius: 100px;
-o-border-radius: 100px;
box-shadow: 7px 10px 12px rgba(0, 0, 0, .1);
cursor: pointer;
transition: all .3s;
-webkit-transition: all .3s;
-moz-transition: all .3s;
-ms-transition: all .3s;
-o-transition: all .3s;
}

.btn:hover {
    color:black;
    background:deeppink;
transform: scale(1.03);
-webkit-transform: scale(1.03);
-moz-transform: scale(1.03);
-ms-transform: scale(1.03);
-o-transform: scale(1.03);
box-shadow: 10px 12px 15px rgba(0, 0, 0, .3);
}
	</style>

</head>
<body>

<div class="container">
<div class="container-time">
<h2 class="heading">Time Open</h2>
<h3 class="heading-days">Monday-Friday</h3>
<p>7am - 11am (breakfast)</p>
<p>11am - 10pm (lunch/dinner)</p>

<h3 class="heading-days">Saturday and sunday</h3>
<p>9am - 1am (breakfast)</p>
<p>1am - 10pm (lunch/dinner)</p>

<hr>

<h4 class="heading-phone"><img src="./icons/phone.svg" alt=""> Call Us:- 9658947919</h4>
<div>
    <img src="./images/mun.gif" alt="">
</div>
</div>

<div class="container-form">

<form action="#">

<h2 class="heading heading-yellow">catering Reservation Online</h2>

<div class="form-field">
<p>Your Name</p>
<input type="text" size="18"  placeholder="Your Name" required="required">
</div>
<div class="form-field">
<p>Mobile No.</p>
<input type="mobile" size="18" placeholder="Phone No." required="required">
</div>
<div class="form-field">
<p>Date</p>
<input type="date">
</div>
<div class="form-field">
<p>Time</p>
<input type="time">
</div>
<div class="form-field">
<p>How many people?</p>
<select name="select" id="#">
<option value="1">1 person</option>
<option value="2">2 persons</option>
<option value="3">3 persosn</option>
<option value="4">4 persons</option>
<option value="5">5 person</option>
<option value="5+">5+ persons</option>
<option value="10+">10+ persons</option>
</select>
</div>


<a href="booknow.php"><input type="button" value="Book Now" class="btn btn-primary" style="float: center";id="ok"></a>
</form>
</div>

</div>



</body>
</html>